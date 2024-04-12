<div class="border-bottom mb-3">
    @isset($link)
        <h2>{{ $link }}</h2>
    @endisset

    <div class="d-flex justify-content-between">

        <div>
            <h1> {{ $slot }}</h1>
        </div>

        @isset($right)
            <div>
                {{ $right }}
            </div>
        @endisset

    </div>

</div>
