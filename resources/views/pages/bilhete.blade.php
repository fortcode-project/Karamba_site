@extends("layouts.site.app")
@section("title", "Karamba - Venda de Bilhetes")
@section("content")
    @include("components.navbar")

        <main style="margin-top: 10rem;">
            <h1 class="text-center text-uppercase">
                Venda de Bilhetes, Brevemente...
            </h1>
            <form action="">
                <div class="form-group">
                    <label for="" class="form-label">Nome: </label>
                    <input type="text" class="form-control" placeholder="Insira o seu nome...">
                </div>
            </form>
        </main>
        @include("components.contact")
    @include("components.footer")
@endsection