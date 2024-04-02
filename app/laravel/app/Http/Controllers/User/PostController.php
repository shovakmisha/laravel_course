<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        return 'Страница список постов';
    }

    public function create()
    {
        return 'Страница создания поста';
    }

    public function store()
    {
        return 'Запрос создания поста';
    }

    public function show($post)
    {
        return 'Страница просмотра поста ' . $post;
    }

    public function edit($post)
    {
        return 'Страница изминения поста ' . $post;
    }

    public function update()
    {
        return 'Запрос изминения поста';
    }

    public function delete()
    {
        return 'Запрос удаления поста';
    }

    public function like()
    {
        return 'Лайк + 1';
    }
}
