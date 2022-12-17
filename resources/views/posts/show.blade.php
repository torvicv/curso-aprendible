<x-layouts.guest>
    <x-slot:content>
        <div class="h-screen5 flex justify-evenly items-center flex-col bg-white m-8">
            <h2 class="text-xl font-bold text-blue-400">{{ $post->title }}</h2>
            <div class="h-0 w-full border border-blue-200"></div>
            <div class="text-blue-300 h-3/4">
                {{ $post->body }}
            </div>
        </div>
    </x-slot:content>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
</x-layouts.guest>
