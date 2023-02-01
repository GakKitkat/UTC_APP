<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\Register_Controller;

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
//กำหนดเราท์ที่นี้
Route::get('/dashboard',[Admin_Controller::class,'dashboard','navbarband'])->name('dashboard')->middleware('check.admin');
Route::get('/register',[Register_Controller::class,'RuteRerister'])->name('register');


// ทดสอบเราท์ที่นี้
Route::get('config', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('storage:link');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    dd("Success..! OK");})->name('set');

Route::get('/nav', function(){
     return view('layout.navbar');
});