<div>
    <label for="title">
        Título
        <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" />
    </label>
    @error('title')
        <div>{{ $message }}</div>
    @enderror
</div>
<div>
    <label for="body">
        Cuerpo
        <input type="text" name="body" id="body" value="{{ old('body', $post->body) }}" />
    </label>
    @error('body')
        <div>{{ $message }}</div>
    @enderror
</div>
