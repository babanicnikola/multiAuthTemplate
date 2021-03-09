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
Route::get('/admin/users/roles/create', [AdminController::class, 'create'])->name('rolenew');
Route::get('/admin/users/roles/view/{role_id}', [AdminController::class, 'view'])->name('roleview');
Route::get('/admin/users/roles/edit/{role_id}', [AdminController::class, 'edit'])->name('roleedit');
Route::get('/admin/users/roles/delete/{role_id}', [AdminController::class, 'delete'])->name('roledelete');

Auth::routes();