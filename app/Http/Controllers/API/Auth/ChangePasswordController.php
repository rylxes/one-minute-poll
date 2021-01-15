<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ChangePassword;
use App\Http\Requests\API\ResetPassword;
use App\Http\Requests\API\ValidatePassword;
use App\Providers\RouteServiceProvider;
use App\Traits\ResponseTrait;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

/**
 *
 * @group Auth
 *
 */
class ChangePasswordController extends Controller
{

    use ResponseTrait;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Get the password reset validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'email' => 'required|email',
            'old_password' => 'required|min:8',
            'password' => 'required|confirmed|min:8',
        ];
    }



    /**
     * Change user's password.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function reset(ChangePassword $request)
    {
        $request->validate($this->rules(), []);

        $user = Auth::user();
        $isChecked =  Hash::check(
            $request->input('old_password'), $user->getAuthPassword()
        );
        if(!$isChecked){
            return $this->sendError("The Old Password is Incorrect");
        }
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return $this->sendResponse([], "Password Changed");
    }


}
