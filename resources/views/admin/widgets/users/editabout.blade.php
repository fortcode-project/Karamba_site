@extends('admin.dashboard.dash')
@section('contente')
@include("sweetalert::alert")

<section class="dash_content_app" style="">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle"> Editar - Quem Somos</h2>
    </header>

    <div class="dash_content_app_box" >
     
        <form class="app_form" action="{{route("admin.about.update", $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create"/>

            <label class="label">
                <span for="number_bi" class="legend">Descrição Paragrafo 1</span>
                <textarea name="p1" id="" cols="30" rows="5">{{$data->p1}}</textarea>
            </label>

            <label class="label">
                <span for="number_bi" class="legend">Descrição Paragrafo 2</span>
                <textarea name="p2" id="" cols="30" rows="5">{{$data->p2}}</textarea>
            </label>
            
            <div class="al-right">
                <button type="submit" class="btn btn-green icon-check-square-o">Salvar</button>
            </div>
        </form>
    </div>
</section>
@endsection