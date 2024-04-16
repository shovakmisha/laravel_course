<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
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

    public function store(StorePostRequest $request)
    {

        // $title = $request->input('title');
        // $content = $request->input('content');

        // dd($title, $content);

        // Я не розумію як він вже підставляє потрібні дані title і content. Це точно, що валідатор повертає мене на цю ж сторінку, якщо валідація не проходить
        // $validated = validator($request->all(), [
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string']
        // ])->validate();

        $validated = $request->validated();

        alert(__('Сохранено'));

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

    public function update(Request $request, $post)
    {

        $validated = validator($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string']
        ])->validate();

        alert(__('Сохранено'));

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
