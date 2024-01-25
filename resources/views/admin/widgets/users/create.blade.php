@extends('admin.dashboard.dash')
@section('contente')

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
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Imagem</th>
                <th>
                    ###
                </th>
            </tr>
        </thead>
        <tbody>
           @foreach ($hero as $item)
               <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->img}}</td>
                    <td>
                        <a href="{{route("admin.edit.data", $item->id)}}">Editar</a>
                    </td>
               </tr>
           @endforeach
        </tbody>
    </table>
</section>
@endsection

<style>
    table {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: #f5f5f5;
  width: 100%;
  margin-bottom: 20px;
}

th, td {
  padding: 8px;
  text-align: left;
}

th {
  background-color: #333;
  color: #fff;
}

tr:nth-child(even) {
  background-color: #ddd;
}

tr:hover {
  background-color: #ccc;
}
</style>