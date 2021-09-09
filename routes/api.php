<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['cors', 'json.response']], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });


/// AUTH ROUTES


    Route::post('login', 'App\Http\Controllers\API\Auth\LoginController@login');
    Route::post('codeLogin', 'App\Http\Controllers\API\Auth\LoginController@codeLogin');
    Route::post('logout', 'App\Http\Controllers\API\Auth\LoginController@logout')->name('logout');
    Route::get('logout', 'App\Http\Controllers\API\Auth\LoginController@logout')->name('api.logout');
    Route::post('register', 'App\Http\Controllers\API\Auth\RegisterController@register');
    Route::get('password/reset/{token}', 'App\Http\Controllers\API\Auth\ResetPasswordController@showResetForm');
    Route::post('password/confirm', 'App\Http\Controllers\API\Auth\ConfirmPasswordController@confirm');
    Route::get('email/verify/{id}/{hash}', 'App\Http\Controllers\API\Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'App\Http\Controllers\API\Auth\VerificationController@resend')->name('verification.resend');

    Route::post('password/sendEmailLink', 'App\Http\Controllers\API\Auth\ForgotPasswordController@sendResetLink');
    Route::post('password/resetUser', 'App\Http\Controllers\API\Auth\ResetPasswordController@resetUser');
    Route::post('registerInvite', 'App\Http\Controllers\API\Auth\RegisterController@registerInvite');


    Route::post('polls/search', 'App\Http\Controllers\API\PollAPIController@search');
    Route::post('polls/listAll', 'App\Http\Controllers\API\PollAPIController@listAll');
    Route::post('polls/mine', 'App\Http\Controllers\API\PollAPIController@mine');
    Route::get('poll_options/byPoll/{id}', 'App\Http\Controllers\API\PollOptionAPIController@byPoll');
    Route::resource('polls', App\Http\Controllers\API\PollAPIController::class);
    Route::resource('categories', App\Http\Controllers\API\CategoryAPIController::class);
    Route::resource('poll_types', App\Http\Controllers\API\PollTypeAPIController::class);
    Route::resource('votes', App\Http\Controllers\API\VoteAPIController::class);
    Route::resource('vote_values', App\Http\Controllers\API\VoteValueAPIController::class);
    Route::resource('poll_options', App\Http\Controllers\API\PollOptionAPIController::class);
    Route::resource('users', App\Http\Controllers\API\UserAPIController::class);
    Route::middleware('auth:api')->group(function () {
        Route::post('password/change', 'App\Http\Controllers\API\Auth\ChangePasswordController@reset');
    });


});





