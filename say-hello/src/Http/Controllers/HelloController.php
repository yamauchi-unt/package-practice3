<?php

namespace Nasteng\SayHello\Http\Controllers;

use Illuminate\Routing\Controller;

class HelloController extends Controller
{
    public function index()
    {
        // パッケージ内のviewを指定
        return view('nasteng::hello');
    }
}
