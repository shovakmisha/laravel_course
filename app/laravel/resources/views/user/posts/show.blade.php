@extends('layouts.main')

@section('page.title', $post['title'])

@section('main.content')

    <x-title>

        <x-slot name="link">
            <a href="{{ route('user.posts') }}">{{ __('Список постов') }}</a>
        </x-slot>

        {{ __('Просмотр поста') }}

        <x-slot:right>
            <x-button-link href="{{ route('user.posts.edit', $post['id']) }}">
                {{ __('Изменить') }}
            </x-button-link>
        </x-slot:right>

        <h2>{{ $post['title'] }}</h2>

    </x-title>


    <p>
        {{ $post['content'] }}
    </p>

    <div class="small text-muted">
        {{ now()->format('d.m.Y H:i:s') }}
    </div>


@endsection
