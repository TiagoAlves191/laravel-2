<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/avarias/lista', [App\Http\Controllers\AvariasController::class, 'listaAvarias']);

Route::get('/acerca', [App\Http\Controllers\AboutController::class, 'sobre']);



