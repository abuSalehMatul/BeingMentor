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
    Route::get('get-bar-chart-men-trainee', 'ReportController@getUserBarChart');
    Route::get('mentor-overview', 'ReportController@mentorOverView');
    Route::post('update-profile', 'HomeController@updateProfile')->name('api.panel.profile.update');
    Route::get('get-trainee/{userId}', 'Trainee\TraineeHomeController@getTrainees')->name('api.get.trainee');
    Route::get('chat-room/{id}', 'ChatController@getMessages')->name('api.panel.chatroom');
    Route::post('send-message/{id}', 'ChatController@sendMessage')->name('api.panel.send.message');
    Route::post('chat-ticket', 'ChatController@rateSolveTicket')->name('api.panel.solve.ticket');
    Route::get('my-message/{id}', 'ChatController@myMessage')->name('api.panel.my.message');
    Route::post('chat-room-ticket/{id}', 'ChatController@setTicket')->name('api.panel.chatromm.ticket');
});
Route::get('get-mentor/{userId}', 'Mentor\MentorHomeController@getMentor')->name('api.get.mentor');
Route::get('statistics', 'FrontEndController@statistics');
