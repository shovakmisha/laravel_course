@extends('layouts.main')

@section('page.title', 'Изменить пост')

@section('main.content')

    <x-title>
        {{ __('Изменить пост') }}

        <x-slot:link>
            <a href="{{ route('user.posts.show', $post['id']) }}">{{ __('Просмотр поста') }}</a>
        </x-slot:link>
    </x-title>

    <x-posts.form :post="$post" text="Изменить пост" action="{{ route('user.post.update') }}" method="PUT" >

    </x-posts.form>

@endsection

@push('css')
    <link rel="stylesheet" href="/css/trix.css">
@endpush

@push('js')
    <script src="/js/trix.js"></script>
@endpush
