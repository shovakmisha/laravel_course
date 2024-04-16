@if($errors->any())
    <div class="alert alert-danger small p-2">
        <ul>
            @foreach($errors->all() as $message)
                <li class="mb-0">
                    <p>{{ $message }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endif
