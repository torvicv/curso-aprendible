<div>
    <label for="title" class="grid grid-cols-2 p-2 my-2">
        <span class="text-white flex items-center font-semibold">
            Título:
        </span>
        <input type="text" id="title" name="title"
            value="{{ old('title') ?? $post->title }}"
            class="p-2 rounded" />
    </label>
    @error('title')
        <div>{{ $message }}</div>
    @enderror
</div>
<div>
    <label for="body" class="grid grid-cols-2 p-2 my-2">
        <span class="text-white flex items-center font-semibold">
            Body:
        </span>
        <input type="text" id="body" name="body"
            value="{{ old('body') ?? $post->body }}"
            class="p-2 rounded" />
    </label>
    @error('body')
        <div>{{ $message }}</div>
    @enderror
</div>
