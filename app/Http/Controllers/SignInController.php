<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function store()
    {
        $attrubuites=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (auth()->attempt($attrubuites)){
            return redirect('Users')->with('status','Login Successfully');
        }

        return back()->withErrors(['email'=>'unauthenticated']);


    }
    public function index()
    {
        $attrubuites=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (auth()->attempt($attrubuites)){
            return with('status','Login Successfully');
        }
        return withErrors(['email'=>'unauthenticated']);
    }

    public function show()
    {
        return view('signin',[
        ]);
    }
}
