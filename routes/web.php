<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\StoreController;
use App\Http\Controllers\Store\BrandController;
use App\Http\Controllers\Store\CategoryController;
use App\Http\Controllers\Store\TypeController;
use App\Http\Controllers\Store\ProductController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Store\StatController;

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

/* Test pusher */
Route::get('/pusher-view', function () {
    return view('pusher-testing.showNotification');
});

Route::get('/getPusher', function (){
   return view('pusher-testing.form_pusher');
})->name('event.get-pusher');

Route::get('/pusher', function(Illuminate\Http\Request $request) {
    event(new App\Events\AuditPusherEvent($request));
    return redirect()->route('event.get-pusher');
})->name('event.pusher');

/* End test pusher */
// Route::view('/admin', 'admin/template/layout');
Route::prefix('/')->name('client.')->group(function () {
    Route::get('/', [ClientController::class,'index'])->name('index');
    Route::get('/{id}/san-pham',[ClientController::class,'auditDetail'])->name('product.detail');
    Route::get('/dau-gia', function (Illuminate\Http\Request $request) {
        event(new App\Events\AuditPusherEvent($request));
        return redirect()->back();
    })->name('product.audit');

});


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

    Route::prefix('/don-hang')->name('order.')->group(function () {
        Route::get('/danh-sach-don-hang',  [OrderController::class, 'getList'])->name('getList');
        Route::post('/cap-nhat--don-hang/{donhang}',  [OrderController::class, 'update'])->name('update');
    });
    

    Route::get('/danh-sach-cua-hang', [AdminController::class, 'shoplist'])->name('admin.shoplist');

    Route::prefix('/thuong-hieu')->name('brand.')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('index');
        Route::get('/them-moi', [BrandController::class, 'add'])->name('add');
        Route::post('/xu-ly-them-moi', [BrandController::class, 'store'])->name('store');
        Route::get('/chinh-sua/{id}', [BrandController::class, 'edit'])->name('edit');
        Route::post('/xu-ly-chinh-sua/{id}',[BrandController::class, 'update'])->name('update');
        Route::get('/xoa/{id}',[BrandController::class, 'delete'])->name('delete');
    });

    Route::prefix('/danh-muc')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/them-moi', [CategoryController::class, 'add'])->name('add');
        Route::post('/xu-ly-them-moi', [CategoryController::class, 'store'])->name('store');
        Route::get('/chinh-sua/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/xu-ly-chinh-sua/{id}',[CategoryController::class, 'update'])->name('update');
        Route::get('/xoa/{id}',[CategoryController::class, 'delete'])->name('delete');
    });

    Route::prefix('/loai-san-pham')->name('type.')->group(function () {
        Route::get('/', [TypeController::class, 'index'])->name('index');
        Route::get('/them-moi', [TypeController::class, 'add'])->name('add');
        Route::post('/xu-ly-them-moi', [TypeController::class, 'store'])->name('store');
        Route::get('/chinh-sua/{id}', [TypeController::class, 'edit'])->name('edit');
        Route::post('/xu-ly-chinh-sua/{id}',[TypeController::class, 'update'])->name('update');
        Route::get('/xoa/{id}',[TypeController::class, 'delete'])->name('delete');
    });

    Route::prefix('/san-pham')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/them-moi', [ProductController::class, 'add'])->name('add');
        Route::post('/xu-ly-them-moi', [ProductController::class, 'store'])->name('store');
        Route::get('/chi-tiet/{id}', [ProductController::class, 'show'])->name('show');
        Route::post('/them-dau-gia/{id}', [ProductController::class,'setupAudit'])->name('setup.audit');
        // Route::post('/xu-ly-chinh-sua/{id}',[ProductController::class, 'update'])->name('update');
        // Route::get('/xoa/{id}',[ProductController::class, 'delete'])->name('delete');
    });

    Route::prefix('/thong-ke')->name('stat.')->group(function () {
        Route::get('/thong-ke-doanh-thu', [StatController::class, 'revenue'])->name('revenue');
        Route::get('/thong-ke-don-hang', [StatController::class, 'order'])->name('order');
        Route::get('/thong-ke-san-pham', [StatController::class, 'product'])->name('product');
        Route::get('/thong-ke-nguoi-dung', [StatController::class, 'user'])->name('user');
        Route::get('/thong-ke-cua-hang', [StatController::class, 'store'])->name('store');
    });
});
