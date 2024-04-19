@props(['post' => null, 'method'])

<x-form {{ $attributes }} method="POST">

    @if($method == 'PUT')
        <input type="hidden" name="_method" value="PUT" />
    @endif

    <x-form-item>
        <x-label>{{ __('Название поста') }}</x-label>
        <x-input class="form-control" name="title" autofocus />

        @if($errors->has('title'))
            <div class="small text-danger pt-1">
                {{ $errors->first('title') }}
            </div>
        @endif

    </x-form-item>

    <x-form-item>
        <x-label>{{ __('Содержание поста') }}</x-label>
        <input type="hidden" id="content" name="content" value="{{ old('content') ?? ''  }}">
        <trix-editor input="content"></trix-editor>

        <x-error name="content" />

    </x-form-item>

    <x-form-item>
        <x-label>{{ __('Дата публикации') }}</x-label>
        <x-input class="form-control" name="published_at" placeholder="dd.mm.yyyy" />

        <x-error name="published_at" />

    </x-form-item>

    <x-checkbox name="published">
        {{ __('Опубликовано') }}
    </x-checkbox>

    {{ $slot }}

</x-form>
