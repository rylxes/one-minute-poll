<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\AuthEmailRequest;
use App\Mail\ForgotPasswordMail;
use App\Mail\InviteUsers;
use App\Traits\PasswordBrokerDMS;
use App\Traits\ResponseTrait;
use Closure;
use Illuminate\Auth\Passwords\TokenRepositoryInterface;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use UnexpectedValueException;

/**
 *
 * @group Auth
 *
 */
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
    use ResponseTrait;
    use SendsPasswordResetEmails;
    use PasswordBrokerDMS;



    /**
     * Send a reset link to the given user.
     *
     */
    public function sendResetLinkEmail(AuthEmailRequest $request)
    {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->sendResetLink(
            $this->credentials($request), $request
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($request, $response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        //dd($response);
        return $this->sendError(trans($response));
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return $this->sendResponse([], trans($response));
    }

}
