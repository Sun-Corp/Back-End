<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Template;

class AdminDo extends Controller {
    public function home(){
        $temps = DB::select('select * from templates');
        return view("admin", ['temps'=>$temps]);
    }
    
    //LOGOUT SESSION
    public function logout(){
        session(['account'=>null]);
        return redirect('/');
    }

    public function addtemplate(Request $req){
        $template = new Template;
        $template->NamaTemplate = $req->Nama;
        $template->NamaTema = $req->Tema;
        $template->Harga = $req->Harga;
        $template->LinkPreview = $req->Link;
        $template->JumlahKlik = 0;
        $template->BanyakPembelian = 0;
        $template->save();

        return redirect('/admin');
    }
}