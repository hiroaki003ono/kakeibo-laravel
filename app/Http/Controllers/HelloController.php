<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return 'こんにちは、Laravel';
    }

    public function show($name)
    {
        return 'こんにちは、' . $name . 'さん!';
    }
}
