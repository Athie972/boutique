<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){
        return view('auth.login');
    }
    
    public function doLogin(LoginRequest $request)
{
    $credentials = $request->validated();
    if(Auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended(route('product.index'));
    }
    return to_route('auth.login')->withErrors([
        'email'=> "Email invalide"
    ])->onlyInput('Email');
}
}

