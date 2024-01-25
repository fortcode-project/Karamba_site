@extends("layouts.site.app")
@section("title", "Contacto - Solicite Apoio")
@section("content")
    @include("components.navbar")
        <main class="mt-5" id="main">
            @include("components.contact")
        </main>
    @include("components.footer")
@endsection