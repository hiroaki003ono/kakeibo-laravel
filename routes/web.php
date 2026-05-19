<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index'])->name('hello.index');
Route::get('/hello/{name}', [HelloController::class, 'show'])->name('hello.show');
