<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return view('panel.user.test');
});

Auth::routes(['verify' => true]);
// Auth::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');

// Socialite Routes
Route::get('login/{provider}', [App\Http\Controllers\User\SocialLoginController::class, 'login'])->name('social.login');
Route::get('login/{provider}/callback', [App\Http\Controllers\User\SocialLoginController::class, 'login']);



Route::get('/test', [App\Http\Controllers\Admin\SurveyAdminController::class, 'index'])->name('test');
Route::post('/test', [App\Http\Controllers\Admin\SurveyAdminController::class, 'store'])->name('test.store');
Route::prefix('policies')->group(function () {
    Route::get('/', function () { return view('panel.tos.termsofservice'); })->name('policies.terms');
    Route::get('/cookies', function () { return view('panel.tos.termsofservice'); })->name('policies.cookies');
    Route::get('/privacy', function () { return view('panel.tos.termsofservice'); })->name('policies.privacy');
});

Route::group(['middleware' => ['auth']], function () {
    ////////////
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/avatars/user/{avatar}', [App\Http\Controllers\AvatarController::class, 'images'])->name('avatars.user');
    Route::get('/schedule', [App\Http\Controllers\Admin\ScheduleController::class, 'index'])->name('calendar');
    Route::get('/schedule/json/{date}', [App\Http\Controllers\Admin\ScheduleController::class, 'getallevents'])->name('schedule.getallevents');
    Route::post('/schedule', [App\Http\Controllers\Admin\ScheduleController::class, 'store'])->name('schedule.store');


    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'list'])->name('everyone.users');



    ////////
    Route::resource('annouments', App\Http\Controllers\AnnoumentsController::class);
    Route::resource('marshing', App\Http\Controllers\MarshingController::class);

    Route::get('/surveys', [App\Http\Controllers\User\SurveyController::class, 'index'])->name('user.surveys');
    Route::get('/surveys/{survey}', [App\Http\Controllers\User\SurveyController::class, 'show'])->name('user.surveys.show');
    Route::post('/surveys/{survey}', [App\Http\Controllers\User\SurveyController::class, 'store'])->name('user.surveys.store');

    Route::get('/travels', [App\Http\Controllers\User\TravelController::class, 'index'])->name('user.travels');
    Route::get('/travels/{travel}', [App\Http\Controllers\User\TravelController::class, 'show'])->name('user.travels.show');
    Route::post('/travels/{travel}', [App\Http\Controllers\User\TravelController::class, 'store'])->name('user.travels.store');

    Route::get('/documents', [App\Http\Controllers\User\DocumentsController::class, 'index'])->name('user.documents');
    Route::get('/documents/{travel}', [App\Http\Controllers\User\DocumentsController::class, 'show'])->name('user.documents.show');
    Route::post('/documents/{travel}', [App\Http\Controllers\User\DocumentsController::class, 'store'])->name('user.documents.store');

    Route::prefix('user')->group(function () {
        Route::get('/sections', [App\Http\Controllers\SectionsController::class, 'index'])->name('user.sections.index');

        Route::group(['prefix' => '/sections/{section}', 'as' => 'user.sections.'], function () {
            Route::get('/', [App\Http\Controllers\SectionsController::class, 'show'])->name('show');
            Route::get('/chat', [App\Http\Controllers\SectionsController::class, 'chat'])->name('chat');
            Route::get('/announcements', [App\Http\Controllers\SectionsController::class, 'announcements'])->name('announcements');
            Route::get('/hashtags', [App\Http\Controllers\SectionsController::class, 'hashtags'])->name('hashtags');
            Route::get('/members', [App\Http\Controllers\SectionsController::class, 'members'])->name('members');
            Route::get('/media', [App\Http\Controllers\SectionsController::class, 'media'])->name('media');
            Route::get('/files/files', [App\Http\Controllers\SectionsController::class, 'files'])->name('files');
            Route::get('/overview', [App\Http\Controllers\SectionsController::class, 'overview'])->name('overview');
            Route::get('/admin_assistant', [App\Http\Controllers\SectionsController::class, 'admin_assistant'])->name('admin_assistant');
        });

        Route::get('/sections/{section}/message/get', [App\Http\Controllers\SectionsController::class, 'getmessage'])->name('user.sections.message.get');
        Route::post('/sections/{section}/message/send', [App\Http\Controllers\SectionsController::class, 'sendmessage'])->name('user.sections.message.send');
        Route::get('/sections/{section}/chat/user/get', [App\Http\Controllers\SectionsController::class, 'getuserchatperm'])->name('user.sections.chat.user.get');
        Route::resource('profile', App\Http\Controllers\User\ProfileController::class);
    });

    Route::prefix('admin')->group(function () {
        //Settings Management
        Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
            Route::get('/', [App\Http\Controllers\Admin\SettingsController::class, 'index'])->name('index');
            Route::get('/modules', [App\Http\Controllers\Admin\SettingsController::class, 'modules'])->name('modules');
            Route::get('/sections', [App\Http\Controllers\Admin\SettingsController::class, 'sections'])->name('sections');
            Route::post('/sections', [App\Http\Controllers\Admin\SettingsController::class, 'storesections'])->name('sections.store');
            Route::get('/availability', [App\Http\Controllers\Admin\SettingsController::class, 'availability'])->name('availability');
        });

        //Surveys Management
        Route::resource('surveys', App\Http\Controllers\Admin\SurveyAdminController::class);
        //Users Management
        Route::resource('users', App\Http\Controllers\Admin\UserController::class);

        //Role Management
        Route::resource('roles', App\Http\Controllers\Admin\RoleController::class);

        // Permission Management
        Route::resource('permissions', App\Http\Controllers\Admin\PermissionsController::class);
    });

});



    // Route::group(['prefix' => 'permissions/', 'as' => 'module.'], function () {
    //     //Route::resource('permission', App\Http\Controllers\PermissionsController::class);
    //     Route::get('module', [App\Http\Controllers\PermissionModuleController::class, 'index'])->name('index');
    //     Route::get('module/create', [App\Http\Controllers\PermissionModuleController::class, 'create'])->name('create');
    //     Route::post('module', [App\Http\Controllers\PermissionModuleController::class, 'store'])->name('store');
    //
    //     Route::group(['prefix' => 'permissions/module/{module}'], function () {
    //         Route::get('edit', [App\Http\Controllers\PermissionModuleController::class, 'edit'])->name('edit');
    //         Route::patch('/', [App\Http\Controllers\PermissionModuleController::class, 'update'])->name('update');
    //     });
    // });
