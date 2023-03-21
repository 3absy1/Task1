<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Resources\Register\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{

    public function create(Request $request)
    {
        User::create([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))

        ]);
        return redirect('Users')->with('status','Created Successfully');
        return response()->json([
        'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);

    }

    public function store(StoreRegisterRequest $request)
    {
        $user=User::create($request->all());
        return response()->json([
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
        return new UserResource($user);
    }

    public function show()
    {
        return view('signup',[
        ]);
    }

}
