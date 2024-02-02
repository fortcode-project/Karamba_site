@extends('admin.dashboard.dash')
@section('contente')

<section class="dash_content_app" style="">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle">Editar - Contacto / Footer</h2>
    </header>

    <div class="dash_content_app_box ">
     
        <form class="app_form" action="{{route("admin.contact.update", $contact->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create"/>

            <div class="label_g2">
                <label class="label">
                    <span for="name" class="legend">Endereço</span>
                    <input type="text" name="endereco" value="{{$contact->endereco}}" required/>
                </label>
                
                <label class="label">
                    <span for="photo_anexo" class="legend">Telefone</span>
                    <input type="text" name="telefone" value="{{$contact->telefone}}" required/>
                </label>
            </div>

            <div class="label_g2">
                <label class="label">
                    <span for="name" class="legend">Email</span>
                    <input type="text" name="email" value="{{$contact->email}}" required/>
                </label>
                
                <label class="label">
                    <span for="photo_anexo" class="legend">Horario</span>
                    <input type="text" name="atendimento" value="{{$contact->atendimento}}"required/>
                </label>
            </div>

            <div class="al-right">
                <button type="submit" class="btn btn-green icon-check-square-o">Salvar</button>
            </div>
        </form>

    </div>

</section>
@endsection