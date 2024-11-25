<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
    return 'Do register';
});

Route::post('/register', [\App\Http\Controllers\RegisterController::class, "doRegister"]);
Route::get('/register-list', [\App\Http\Controllers\RegisterController::class, "registerList"]);
Route::get('/get-delete', [\App\Http\Controllers\RegisterController::class, "getDelete"]);
Route::get('/get-confirmation', [\App\Http\Controllers\RegisterController::class, "confirmationDelete"]);


Route::get('/get-edit', [\App\Http\Controllers\RegisterController::class, "getEdit"]);