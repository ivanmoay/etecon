<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CompanyController;
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

Route::get('/doctors',[DoctorController::class, 'index']);
Route::get('/doctors/create', [DoctorController::class, 'create']);
Route::post('/doctors', [DoctorController::class, 'store']);
Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit']);
Route::put('/doctors/{doctor}', [DoctorController::class, 'update']);
Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy']);

Route::get('/companies',[CompanyController::class, 'index']);
Route::get('/companies/create', [CompanyController::class, 'create']);
Route::post('/companies', [CompanyController::class, 'store']);
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit']);
Route::put('/companies/{company}', [CompanyController::class, 'update']);
Route::delete('/companies/{company}', [CompanyController::class, 'destroy']);