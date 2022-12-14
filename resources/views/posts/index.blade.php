<x-layouts.guest>
    <x-slot:content>
        <h1>Blog</h1>
        @isset ($posts)
            @foreach ($posts as $post)
                <h2><a href="{{ route('show-post', $post) }}">{{ $post->title }}</a> <a href="{{ route('edit-post', $post) }}">Edit</a></h2>
            @endforeach
        @endisset
        <div>
            <a href="{{ route('create-post') }}">Crear post</a>
        </div>
    </x-slot:content>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
</x-layouts.guest>
