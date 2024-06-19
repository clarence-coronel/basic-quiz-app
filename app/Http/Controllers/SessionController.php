<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        $attributes = request()->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(! Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'username' => 'Sorry, those credentials do not match'
            ]);
        }

        // regenerate tthe session token
        request()->session()->regenerate();

        return redirect('/quiz');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/login');
    }
}
