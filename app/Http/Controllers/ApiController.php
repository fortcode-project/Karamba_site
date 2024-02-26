<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       try {
        $user = User::where('key',$request->key)->first();
        if($user){

            //retornar todas publicidades encontradas na requisição

           $data =  Anuncio::get(['name','status','image']);

           return response()->json($data);

        }else{

            return response()->json(['error'=>'falha ao autenticar'],401);
        }
       } catch (\Throwable $th) {
        return response()->json($th->getMessage());
       }
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
