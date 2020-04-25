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

Route::get('get-profile-users', 'HomeController@getProfile')->name('api.panel.profile.index');
Route::middleware('auth')->group(function () {
    Route::post('update-profile', 'HomeController@updateProfile')->name('api.panel.profile.update');
    Route::get('get-trainee/{userId}', 'Trainee\TraineeHomeController@getTrainees')->name('api.get.trainee');
    Route::get('chat-room/{id}')->name('api.panel.chatroom');
});
Route::get('get-mentor/{userId}', 'Mentor\MentorHomeController@getMentor')->name('api.get.mentor');
