@extends('admin.dashboard.dash')
@section('contente')

<section class="dash_content_app" style="">
    <header class="dash_content_app_header">
        <h2 class="icon-plus-circle">Contacto / Footer</h2>
    </header>

    <div class="dash_content_app_box ">
     
        <form class="app_form" action="{{route("admin.footer.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create"/>

            <div class="label_g2">
                <label class="label">
                    <span for="name" class="legend">Endereço</span>
                    <input type="text" name="endereco" placeholder="Informe o endereço..." required/>
                </label>
                
                <label class="label">
                    <span for="photo_anexo" class="legend">Telefone</span>
                    <input type="text" name="telefone" placeholder="Informe o numero de telefone..." required/>
                </label>
            </div>

            <div class="label_g2">
                <label class="label">
                    <span for="name" class="legend">Email</span>
                    <input type="text" name="email" placeholder="Informe o seu email..." required/>
                </label>
                
                <label class="label">
                    <span for="photo_anexo" class="legend">Horario</span>
                    <input type="text" name="atendimento" placeholder="Informe o teu horario de atendimento..." required/>
                </label>
            </div>

            <div class="al-right">
                <button type="submit" class="btn btn-green icon-check-square-o">Salvar</button>
            </div>
        </form>

    </div>

    <div class="details">

            <div class="">
                <h1 class="title" style="font-size: 2.5rem;"></h1>
            </div>
            <div class="textD">

            </div>
            <div class="al-right" style="margin-top: 1rem;">
                <a href="#" class="btn btn-green icon-check-square-o" style="padding: 1rem">Eliminar</a>
                <a href="" class="btn btn-green icon-check-square-o" style="padding: 1rem">Editar</a>
            </div>

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