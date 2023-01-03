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
        $account->Password = sha1($req->Password);
        $account->save();

        return redirect('/');
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
        return redirect('/homepage');
    }
    public function login(Request $req){
        $account = Account::where("Email", $req->Email)->where("Password",sha1($req->Password))->first();
        if ($account == null){
            $account = Account::where("Username", $req->Email)->where("Password",sha1($req->Password))->first();
        }
        if(!empty($account)){
            if ($account->Email == "admin@gmail.com" || $account->Username == "admin"){
                $account->Role = 'admin';
                session(['account'=>$account]);
                return redirect('/admin');
            } else {
                $account->Role = 'customer';
                session(['account'=>$account]);
                return redirect('/homepage');
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
        return view("homepage");
    }

    //LOGOUT SESSION
    public function logout(){
        session(['account'=>null]);
        return redirect('/');
    }
}