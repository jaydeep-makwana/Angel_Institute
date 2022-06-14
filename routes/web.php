<?php

use App\Http\Controllers\admin_login;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admisssion_form;
use App\Http\Controllers\operationController;
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
Route::view('navbar','navbar');
Route::view('signup','admin_signup');
Route::view('ragister','ragister');

//birthday
Route::get('bDay',[operationController::class,'find_bDay']);

//addmission
Route::post('add_student',[admisssion_form::class,'operation']);
Route::view('admission_form', 'Admission_Form');

//admin_login with signUP
Route::post('admin_signup',[AdminController::class,'admin_login']);
Route::view('login','login');
Route::post('admin_login',[AdminController::class,'login']);


Route::get('admin_dashboard',[operationController::class,'show']);
// update route
Route::get('edit/{id}',[operationController::class,'edit']);
Route::put('edit/{id}',[operationController::class,'update']);
// delete route
Route::get('delete/{id}',[operationController::class,'destroy']);

