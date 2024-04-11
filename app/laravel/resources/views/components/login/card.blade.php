<x-card>
    <div class="card">
        <x-card-header>
            <x-card-title>
                {{ __('Вход') }}
            </x-card-title>

            <x-slot name="right">
                <a href="{{ route('register') }}">{{ __('Регистрация') }}</a>
            </x-slot>
        </x-card-header>

        <x-card-body>
            <x-form action="{{ route('login.store') }}" method="post">

                <x-form-item>
                    <x-label required >{{ __('Email') }}</x-label>
                    <x-input type="email" name="email" value="email" autofocus />
                </x-form-item>

                <x-form-item>
                    <x-label required >{{ __('Password') }}</x-label>
                    <x-input type="password" name="password" value="password" />
                </x-form-item>

                <x-form-item >
                    <x-checkbox name="remember">
                        {{ __('Запомнить меня') }}
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit" color="success">{{ __('Войти') }}</x-button>
            </x-form>
        </x-card-body>
    </div>
</x-card>
