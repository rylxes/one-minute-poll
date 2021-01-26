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
    Route::post('logout', 'App\Http\Controllers\API\Auth\LoginController@logout')->name('logout');
    Route::post('register', 'App\Http\Controllers\API\Auth\RegisterController@register');
    Route::post('password/email', 'App\Http\Controllers\API\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'App\Http\Controllers\API\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'App\Http\Controllers\API\Auth\ResetPasswordController@reset')->name('password.update');
    Route::post('password/confirm', 'App\Http\Controllers\API\Auth\ConfirmPasswordController@confirm');
    Route::get('email/verify/{id}/{hash}', 'App\Http\Controllers\API\Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'App\Http\Controllers\API\Auth\VerificationController@resend')->name('verification.resend');

    Route::middleware('auth:api')->group(function () {
        Route::post('password/change', 'App\Http\Controllers\API\Auth\ChangePasswordController@reset');
        Route::resource('folders', App\Http\Controllers\API\FolderAPIController::class);
        Route::get('folders/byLibrary/{id}', 'App\Http\Controllers\API\FileAPIController@byLibrary');




        Route::resource('settings', App\Http\Controllers\API\SettingAPIController::class);

        Route::resource('tags', App\Http\Controllers\API\TagAPIController::class);

        Route::resource('files', App\Http\Controllers\API\FileAPIController::class);
        Route::get('files/byFolder/{id}', 'App\Http\Controllers\API\FileAPIController@byFolder');
        Route::post('files/validate', 'App\Http\Controllers\API\FileAPIController@validatePassword');

        Route::resource('libraries', App\Http\Controllers\API\LibraryAPIController::class);
        Route::post('libraries/validate', 'App\Http\Controllers\API\LibraryAPIController@validatePassword');


        Route::resource('companies', App\Http\Controllers\API\CompanyAPIController::class);

        Route::resource('profiles', App\Http\Controllers\API\ProfileAPIController::class);
    });

});







Route::resource('folder_files', App\Http\Controllers\API\FolderFileAPIController::class);
