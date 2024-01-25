@extends("layouts.site.app")
@section("title", "Saiba Sobre o Karamba")
@section("content")
    @include("components.navbar")
          <!-- main -->
  <main id="main" class="mt-4">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Quem Somos</h2>
          <p>Quem Somos</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(site/assets/img/about.jpg); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <a href="https://kytutes.com/" target="_blank" class="btn reservas">Fazer Reservas</a>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            @foreach ($about as $item)
              
            <div class="content ps-0 ps-lg-5">
              <p>
                {{$item->p1}}
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Consistência: Nós nos esforçaremos para que os nossos sabores aperfeiçoados sejam consistentes.</li>
                <li><i class="bi bi-check2-all"></i> Sabor: Continuaremos a inovar até aperfeiçoarmos os nossos sabores e trazermos o mundo até si.</li>
                <li><i class="bi bi-check2-all"></i> Qualidade: Iremos adquirir os ingredientes que melhor realçam os nossos sabores.</li>
              </ul>
             <p>
              {{$item->p2}}
             </p>
              
              <div class="position-relative mt-4">
                <img src="site/assets/img/about-1.jpg" class="img-fluid" alt="">
                <a href="" class="glightbox play-btn"></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
  </main>
  <!-- End main -->
    @include("components.footer")
@endsection