<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
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


    /**
     * Handle a login request to the application.
     *
     */

    public function login(Request $request)
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
        return response()->json(compact('data', 'message'));
    }

    protected function sendLoginResponse(Request $request)
    {
        $data = [];
        //$request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        //dd(Auth::user());
        $this->accessToken = Auth::user()->createToken(config('app.name'))->accessToken;

        $data = new \stdClass();
        $data->user = Auth::user();
        $data->accessToken = $this->accessToken;

        $message = 'Successful Login';
        return response()->json(compact('data', 'message'));
    }


    protected function sendFailedLoginResponse(Request $request)
    {
        $data = [];
        $message = trans('auth.failed');
        return response()->json(compact('data', 'message'));
    }
}
