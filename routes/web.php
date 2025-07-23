<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('about', 'about');

Route::get('admin/{name}', [UserController::class, 'admin']);

Route::get('users', [UserController::class, 'users']);

//Route::get('user-form', function () {
//    return view('user-form');
//});

Route::get('user-form/{name?}', function ($name = null) {
    return view('user-form', ['name' => $name]);
});

Route::post('userData', [UserController::class, 'addUser']);
