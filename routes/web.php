<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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
/*Auth routes*/
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

/*ADMIN ROUTES*/
    /*Admin - Users*/
Route::get('/admin/users', [AdminController::class, 'list'])->name('userslist');
Route::get('/admin/users/create', [AdminController::class, 'create'])->name('usernew');
Route::put('/admin/users/store', [AdminController::class, 'store'])->name('userstore');
Route::get('/admin/users/view/{user_id}', [AdminController::class, 'view'])->name('userview');
Route::get('/admin/users/edit/{user_id}', [AdminController::class, 'edit'])->name('useredit');
Route::get('/admin/users/delete/{user_id}', [AdminController::class, 'delete'])->name('userdelete');
    /*Users - Roles*/
Route::get('/admin/users/roles', [AdminController::class, 'listroles'])->name('listroles');

    /*Admin - Products*/
Route::get('/admin/products', [ProductController::class, 'listProducts'])->name('listproducts');
Route::get('/admin/products/create', [ProductController::class, 'createProduct'])->name('productnew');
Route::put('/admin/products/store', [ProductController::class, 'storeProduct'])->name('productstore');
Route::get('/admin/products/view/{product_id}', [ProductController::class, 'viewProduct'])->name('productview');
Route::get('/admin/products/edit/{product_id}', [ProductController::class, 'editProduct'])->name('productedit');
Route::get('/admin/products/delete/{product_id}', [ProductController::class, 'deleteProduct'])->name('productdelete');
/*ADMIN ROUTES */

Auth::routes();