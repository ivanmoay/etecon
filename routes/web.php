<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\DiagnosisController;
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
    if(Auth::check()){
        if(auth()->user()->user_type >= 2){
            return redirect('/users');
        }else{
            return redirect('/my_profile');
        }
        
    }else{
        return view('auth.login');
    }
    
    return view('index');
    //return view('forms.pdf.hospice-homehealth-aide-charting');
});

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/my_profile',[ProfileController::class, 'profile']);
Route::put('/profile/{user}',[ProfileController::class, 'update']);
Route::put('/profile/{user}/change_password',[ProfileController::class, 'change_password']);

Route::get('/my_forms/{user}',[UserFormController::class, 'my_forms']);

Route::get('/learnings',[CourseController::class, 'show_learnings']);
Route::get('/learnings/{course}',[CourseController::class, 'show_course']);
Route::get('/learnings/{course}/{video}',[CourseController::class, 'show_course']);

Route::get('/encode_form/{form}', [PDFController::class, 'encode_form']);
Route::post('/print_form/{user_form}', [PDFController::class, 'print_form']);

Route::get('/hospice_eligibility_requirements',[DiagnosisController::class, 'hospice_eligibility_requirements']);
Route::get('/her/{diagnosis}/show',[DiagnosisController::class, 'her_show']);
Route::post('/her/{diagnosis}',[DiagnosisController::class, 'answer_her']);

Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/users', [UserController::class, 'users']);
    Route::get('/users/{user}/activate', [UserController::class, 'activate']);
    Route::get('/users/{user}/deactivate', [UserController::class, 'deactivate']);
    Route::get('/users/{user}/promote', [UserController::class, 'promote']);
    Route::get('/users/{user}/demote', [UserController::class, 'demote']);

    Route::get('/doctors',[DoctorController::class, 'index']);
    Route::get('/doctors/create', [DoctorController::class, 'create']);
    Route::post('/doctors', [DoctorController::class, 'store']);
    Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit']);
    Route::put('/doctors/{doctor}', [DoctorController::class, 'update']);
    Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy']);

    Route::get('/categories',[CategoryController::class, 'index']);
    Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit']);
    Route::put('/categories/{category}', [CategoryController::class, 'update']);
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

    Route::get('/companies',[CompanyController::class, 'index']);
    Route::get('/companies/create', [CompanyController::class, 'create']);
    Route::post('/companies', [CompanyController::class, 'store']);
    Route::get('/companies/{company}/edit', [CompanyController::class, 'edit']);
    Route::put('/companies/{company}', [CompanyController::class, 'update']);
    Route::delete('/companies/{company}', [CompanyController::class, 'destroy']);

    Route::get('/forms',[FormController::class, 'index']);
    Route::get('/forms/create', [FormController::class, 'create']);
    Route::post('/forms', [FormController::class, 'store']);
    Route::get('/forms/{form}/edit', [FormController::class, 'edit']);
    Route::put('/forms/{form}', [FormController::class, 'update']);
    Route::delete('/forms/{form}', [FormController::class, 'destroy']);

    Route::get('/user_forms/{user}',[UserFormController::class, 'user_forms']);
    Route::post('/user_forms/{user}', [UserFormController::class, 'store']);
    Route::delete('/user_forms/{user_form}', [UserFormController::class, 'destroy']);

    Route::get('/diagnosis',[DiagnosisController::class, 'index']);
    Route::get('/diagnosis/create', [DiagnosisController::class, 'create']);
    Route::post('/diagnosis', [DiagnosisController::class, 'store']);
    Route::get('/diagnosis/{diagnosis}/edit', [DiagnosisController::class, 'edit']);
    Route::put('/diagnosis/{diagnosis}', [DiagnosisController::class, 'update']);
    Route::delete('/diagnosis/{diagnosis}', [DiagnosisController::class, 'destroy']);

    Route::get('/courses',[CourseController::class, 'index']);
    Route::get('/courses/create', [CourseController::class, 'create']);
    Route::post('/courses', [CourseController::class, 'store']);
    Route::get('/courses/{course}/edit', [CourseController::class, 'edit']);
    Route::put('/courses/{course}', [CourseController::class, 'update']);
    Route::delete('/courses/{course}', [CourseController::class, 'destroy']);

    Route::get('/courses/{course}/show',[CourseController::class, 'show']);
    Route::post('/videos/{course}/',[CourseController::class, 'store_video']);
    Route::delete('/videos/{video}', [CourseController::class, 'delete_video']); 

    Route::get('/diagnosis/{diagnosis}/show',[DiagnosisController::class, 'show']);
    Route::post('/questions/{diagnosis}/',[DiagnosisController::class, 'store_question']);
    Route::delete('/questions/{question}', [DiagnosisController::class, 'delete_question']);
});