<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/admin',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/login', [App\Http\Controllers\AdminAuth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\AdminAuth\AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/register', [App\Http\Controllers\AdminAuth\AdminRegisterController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('/register', [App\Http\Controllers\AdminAuth\AdminRegisterController::class, 'register'])->name('admin.register.submit');
  
    });
