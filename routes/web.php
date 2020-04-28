<?php

use App\Model\Mentor;
use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');

Auth::routes();
// registering route //
Route::post('register/step-one', 'Auth\RegisterController@registerStepOne');
Route::post('register-save', 'Auth\RegisterController@storeUser')->name('register.user.store');

//front end route.......
Route::get('mentor', 'FrontEndController@mentor')->name('mentor');
Route::get('about-us', 'FrontEndController@aboutUs')->name('about.us');
Route::get('contact-us', 'FrontEndController@contactUs')->name('contact.us');

//see role and find corresponding dashboard profile
Route::get('/find/profile', 'HomeController@findDashboard')->middleware('auth')->name('find.profile');

// to the common panel guared with role
Route::get('profile-show', 'HomeController@showProfile')->middleware('auth')->name('panels.profile.show');


//chat initializer
Route::post('chat-initialize', 'ChatController@initialize')->middleware('auth')->name('chat.initializer');
//chat room
Route::get('see-message/{chatroomId}', 'ChatController@seeMessage')->middleware('auth');
Route::get('chat-room/{chatroomId}', 'ChatController@chat')->middleware(['auth', 'role:mentor|trainee'])->name('panels.chatroom');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'role:admin'])->group(function(){
    Route::get('profile', 'AdminHomeController@index')->name('panels.admin.index');
    Route::get('trainee', 'AdminHomeController@trainee')->name('panels.admin.trainee');
    Route::get('mentor', 'AdminHomeController@mentor')->name('panels.admin.mentor.index');
    Route::get('contact-us', 'AdminHomeController@contactUs')->name('panels.admin.contact_us.index');
    Route::get('forum', 'AdminHomeController@forum')->name('panels.admin.forum.index');
    Route::get('website', 'AdminHomeController@website')->name('panels.admin.website');
    Route::post('website', 'AdminHomeController@updateWebsite')->name('panels.admin.website.update');
    Route::put('/active/{mentorId}', 'AdminHomeController@activeMentor');
    Route::put('/del/{mentorId}', 'AdminHomeController@delMentor');


});

Route::namespace('Mentor')->prefix('mentor')->middleware(['auth', 'role:mentor'])->group(function(){
    Route::get('dashboard', 'MentorHomeController@index')->name('panels.mentor.index');
    Route::get('my-trainee', 'MentorHomeController@myTrainee')->name('panels.mentor.my.trainee');
    Route::get('answer', 'MentorHomeController@answer')->name('panels.mentor.answer');
    Route::get('message', 'MentorHomeController@message')->name('panels.mentor.message');
});

Route::namespace('Trainee')->prefix('trainee')->middleware(['auth', 'role:trainee'])->group(function(){
    Route::get('dashboard', 'TraineeHomeController@index')->name('panels.trainee.index');
    Route::get('question', 'TraineeHomeController@question')->name('panels.trainee.question');
    Route::get('find-mentor', 'TraineeHomeController@findMentor')->name('panels.trainee.find.mentor');
    Route::get('message', 'TraineeHomeController@message')->name('panels.trainee.message');
});


Route::get('test', function(){
   return Mentor::updateMentorsRating();
});
