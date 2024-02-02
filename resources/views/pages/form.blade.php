@extends("layouts.site.app")
@section("title", "Karambna Bilhete")
@section("content")
    @include("components.navbar")
    <main style="margin-top: 10rem;">
        <div class="container-fluid">
            <div class="container">
                <h4 class="text-center text-uppercase">Formulário de Compra de Bilhetes</h4>
                <div class="col-md-12 row m-2">
                    <div class="col-md-6 p-4">
                        <form action="{{route("site.karamba.payment.bilhete")}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$id ?? ''}}"/>
                            <div class="form-group">
                                <label for="" class="form-label">Nome: </label>
                                <input type="text" class="form-control" name="name" placeholder="Insira o seu nome...">
                            </div>
    
                            <div class="form-group">
                                <label for="" class="form-label">Quantidade: </label>
                                <input type="text" class="form-control" name="quantity" placeholder="Insira a quantidade que desja...">
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Numero de Telefone </label>
                                <input type="text" class="form-control" name="quantity" placeholder="Insira o seu contacto telefonico...">
                            </div>
    
                            <div class="form-group">
                                <label for="" class="form-label">Comprovativo de Pagamento: </label>
                                <input type="file" class="form-control" name="anexo">
                            </div>

                            <div class="form-group mt-4">
                                <button class="btn btn-primary from-control">Enviar</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 p-4">
                        <h5>Dispõe de: </h5>
                        @foreach ($info as $item)
                            @foreach ($item->regalias as $reg)
                                <ul>
                                    <li class="fs-5">{{$reg}}</li>
                                </ul>
                            @endforeach
                            <div class="d-flex gap-1">
                                <p class="fs-5">Valor: AOA  </p>
                                <h4> {{number_format($item->price,2,',','.')}}</h4>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
     @include("components.contact")
    @include("components.footer")
@endsection