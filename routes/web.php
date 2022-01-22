<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MesajjController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\StyleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::post('/sendbooking', [HomeController::class, 'sendbooking'])->name('sendbooking');

Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/barbers', [HomeController::class, 'barbers'])->name('barbers');
Route::get('/style/{id}/{slug}', [HomeController::class, 'style'])->name('style');
Route::post('/getstyle', [HomeController::class, 'getstyle'])->name('getstyle');


//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name');


//Admin
Route::middleware('auth')->prefix('admin')->group(function () {

    //Admin Role
    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        #Style
        Route::prefix('style')->group(function () {
            Route::get('/', [StyleController::class, 'index'])->name('admin_style');
            Route::get('create', [StyleController::class, 'create'])->name('admin_style_add');
            Route::post('store', [StyleController::class, 'store'])->name('admin_style_store');
            Route::get('edit/{id}', [StyleController::class, 'edit'])->name('admin_style_edit');
            Route::post('update/{id}', [StyleController::class, 'update'])->name('admin_style_update');
            Route::get('delete/{id}', [StyleController::class, 'destroy'])->name('admin_style_delete');
            Route::get('show', [StyleController::class, 'show'])->name('admin_style_show');
        });


        #Message
        Route::prefix('messages')->group(function () {
            Route::get('/', [MesajjController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MesajjController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MesajjController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MesajjController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MesajjController::class, 'show'])->name('admin_message_show');

        });


        #Reservation
        Route::prefix('reservations')->group(function () {
            Route::get('/', [ReservationController::class, 'index'])->name('admin_reservations');
            Route::get('list/{status}', [ReservationController::class, 'list'])->name('admin_reservation_list');
            Route::get('create', [ReservationController::class, 'create'])->name('admin_reservation_add');
            Route::post('store', [ReservationController::class, 'store'])->name('admin_reservation_store');
            Route::get('edit/{id}', [ReservationController::class, 'edit'])->name('admin_reservation_edit');
            Route::post('update/{id}', [ReservationController::class, 'update'])->name('admin_reservation_update');
            Route::get('delete/{id}', [ReservationController::class, 'destroy'])->name('admin_reservation_delete');
            Route::get('show/{id}', [ReservationController::class, 'show'])->name('admin_reservation_show');
        });


        #Style Image Gallery
        Route::prefix('image')->group(function () {
            Route::get('create/{style_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{style_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{style_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });


        #Review
        Route::prefix('review')->group(function () {
            Route::get('/', [ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [ReviewController::class, 'show'])->name('admin_review_show');
        });


        #Setting
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');


        #Faq
        Route::prefix('faq')->group(function () {
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
        });

    }); #admin

}); #auth


Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('myprofile');

    #myreviews
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [ReviewController::class, 'destroy'])->name('user_review_delete');

    #mymessages
    Route::get('/mymessages', [UserController::class, 'mymessages'])->name('mymessages');
    Route::get('/myreservations', [UserController::class, 'myreservations'])->name('myreservations');

});

#User
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');

});


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

