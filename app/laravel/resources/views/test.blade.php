<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
</head>
<body>

@php
    $foo = 'bar';
@endphp

@for($i = 0; $i < 10; $i++)
    {{ $i }}
@endfor

<hr>

{{ 1 + 2 }}

<hr>

@php( $my_var = '<h2>Привіт<h2>' )
{{ $my_var }}
{!! $my_var !!}
@{{ $my_var }}

<hr>

@json(['key' => 'value'])
<script>
    window.App = {
        locale: "{{ config('app.locale') }}"
    }
    window.App2 = @json(['locale' => config('app.locale')]);

    console.log(window.App.locale);
    console.log(window.App2.locale);
</script>



</body>
</html>
