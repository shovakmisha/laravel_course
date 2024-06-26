@extends('layouts.main')

@section('page.title', 'Создать пост')

@section('main.content')

    <x-title>
        {{ __('Создать пост') }}

        <x-slot:link>
            <a href="{{ route('user.posts') }}">{{ __('Список постов') }}</a>
        </x-slot:link>
    </x-title>

    <x-posts.form-create action="{{ route('user.post.store') }}" method="post">
        <x-button type="submit">
            {{ __('Создать') }}
        </x-button>
    </x-posts.form-create>

@endsection

@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush

@push('js')
    <script src="/js/trix.js"></script>
@endpush
