<x-card>
    <x-card-body>
        <h5>
            <a href="{{ route('blog.show', $post['id']) }}">
                {{ $post['title'] }}
            </a>
        </h5>
        <p>
            {{ $post['content'] }}
        </p>
    </x-card-body>
</x-card>
