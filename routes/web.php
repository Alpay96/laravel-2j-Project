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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');


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
});


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

