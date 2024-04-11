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

    public function store(Request $request)
    {
        $ip = $request->ip();

        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');

        // dd($email, $password, $remember, $ip);

        // return response()->redirectTo('/foo'); // але це просто перекине мене на http://localhost:5555/foo


        if(5 < 3) {
            // return redirect()->back();
            return redirect()->back()->withInput();
        }

        // Якщо я хочу, щоб мене перекинуло на готовий роут, є інший метод
        // return response()->redirectToRoute('user.posts');
        return redirect()->route('user.posts');
    }
}
