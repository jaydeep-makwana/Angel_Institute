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
Route::view('sidebar','Dashboard.sidebar');
Route::view('navbar','navbar');
Route::view('signup','admin_signup')->middleware('adminlogin');
Route::view('login','login')->middleware('adminlogin');

//birthday
Route::get('bDay',[operationController::class,'find_bDay']);

//addmission form
Route::post('add_student',[admisssion_form::class,'operation']);
Route::get('admission_form',[operationController::class,'course_show']);

// course
Route::post('add_course',[operationController::class,'course']);


Route::view('course','course_category');
// display route
Route::get('admin_dashboard',[operationController::class,'show'])->middleware('adminlogout');

//admin_login with signUP
Route::post('admin_signup',[AdminController::class,'admin_login']);
Route::post('admin_login',[AdminController::class,'login']);
Route::get('admin_logout',[logout::class,'admin_logout']);

// update route
Route::get('edit/{id}',[operationController::class,'edit']);
Route::put('edit/{id}',[operationController::class,'update']);

// delete route
Route::get('delete/{id}',[operationController::class,'destroy']);

// Payment
Route::post('add_payment',[payment::class,'add_fees']);