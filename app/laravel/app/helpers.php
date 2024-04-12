<?php

use Illuminate\Support\Facades\Route;

function active_link(string $name, string $active = 'active'): string
{
    return Route::is($name) ? $active : '';
}

function alert(string $value)
{
    session(['alert' => $value]);
}
