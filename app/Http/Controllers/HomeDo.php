<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Template;
use App\Models\Acara;
use App\Models\Cart;


class HomeDo extends Controller {
    public function home(){
        $temps = DB::select('select * from templates');
        $recomends = Template::inRandomOrder()->limit(6)->get();
        return view("homepage", ['temps'=>$temps], ['recomends'=>$recomends]);
    }

    public function detail($NamaTema, $NamaTemplate){
        $template = Template::where(['NamaTemplate' => $NamaTemplate, 'NamaTema' => $NamaTema])->first();
        $random = Template::where('NamaTema', $NamaTema)->inRandomOrder()->limit(3)->get();
        return view("detailtemplate", ['template'=>$template], ['randoms'=>$random]);
    }
    
    public function cart(){
        $AccountID = Account::where('Email', (session('account')->Email))->pluck('AccountID');
        $carts = Cart::where('AccountID', $AccountID)->get();
        $temps = [];
        foreach ($carts as $cart){
            $template = Template::where('TemplateID', $cart->TemplateID)->first();
            array_push($temps, $template);
        }
        return view("cart", ['temps'=>$temps]);
    }

    public function addcart($NamaTema, $NamaTemplate){
        $cart = new Cart;
        $cart->AccountID = Account::where(['Email'=> session('account')->Email])->pluck('AccountID')[0];
        $cart->TemplateID = Template::where(['NamaTemplate' => $NamaTemplate, 'NamaTema' => $NamaTema])->pluck('TemplateID')[0];
        $cart->save();
        return redirect("/cart");
    }

    public function filldata($TemplateID){
        return view('filldata', ['TemplateID'=>$TemplateID]);
    }

    public function uploadfilldata(Request $req, $TemplateID){
        $template = Template::where('TemplateID', $TemplateID)->first();
        $acara = new Acara;
        $acara->AccountID = Account::where(['Email'=> session('account')->Email])->pluck('AccountID')[0];
        $acara->NamaTemplate = $template->NamaTemplate;
        $acara->NamaTema = $template->NamaTema;
        $acara->KodeAcara = "";
        $acara->Tanggal = $req->Tanggal;
        $acara->Lokasi = $req->Lokasi;
        $acara->CalonL = $req->CalonL;
        $acara->CalonP = $req->CalonP;
        $acara->AyahL = $req->AyahL;
        $acara->AyahP = $req->AyahP;
        $acara->IbuL = $req->IbuL;
        $acara->IbuP = $req->IbuP;
        $acara->save();
        $AcaraID = Acara::where('AccountID', $acara->AccountID)->where('Tanggal', $acara->Tanggal)->pluck('AcaraID')[0];
        
        return redirect('/invoice/'.str($AcaraID));
    }

    public function invoice($AcaraID){
        $acara = Acara::where('AcaraID', $AcaraID)->first();
        $template = Template::where('NamaTemplate', $acara->NamaTemplate)->where('NamaTema', $acara->NamaTema)->first();
        return view('/invoice', ['Template'=>$template]);
    }

    public function dismiss($path){
        return redirect('/{{$path}}');
    }
}