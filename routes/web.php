<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaceBookController;

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


Route::prefix('/')->group(function(){
    Route::get('/', function () {
        return view('pagems.mPage1');
    })->name('home-page');
    Route::get('musik',[HomeController::class,'homePage'])->name('musik-page');
    Route::get('search',[HomeController::class,'search'])->name('search');
    Route::get('library',[HomeController::class,'library'])->name('library');
    Route::get('playlist',[HomeController::class,'playlist'])->name('playlist');
    Route::get('eplaylist',[HomeController::class,'eplaylist'])->name('eplaylist');
    Route::get('lovemusic',[HomeController::class,'lovemusic'])->name('lovemusic');
});
Route::get('/ho-so',[HomeController::class,'hoSo'])->name('hoso');
Route::get('eprofile',[HomeController::class,'eProfile'])->name('eprofile');
Route::get('/tai-khoan',[HomeController::class,'taiKhoan'])->name('taikhoan');
Route::get('/dang-xuat', [HomeController::class, 'logout'])->name('logout');
Route::get('/dang-nhap', [HomeController::class, 'login'])->name('login');
Route::post('/dang-nhap', [HomeController::class, 'doLogin'])->name('do_login');
Route::get('/dang-ky', [HomeController::class, 'register'])->name('register');
Route::post('/dang-ky', [HomeController::class, 'doRegister'])->name('do_register');
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});

