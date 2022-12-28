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
        $var=session('account');
        if($var == null){
            return view("login");
        }
        return view('welcome');
    }
    public function login(Request $req){
        $account = Account::where("Email", $req->Email)->where("Password",$req->Password)->first();

        if(!empty($account)){
            if ($account->Email == "admin"){
                $account->Role = 'admin';
                session(['account'=>$account]);
                return redirect('/admin');
            } else {
                $account->Role = 'customer';
                session(['account'=>$account]);
                return redirect('/welcome');
            }
        } else {
            return redirect("/")->with("alert","User tidak ditemukan !!!");
        }
    }

    //WELCOME SESSION
    public function welcome(){
        $var=session('account');
        if($var == null){
            return redirect("/")->with("alert","Harap Login Terlebih dahulu");
        } 
        return view("welcome");
    }

    //LOGOUT SESSION
    public function logout(){
        session(['account'=>null]);
        return redirect('/');
    }
}