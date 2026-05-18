<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $url    = route('hello.show', ['name' => 'タロウ']);
        return 'こんにちは、Laravel<br><a href="' . $url . '">タロウさんに挨拶</a>';
    }

    public function show($name)
    {
        return 'こんにちは、' . $name . 'さん!';
    }
}
