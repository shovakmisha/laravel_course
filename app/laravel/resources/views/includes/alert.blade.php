@if($alert = session()->pull('alert'))
    <div class="alert alert-success text-center" role="alert">
        {{ $alert }}
    </div>
@endif

