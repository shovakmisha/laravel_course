@extends('layouts.main')

@section('page.title', 'Страница постов')

@section('main.content')

    <x-title>
        {{ __('Страница постов') }}

        <x-slot name="right">
            <x-button-link href="{{ route('user.posts.create') }}">{{ __('Создать') }}</x-button-link>
        </x-slot>
    </x-title>

    <div class="row">
        @foreach($posts as $post)
            <div class="mb-5">
                <h2 class="h6 m-0">
                    <a href="{{ route('user.posts.show', $post['id']) }}">{{ $post['title'] }}</a>
                </h2>
                <p>
                    {{ now()->format('d.m.Y H:i:s') }}
                </p>
            </div>
        @endforeach
    </div>

@endsection
