<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ScheduleController;
use App\Http\Controllers\API\BeritaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::get('berita', [BeritaController::class, 'index']);
Route::get('getschejul', [ScheduleController::class, 'getSchejul']);
Route::post('users/updatepass/{id}', [UserController::class, 'updatepass']);
Route::post('users/update/{id}', [UserController::class, 'update']);
Route::post('schedule/updateSchejul/{id}', [ScheduleController::class, 'updateSchejul']);
Route::post('register', [AuthController::class, 'register']);
Route::post('schejul/{id}', [ScheduleController::class, 'schejul']);
Route::post('login', [AuthController::class, 'login']);
Route::post('forgotPass', [AuthController::class, 'forgotPass']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('save', [PhotoController::class, 'upload']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


