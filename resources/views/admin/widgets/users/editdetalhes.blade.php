@extends('admin.dashboard.dash')
@section('contente')

<section class="dash_content_app" style="">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle">Editar Caracteristicas</h2>
    </header>

    <div class="dash_content_app_box ">
     
        <form class="app_form" action="{{route("admin.detalhes.update", $details->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create"/>

            <label class="label">
                <span for="title" class="legend">Titulo</span>
                <textarea name="title" id="" cols="30" rows="5">{{$details->title}}</textarea>
            </label>

            <label class="label">
                <span for="description" class="legend">Descrição</span>
                <textarea name="description" id="" cols="30" rows="5">{{$details->description}}</textarea>
            </label>
            
            <div class="al-right">
                <button type="submit" class="btn btn-green icon-check-square-o">Salvar</button>
            </div>
        </form>
    </div>
    
</section>
@endsection
