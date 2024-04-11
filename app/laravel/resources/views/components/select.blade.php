@props(['options' => []])

<select {{ $attributes }}>
    @foreach($options as $key => $value)
        <option value="{{ $key }}">
            {{ $value }}
        </option>
    @endforeach
</select>
