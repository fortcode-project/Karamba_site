@extends('admin.dashboard.dash')
@section('contente')

<section class="dash_content_app">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle">Cadastrar Dados</h2>
    </header>

    <div class="dash_content_app_box" >
     
        <form class="app_form" action="{{route("admin.infowhy.update", $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--ACTION SPOOFING-->
            <input type="hidden" name="id" value="{{$data->id}}"/>

            <div class="label_g2">
                <label class="label">
                    <span for="name" class="legend">Titulo</span>
                    <input type="text" name="title" value="{{$data->title}}" required/>
                </label>

            </div>

            <label class="label">
                <span for="number_bi" class="legend">Descrição</span>
                <textarea name="description" id="" cols="30" rows="10">{{$data->description}}</textarea>
            </label>
            
            <div class="al-right">
                <button type="submit" class="btn btn-green icon-check-square-o">Actualizar</button>
            </div>
        </form>
    </div>
</section>

@endsection
