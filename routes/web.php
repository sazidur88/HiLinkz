<?php

use App\Http\Controllers\Admin\ManageRolesController;
use App\Http\Controllers\Admin\ManageUsersController;
use App\Http\Controllers\Web\ServiceController;
// use App\Http\Controllers\Web\ContactFormController;
use App\Http\Controllers\CommonControllers\DashboardController;
use App\Http\Controllers\CommonControllers\EditProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});


Route::get('/clear-all/{id}', function ($id) {
    if ($id == 'admin1234') {
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('config:clear');
        $exitCode = Artisan::call('view:clear');
        $exitCode = Artisan::call('route:clear');
        return 'Cache,config,view clear done!';
    } else {
        return 'Sorry, wrong pin.';
    }
});


Auth::routes();

/*
-----------------------------------------------------------
 ==== Dashboard Routes Start  Here  ===
-----------------------------------------------------------
*/
Route::GET('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::POST('/profile_photo_upload', [DashboardController::class, 'profile_photo_upload'])->name('profile_photo_upload')->middleware('auth');



/*
-----------------------------------------------------------
 ==== Edit Profile Start  Here  ===
-----------------------------------------------------------
*/
Route::GET('/edit-user-profile', [EditProfileController::class, 'index'])->name('edit_user_profile')->middleware('auth');
Route::POST('/update-user-password', [EditProfileController::class, 'update_user_password'])->name('update_user_password')->middleware('auth');
Route::POST('/update-user-other-info', [EditProfileController::class, 'update_user_other_info'])->name('update_user_other_info')->middleware('auth');



/*
-----------------------------------------------------------
 ==== Spatie Role Permission starts Here  ===
-----------------------------------------------------------
*/
Route::group(['middleware' => ['auth']], function () {
    Route::resource('manage_roles', ManageRolesController::class);
    Route::resource('manage_users', ManageUsersController::class);
});



/*
-----------------------------------------------------------
 ==== Service-Details  ===
-----------------------------------------------------------
*/
// Route::get('/web-development', 'Web\ServiceController@index')->name('web_development');
Route::get('/web-development', [ServiceController::class, 'index'])->name('web_development');
Route::view('/app-development', 'web.service.mobile-index')->name('app_development');
Route::view('/consultancy', 'web.service.consultancy-index')->name('consultancy');
Route::view('/it-solutions', 'web.service.it-index')->name('it_solutions');
Route::view('/data-intelligence', 'web.service.data-index')->name('data-intelligence');
Route::view('/all-services', 'web.service.all-services-index')->name('all_services');


/*
-----------------------------------------------------------
 ==== Contact-Form  ===
-----------------------------------------------------------
*/
Route::get('/contact-form', [App\Http\Controllers\Web\ContactFormController::class, 'index'])->name('contact_form');
