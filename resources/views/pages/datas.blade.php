@foreach ($apiArray as $anuncio)
    <div style="margin-top: 5px">
        <a href="{{$anuncio["link"]}}">
            <h1>{{$anuncio['name'] ?? ""}}</h1>
            <img src="{{url("{$anuncio["image_full_url"]}")}}" width="100%" alt="">
        </a>
    </div>
@endforeach