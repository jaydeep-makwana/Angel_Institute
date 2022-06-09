<?php

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
    return view('welcome');
});
Route::view('/', 'home');
Route::view('admission', 'Admission_Form');
Route::view('navbar','navbar');
Route::view('admin_dashboard','admin_dashboard');
Route::view('login','login');
Route::view('ragister','ragister');