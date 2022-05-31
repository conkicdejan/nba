<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getRegisterForm()
    {
        return view('auth.register');
    }

    public function register(StoreUserRequest $request)
    {
        $newUser = $request->validated();
        $newUser['password'] = Hash::make($request->password);
        // dd($newUser);
        $user = User::create($newUser);

        Auth::login($user);

        return redirect('/');
    }

    public function getLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // dd($credentials);
 
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        
        return redirect('/login')->with('error', 'Invalid credentials');
    }
    
    public function logout()
    {
        Auth::logout();
        
        return redirect('/login');

    }
}

