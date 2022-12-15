<x-layouts.guest>
    <x-slot:content>
        <h1 class="font-bold text-2xl text-center my-4">Blog</h1>
        @isset ($posts)
            @foreach ($posts as $post)
            <div class="flex">
                <h2 class="font-semibold text-xl basis-1/2 text-center"><a href="{{ route('show-post', $post) }}">{{ $post->title }}</a></h2>
                <a class="basis-1/4 text-center" href="{{ route('edit-post', $post) }}">Edit</a>
                <form class="basis-1/4 text-center" action="{{ route('delete-post', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
            @endforeach
        @endisset
        <div class="fixed bottom-8 left-2">
            <a href="{{ route('create-post') }}">Crear post</a>
        </div>
    </x-slot:content>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
</x-layouts.guest>
