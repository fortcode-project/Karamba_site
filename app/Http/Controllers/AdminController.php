<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\contact;
use App\Models\Detail;
use App\Models\hero;
use App\Models\infowhy;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $layout = "admin.widgets.users.create";
        $response["hero"] = hero::get();
        return view($layout, $response);
    }

    public function registerdatas(Request $request){
        $data = new hero();

        $data->title = $request->title;
        $data->description = $request->description;
       
        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $data->img = $profileImage;
        }
        

        $data->save();

        return redirect()->back();
    }

    public function edit($id){
        $data = hero::find($id);
        $layout = "admin.widgets.users.edit";

        return view($layout, ["data" => $data]);
    }

    public function update(Request $request, $id){

       try {
        
        if (!is_string($request->image)) {


            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." .$request->file("image")->getClientOriginalExtension();
        

            hero::find($request->id)->update([
                "title" => $request->title,
                "description" => $request->description,
                "img" => $request->file("image")->move($destinationPath, $profileImage),
            ]);

        } else {
            hero::find($request->id)->update([
                "title" => $request->title,
                "description" => $request->description,
            ]);
        }
        
       
        
       } catch (\Throwable $th) {
        //throw $th;
        dd($th);
       }

        return redirect()->back();
    }

    public function about(){
        $layout = "admin.widgets.users.about";

        $data = About::select("p1", "p2")->get();

        return view($layout, ["data" => $data]);
    }

    public function storeAbout(Request $request){
        $data = new About();

        $data->p1 = $request->p1;
        $data->p2 = $request->p2;

        $data->save();

        return redirect()->back();
    }
    
    //Informações sobre os detalhes...
    public function detailview(){
        $layout = "admin.widgets.users.detail";
        $details = Detail::all();

        return view($layout, compact("details"));
    }

    public function storeDetail(Request $request){
        
        $data = new Detail();

        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    public function deleteDetail($id){
        $data = new Detail();
    }

    //Imformações das caracteristicas do site...
    public function infowhy(){
        $infos = infowhy::all();
        return view("admin.widgets.users.infowhy", compact("infos"));
    }

    public function editwhy($id){
        $data = infowhy::find($id);
        $layout = "admin.widgets.users.editinfo";

        return view($layout, ["data" => $data]);
    }

    public function storeinfowhy(Request $request){
        $data = new infowhy();

        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    public function footer(){
        return view("admin.widgets.users.contact");
    }

    public function contactStore(Request $request){
        
        $dados = new contact();

        $dados->endereco = $request->endereco;
        $dados->telefone = $request->telefone;
        $dados->email = $request->email;
        $dados->atendimento = $request->atendimento;

        $dados->save();

        return redirect()->back();
    }
}
