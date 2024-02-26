<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Anuncio;
use App\Models\contact;
use App\Models\Detail;
use App\Models\hero;
use App\Models\infowhy;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index(){
        $layout = "sbadmin.home";
        $type = "<h1>Infor</h1>";
       
        return view($layout, compact("type"));
    }

    public function hero(){
        $hero = hero::all();
        return view("sbadmin.hero", compact("hero"));
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

        return redirect()->back()->with('success', 'Informações do Hero Registrados');
        } catch (\Throwable $th) {
            dd($th->getMessage());
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
        return redirect()->back()->with("success", "Dados Actualizados");
    }

    //Imformações das caracteristicas do site...
    public function infowhy(){
        $infos = infowhy::all();
        return view("sbadmin.projects", compact("infos"));
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
        return view("sbadmin.footer", compact("footer"));
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
        return view("sbadmin.footer", compact("contact"));
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
        $layout = "sbadmin.skill";
        $infos = Detail::all();

        return view($layout, compact("infos"));
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
        $layout = "sbadmin.about";

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

    public function viewservice(){
        return view("sbadmin.service");
    }

    //Gestão de publicidades
    public function anuncioRetangulo()
    {
        return view("sbadmin.tamanho.retangulo");
    }

    public function anuncioQuadrado(){
        $Quadrado = Anuncio::where("tipo", "Quadrado")->get();
        return view("sbadmin.tamanho.quadrado", compact("Quadrado"));
    }

    public function anuncioVertical(){
        $Vertical = Anuncio::where("tipo", "Vertical")->get();
        return view("sbadmin.tamanho.vertical", compact("Vertical"));
    }

    public function anuncioHorizontal(){
        $Horizontal = Anuncio::where("tipo", "Horizontal")->get();
        return view("sbadmin.tamanho.horizontal", compact("Horizontal"));
    }

    public function store(Request $request)
    {
        $anuncio = new Anuncio();

        $anuncio->name = $request->name;
        $anuncio->link = $request->link;
        $anuncio->tipo = $request->tipo;

        if ($request->hasFile("image")) {
            //$destinationPath = "public/image";
            $image = $request->file("image");
            //$imageName = $image->getClientOriginalName(); 
            $path = $request->file("image")->store("uploads"); //podes meter uploads/retangulo ou quadrado

            $anuncio->image = $path;
        }

        $anuncio->save();

        return redirect()->back();
    }

    public function updateAnuncio(Request $request)
    {

        $anuncio =  Anuncio::find($request->id);

        $anuncio->name = $request->name;
        $anuncio->link = $request->link;

        if ($request->hasFile("image")) {
            //  $destinationPath = "public/image";
            $image = $request->file("image");
            //$imageName = $image->getClientOriginalName();
            $path = $request->file("image")->store("uploads");

            $anuncio->image = $path;
        }

        $anuncio->save();

        return redirect()->back();
    }

    public function anuncioDelete($id){
        $anuncio = Anuncio::find($id);
        $anuncio->delete();
        return redirect()->back();
    }

    public function users(){
        $users = User::all();
        return view("sbadmin.user", compact("users"));
    }

    public function storeUser(Request $request)
    {
        try {
            //Create key for authentication users
            function random_string($length) {
                $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

            $key = random_string(50);

            $anuncio = new User();
    
            $anuncio->name = $request->name;
            $anuncio->email = $request->email;
            $anuncio->key = $key;
            $anuncio->password = Hash::make($request->password);
    
            $anuncio->save();
    
            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function deleteUser($id){
        $userdelete = User::find($id);
        $userdelete->delete();
        return redirect()->back();
    }
}
