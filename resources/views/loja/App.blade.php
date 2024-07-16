@extends("layouts.site.app")
@section("title" , "Produtos Karamba")
@section("content")
@include("components.navbar")
@include("sweetalert::alert")
<main id="main" class="mt-5">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <p>Menu <span>Karamba</span></p>
        </div>
        @livewire("site.catogories")
      </div>
    </section>
    <!-- ======= End Menu Section ======= -->
  </main><!-- End #main -->
@endsection