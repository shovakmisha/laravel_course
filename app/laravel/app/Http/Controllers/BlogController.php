<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $categories= [
            null => __('Все категории'),
            1 => __('Первая категория'),
            2 => __('Вторая категория')
        ];

        /**
         * @var Post $posts
         */

        // Пагiнація через url
        $validated = $request->validate([
            'limit' => ['nullable', 'integer', 'max:12'], // максимум 12 постів на сторінці. Я не розумію як - воно підставляє 12, якщо я вкажу більше число
            'page' => ['nullable', 'integer'],
        ]);

        $limit = $validated['limit'] ?? 12;
        $page = $validated['page'] ?? 1;
        $offset = $limit * ($page -1); // offset вираховується - скільки на сторінці поміщається * на к-сть сторінок. Тут якраз і є - перша сторінка це 12*0=0 - Отже offset буде 0 і на першій сторінці покажуться самі перші елементи

        // limit - це - візьми з бази максимум стільки-то айтемів
        // offset - це означає - не бери з бази попередні айтеми. Попередні в сенсі - до якогось (наприклад до 12-го)
        // І тепер можна робити пагінацію.
        // $posts = Post::query()->limit($limit)->offset($offset)->get(['id', 'title', 'published_at']);

        // Або це можна замінити ларавельською пагінацією
        $posts = Post::query()->orderBy('published_at', 'desc')->paginate(12, ['id', 'title', 'published_at']);

        // $posts = Post::all(['id', 'title', 'published_at'])->toArray();



        // Пошук виглядає дивним тому, що він затручав у array_filter анонімну ф-цію. Просто по нішому ніяк не звязати глобальні і локальні змінні - function ($post) use ($search, $category_id)
        $posts_array = array_filter($posts->toArray()['data'], function ($post) use ($search, $category_id) {
            if ( $search ) {
                if ( !str_contains(strtolower($post['title'] ), strtolower($search) ) ) {
                    return false;
                }
            }
            if ( $category_id ) {
                if ( !str_contains($post['category_id'], $category_id) ) {
                    return false;
                }
            }
            return true;
        });

        return view('blog.index', compact('posts_array', 'posts', 'categories'));
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
