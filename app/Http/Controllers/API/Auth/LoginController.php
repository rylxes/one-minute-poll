<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CodeLoginRequest;
use App\Http\Requests\API\LoginRequest;
use App\Http\Requests\API\OnlyEmail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Traits\FilesTrait;
use App\Traits\ResponseTrait;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

/**
 *
 * @group Auth
 *
 */
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    use ResponseTrait;
    use FilesTrait;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function validate2FA(Request $request)
    {
        $request->validate([
            'secret' => 'required',
        ]);
    }




    /**
     * Handle a login request to the application.
     *
     */

    //public function login(Request $request)
    public function login(LoginRequest $request)
    {
        $this->validateLogin($request);

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    public function authenticate(OnlyEmail $request)
    {
        $input = $request->all();
        $input['name'] = 'New User';
        $input['password'] = 'password';
        $user = $this->createLocalUser($input);
        return $this->sendResponse($user, 'success');
    }

    protected function createLocalUser(array $data)
    {
        $user = User::where('email', $data['email'])->first();
        if (empty($user)) {
            $user = new User();
            $code = $this->nextCode($user);
            $array = [
                'name' => $data['name'],
                'code' => $code,
                'email' => $data['email'],
                'uuid' => $data['uuid'],
                'password' => Hash::make($data['password']),
            ];
            //$role = Role::findByName($role, 'api');
            $user = User::create($array);
            // $user->assignRole($role);
        }
        event(new Registered($user));
        return $user;
    }

    //public function login(Request $request)
    public function codeLogin(CodeLoginRequest $request)
    {

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        $input = $request->input();
        $user = User::where('code', $input['code'])->first();
        if (!empty($user)) {
            Auth::login($user);
            $user->uuid = $input['uuid'];
            $user->save();
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }


    /**
     * Log the user out of the application.
     *
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        if (Auth::check()) {
            $token = $request->user()->token();
            $token->revoke();
            Auth::user()->AauthAcessToken()->delete();
            Cookie::forget('Cookie');
        }

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        $data = [];
        $message = 'Successful Logout';
        return $this->sendResponse($data, $message);
    }

    protected function authenticated(Request $request, $user)
    {
        // 0 = inActive
        // 2 = Locked
        // 3 = Deleted
        if ($user->status == 0) {
            throw ValidationException::withMessages([
                $this->username() => ['This user is inactive'],
            ]);
        }

        if ($user->status == 2) {
            throw ValidationException::withMessages([
                $this->username() => ['This user is locked'],
            ]);
        }

        if ($user->status == 3) {
            throw ValidationException::withMessages([
                $this->username() => ['This user has been deleted'],
            ]);
        }
    }

    protected function sendLoginResponse(Request $request)
    {
        $data = [];
        //$request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }
        $user = Auth::user();
//        if ($user->has2fa) {
//            $this->validate2FA($request);
//            $google2fa = app('pragmarx.google2fa');
//            $secret = $request->input('secret');
//            $window = 8; // 8 keys (respectively 4 minutes) past and future
//            $valid = $google2fa->verifyKey($user->two_factor_secret, $secret, $window);
//            if (!$valid) {
//                $message = "Invalid Authentication code !";
//                return $this->sendError($message);
//            }
//        }


        //dd(Auth::user());
        $this->accessToken = $user->createToken(config('app.name'))->accessToken;

        $data = new \stdClass();
        $data->user = $user;
        $data->accessToken = $this->accessToken;
        $message = 'Successful Login';
        return $this->sendResponse($data, $message);
    }


    protected function sendFailedLoginResponse(Request $request)
    {
        $data = [];
        $message = trans('auth.failed');
        return $this->sendError($message);
    }
}
