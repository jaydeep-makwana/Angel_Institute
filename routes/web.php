<?php

use App\Http\Controllers\admin_login;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admisssion_form;
use App\Http\Controllers\logout;
use App\Http\Controllers\operationController;
use App\Http\Controllers\payment;
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
    return view('demo');
});
Route::view('/', 'home');
Route::view('sidebar','sidebar');
Route::view('navbar','navbar');
Route::view('signup','admin_signup');
Route::view('ragister','ragister');

//birthday
Route::get('bDay',[operationController::class,'find_bDay']);

//addmission
Route::post('add_student',[admisssion_form::class,'operation']);
Route::post('add_course',[operationController::class,'course']);
Route::view('admission_form', 'Admission_Form');


//admin_login with signUP
Route::post('admin_signup',[AdminController::class,'admin_login']);

Route::view('login','login');
Route::post('admin_login',[AdminController::class,'login']);
Route::get('admin_logout',[logout::class,'admin_logout']);

Route::view('course','course_category');
// display route
Route::get('admin_dashboard',[operationController::class,'show'])->middleware('adminlogout');
Route::get('admin_dashboard',[operationController::class,'show']);
// update route
Route::get('edit/{id}',[operationController::class,'edit']);
Route::put('edit/{id}',[operationController::class,'update']);
// delete route
Route::get('delete/{id}',[operationController::class,'destroy']);
Route::get('student_detail/{id}',[operationController::class,'student_detail']);

// Payment
Route::post('add_payment',[payment::class,'add_fees']);