@extends('layouts.base')

@section('page.title', 'Страница постов')

@section('content')

    <h1>Страница постов</h1>

    @foreach($posts as $post)
        <div class="mb-4">
            <h5>
                <a href="{{ route('blog.show', $post['id']) }}">
                    {{ $post['title'] }}
                </a>
            </h5>
            <p>
                {{ $post['content'] }}
            </p>
        </div>
    @endforeach


@endsection
