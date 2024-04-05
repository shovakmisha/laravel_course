<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');

        // альтернативи цієї строчки
        // return app('view')->make('login.index');
        // return view()->make('login.index')
        // return View::make('login.index');
    }
}
