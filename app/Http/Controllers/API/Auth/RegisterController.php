<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Requests\API\RegisterRequest;
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





    public function __construct(ProfileRepository $profileRepo)
    {
        $this->profileRepository = $profileRepo;
        $this->middleware('guest');
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
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
        $data['name'] = $request->input('last_name') . " " . $request->input('first_name');

        event(new Registered($user = $this->create($data)));
        $data['user_id'] = $user->id;

       // dd($data);
        unset($data['password']);
        unset($data['password_confirmation']);
        unset($data['name']);

       // dd($data);
       $this->profileRepository->create($data);


        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        $data = $user;
        $message = "Successful Registration";
        return $this->sendResponse($data, $message);
    }
}
