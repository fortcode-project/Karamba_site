<?php

namespace App\Http\Controllers;

use App\Mail\Envio;
use App\Models\About;
use App\Models\Anuncio;
use App\Models\Bilhete;
use App\Models\contact;
use App\Models\customer;
use App\Models\Detail;
use App\Models\hero;
use App\Models\InfoBilhete;
use App\Models\infowhy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class SiteController extends Controller
{
    //
    public function index(){
        $hero = hero::select("title", "description", "img")->get();
        $info = infowhy::select("title", "description")->get();
        $details = Detail::select("title", "description")->get();
        $Horizontal = Anuncio::where("tipo", "Horizontal")->get();
        
        return view("pages.home", compact("hero", "info", "details", "Horizontal"), ["contact" => $this->footerInfo()]);
    }

    public function about(){
        $about = About::select("p1", "p2")->get();
        $Vertical = Anuncio::where("tipo", "Vertical")->get();
        $Horizontal = Anuncio::where("tipo", "Horizontal")->get();
        return view("pages.about", compact("about", "Vertical", "Horizontal"), ["contact" => $this->footerInfo()]);
}

    public function products(){
        return view("pages.products", ["contact" => $this->footerInfo()]);
    }

    public function contact(){
        $Horizontal = Anuncio::where("tipo", "Horizontal")->get();
        return view("pages.contact", ["contact" => $this->footerInfo()], compact("Horizontal"));
    }

    public function bilhete(){
        return view("pages.bilhete", ["contact" => $this->footerInfo()]);
    }

    public function footerInfo(){
        $contact = contact::select("endereco", "email", "telefone", "atendimento")->get();
        return $contact;
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
        $data =   Mail::to("info@karamba.ao
", "Karamba")->send(new Envio([
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
      ]));

       return redirect()->back();
    }

    public function api(){
        $api = Http::post(
            "https://karamba.ao/api/anuncios",
            ["key" => "PixkMpHWNQQxwxKiEmdrrZeyhbMNVaXVKwVlkYQcvfNlSpFmeI"]
        );

        $apiArray = $api->json();

        return view("pages.datas", ["apiArray" => $apiArray]);
    }

    public function deliveryStatus()
    {
        $itensColletions = collect();
        $id = request('codereference');
        // Check for search input
        if ($id) {

            $headers = [
                "Accept" => "application/json",
                "Content-Type" => "application/json",
                "Authorization" => "Bearer 2|KLgAGFkyGxcwcMQIg1GAPPPBvR64BwtRxw9oTWsRd9fee9ee",
            ];
            
            //Chamada a API
            $response = Http::withHeaders($headers)
            ->get("https://kytutes.com/api/deliveries?reference=$id");

            $itensColletions = collect(json_decode($response));
        } else {
            $itensColletions = collect();
        }

        return view("pages.statusdelivery",
            compact("itensColletions") 
        );
    }
}