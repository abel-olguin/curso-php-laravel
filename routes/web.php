<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])
     ->name('login.index');

Route::post('/login', [LoginController::class, 'authenticate'])
     ->name('login.authenticate');

Route::post('/logout', [LoginController::class, 'logout'])
     ->name('login.logout');


