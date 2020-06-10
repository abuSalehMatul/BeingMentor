<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;


Route::get('only-package', function(){
    return view('onlyPackage');
});
Route::middleware('visit_count')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::get('forum', 'ForumController@index')->name('forum');
    Auth::routes();
    // registering route //
    Route::post('register/step-one', 'Auth\RegisterController@registerStepOne');
    Route::post('register-save', 'Auth\RegisterController@storeUser')->name('register.user.store');
    
    //front end route.......
    Route::get('mentor', 'FrontEndController@mentor')->name('mentor');
    Route::get('about-us', 'FrontEndController@aboutUs')->name('about.us');
    Route::post('contact-us', 'FrontEndController@contactUs')->name('contact.us');
    Route::get('contact', 'FrontEndController@contact');
    Route::get('term-policy', 'FrontEndController@termPolicy');
    Route::get('success-story', 'FrontEndController@story');
    Route::get('add-success', 'FrontEndController@addSuccess')->middleware('auth');
    Route::post('save-story', 'FrontEndController@saveStory')->middleware('auth');

    //paypal page 
    Route::get('paypal-page', 'FrontEndController@paypalPage')->middleware('auth')->name('paypal.payment.page');

    Route::post('submit-package', 'UserPackageController@submitPackage')->middleware('auth')->name('submit-package');
    
    //see role and find corresponding dashboard profile
    Route::get('/find/profile', 'HomeController@findDashboard')->middleware('auth')->name('find.profile');
    
    // to the common panel guared with role
    Route::get('profile-show', 'HomeController@showProfile')->middleware('auth')->name('panels.profile.show');
    
    
    //chat initializer
    Route::post('chat-initialize', 'ChatController@initialize')->middleware('auth')->name('chat.initializer');
    //chat room
    Route::get('see-message/{chatroomId}', 'ChatController@seeMessage')->middleware('auth');
    Route::get('chat-room/{chatroomId}', 'ChatController@chat')->middleware(['auth', 'role:mentor|trainee'])->name('panels.chatroom');
    
    Route::get('admin/edit/{id}', 'Admin\AdminHomeController@edit')->middleware('role:root');
    Route::post('admin/edit', 'Admin\AdminHomeController@editSave')->middleware('role:root');
    Route::get('admin/create', 'Admin\AdminHomeController@create')->middleware('role:root');
    Route::post('admin/create', 'Admin\AdminHomeController@saveAdmin')->middleware('role:root');
    Route::post('admin/delete', 'Admin\AdminHomeController@delete')->middleware('role:root');
    Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'role:admin|root'])->group(function(){
        Route::get('profile', 'AdminHomeController@index')->name('panels.admin.index');
        Route::get('trainee', 'AdminHomeController@trainee')->name('panels.admin.trainee');
        Route::get('mentor', 'AdminHomeController@mentor')->name('panels.admin.mentor.index');
        Route::get('contact-us', 'AdminHomeController@contactUs')->name('panels.admin.contact_us.index');
        Route::get('forum', 'AdminHomeController@forum')->name('panels.admin.forum.index');
        Route::get('website', 'AdminHomeController@website')->name('panels.admin.website');
        Route::post('website', 'AdminHomeController@updateWebsite')->name('panels.admin.website.update');
        Route::put('/active/{mentorId}', 'AdminHomeController@activeMentor');
        Route::put('/del/{mentorId}', 'AdminHomeController@delMentor');
        Route::get('tag', 'AdminHomeController@tag')->name('panels.admin.tag');
        Route::get('success-story', 'AdminHomeController@story')->name('panels.admin.story');
        Route::get('packages', 'AdminHomeController@package')->name('panels.admin.package');
        Route::post('save-package', 'AdminHomeController@savePackage')->name('save.package');
        Route::get('admin-management', 'AdminHomeController@getAdmin')->name('panels.admin.admin');
    
    });
    
    Route::namespace('Mentor')->prefix('mentor')->middleware(['auth', 'activation_check', 'role:mentor'])->group(function(){
        Route::get('dashboard', 'MentorHomeController@index')->name('panels.mentor.index');
        Route::get('my-trainee', 'MentorHomeController@myTrainee')->name('panels.mentor.my.trainee');
        Route::get('answer', 'MentorHomeController@answer')->name('panels.mentor.answer');
        Route::get('message', 'MentorHomeController@message')->name('panels.mentor.message');
    });
    
    Route::namespace('Trainee')->prefix('trainee')->middleware(['auth', 'package_check', 'role:trainee'])->group(function(){
        Route::get('dashboard', 'TraineeHomeController@index')->name('panels.trainee.index');
        Route::get('question', 'TraineeHomeController@question')->name('panels.trainee.question');
        Route::get('find-mentor', 'TraineeHomeController@findMentor')->name('panels.trainee.find.mentor');
        Route::get('message', 'TraineeHomeController@message')->name('panels.trainee.message');
        Route::get('ask', 'TraineeHomeController@ask')->name('ask.a.question');
        Route::post('save-question', 'TraineeHomeController@saveQuestion')->name('save.question');
    });
    Route::get('video-room/{participants}/{room}/{token}', 'ChatController@goToVideo')->name('video.room');
    
    // Route::get('test', function(Request $request){
    //    return dd(Carbon::now());
    // });
    
});

Route::get('not-approved', function(){
    Session::flush();
    return 'you are not approved by admin yet!!';
});