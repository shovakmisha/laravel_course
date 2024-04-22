<x-card>
    <x-card-body>
        <p class="text-center">
            <small>id: {{ $post['id'] }}</small>
        </p>
        <h5>
            <a href="{{ route('blog.show', $post['id']) }}">
                {{ $post['title'] }}
            </a>
        </h5>
        <p>
            {{ \Carbon\Carbon::parse($post['published_at'])->format('d:m:Y')}}
        </p>
    </x-card-body>
</x-card>
