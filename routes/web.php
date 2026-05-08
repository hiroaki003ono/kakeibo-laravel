<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return 'こんにちは、Laravel';
});

Route::get('/hello/{name}', function($name) {
    return 'こんにちは、' . $name . 'さん!';
});
