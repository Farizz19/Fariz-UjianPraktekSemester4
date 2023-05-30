<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\UserContoller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'index']);
Route::get('/dashboard', [DashboardContoller::class, 'index']);

Route::get('/user', [UserContoller::class, 'index']);

Route::get('/add', [UserContoller::class, 'add']);
Route::post('/store', [UserContoller::class, 'store']);

Route::get('/edit/{user_id}', [UserContoller::class, 'edit']);
Route::post('/update/{user_id}', [UserContoller::class, 'update']);

Route::delete('/delete/{user_id}', [UserContoller::class, 'delete']);

Route::post('/loginproses', [AuthController::class, 'loginproses']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/profile', [UserContoller::class, 'profile']);
Route::get('/editprofile/{user_id}', [UserContoller::class, 'editprofile']);
Route::post('/updateprofile/{user_id}', [UserContoller::class, 'updateprofile']);