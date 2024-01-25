@extends('admin.dashboard.dash')
@section('contente')

<section class="dash_content_app" style="">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle">Caracteristicas</h2>
    </header>

    <div class="dash_content_app_box " style="{{count($details) == 3 ? "display: none" : ""}}">
     
        <form class="app_form" action="{{route("admin.store.detail")}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create"/>

            <label class="label">
                <span for="title" class="legend">Titulo</span>
                <textarea name="title" id="" cols="30" rows="5"></textarea>
            </label>

            <label class="label">
                <span for="description" class="legend">Descrição</span>
                <textarea name="description" id="" cols="30" rows="5"></textarea>
            </label>
            
            <div class="al-right">
                <button type="submit" class="btn btn-green icon-check-square-o">Salvar</button>
            </div>
        </form>
    </div>

    <div class="details" style="{{count($details) < 3 ? "display: none" : ""}}">
        @foreach ($details as $detail)
            <form action="">
                <div class="">
                    <h1 class="title" style="font-size: 2rem;">{{$detail->title}}</h1>
                </div>
                <div class="textD">
                    <p>{{$detail->description}}</p>
                </div>
                <div class="al-right" style="margin-top: .5rem;">
                    <a href="#" class="btn btn-green icon-check-square-o" style="padding: 1rem">Eliminar</a>
                </div>
            </form>
        @endforeach
    </div>
    
</section>
@endsection

<style>
    .details{
        margin-top: 5rem;
    }

    .textD{
        font-size: 1.5rem;
        margin-top: 1rem;
    }
</style>