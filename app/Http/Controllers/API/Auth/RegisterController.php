<?php

namespace App\Http\Controllers\API\Auth;

use App\Events\InviteEvent;
use App\Events\InviteSuccessfulEvent;
use App\Http\Requests\API\InviteRequest;
use App\Http\Requests\API\RegisterInviteRequest;
use App\Http\Requests\API\RegisterRequest;
use App\Models\Company;
use App\Models\Invitations;
use App\Repositories\CompanyRepository;
use App\Repositories\PersonalDetailsRepository;
use App\Repositories\ProfileRepository;
use App\Traits\ResponseTrait;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

/**
 *
 * @group Auth
 *
 */
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use ResponseTrait;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected $twoFactor = null;


    public function __construct(ProfileRepository $profileRepo, CompanyRepository $companyRepo)
    {
        $this->profileRepository = $profileRepo;
        $this->companyRepository = $companyRepo;
        $this->middleware('guest')->except(['invite']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $array = [
            'name' => $data['name'],
            'email' => $data['email'],
            'has2fa' => $data['has2fa'],
            'password' => Hash::make($data['password']),
        ];
        if ($data['has2fa']) {
            $array = array_merge($array, [
                'two_factor_secret' => $data['two_factor_secret'],
            ]);
        }
        return User::create($array);
    }

    /**
     * Sends Invitation to Register.
     *
     */
    public function invite(InviteRequest $request)
    {
        $data = $request->all();
        $company = Company::find($data['company_id']);
        Invitations::create([
            'company_id' => $data['company_id'],
            'email' => $data['email'],
        ]);
        event(new InviteEvent($company, $data['email'], $data['base_url']));
        $message = "invitation sent";
        return $this->sendResponse($data, $message);
    }


    /**
     * This is used to register an invited user
     *
     */
    public function registerInvite(RegisterInviteRequest $request)
    {
        $data = $request->all();

        if (!empty($data['email'])) {
            $isUser = User::where('email', $data['email'])->get();
            if (!$isUser->isEmpty()) {
                $data['is_user'] = true;
            }
        }


        if ($data['is_user']) {
            $validator = Validator::make($data, [
                'user_id' => 'nullable|exists:users,id',
                'company_id' => 'required|exists:companies,id'
            ]);
            if ($validator->fails()) {
                $data = collect($validator->errors()->all());
                $data = $data->flatten();
                $message = "There was Error in your form";
                return response()->json(compact('data', 'message'));
            }
            $user = User::find($data['user_id']);
            $company = Company::find($data['company_id']);

            $user->theCompany()->attach($data['company_id']);


            event(new InviteSuccessfulEvent($company, $user));

            $message = "user registered to company";
            return $this->sendResponse($data, $message);
        }


        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'company_id' => 'required|exists:companies,id',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            $data = collect($validator->errors()->all());
            $data = $data->flatten();
            $message = "There was Error in your form";
            return response()->json(compact('data', 'message'));
        }
        $data = $request->all();
        if ($request->input('has2fa')) {
            $google2fa = app('pragmarx.google2fa');
            $this->twoFactor = $google2fa->generateSecretKey();
            $data["two_factor_secret"] = $this->twoFactor;
        }

        $data["has2fa"] = $request->input('has2fa');
        $user = $this->create($data);
        $data['user_id'] = $user->id;

        // dd($data);
        unset($data['password']);
        unset($data['password_confirmation']);
        unset($data['name']);


        $this->profileRepository->create($data);
        $user->theCompany()->attach($data['company_id']);

        event(new Registered($user));

        $company = Company::find($data['company_id']);
        event(new InviteSuccessfulEvent($company, $user));
        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        $data = $user;
        $data->two_factor_token = $this->twoFactor;
        $message = "Successful Registration";
        return $this->sendResponse($data, $message);
    }

    /**
     * Handle a registration request for the application.
     *
     */

    public function register(RegisterRequest $request)
    {
        $data = [];
        $data = $request->all();
        $data['name'] = $request->input('last_name') . " " . $request->input('first_name');
        $validator = $this->validator($data);

        if ($validator->fails()) {
            $data = collect($validator->errors()->all());
            $data = $data->flatten();
            $message = "There was Error in your form";
            return response()->json(compact('data', 'message'));
        }
        $data = $request->all();
        if ($request->input('has2fa')) {
            $google2fa = app('pragmarx.google2fa');
            $this->twoFactor = $google2fa->generateSecretKey();
            $data["two_factor_secret"] = $this->twoFactor;
        }
        $data["has2fa"] = $request->input('has2fa');
        $data['name'] = $request->input('last_name') . " " . $request->input('first_name');
        $user = $this->create($data);
        $data['user_id'] = $user->id;

        // dd($data);
        unset($data['password']);
        unset($data['password_confirmation']);
        unset($data['name']);


        $this->profileRepository->create($data);
        $input['name'] = $data['company_name'];
        $input['phone'] = $data['company_phone'];
        $input['email'] = $data['email'];
        $input['description'] = @$data['company_description'];
        $company = $this->companyRepository->create($input);
        $user->theCompany()->attach($company->id);

        event(new Registered($user));
        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        $data = $user;
        $data->two_factor_token = $this->twoFactor;
        $message = "Successful Registration";
        return $this->sendResponse($data, $message);
    }
}
