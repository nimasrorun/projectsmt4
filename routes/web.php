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

Route::get('/', function () {
    return view('frontend.layouts.index');
})->name('home');

Route::get('/transaksi', function(){
    return view('frontend.layouts.transaksi');
})->name('transaksi');

Route::get('/login', function(){
    return view('frontend.layouts.login');
})->name('login');