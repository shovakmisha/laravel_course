<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $posts = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum color sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.'
            ],
            [
                'id' => 2,
                'title' => 'Lorem ipsum color sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.'
            ],
            [
                'id' => 3,
                'title' => 'Lorem ipsum color sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.'
            ],
        ];

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store()
    {
        return 'Запрос создания поста';
    }

    public function show($post)
    {
        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum color sit amet',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.'
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum color sit amet',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.'
        ];

        return view('user.posts.edit', compact('post'));
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
