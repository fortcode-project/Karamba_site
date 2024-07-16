<?php

namespace App\Http\Controllers\Loja;

use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{

    public function loja()
    {
         $curl = curl_init();

         curl_setopt_array($curl, [
         CURLOPT_URL => "https://kytutes.com/api/items",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "GET",
         CURLOPT_POSTFIELDS => "",
         CURLOPT_HTTPHEADER => [
             "Accept: application/json",
             "Authorization: Bearer 2|KLgAGFkyGxcwcMQIg1GAPPPBvR64BwtRxw9oTWsRd9fee9ee",
             "Content-Type: application/json"
            ],
         ]);

         $response = curl_exec($curl);
         $err = curl_error($curl);

         curl_close($curl);

         if ($err) {
             echo "cURL Error #:" . $err;
         } else {
             $data = Collect(json_decode($response,true));
             return view('loja.App',compact('data'));
         }
    }

    public function addCart($id)
    {
        $curl = curl_init();

         curl_setopt_array($curl, [
        
        CURLOPT_URL => "https://kytutes.com/api/items?reference=$id",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "GET",
         CURLOPT_POSTFIELDS => "",
         CURLOPT_HTTPHEADER => [
             "Accept: application/json",
             "Authorization: Bearer 2|KLgAGFkyGxcwcMQIg1GAPPPBvR64BwtRxw9oTWsRd9fee9ee",
             "Content-Type: application/json"
         ],
         ]);

         $response = curl_exec($curl);
         $err = curl_error($curl);

         curl_close($curl);

         if ($err) {
             echo "cURL Error #:" . $err;
         } else {
            $data = Collect(json_decode($response,true));
           
            Cart::add(array(
                'id' => $data[0]["reference"],
                'name' => $data[0]["nome"],
                'price' => $data[0]["preco"],
                'quantity' => 1,
                'attributes' => array(
                    'image' => $data[0]["imagem"]
                )
            ));
            return response([
                "message"=>$data[0]["nome"]
            ]);
         }
   
    }

    public function getTotalCart(){
        try {

        Session::put('locationPrice',0);
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://kytutes.com/api/locations",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Authorization: Bearer 2|KLgAGFkyGxcwcMQIg1GAPPPBvR64BwtRxw9oTWsRd9fee9ee",
            "Content-Type: application/json"
        ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $cartContent = Cart::getContent();
            $getTotal = Cart::getTotal();
            $getSubTotal = Cart::getSubTotal();
            $getTotalQuantity = Cart::getTotalQuantity();
            $location = Collect(json_decode($response,true));
            $result = ($getTotal * 14) / 100;
            $taxapb = $result + $getSubTotal;
            return view('loja.shopping',compact(
                'location',
                'cartContent',
                'getTotal',
                'getSubTotal',
                'getTotalQuantity',
                'result',
                'taxapb'
            ));
        }
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Falha ao carregar dados");

        }
    }

    public function removeItem($itemId) {
        Cart::remove($itemId);
        return redirect()->back()->with("success", "Item removido do Carrinho");
    }
    
    public function clearCart() {
        Cart::clear();
        return redirect()->back()->with("success", "Carrinho Limpo");
    }

    public function select_delivery($price)
    {
        try {
            $removeEnd = str_replace(",00", "", $price);
            $removeStart = str_replace(".", "", $removeEnd);

            $data = Session(["locationPrice" => 1000]);
            
            return response(["message" => $removeStart, "data" => $data]);
        } catch (\Throwable $th) {
            return response(["message" => "Erro"]);
        }
    } 
}