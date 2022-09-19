<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [App\Http\Controllers\indexConrtoller::class, 'index']);
Route::get('/aboutUs', [App\Http\Controllers\indexConrtoller::class, 'about']);
// Route::get('/services', [App\Http\Controllers\indexConrtoller::class, 'services']);

// Route::gte('/aboutUs', [App\Http\Controllers\indexConrtoller::class, 'about']);

// **************************************************************

Route::get('/', [App\Http\Controllers\Admin\MasterController::class, 'dashboard']);
//user route
Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
Route::get('users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('users.create');
Route::post('users/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');

Route::get('users/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('users.edit');
Route::put('users/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('users.update');

Route::delete('users/destroy/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');

//Resource Route
Route::resource('blogCategory', (App\Http\Controllers\Admin\BlogCategoryController::class));