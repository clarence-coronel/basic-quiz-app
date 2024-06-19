<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create(){
        return view("auth.register");
    }

    public function store(){
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'username' => ['required', 'min:6'],
            'password' => ['required', Password::min(5), 'confirmed']
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/');
    }
}
