<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Template;
use App\Models\Order;

class AdminDo extends Controller {
    public function home(){
        $temps = DB::select('select * from templates');
        return view("admin", ['temps'=>$temps]);
    }
    public function manage(){
        $orders = DB::select('select * from orders');
        $acara = DB::select('select * from acaras');
        return view("adminorder", ['Orders'=>$orders], ['Acaras'=>$acara]);
    }
    public function updateorder($Path, $OrderID){
        if ($Path == 'InvoiceStatus'){
            if (DB::table('orders')->where('OrderID', $OrderID)->pluck('InvoiceStatus')[0] == 0){
                DB::table('orders')->where('OrderID', $OrderID)->update(['InvoiceStatus'=>1]);
            } else {
                DB::table('orders')->where('OrderID', $OrderID)->update(['InvoiceStatus'=>0]);
            }
        }

        if ($Path == 'VerifikasiStatus'){
            if (DB::table('orders')->where('OrderID', $OrderID)->pluck('VerifikasiStatus')[0] == 0){
                DB::table('orders')->where('OrderID', $OrderID)->update(['VerifikasiStatus'=>1]);
            } else {
                DB::table('orders')->where('OrderID', $OrderID)->update(['VerifikasiStatus'=>0]);
            }
        }
        if ($Path == 'OrderStatus'){
            if (Order::where('OrderID', $OrderID)->pluck('OrderStatus')[0] == 0){
                DB::table('orders')->where('OrderID', $OrderID)->update(['OrderStatus'=>1]);
            } else {
                DB::table('orders')->where('OrderID', $OrderID)->update(['OrderStatus'=>0]);
            }
        }
        return redirect('/adminorder');
    }
    
    //LOGOUT SESSION
    public function logout(){
        session(['account'=>null]);
        return redirect('/');
    }

    public function addtemplate(Request $req){
        $linkpart = explode('/file/d/', $req->Link);
        $linkpart = explode('/view?', $linkpart[1]);
        $linkpart = "https://drive.google.com/uc?export=view&id={$linkpart[0]}";
        $template = new Template;
        $template->NamaTemplate = $req->Nama;
        $template->NamaTema = $req->Tema;
        $template->Jenis = $req->Jenis;
        $template->Harga = $req->Harga;
        $template->LinkPreview = $linkpart;
        $template->JumlahKlik = 0;
        $template->BanyakPembelian = 0;
        $template->save();

        return redirect('/admin');
    }
}