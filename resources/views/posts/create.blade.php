<x-layouts.guest>
    <x-slot:content>
        <form action="{{ route('store-post') }}" method="post">
            @csrf
            <x-forms.post :post="$post"></x-forms.post>
            <input type="submit" value="Enviar" />
        </form>
    </x-slot:content>
    <x-slot:title>
        {{$title}}
    </x-slot:title>
</x-layouts.guest>
