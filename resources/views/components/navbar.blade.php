  <!-- Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{route("site.karamba.index")}}" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="{{asset("site/assets/img/logo.png")}}" alt="" style="font-size: 2rem;">
        {{-- <h1>Karamba<span>.</span></h1> --}}
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route("site.karamba.index")}}">Principal</a></li>
          <li><a href="{{route("site.karamba.about")}}">Sobre</a></li>
          <li><a href="https://kytutes.com/restaurante/menu/1">Menu</a></li>
          <li><a href="{{route("site.karamba.bilhete")}}">Bilhetes</a></li>
          <li><a href="{{route("site.karamba.contact")}}">Contacto</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>
  <!-- End Header -->