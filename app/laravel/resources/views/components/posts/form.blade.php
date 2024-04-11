@props(['post' => null, 'text' => 'Создать пост', 'method'])

<x-form {{ $attributes }} method="POST">

    @if($method == 'PUT')
        <input type="hidden" name="_method" value="PUT" />
    @endif

    <x-form-item>
        <x-label>{{ __('Название поста') }}{{ $method }}</x-label>
        <x-input class="form-control" name="title" value="{{ $post['title'] ?? '' }}" autofocus />
    </x-form-item>

    <x-form-item>
        <x-label>{{ __('Содержание поста') }}</x-label>
        <input type="hidden" id="content" name="content" value="{{ $post['content'] ?? '' }}">
        <trix-editor input="content"></trix-editor>
    </x-form-item>

    <x-button type="submit">
        {{ __($text) }}
    </x-button>

</x-form>
