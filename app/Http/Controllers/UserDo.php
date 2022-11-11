<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserDo extends Controller {
    public function blank() {
        return view("signup");
    }
    public function signup(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();

        return redirect('/signup');

    }
    public function logout(){
        session(['user'=>null]);
        return redirect('/');
    }
}