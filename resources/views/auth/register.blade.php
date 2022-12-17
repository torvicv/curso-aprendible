<x-layouts.guest>
    <x-slot:content>
        <h1 class="font-bold text-2xl text-center py-4 bg-white text-blue-400">Register</h1>
        <div class="h-screen5 flex justify-center items-center flex-col">
            <div>
                <i class="fa-solid fa-graduation-cap text-6xl text-blue-400"></i>
            </div>
            <form action="{{ route('register-user') }}" method="post"
                class="bg-blue-400 p-8 rounded">
                @csrf
                <x-forms.register :user="$user"></x-forms.register>
                <div class="text-center">
                    <input type="submit" value="Registrarse"
                        class="rounded text-white font-bold hover:bg-blue-300 p-2">
                </div>
            </form>
        </div>
    </x-slot:content>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
</x-layouts.guest>
