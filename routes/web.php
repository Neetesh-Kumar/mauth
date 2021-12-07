<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('/login','admin.login')->name('admin.login');
        Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
    });
    
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

    });
});
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::get('show', [RegisterController::class, 'show'])->name('show');
Route::get('/info/{id}', [RegisterController::class, 'info'])->name('info');
Route::get('/edit1/{id}', [RegisterController::class, 'edit1'])->name('edit1');
Route::put('edit1/{id}', [RegisterController::class, 'update1'])->name('update1');
// Profile view admin
Route::get('/profile', [RegisterController::class, 'profile'])->name('profile');
Route::get('/profile/edit/{id}', [RegisterController::class, 'edit'])->name('edit');
Route::put('profile/edit/{id}', [RegisterController::class, 'update'])->name('update');