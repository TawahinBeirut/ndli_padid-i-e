<?php

namespace App\Http\Controllers;

use App\Models\User ;

class Register extends Controller {

    public function store(){
        $attributes = [
            'skin' => request()->skin,
            'username' => request()->username,
            'password' => request()->password
        ];

        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/')->with('succes', 'Votre compte à bien été crée')->with($attributes);
    }
}
