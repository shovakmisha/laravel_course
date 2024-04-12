@props(['color' => 'primary'])
{{-- Тут буде доступна змінна $color --}}
<button {{ $attributes->class(["btn btn-{$color}"])->merge(['type' => 'button']) }}>
    {{ $slot }}
</button>
