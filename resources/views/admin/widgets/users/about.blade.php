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
</section>
@endsection

@section("table")
<section class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>p1</th>
                <th>2</th>
                <th>
                    ###
                </th>
            </tr>
        </thead>
        <tbody>
           @foreach ($data as $item)
               <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->p1}}</td>
                    <td>{{$item->p2}}</td>
                    <td>
                        <a href="">Eliminar</a>
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