<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


use App\Http\Controllers\Admin\AdminLoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');


// Route::get('/admin', function () {
//     return view('layouts.app');
// });

Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login_submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::post('/admin/login_submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');

Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget_password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget_password_submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
