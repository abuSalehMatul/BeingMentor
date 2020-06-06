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
    Route::post('create-payment', 'PaypalController@create');
    Route::post('execute-payment', 'PaypalController@execute');
    Route::get('get-admin-mentor-trainee-pie','ReportController@adminTraineeMentor');
    Route::post('mark-correct', 'ForumController@markCorrect');
    Route::post('give-vote', 'ForumController@giveVote');
    Route::post('change-question-status', 'ForumController@changeQuestionStatus');
    Route::post('save-answer', 'ForumController@saveAns');
    Route::get('get-chat-inquire', 'ReportController@getChatInquire');
    Route::get('get-forum-inquire', 'ReportController@getForumInquire');
    Route::post('contact-us-change-status', 'Admin\AdminHomeController@changeStatus')->name('api.contact.us.change.status');
    Route::get('contact-us-admin', 'Admin\AdminHomeController@getContactUs')->name('api.contact.us.admin');
    Route::get('get-bar-chart-men-trainee', 'ReportController@getUserBarChart');
    Route::get('mentor-overview', 'ReportController@mentorOverView');
    Route::get('get-pages-hit', 'ReportController@getPagesHit');
    Route::get('get-mentor-performance', 'ReportController@getPerformance');
    Route::post('change-success-status', 'Admin\AdminHomeController@changeSuccessStatus');
    Route::post('admin-tag', 'Admin\AdminHomeController@saveTag')->name('api.admin.save.tag');
    Route::get('admin-tag', 'Admin\AdminHomeController@getTag')->name('api.admin.get.tag');
    Route::post('update-profile', 'HomeController@updateProfile')->name('api.panel.profile.update');
    Route::get('get-trainee/{userId}', 'Trainee\TraineeHomeController@getTrainees')->name('api.get.trainee');
    Route::get('chat-room/{id}', 'ChatController@getMessages')->name('api.panel.chatroom');
    Route::post('send-message/{id}', 'ChatController@sendMessage')->name('api.panel.send.message');
    Route::post('chat-ticket', 'ChatController@rateSolveTicket')->name('api.panel.solve.ticket');
    Route::get('my-message/{id}', 'ChatController@myMessage')->name('api.panel.my.message');
    Route::post('chat-room-ticket/{id}', 'ChatController@setTicket')->name('api.panel.chatromm.ticket');
});
Route::get('get-mentor/{userId}', 'Mentor\MentorHomeController@getMentor')->name('api.get.mentor');
Route::get('get-tags', 'ForumController@getTags');
Route::get('get-tags-for-register', 'ForumController@getTagsForRegister');
Route::get('statistics', 'FrontEndController@statistics');
Route::get('get-inquires', 'ReportController@getInquires');
Route::get('get-forum/{user}', 'ForumController@getForum');
Route::get('get-success-story/{user}', 'FrontEndController@getSuccessStory');
