<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    

    public function login()
    {
        return view('back.auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // ici on renvoie l'utilisateur vers la route qu'il voulait
            // à l'origine, s'il n'y en a pas, il sera renvoyé sur la route par défaut
            return redirect()->intended('office/');
        }

        return to_route('auth.login')->withErrors([
            'email' => 'Identifiant incorrecte'
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('auth.login');
    }
}
