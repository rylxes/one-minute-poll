<?php

namespace App\Traits;

use App\Mail\ForgotPasswordMail;
use Closure;
use Illuminate\Auth\Passwords\TokenRepositoryInterface;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\PasswordBroker as PasswordBrokerContract;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use UnexpectedValueException;

trait PasswordBrokerDMS
{
    /**
     * The password token repository.
     *
     * @var \Illuminate\Auth\Passwords\TokenRepositoryInterface
     */
    protected $tokens;

    /**
     * The user provider implementation.
     *
     * @var \Illuminate\Contracts\Auth\UserProvider
     */
    protected $users;

    /**
     * Create a new password broker instance.
     *
     * @param \Illuminate\Auth\Passwords\TokenRepositoryInterface $tokens
     * @param \Illuminate\Contracts\Auth\UserProvider $users
     * @return void
     */
    public function __construct(TokenRepositoryInterface $tokens, UserProvider $users)
    {
        $this->users = $users;
        $this->tokens = $tokens;
    }


    public function sendResetLink(array $credentials, $request)
    {
        // First we will check to see if we found a user at the given credentials and
        // if we did not we will redirect back to this current URI with a piece of
        // "flash" data in the session to indicate to the developers the errors.
        $user = $this->getUser($credentials);

        if (is_null($user)) {
            return 'passwords.user';
        }

        if ($this->tokens->recentlyCreatedToken($user)) {
            return 'passwords.throttled';
        }

        $token = $this->tokens->create($user);

        try {
            $input = $request->all();
            Mail::to($user->getEmailForPasswordReset())->send(new ForgotPasswordMail($input[''], $token, $user));
        } catch (\Exception $exception) {
            //dd($exception->getMessage());
        }

        return 'passwords.sent';
    }

    /**
     * Reset the password for the given token.
     *
     * @param array $credentials
     * @param \Closure $callback
     * @return mixed
     */
    public function resetPWD(array $credentials, Closure $callback)
    {
        $user = $this->validateReset($credentials);

        // If the responses from the validate method is not a user instance, we will
        // assume that it is a redirect and simply return it from this method and
        // the user is properly redirected having an error message on the post.
        if (!$user instanceof CanResetPasswordContract) {
            return $user;
        }

        $password = $credentials['password'];

        // Once the reset has been validated, we'll call the given callback with the
        // new password. This gives the user an opportunity to store the password
        // in their persistent storage. Then we'll delete the token and return.
        $callback($user, $password);

        $this->tokens->delete($user);

        return 'passwords.reset';
    }

    /**
     * Validate a password reset for the given credentials.
     *
     * @param array $credentials
     * @return \Illuminate\Contracts\Auth\CanResetPassword|string
     */
    protected function validateReset(array $credentials)
    {
        if (is_null($user = $this->getUser($credentials))) {
            return 'passwords.user';
        }

        if (!$this->tokens->exists($user, $credentials['token'])) {
            return 'passwords.token';
        }

        return $user;
    }

    /**
     * Get the user for the given credentials.
     *
     * @param array $credentials
     * @return \Illuminate\Contracts\Auth\CanResetPassword|null
     *
     * @throws \UnexpectedValueException
     */
    public function getUser(array $credentials)
    {
        $credentials = Arr::except($credentials, ['token']);

        $user = $this->users->retrieveByCredentials($credentials);

        if ($user && !$user instanceof CanResetPasswordContract) {
            throw new UnexpectedValueException('User must implement CanResetPassword interface.');
        }

        return $user;
    }

    /**
     * Create a new password reset token for the given user.
     *
     * @param \Illuminate\Contracts\Auth\CanResetPassword $user
     * @return string
     */
    public function createToken(CanResetPasswordContract $user)
    {
        return $this->tokens->create($user);
    }

    /**
     * Delete password reset tokens of the given user.
     *
     * @param \Illuminate\Contracts\Auth\CanResetPassword $user
     * @return void
     */
    public function deleteToken(CanResetPasswordContract $user)
    {
        $this->tokens->delete($user);
    }

    /**
     * Validate the given password reset token.
     *
     * @param \Illuminate\Contracts\Auth\CanResetPassword $user
     * @param string $token
     * @return bool
     */
    public function tokenExists(CanResetPasswordContract $user, $token)
    {
        return $this->tokens->exists($user, $token);
    }

    /**
     * Get the password reset token repository implementation.
     *
     * @return \Illuminate\Auth\Passwords\TokenRepositoryInterface
     */
    public function getRepository()
    {
        return $this->tokens;
    }
}
