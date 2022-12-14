<x-layouts.guest>
    <x-slot:content>
        <form action="{{ route('store-post') }}" method="post">
            @csrf
            <div>
                <label for="title">
                    Título
                    <input type="text" name="title" id="title" value="{{ old('title') }}" />
                </label>
                @error('title')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="body">
                    Cuerpo
                    <input type="text" name="body" id="body" value="{{ old('body') }}" />
                </label>
                @error('body')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" value="Enviar" />
        </form>
    </x-slot:content>
    <x-slot:title>
        {{$title}}
    </x-slot:title>
</x-layouts.guest>
