<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke()
    {
        // return view('test');
        // return response('');


        // return ['foo' => 'bar']; // зразу переведе це в json. Тобто навіть на рівні заголовків тут буде aplication/json
        // Ще варіант для json
        return response()->json(['foo' => 'bar'], 200, []);
    }
}
