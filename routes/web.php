<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrentUserController as CurrentUserController;

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/current-user', [CurrentUserController::class, "index"])->name('current-user');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
