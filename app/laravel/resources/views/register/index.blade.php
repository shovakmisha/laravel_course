@extends('layouts.auth')

@section('page.title')Страница регистрации@endsection

@section('auth.content')

    <x-card>
        <div class="card">
            <x-card-header>
                <x-card-title>
                    {{ __('Регистрация') }}
                </x-card-title>
                <x-slot name="right">
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </x-slot>
            </x-card-header>
            <x-card-body>
                <x-form action="{{ route('register.store') }}" method="post">

                    <x-form-item>
                        <x-label required >{{ __('Имя') }}</x-label>
                        <x-input type="text" name="name" value="name" autofocus />
                    </x-form-item>

                    <x-form-item>
                        <x-label required >{{ __('Email') }}</x-label>
                        <x-input type="email" name="email" value="email" />
                    </x-form-item>

                    <x-form-item>
                        <x-label required >{{ __('Password') }}</x-label>
                        <x-input type="password" name="password" value="password" />
                    </x-form-item>

                    <x-form-item>
                        <x-label required >{{ __('Пароль ещё раз' ) }}</x-label>
                        <x-input type="password" name="password_confirmation" value="password_confirmation" />
                    </x-form-item>

                    <x-form-item >
                        <x-checkbox name="agreement">
                            {{ __('Я согласен на обработку пользовательских данных') }}
                        </x-checkbox>
                    </x-form-item>

                    <x-button type="submit" color="success">{{ __('Регистрация') }}</x-button>
                </x-form>
            </x-card-body>
        </div>
    </x-card>

@endsection
