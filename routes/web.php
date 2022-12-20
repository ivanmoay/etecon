<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('index');
});

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/users', [UserController::class, 'users']);
Route::get('/users/{user}/activate', [UserController::class, 'activate']);
Route::get('/users/{user}/deactivate', [UserController::class, 'deactivate']);
Route::get('/users/{user}/promote', [UserController::class, 'promote']);
Route::get('/users/{user}/demote', [UserController::class, 'demote']);

Route::get('/my_profile',[ProfileController::class, 'profile']);
Route::put('/profile/{user}',[ProfileController::class, 'update']);