<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    
    public function index(Request $request)
    {
       try {
        $user = User::where('key',$request->key)->first();
        if($user){
        //retornar todas publicidades encontradas na requisição

        $SQL = "SELECT AR.*, CONCAT('https://karamba.ao/storage/', AR.image) image_full_url
        FROM `anuncios` AR  WHERE 1";
                        
        $data = DB::select($SQL);

           return response()->json($data);

        }else{

            return response()->json(['error'=>'Falhar aoa autenticar e não podes fazer a requisisção'],401);
        }
       } catch (\Throwable $th) {
        return response()->json($th->getMessage());
       }
       
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
