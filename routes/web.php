<?php

use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ForgotPassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransAController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
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

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::get('/transaksi', function(){
    return view('frontend.layouts.transaksi');
})->name('transaksi');

Route::get('/login', function(){
    return view('frontend.layouts.login');
})->name('login');


Route::get('/admin/transaksi', function(){
    return view('backend.layouts.transaksi');
})->name('adminberita');

Route::resource('/admin/berita', BeritaController::class);

Route::get('/admin/login', function(){
    return view('backend.layouts.loginadmin');
})->name('adminlogin');

Route::get('/login', function(){
    return view('frontend.layouts.login');
})->name('login');


// User Login Routes

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/register', [UserController::class, 'register'])->name('register');

// Profile Routes

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/edit/{user}', [ProfileController::class, 'update'])->name('profile.update');

// Admin Routes
Route::get('/admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// Forgot Pass Routes

Route::get('/forgot-password', [ForgotPassController::class, 'index'])->name('forgot-password.index');
Route::post('/forgot-password', [ForgotPassController::class, 'check'])->name('forgot-password.check');
Route::post('/forgot-password/reset', [ForgotPassController::class, 'reset_password'])->name('forgot-password.reset');

// Transaksi Routes

Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::post('/transaksi', [TransaksiController::class, 'pembayaran'])->name('transaksi.pembayaran');

//Transaksi admin
Route::get('admin/transaksi', [TransAController::class, 'index'])->name('admin.transaksi.index');
Route::post('admin/transaksi/valid/{transaksi}', [TransAController::class, 'update'])->name('admin.transaksi.valid');
Route::post('admin/transaksi/denied/{transaksi}', [TransAController::class, 'batal'])->name('admin.transaksi.batal');
Route::post('admin/transaksi/revoke/{user}', [TransAController::class, 'revokeMember'])->name('admin.transaksi.revoke');
Route::get('testingcmd', [TransAController::class, 'cmdtesting']);