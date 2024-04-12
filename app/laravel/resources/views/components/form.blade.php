<form {{ $attributes }}>
    @if($attributes->get('method') !== 'GET')
        @csrf
    @endif
    {{ $slot }}
</form>
