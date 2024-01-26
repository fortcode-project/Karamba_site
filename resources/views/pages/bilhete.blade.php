@extends("layouts.site.app")
@section("title", "Karamba - Venda de Bilhetes")
@section("content")
    @include("components.navbar")

        <main style="margin-top: 10rem;" class="container">

            <h1 class="text-center text-uppercase">
                Venda de Bilhetes, Brevemente...
            </h1>

            <section class="container-fluid" id="formBilhete">
                <div class="container gap-4">
                    <div class="col-md-12 gap-4 d-flex">
                        <div class="col-md-6 bilhete">
                            <div class="">
                                <img src="{{asset("site/assets/img/bilhete.png")}}" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 bilhete">
                            <div class="">
                                <img src="{{asset("site/assets/img/bilhete.png")}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 gap-4 d-flex" >
                        <div class="col-md-6 bilhete">
                            <div class="">
                                <img src="{{asset("site/assets/img/bilhete.png")}}" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 bilhete">
                            <div class="">
                                <img src="{{asset("site/assets/img/bilhete.png")}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @include("components.contact")
    @include("components.footer")
@endsection