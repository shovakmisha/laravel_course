@props(['post' => null, 'text' => 'Создать пост'])

<x-form {{ $attributes }}>

    <x-form-item>
        <x-label>{{ __('Название поста') }}</x-label>
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
