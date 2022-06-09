<?php

use App\Http\Controllers\admisssion_form;
use App\Http\Controllers\crudcontroller;
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
Route::view('admission', 'Admission_Form');
Route::view('navbar','navbar');
Route::view('admin_dashboard','admin_dashboard');
Route::view('login','login');
Route::view('ragister','ragister');

Route::view('welcome', 'welcome');
Route::view('navbar','navbar');
// Route::view('admin_dashboard','admin_dashboard');
Route::post('admission_form',[admisssion_form::class,'operation']);
Route::view('admission_form', 'Admission_Form');
<<<<<<< HEAD
Route::get('admin_dashboard',[crudcontroller::class,'show']);
=======

>>>>>>> d388d7efe915d8fb8105fba40a082cd2bdccc599
