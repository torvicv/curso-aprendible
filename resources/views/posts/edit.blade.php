<x-layouts.guest>
    <x-slot:content>
        <form action="{{ route('update-post', $post) }}" method="post">
            @csrf
            @method('patch')
            <x-forms.post :post="$post"></x-forms.post>
            <input type="submit" value="Enviar" />
        </form>
    </x-slot:content>
    <x-slot:title>
        {{$title}}
    </x-slot:title>
</x-layouts.guest>
