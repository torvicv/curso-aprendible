<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Models\dto\UserDto;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{

    public function index() {
        return view('auth.register', ['user' => new UserDto, 'title' => 'Registrarse']);
    }
    //
    public function store(RegisterUserRequest $request) {
        $validatedDto = json_decode(json_encode($request->validated()));
        if ($validatedDto->password !== $validatedDto->confirm_password) {
            $request->session()->flash('status', '¡Contraseñas no coinciden!');
            return view('auth.register', ['user' => $validatedDto, 'title' => 'Registrarse']);
        }
        $user = $request->safe()->except(['confirm_password']);
        $userValidated = $user;
        $userValidated['password'] = Hash::make($validatedDto->password);
        User::create($userValidated);
        $request->session()->flash('status', '¡Usuario creado!');
        return view('auth.login', ['user' => json_decode(json_encode($user)), 'title' => 'Login']);
    }
}
