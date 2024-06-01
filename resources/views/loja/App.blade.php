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
            <h2>Nosso Menu</h2>
            <p>Menu <span>Karamba</span></p>
          </div>
  
          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
            
            <div class="row gy-5">
            @foreach($data as $item)          
            <div class="col-lg-4 menu-item">
              @if ($item['imagem'] != null)
                <img src="https://kytutes.com/storage/{{$item['imagem']}}" class="menu-img img-fluid" alt="">
              @else 
                <img src="{{asset("notfound.png")}}" class="menu-img img-fluid" alt="">
              @endif
              <h4 style="font-size: 1.2rem;">{{$item['nome']}}</h4>

              <p class="price">
                kz {{number_format($item['preco'], 2,'.',',')}} 
              </p>

              <a href="#" class="btn btn-primary" data-id="{{ $item['reference'] }}">
                  Adicionar
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                  </svg> 
              </a>                  
            </div>
            @endforeach
          </div>
          </div>
        </div>
      </section>
    <!-- End Menu Section -->
  </main><!-- End #main -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {
        $(".btn-primary").click(function(event) {
            event.preventDefault();
            let code  = $(event.currentTarget).data("id")
            $.ajax({
                type: "GET",
                url: "/add/cart/"+code,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: "Sucesso",
                        showConfirmButton: false,
                        timer: 1500,
                        html: "Adicionado, "+response.message+" no Carrinho"
                    });
                },
            });
        });
    });
</script>
@endsection