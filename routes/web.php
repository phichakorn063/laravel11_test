<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Homecontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [Homecontroller::class, 'dashboard']);  
    Route::post('update/product/{product}', [Homecontroller::class, 'update']);  
    Route::get('edit/product/{product}', [Homecontroller::class, 'edit']);  
    Route::get('report_sale', [Homecontroller::class, 'report_sale']);  
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

