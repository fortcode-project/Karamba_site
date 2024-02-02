<?php

namespace App\Http\Controllers;

use App\Mail\Envio;
use App\Models\About;
use App\Models\Bilhete;
use App\Models\contact;
use App\Models\customer;
use App\Models\Detail;
use App\Models\hero;
use App\Models\InfoBilhete;
use App\Models\infowhy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class SiteController extends Controller
{
    //
    public function index(){
        $hero = hero::select("title", "description", "img")->get();
        $info = infowhy::select("title", "description")->get();
        $details = Detail::select("title", "description")->get();
        return view("pages.home", compact("hero", "info", "details"), ["contact" => $this->footerInfo()]);
    }

    public function about(){
        $about = About::select("p1", "p2")->get();
        return view("pages.about", compact("about"), ["contact" => $this->footerInfo()]);
}

    public function products(){
        return view("pages.products", ["contact" => $this->footerInfo()]);
    }

    public function contact(){
        return view("pages.contact" , ["contact" => $this->footerInfo()]);
    }

    public function bilhete(){
        return view("pages.bilhete", ["contact" => $this->footerInfo()],
        ["bilhete" => $this->verBilhete()]);
    }

    public function footerInfo(){
        $contact = contact::select("endereco", "email", "telefone", "atendimento")->get();
        return $contact;
    }

    public function verBilhete(){
        $bilhete = Bilhete::get();
        return $bilhete;
    }

    public function FormBilhetes($id){
    //Bilhete::find($id);
       $info = InfoBilhete::where("bilhete_id", $id)->get();
       $layout = "pages.form";

       return view($layout, compact("info","id"), ["contact" => $this->footerInfo()]);
    }

    public function payment(Request $request){

        $dados = new customer();

        $dados->name = $request->name;
        $dados->quantity = $request->quantity;
        $dados->anexo = $request->anexo;
        $dados->bilhete_id = $request->id;

        if ($image = $request->file('anexo')) {

            $destinationPath = 'factura/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $dados->anexo = $profileImage;
        }

        $dados->save();

        return redirect()->back();
    }

    public function sendEmail(Request $request){
        // $data  = $request->all();
    $data =   Mail::to("pachecobarrosodig3@gmail.com", "Pacheco Barroso")->send(new Envio([
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
            "from" => $request->email,
      ]));

       return redirect()->back();
    }
}