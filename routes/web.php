<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
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
Route::get('/profile', function(){
    return view('frontend.layouts.profile');
})->name('profile');
Route::get('/editp', function(){
    return view('frontend.layouts.editp');
})->name('editp');


Route::get('/admin/transaksi', function(){
    return view('backend.layouts.transaksi');
})->name('adminberita');

Route::resource('/admin/berita', BeritaController::class);

Route::get('/admin/login', function(){
    return view('backend.layouts.loginadmin');
})->name('adminlogin');

Route::get('/forgotp', function(){
    return view('frontend.layouts.forgotp');
})->name('forgotp');

Route::get('/login', function(){
    return view('frontend.layouts.login');
})->name('login');
