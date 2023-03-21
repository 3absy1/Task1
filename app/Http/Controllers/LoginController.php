<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store()
    {
        $attrubuites=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (auth()->attempt($attrubuites)){
            return with(['message'=>'Login Successfully']);
        }else{
        return with(['email'=>'unauthenticated']);
        }
    }
}
