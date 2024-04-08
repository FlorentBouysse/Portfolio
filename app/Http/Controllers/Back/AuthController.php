<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    

    public function login()
    {
        return view('back.auth.login');
    }

    public function doLogin(LoginRequest $request)
    {
        // return view('back.auth.login');
    }
}
