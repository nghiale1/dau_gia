<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\StoreController;
use App\Http\Controllers\Store\BrandController;
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



// Route::view('/admin', 'admin/template/layout');
Route::view('/', 'client/index');

Route::view('/quan-tri','admin/template/layout');

Route::get('/dang-ky',[AuthController::class,'registerView'])->name('register.view');
Route::post('/xu-ly-dang-ky',[AuthController::class,'registerHandle'])->name('register.handle');

Route::get('/dang-nhap', [AuthController::class,'loginView'])->name('login.view');
Route::get('/xu-ly-dang-nhap', [AuthController::class,'loginHandle'])->name('login.handle');

Route::group(['middleware' => 'checkUser'], function () {
    Route::get('/thong-tin-ca-nhan', [AuthController::class,'info'])->name('user.info');
    Route::post('/dang-ky-cua-hang',[StoreController::class, 'handleRegisterStore'])->name('store.register');

    Route::prefix('/cua-hang')->group(function () {
        Route::get('/', [StoreController::class, 'storeDetail'])->name('store.detail');
    });

    Route::prefix('/thuong-hieu')->name('brand.')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('index');
    });
});
