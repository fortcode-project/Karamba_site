<?php

namespace App\Livewire\Site;

use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Http;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Catogories extends Component
{
    public $company, $category, $itemid;
    use LivewireAlert;
    
    public function render()
    {
        return view('livewire.site.catogories', [
            "getCollectionsItens" => $this->getItems($this->category),
            "categories" => $this->getCategories(),
        ]);
    }

    public function getHeaders()
    {
        return [
            "Accept" => "application/json",
            "Content-Type" => "application/json",
            "Authorization" => "Bearer 2|KLgAGFkyGxcwcMQIg1GAPPPBvR64BwtRxw9oTWsRd9fee9ee",
        ];
    }

    //Pegar todas as categorias 
    public function getCategories()
    {
        try {
            //Chamada a API
            $response = Http::withHeaders($this->getHeaders())
            ->get("https://kytutes.com/api/categories");
    
            return collect(json_decode($response, true));
        } catch (\Throwable $th) {
            $this->alert('error', 'ERRO', [
                'toast'=>false,
                'position'=>'center',
                'showConfirmButton' => true,
                'confirmButtonText' => 'OK',
                'text'=>'Falha ao realizar operação'
            ]);
        }
    }
    
    //Pegar os Itens pertencentes a categoria selecionada
    public function getItems($category)
    {
        try {
            if ($category) {
                $this->category = $category;
                //Chamada a API
                $response = Http::withHeaders($this->getHeaders())
                ->get("https://kytutes.com/api/items?category=$category");   
                return collect(json_decode($response,true));
            }else{
                $this->category = $category;
                
                $response = Http::withHeaders($this->getHeaders())
                ->get("https://kytutes.com/api/items");
                return collect(json_decode($response,true));   
            }
        } catch (\Throwable $th) {
            $this->alert('error', 'ERRO', [
                'toast'=>false,
                'position'=>'center',
                'showConfirmButton' => true,
                'confirmButtonText' => 'OK',
                'text'=>'Falha ao realizar operação'
            ]);
        }
    }

    //adicionar no carrinho
    public function addToCart($itemid)
    {
        try {
            $getItemCart = Http::withHeaders($this->getHeaders())
            ->get("https://kytutes.com/api/items?description=$itemid");

            $product = Collect(json_decode($getItemCart,true));

            CartFacade::add(array(
                'id' => $product[0]["reference"],
                'name' => $product[0]["name"],
                'price' => $product[0]["price"],
                'quantity' => 1,
                'attributes' => array(
                    'image' => $product[0]["image"]
                )
            ));

            $this->alert('success', 'SUCESSO', [
                'toast'=>false,
                'position'=>'center',
                'timer' => '1500',
                'text'=>'Item '.$product[0]["name"].', adicionado'
            ]);
            return;
        } catch (\Throwable $th) {
            $this->alert('error', 'ERRO', [
                'toast'=>false,
                'position'=>'center',
                'showConfirmButton' => true,
                'confirmButtonText' => 'OK',
                'text'=>'Falha ao realizar operação'
            ]);
        }
    }
}