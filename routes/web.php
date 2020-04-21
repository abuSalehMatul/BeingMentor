<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');

Auth::routes();
// registering route //
Route::post('register/step-one', 'Auth\RegisterController@registerStepOne');
Route::post('register-save', 'Auth\RegisterController@storeUser')->name('register.user.store');

//see role and find corresponding dashboard profile
Route::get('/find/profile', 'HomeController@findDashboard')->middleware('auth')->name('find.profile');

Route::get('profile-show', 'HomeController@showProfile')->middleware('auth')->name('panels.profile.show');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'role:admin'])->group(function(){
    Route::get('profile', 'AdminHomeController@index')->name('panels.admin.index');
    Route::get('trainee', 'AdminHomeController@index')->name('panels.admin.trainee.index');
    Route::get('mentor', 'AdminHomeController@index')->name('panels.admin.mentor.index');
    Route::get('contact-us', 'AdminHomeController@index')->name('panels.admin.contact_us.index');
    Route::get('forum', 'AdminHomeController@index')->name('panels.admin.forum.index');
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
