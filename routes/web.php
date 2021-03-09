<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin/users', [AdminController::class, 'list'])->name('userslist');
Route::get('/admin/users/create', [AdminController::class, 'create'])->name('usernew');
Route::put('/admin/users/store', [AdminController::class, 'store'])->name('userstore');
Route::get('/admin/users/view/{user_id}', [AdminController::class, 'view'])->name('userview');
Route::get('/admin/users/edit/{user_id}', [AdminController::class, 'edit'])->name('useredit');
Route::get('/admin/users/delete/{user_id}', [AdminController::class, 'delete'])->name('userdelete');

Route::get('/admin/users/roles', [AdminController::class, 'listroles'])->name('listroles');

Route::get('/admin/users/products', [AdminController::class, 'listProducts'])->name('listproducts');
Route::get('/admin/users/products/create', [AdminController::class, 'createProduct'])->name('productnew');
Route::put('/admin/users/products/store', [AdminController::class, 'storeProduct'])->name('productstore');
Route::get('/admin/users/products/view/{product_id}', [AdminController::class, 'viewProduct'])->name('productview');
Route::get('/admin/users/products/edit/{product_id}', [AdminController::class, 'editProduct'])->name('productedit');
Route::get('/admin/users/products/delete/{product_id}', [AdminController::class, 'deleteProduct'])->name('productdelete');
Auth::routes();