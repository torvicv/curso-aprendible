<x-layouts.guest>
    <x-slot:content>
        <p>{{$post->title}}</p>
        <p>{{$post->body}}</p>
    </x-slot:content>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
</x-layouts.guest>
