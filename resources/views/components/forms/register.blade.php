<div>
    <label for="name" class="grid grid-cols-2 p-2 my-2">
        <span class="text-white flex items-center font-semibold">
            Name:
        </span>
        <input type="name" id="name" name="name"
            value="{{ old('name') ?? $user->name }}"
            class="p-2 rounded" />
    </label>
</div>
<div>
    <label for="email" class="grid grid-cols-2 p-2 my-2">
        <span class="text-white flex items-center font-semibold">
            Email:
        </span>
        <input type="email" id="email" name="email"
            value="{{ old('email') ?? $user->email }}"
            class="p-2 rounded" />
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
    </label>
</div>
<div>
    <label for="confirm_password" class="grid grid-cols-2 p-2 my-2">
        <span class="text-white flex items-center font-semibold">
            Confirm Password:
        </span>
        <input type="password" id="confirm_password" name="confirm_password"
            value="{{ old('confirm_password') ?? $user->confirm_password }}"
            class="p-2 rounded" />
    </label>
</div>
