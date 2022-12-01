<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class Register extends Controller{

    public function store(){
        $test = request()->validate([
            'skin' => 'required|max:255',
            'username' => 'required|max:255|unique:username',
            'password' => 'required|max:255',
            're_password' => 'required|max:255',
        ]);

        $attributes = [
            'skin' => $test['skin'],
            'username' => $test['email'],
            'password' => $test['password']
        ];

        if ($test['re_password'] == $attributes['password']){
            $attributes['password'] = bcrypt($attributes['password']);
            $user = User::create($attributes);
            auth()->login($user);
            return redirect('/')->with('succes', 'Votre compte à bien été crée')->with($attributes);
        } else {
            return redirect('/register');
        }
    }
}
