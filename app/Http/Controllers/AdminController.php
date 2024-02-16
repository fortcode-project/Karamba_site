<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bilhete;
use App\Models\contact;
use App\Models\Detail;
use App\Models\hero;
use App\Models\InfoBilhete;
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
        try {
            //code...
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
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function edit($id){
        $data = hero::find($id);
        $layout = "admin.widgets.users.edit";

        return view($layout, ["data" => $data]);
    }

    public function update(Request $request, $id){
        $data = hero::find($id);

        $data->title = $request->title;
        $data->description = $request->description;

        if($request->hasFile("image")){
            $file = $request->file("image");
            $extension = $file->getClientOriginalExtension();
            $filename = "hero" . "." . $extension;
            $file->move("image/", $filename);
            $data->img = $filename;
        }

        $data->update();
        return redirect()->back();
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

    public function actualizar(Request $request, $id){
        infowhy::where(["id" => $id])->update([
            "title" => $request->title,
            "description" => $request->description,
            "id" => $request->id,
        ]);

        return redirect()->back();
    }

    public function storeinfowhy(Request $request){
        $data = new infowhy();

        $data->title = $request->title;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    //Imformações do footer Painel Admin
    public function footer(){
        $footer = contact::all();
        return view("admin.widgets.users.contact", compact("footer"));
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

    public function editContact($id){
        $contact = contact::find($id);
        return view("admin.widgets.users.editcontact", compact("contact"));
    }

    public function actualizarContact(Request $request, $id){
        contact::where(["id" => $id])->update([
            "telefone" => $request->telefone,
            "endereco" => $request->endereco,
            "atendimento" => $request->atendimento,
            "email" => $request->email,
            "id" => $request->id,
        ]);
        return redirect()->back();
    }

    //Infromações sobre os detalhes
    public function editDetalhes($id){
        $details = Detail::find($id);
        return view("admin.widgets.users.editdetalhes", compact("details"));
    }

    public function actualizarDetalhes(Request $request, $id){
        Detail::where(["id" => $id])->update([
            "title" => $request->title,
            "description" => $request->description,
            "id" => $request->id,
        ]);
        return redirect()->back();
    }

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

    //Imformações sobre o site OU Sobre
    public function about(){
        $layout = "admin.widgets.users.about";

        $data = About::select("p1", "p2", "id")->get();

        return view($layout, ["data" => $data]);
    }

    public function storeAbout(Request $request){
        $data = new About();

        $data->p1 = $request->p1;
        $data->p2 = $request->p2;

        $data->save();

        return redirect()->back();
    }

    public function editAbout($id){
        $data = About::find($id);
        return view("admin.widgets.users.editabout", compact("data"));
    }

    public function actualizarAbout(Request $request, $id){
        About::where(["id" => $id])->update([
            "p1" => $request->p1,
            "p2" => $request->p2,
            "id" => $request->id,
        ]);
        return redirect()->back()->with("success", "Sobre Actualizado");
    }


    //Possivel Venda de Bilhetes
    public function createBilhete(){
        return view("admin.widgets.users.compra");
    }

    public function storeBilhete(Request $request){
        $dados = new Bilhete();
        
        $dados->title = $request->title;
        
        if ($image = $request->file('img')) {
            
            $destinationPath = 'image/';
            
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
            $image->move($destinationPath, $profileImage);
            
            $dados->img = $profileImage;
        }
        $dados->save();
        $info = new InfoBilhete();

        $info->bilhete_id = $dados["id"];
        $info->price = $request->price;
        $info->regalias = $request->regalias;

        $info->save();

        return redirect()->back();
    }
}
