<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginUserRequest;
use App\Models\dto\UserDto;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['only' => ['logout']]);
    }

    public function index() {
        return view('auth.login', ['user' => new UserDto, 'title' => 'Login']);
    }
    //
    public function login(LoginUserRequest $request) {
        //dd($request);
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
            return to_route('blog');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('welcome');
    }
}
