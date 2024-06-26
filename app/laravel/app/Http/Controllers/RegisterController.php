<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function Webmozart\Assert\Tests\StaticAnalysis\email;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users'], // Це означає - мають бути унікальні юзери в таблиці users в полі email. Це можна більш гібко настаювати
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
            'agreement' => ['accepted'],
        ]);

        /* Перший спосіб створити юзера в БД
        $user = new User;

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);

        $user->save();

        */

        // Другий спосіб
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // if(5 < 3) {
        //     // return redirect()->back();
        //     return redirect()->back()->withInput();
        // }

        return redirect()->route('user.posts');
    }
}
