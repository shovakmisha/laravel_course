<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $posts = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum color sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.',
                'category_id' => 1
            ],
            [
                'id' => 2,
                'title' => 'Lorem ipsum color sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.',
                'category_id' => 2
            ],
            [
                'id' => 3,
                'title' => 'Lorem ipsum color sit amet',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.',
                'category_id' => 3
            ],
        ];

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if ( $search && !str_contains(strtolower($post['title']), strtolower($search)) ) {
                return false;
            }
            if ( $category_id && !str_contains($post['category_id'], $category_id) ) {
                return false;
            }
            return true;
        });

        return view('blog.index', compact('posts'));
    }

    public function show()
    {

        $post = [
            'id' => 1,
            'title' => 'Lorem ipsum color sit amet',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, placeat.'
        ];

        return view('blog.show', compact('post'));
    }
}
