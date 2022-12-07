<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class UserDo extends Controller {
    public function blank() {
        return view("registrasi");
    }

    //REGIST SESSION
    public function registrasi(Request $req){
        $account = new Account;
        $account->Name = $req->Name;
        $account->Username = $req->Username;
        $account->Email = $req->Email;
        $account->Password = $req->Password;
        $account->save();

        return redirect('/login');
    }

    //LOGIN SESSION
    public function session(){
        return session('account');
    }
    public function index(){
        if(empty(session('account'))){
            return view("login");
        }
        return redirect('/welcome');
    }
    public function login(Request $req){
        $account = Account::where("Email", $req->Email)->where("Password",$req->Password)->first();

        if(!empty($account)){
            session(['account'=>$account]);
            return redirect('/welcome');
        } else {
            return redirect("/")->with("flash_message","user tidak ditemukan");
        }
    }

    //WELCOME SESSION
    public function welcome(){
        return view("welcome");
    }
    //LOGOUT SESSION
    public function logout(){
        session(['account'=>null]);
        return redirect('/');
    }
}