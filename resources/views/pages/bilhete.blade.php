@extends("layouts.site.app")
@section("title", "Karamba - Venda de Bilhetes")
@section("content")
    @include("components.navbar")

        <main style="margin-top: 10rem;" class="container">

            <div class="text-center">
                <h1 class="text-center text-uppercase">
                    Venda de Bilhetes
                </h1>
                <p>Clique em uma das imagens para escolhes um convite</p>
    
            </div>
            <section class="container-fluid mt-0" id="formBilhete">
                <div class=" container">
                    <div class="row col-md-12 justify-content-center align-items-center">
                     
                            <div class="col-md-6 bilhete">
                                <div class="">
                                    <span></span>
                                    <a href="https://kytutes.com/restaurante/menu/1">
                                        <img src="{{asset("site/assets/img/bilhete.png")}}" alt="">
                                    </a>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </section>
        </main>
        @include("components.contact")
    @include("components.footer")
@endsection