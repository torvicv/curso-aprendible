<x-layouts.guest>
    <x-slot:content>
        <h1 class="font-bold text-2xl text-center py-4 bg-white text-blue-400">Editar</h1>
        <div class="h-screen5 flex justify-center items-center flex-col">
            <div>
                <i class="fa-regular fa-folder-open text-6xl text-blue-400 mb-2"></i>
            </div>
            <form action="{{ route('store-post') }}" method="post"
                class="bg-blue-400 p-8 rounded">
                @csrf
                <x-forms.post :post="$post"></x-forms.post>
                <div class="text-center">
                    <input type="submit" value="Editar"
                        class="rounded text-white font-bold hover:bg-blue-300 p-2">
                </div>
            </form>
        </div>
    </x-slot:content>
    <x-slot:title>
        {{$title}}
    </x-slot:title>
</x-layouts.guest>
