@extends("layouts.site.app")
@section("title", "Contacto - Solicite Apoio")
@section("content")
    @include("components.navbar")
        <main class="mt-5" id="main">
            @include("components.contact")
            <div class="container-fluid mb-2">
                <div class="container position-relative">
                  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      @foreach ($Horizontal as $item)
                      <div class="carousel-item active">
                          <a href="{{$item->link}}" target="_blank">
                            <div style="width: 100%">
                              <img src="{{url("/storage/{$item->image}")}}" alt="" style="width:100%">
                              <div style="position: absolute; top:5px; width:10px; height: 10px; right:28px;"><i class="bi bi-info-circle-fill cursor-pointer" style="color: #ffffff" title="Está Publicidade é de inteira responsabilidade da Fort-Code"></i></div>
                            </div>
                          </a>
                        </div>
                        @endforeach
                    </div>
                  </div>
                </div>
              </div>
        </main>
    @include("components.footer")
@endsection