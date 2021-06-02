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
    Route::get('logout', 'App\Http\Controllers\API\Auth\LoginController@logout')->name('api.logout');
    Route::post('register', 'App\Http\Controllers\API\Auth\RegisterController@register');
    Route::post('password/email', 'App\Http\Controllers\API\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'App\Http\Controllers\API\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'App\Http\Controllers\API\Auth\ResetPasswordController@reset')->name('password.update');
    Route::post('password/confirm', 'App\Http\Controllers\API\Auth\ConfirmPasswordController@confirm');
    Route::get('email/verify/{id}/{hash}', 'App\Http\Controllers\API\Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'App\Http\Controllers\API\Auth\VerificationController@resend')->name('verification.resend');
    Route::get('password/reset/{token}', 'App\Http\Controllers\API\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    // Password reset link request routes...
    Route::get('password/email', 'App\Http\Controllers\API\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
    Route::post('password/email', 'App\Http\Controllers\API\Auth\ForgotPasswordController@sendResetLinkEmail');

// Password reset routes...
    Route::get('password/reset/{token}', 'App\Http\Controllers\API\Auth\ResetPasswordController@showResetForm')->name('password.request');
    Route::post('password/reset', 'App\Http\Controllers\API\Auth\ResetPasswordController@postReset')->name('password.reset');
    Route::post('registerInvite', 'App\Http\Controllers\API\Auth\RegisterController@registerInvite');


    Route::middleware('auth:api')->group(function () {
        Route::post('password/change', 'App\Http\Controllers\API\Auth\ChangePasswordController@reset');
        Route::post('invite', 'App\Http\Controllers\API\Auth\RegisterController@invite');
        Route::post('delete', 'App\Http\Controllers\API\Auth\ChangePasswordController@deleteProfile');


        Route::get('folders/myFavourites', 'App\Http\Controllers\API\FolderAPIController@myFavourites');
        Route::post('folders/validate', 'App\Http\Controllers\API\FolderAPIController@validatePassword');
        Route::get('folders/byLibrary/{id}', 'App\Http\Controllers\API\FolderAPIController@byLibrary');
        Route::resource('folders', App\Http\Controllers\API\FolderAPIController::class);




        Route::resource('settings', App\Http\Controllers\API\SettingAPIController::class);

        Route::resource('tags', App\Http\Controllers\API\TagAPIController::class);



        Route::resource('files', App\Http\Controllers\API\FileAPIController::class);


        Route::get('files/myFavourites', 'App\Http\Controllers\API\FileAPIController@myFavourites');
        Route::post('files/validate', 'App\Http\Controllers\API\FileAPIController@validatePassword');
        Route::post('files/moveFile', 'App\Http\Controllers\API\FileAPIController@moveFile');
        Route::post('files/copyFile', 'App\Http\Controllers\API\FileAPIController@copyFile');
        Route::get('files/byFolder/{id}', 'App\Http\Controllers\API\FileAPIController@byFolder');


        Route::post('libraries/validate', 'App\Http\Controllers\API\LibraryAPIController@validatePassword');
        Route::post('libraries/shareToUser', 'App\Http\Controllers\API\LibraryAPIController@shareToUser');
        Route::post('libraries/groupLibraries', 'App\Http\Controllers\API\LibraryAPIController@groupLibraries');
        Route::post('libraries/shareToRole', 'App\Http\Controllers\API\LibraryAPIController@shareToRole');
        Route::get('libraries/myFavourites', 'App\Http\Controllers\API\LibraryAPIController@myFavourites');
        Route::resource('libraries', App\Http\Controllers\API\LibraryAPIController::class);


        Route::resource('companies', App\Http\Controllers\API\CompanyAPIController::class);

        Route::resource('profiles', App\Http\Controllers\API\ProfileAPIController::class);

        Route::resource('folder_files', App\Http\Controllers\API\FolderFileAPIController::class);

        Route::get('groups/byUser', 'App\Http\Controllers\API\GroupAPIController@byUser');
        Route::get('groups/otherGroup', 'App\Http\Controllers\API\GroupAPIController@otherGroup');
        Route::get('groups/allUsersInGroup/{id}', 'App\Http\Controllers\API\GroupAPIController@allUsersInGroup');
        Route::get('groups/myGroup', 'App\Http\Controllers\API\GroupAPIController@myGroup');
        Route::resource('groups', App\Http\Controllers\API\GroupAPIController::class);


        Route::post('plans/subscribe', 'App\Http\Controllers\API\PlansAPIController@subscribe');
        Route::post('plans/createPlan', 'App\Http\Controllers\API\PlansAPIController@createPlan');
        Route::get('plans/currentPlan', 'App\Http\Controllers\API\PlansAPIController@currentPlan');
        Route::resource('plans', App\Http\Controllers\API\PlansAPIController::class);




        Route::post('permissions/assign/user', 'App\Http\Controllers\API\PermissionsAPIController@userPermissionsAssign');
        Route::post('permissions/assign/library', 'App\Http\Controllers\API\PermissionsAPIController@libraryPermissionsAssign');
        Route::post('permissions/assign/folder', 'App\Http\Controllers\API\PermissionsAPIController@folderPermissionsAssign');
        Route::post('permissions/unassign/user', 'App\Http\Controllers\API\PermissionsAPIController@userUnPermissionsAssign');
        Route::post('permissions/assign/role', 'App\Http\Controllers\API\PermissionsAPIController@rolePermissionsAssign');
        Route::post('permissions/get/user', 'App\Http\Controllers\API\PermissionsAPIController@userPermissionsGet');
        Route::post('permissions/assign/file', 'App\Http\Controllers\API\PermissionsAPIController@filePermissionsAssign');
        Route::resource('permissions', App\Http\Controllers\API\PermissionsAPIController::class);


        Route::resource('roles', App\Http\Controllers\API\RolesAPIController::class);
        Route::resource('notifications', App\Http\Controllers\API\NotificationsAPIController::class);
        Route::resource('notification_types', App\Http\Controllers\API\NotificationTypeAPIController::class);




        Route::get('users/myActivities', 'App\Http\Controllers\API\UserAPIController@myActivities');
        Route::post('users/shareToGroup', 'App\Http\Controllers\API\UserAPIController@shareToGroup');
        Route::post('users/removeToGroup', 'App\Http\Controllers\API\UserAPIController@removeToGroup');
        Route::post('users/shareGroupWithEmail', 'App\Http\Controllers\API\UserAPIController@shareGroupWithEmail');
        Route::post('users/removeGroupWithEmail', 'App\Http\Controllers\API\UserAPIController@removeGroupWithEmail');




        Route::resource('users', App\Http\Controllers\API\UserAPIController::class);
        Route::resource('file_comments', App\Http\Controllers\API\FileCommentAPIController::class);
        Route::resource('folder_tags', App\Http\Controllers\API\FolderTagAPIController::class);
        Route::resource('file_tags', App\Http\Controllers\API\FileTagAPIController::class);
    });

});











