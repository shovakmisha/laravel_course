
<nav class="navbar navbar-expand-md bg-light">
    <div class="container">

        <a class="navbar-brand" href="{{ route('welcome') }}">
            {{ config('app.name') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">

            <ul class="navbar-nav me-auto mb-2 mb-md-0">

                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ active_link('home') }}" aria-current="page" >{{ __('Главная') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link {{ active_link('blog*') }}" aria-current="page" >{{ __('Блог') }}</a>
                </li>

            </ul>

            <ul class="navbar-nav mі-auto mb-2 mb-md-0">

                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link {{ active_link('login') }}" aria-current="page" >{{ __('Вход') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link {{ active_link('register') }}" aria-current="page" >{{ __('Регистрация') }}</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
