<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        if(5 < 3) {
            // return redirect()->back();
            return redirect()->back()->withInput();
        }
        return redirect()->route('user.posts');
    }
}
