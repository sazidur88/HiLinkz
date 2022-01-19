<?php

use App\Http\Controllers\Admin\ManageRolesController;
use App\Http\Controllers\Admin\ManageUsersController;
use App\Http\Controllers\Web\CareerController;
use App\Http\Controllers\Web\ServiceController;
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

// Route::get('/', function () {
//     return view('home')->name('/');
// });

Route::view('/', 'home')->name('/');



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
// Route::get('/web-development', [ServiceController::class, 'index'])->name('web_development');
Route::view('/all-services', 'web.service.all-services-index')->name('all_services');
Route::view('/services/web-development', 'web.service.web-index')->name('web_development');
Route::view('/services/app-development', 'web.service.mobile-index')->name('app_development');
Route::view('/services/consultancy', 'web.service.consultancy-index')->name('consultancy');
Route::view('/services/it-solutions', 'web.service.it-index')->name('it_solutions');
Route::view('/services/emerging-technologies', 'web.service.emerging-tech-index')->name('emerging_technologies');
Route::view('/services/data-intelligence', 'web.service.data-index')->name('data_intelligence');
Route::view('/services/digital-marketing', 'web.service.digital-marketing-index')->name('digital_marketing');
//WORK PageS
Route::view('/our-works', 'web.work.our-works-index')->name('our_works');
Route::view('/our-works/ryogas', 'web.work.ryogas-index')->name('our_works_ryogas');
Route::view('/our-works/KnotERP', 'web.work.knot-erp-index')->name('KnotERP');
Route::view('/our-works/covi-sense', 'web.work.covi-sense-index')->name('our_works_covi_sense');
Route::view('/our-works/dipspace', 'web.work.dipspace-index')->name('dipspace');
Route::view('/our-works/minias', 'web.work.minias-index')->name('minias');
Route::view('/our-works/sims/', 'web.work.sims-index')->name('sims');

/*
-----------------------------------------------------------
 ==== Contact-Form  ===
-----------------------------------------------------------
*/
Route::view('/contact-form', 'web.contact.contact-index')->name('contact_form');
Route::POST('/contact_us_send_message', [App\Http\Controllers\Web\ContactUsController::class, 'contact_us_send_message'])->name('contact_us_send_message');
Route::get('/refresh-captcha', [App\Http\Controllers\Web\ContactUsController::class, 'refreshCaptcha'])->name('reload_captcha');

/*
-----------------------------------------------------------
 ==== Career  ===
-----------------------------------------------------------
*/
Route::get('/career-index', [CareerController::class, 'index'])->name('career_index');
Route::get('/career-details', [CareerController::class, 'show'])->name('career_details');


// Admin
// Contact Us
Route::get('/view-inbox-messages',[App\Http\Controllers\Web\ContactUsController::class, 'view_inbox_messages'])->middleware('auth')->name('view_inbox_messages');
Route::POST('/view_individual_message',[App\Http\Controllers\Web\ContactUsController::class, 'view_individual_message'])->middleware('auth')->name('view_individual_message');



