@extends('layouts.main')

@section('page.title', 'Страница постов')

@section('main.content')

    <h1>{{ __('Страница постов') }}</h1>

    @include('blog.filter')

    <div class="row">
        @foreach($posts as $post)
            <div class="col-12 col-md-4">
                <x-posts.card :post="$post" />
            </div>
        @endforeach
    </div>

@endsection
