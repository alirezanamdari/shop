<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\auth\RegisterController;
use App\Http\Controllers\Admin\auth\LoginController;
use App\Http\Controllers\Admin\auth\LogoutController;
use App\Http\Controllers\Admin\auth\UserController;
use App\Http\Controllers\Client\HomeController;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\Create;
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

Route::get('/',[HomeController::class,'index']);


Route::group(['prefix'=>'dashboard','middleware'=>'auth'],function(){
    Route::get('/home',[AdminController::class,'index'])->name('dashboard');
    Route::resource('/category',CategoryController::class);
    Route::resource('/brand',BrandController::class);
    Route::resource('/product',ProductController::class);
    Route::resource('/permission',PermissionController::class);
    Route::resource('/role',RoleController::class);
    Route::resource('/register',RegisterController::class);
    Route::resource('/user',UserController::class);
    Route::resource('/logout',LogoutController::class);

});


Route::group(['prefix'=>'dashboard','middleware'=>'guest'],function(){
    Route::resource('/login',LoginController::class);
});

