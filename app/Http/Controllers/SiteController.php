<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\contact;
use App\Models\Detail;
use App\Models\hero;
use App\Models\infowhy;
use Illuminate\Http\Request;

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
        return view("pages.bilhete", ["contact" => $this->footerInfo()]);
    }

    public function footerInfo(){
        $contact = contact::select("endereco", "email", "telefone", "atendimento")->get();
        return $contact;
    }
}