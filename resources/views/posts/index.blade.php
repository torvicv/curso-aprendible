<x-layouts.guest>
    <x-slot:content>
        <h1 class="font-bold text-2xl text-center py-4 bg-white text-blue-400">Blog</h1>
        @isset($posts)
            @foreach ($posts as $post)
                <div class="flex py-4 shadow-hrlist mt-4 bg-blue-300 text-white">
                    <h2 class="font-semibold text-xl basis-1/2 text-center"><a
                            href="{{ route('show-post', $post) }}">{{ $post->title }}</a></h2>
                    @auth
                        <a class="basis-1/4 text-center text-blue-600" href="{{ route('edit-post', $post) }}"><i
                                class="fa-solid fa-pencil"></i></a>
                        <form class="basis-1/4 text-center text-red-400" action="{{ route('delete-post', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    @endauth
                </div>
            @endforeach
        @endisset
        @auth
            <div class="fixed bottom-8 z-10 left-4 bg-green-600 p-3 rounded-full">
                <a href="{{ route('create-post') }}"><i class="fa-solid fa-plus text-4xl"></i></a>
            </div>
        @endauth
    </x-slot:content>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
</x-layouts.guest>
