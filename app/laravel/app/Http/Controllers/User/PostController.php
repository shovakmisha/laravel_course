<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {

        $title = $request->input('title');
        $content = $request->input('content');

        // dd($title, $content);

        return redirect()->route('user.posts.show', 1);
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

    public function update(Request $request)
    {

        $title = $request->input('title');
        $content = $request->input('content');

        // dd($title, $content);

        return redirect()->route('user.posts.show', 1);
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
