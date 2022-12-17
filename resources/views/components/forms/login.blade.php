<div>
    <label for="email" class="grid grid-cols-2 p-2 my-2">
        <span class="text-white flex items-center font-semibold">
            Email:
        </span>
        <input type="email" id="email" name="email"
            value="{{ old('email') ?? $user->email }}"
            class="p-2 rounded" />
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </label>
</div>
<div>
    <label for="password" class="grid grid-cols-2 p-2 my-2">
        <span class="text-white flex items-center font-semibold">
            Password:
        </span>
        <input type="password" id="password" name="password"
            value="{{ old('password') ?? $user->password }}"
            class="p-2 rounded" />
        @error('password')
            <div>{{ $message }}</div>
        @enderror
    </label>
</div>
