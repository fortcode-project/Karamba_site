@extends("layouts.site.app")
@section("title", "Inicial - Site Karamba")
@section("content")
  @include("components.navbar")
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
          @foreach ($hero as $item)
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
            <h2 data-aos="fade-up">
              {{$item->title}}
            </h2>
            <p data-aos="fade-up" data-aos-delay="100">
              {{$item->description}}
            </p>
            
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
            <img src="{{asset('/image/'.$item->img)}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
        @endforeach
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- main -->
  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          @foreach ($info as $item)
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box text-dark">
              <h3>{{$item->title}}</h3>
              <p>
                {{$item->description}}
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Saber Mais <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->
          @endforeach
          
          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">
              @foreach ($details as $item)
                
              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-person-circle"></i>
                  <h4>{{$item->title}}</h4>
                  <p>{{$item->description}}</p>
                </div>
              </div><!-- End Icon Box -->

              @endforeach
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clientes</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Produtos</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Funcionamento</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trabalhos</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->
    @include("components.contact")
  </main>
<!-- End main -->
  @include("components.footer")
@endsection