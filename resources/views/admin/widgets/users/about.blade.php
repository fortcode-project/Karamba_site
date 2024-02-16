@extends('admin.dashboard.dash')
@section('contente')

<section class="dash_content_app" style="">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle">Quem Somos</h2>
    </header>

    <div class="dash_content_app_box" >
     
        <form class="app_form" action="{{route("admin.store.about")}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create"/>

            <label class="label">
                <span for="number_bi" class="legend">Descrição Paragrafo 1</span>
                <textarea name="p1" id="" cols="30" rows="5"></textarea>
            </label>

            <label class="label">
                <span for="number_bi" class="legend">Descrição Paragrafo 2</span>
                <textarea name="p2" id="" cols="30" rows="5"></textarea>
            </label>
            
            <div class="al-right">
                <button type="submit" class="btn btn-green icon-check-square-o">Salvar</button>
            </div>
        </form>
    </div>

    <div>
        @foreach ($data as $item)
            <h5>{{$item->p1}}</h5>
            <h5>{{$item->p2}}</h5>
            <div class="al-right" style="margin-top: 1rem;">
                <a href="{{route("admin.edit.about", $item->id)}}" class="btn btn-green icon-check-square-o" style="padding: 1rem">Editar</a>
            </div>
        @endforeach
    </div>
</section>

   
@endsection