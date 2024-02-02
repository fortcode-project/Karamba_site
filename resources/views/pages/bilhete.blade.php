@extends("layouts.site.app")
@section("title", "Karamba - Venda de Bilhetes")
@section("content")
    @include("components.navbar")

        <main style="margin-top: 5rem;">
            <section class="container-fluid" id="formBilhete">
                <div class="container">
                    <div class="text-center">
                        <h1 class="text-center text-uppercase">
                            Venda de Bilhetes
                        </h1>
                        <p>Clique em uma das imagens para adquerir o bilhete</p>
                    </div>
                    <div class="col-md-12 row m-2">
                        <div class="col-md-6  bilhete">
                            <a href="https://kytutes.com/restaurante/menu/1">
                                <img src="{{asset("site/assets/img/2.png")}}" alt="">
                            </a>
                        </div>

                        <div class=" col-md-6 bilhete">
                            <a href="https://kytutes.com/restaurante/menu/1">
                                <img src="{{asset("site/assets/img/1.png")}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @include("components.footer")
@endsection