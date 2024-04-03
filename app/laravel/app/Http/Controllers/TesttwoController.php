<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesttwoController extends Controller
{

    public function __construct()
    {
        // Тобто у файлі рута(web.php) я не прописував middleware. Його можна вказати в конструкторі.
        // І тепер middleware token застосується для всіх методів у цьому контроллері
        // http://localhost:5555/testtwo буде 403 FORBIDDEN. Щоб мені дозволили зайти на сайт, треба вказати цей токен - http://localhost:5555/testtwo?token=secret
        $this->middleware('token');

        // $this->middleware('token')->only('index'); // так теж можна
    }

    public function index()
    {
        return '777';
    }
}
