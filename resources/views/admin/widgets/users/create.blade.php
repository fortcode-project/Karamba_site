@extends('admin.dashboard.dash')
@section('contente')
@include('sweetalert::alert')

<section class="dash_content_app" style=" {{count($hero) > 0 ? "display: none" : ""}}">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle">Cadastrar Dados</h2>
    </header>

    <div class="dash_content_app_box" >
     
        <form class="app_form" action="{{route("admin.register")}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create"/>

            <div class="label_g2">
                <label class="label">
                    <span for="name" class="legend">Titulo</span>
                    <input type="text" name="title" placeholder="Informe o titulo..." required/>
                </label>
                
                <label class="label">
                    <span for="photo_anexo" class="legend">Foto: (600x600px)</span>
                    <input type="file" name="image"/>
                </label>
                
            </div>

            <label class="label">
                <span for="number_bi" class="legend">Descrição</span>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </label>
            
            <div class="al-right">
                <button type="submit" class="btn btn-green icon-check-square-o">Cadastrar Info</button>
            </div>
        </form>
    </div>
</section>
@endsection

@section("table")
    <section class="container">
        @foreach ($hero as $item)
                <div style="display: flex; justify-content: space-around;">
                    <div style="width: 60%">
                        <h2>{{$item->title}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                    <div style="width: 30%; border-radious: 2rem;">
                        <img src="/image/{{$item->img}}" alt="">
                        <a class="btn" href="{{route("admin.edit.data", $item->id)}}" class="">Editar</a>
                    </div>
                </div>
        @endforeach
    </section>
@endsection

<style>
    p{
        font-size: 1rem;
        
    }

    .btn{
        padding: 15px;
        background-color: #7895;
        border-radius: 5px;
    }
</style>