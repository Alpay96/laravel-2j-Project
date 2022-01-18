<?php

use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/fag', [HomeController::class, 'fag'])->name('fag');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/barbers', [HomeController::class, 'barbers'])->name('barbers');


//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name');


//Admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');
    #Style
    Route::prefix('style')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\StyleController::class, 'index'])->name('admin_style');
        Route::get('create', [\App\Http\Controllers\Admin\StyleController::class, 'create'])->name('admin_style_add');
        Route::post('store', [\App\Http\Controllers\Admin\StyleController::class, 'store'])->name('admin_style_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\StyleController::class, 'edit'])->name('admin_style_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\StyleController::class, 'update'])->name('admin_style_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\StyleController::class, 'destroy'])->name('admin_style_delete');
        Route::get('show', [\App\Http\Controllers\Admin\StyleController::class, 'show'])->name('admin_style_show');
    });

    #Style Image Gallery
    Route::prefix('image')->group(function () {
        Route::get('create/{style_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{style_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{style_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
});


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

