@extends("layouts.site.app")
@section("title", "Estado da Encomenda - Site Karamba")
@section("content")
  @include("components.navbar")

  <main id="main">
    <section class="d-flex align-items-center" style="min-height: 100vh;">
        <div class="container py-5">
            <div class="container col-sm-8 col-md-8">
                <form method="get"> 
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="codereference" placeholder="Insira um código de encomenda..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Verificar</button>
                      </div>        
                </form>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <div class="card text-dark" style="border-radius: 1rem;">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-4">

                                    @if ($itensColletions->isNotEmpty())
                                        @foreach ($itensColletions as $delivery)
                                            @if (isset($delivery->delivery))
                                            <div class="text-light p-1 mb-1" style="background: #F4C400">
                                                <h5 class="text-uppercase text-center">Estado da Encomenda</h5>
                                            </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Encomenda nº: {{ $delivery->delivery->reference }}</label>
                                                </div>
                                                <!-- Additional fields -->
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Cliente: {{ $delivery->delivery->client }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Email: {{ $delivery->delivery->email }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Telefone: {{ $delivery->delivery->phone }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">NIF: {{ $delivery->delivery->taxPayer }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Endereço: {{ $delivery->delivery->address }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Taxa PB: {{ $delivery->delivery->taxPb }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Desconto: {{ $delivery->delivery->discount }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Preço de Entrega: {{ $delivery->delivery->deliveryPrice }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Total: {{ $delivery->delivery->total }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Pagamento: {{ $delivery->delivery->isPaid }}</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label fw-bold">Data: {{ $delivery->delivery->date }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 d-flex flex-column align-items-center justify-content-center">
                                                <img src="{{ asset('delivery.svg') }}" class="img-fluid w-100" style="object-fit: cover;" alt="Delivery Image">
                                                <div class="text-light p-1 mt-3 w-100 text-center {{ $delivery->delivery->status === 'PENDENTE' ? 'bg-danger' : ($delivery->delivery->status === 'ENTREGUE' ? 'bg-success' : '') }}">
                                                    <h5 class="text-uppercase">{{ $delivery->delivery->status }}</h5>
                                                </div>
                                            </div>
                                            @else
                                                <div class="text-center" style="margin-top: 5rem; text-align: center;">
                                                    <h1 class="text-danger">Código de Encomenda Inválido</h1>
                                                </div>
                                            @endif    
                                    @endforeach
                                    @else
                                        <div class="text-center" style="margin-top: 5rem;">
                                            <h1 class="text-warning">Insira número de uma encomenda / Nenhuma Encomenda Encontrada</h1>
                                        </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <style>
                input[type="text"] {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }
                
                button {
                    padding: 10px 20px;
                    background-color: #007BFF;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
                
                button:hover {
                    background-color: #0056b3;
                }
                
                .resultado {
                    margin-top: 20px;
                    font-size: 18px;
                }
            </style>            

@endsection