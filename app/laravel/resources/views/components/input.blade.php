@props(['value' => null])

<input {{ $attributes->class([
    'form-control'
])->merge([
    'type' => 'text',
    'value' => request()->old($value)
]) }}>
