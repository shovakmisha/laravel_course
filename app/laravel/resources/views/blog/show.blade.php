@extends('layouts.main')

@section('page.title', $post['title'])

@section('main.content')

    <x-title>

        <x-slot name="link">
            <a href="{{ route('blog') }}">{{ __('Список постов') }}</a>
        </x-slot>

        {{ $post['title'] }}

    </x-title>


    <p>
        {{ $post['content'] }}
    </p>


@endsection
