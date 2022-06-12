<?php

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
Route::view('login','login');
Route::view('ragister','ragister');

Route::view('navbar','navbar');
Route::post('add_student',[admisssion_form::class,'operation']);
Route::view('admission_form', 'Admission_Form');
Route::get('admin_dashboard',[operationController::class,'show']);
Route::post('admin_login',[AdminController::class,'admin_login']);

