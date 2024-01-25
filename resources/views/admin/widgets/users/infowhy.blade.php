@extends('admin.dashboard.dash')
@section('contente')

<section class="dash_content_app" style="">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle">Caracteristicas (Detalhes)</h2>
    </header>

    <div class="dash_content_app_box " style="{{count($infos) == 1 ? "display: none" : ""}}">
     
        <form class="app_form" action="{{route("store.infowhy")}}" method="post" enctype="multipart/form-data">
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

    <div class="details">
        @foreach ($infos as $info)
            <div class="">
                <h1 class="title" style="font-size: 2.5rem;">{{$info->title}}</h1>
            </div>
            <div class="textD">
                <p>{{$info->description}}</p>
            </div>
            <div class="al-right" style="margin-top: 1rem;">
                <a href="#" class="btn btn-green icon-check-square-o" style="padding: 1rem">Eliminar</a>
                <a href="{{route("admin.infowhy.edit", $info->id)}}" class="btn btn-green icon-check-square-o" style="padding: 1rem">Editar</a>
            </div>
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