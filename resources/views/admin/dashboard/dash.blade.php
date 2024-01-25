@extends('merge.admin.index')
@section('title','Painel administrativo')
@section('content')

    <div class="mce_upload">
        <div class="mce_upload_box">
            <form class="app_form" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mce_uplaod" value="true"/>
                <label>
                    <label class="legend">Selecione uma imagem JPG ou PNG:</label>
                    <input accept="image/*" type="file" name="image" required/>
                </label>
                <button class="btn btn-blue icon-upload">Enviar Imagem</button>
            </form>
        </div>
    </div>

    <div class="dash">
        <aside class="dash_sidebar" style="width: 15rem !important">
            <article class="dash_sidebar_user">
                <div><img class="dash_sidebar_user_thumb" src="/dasboard/images/avatar.jpg" alt="" title=""/></div>
                <h3 class="dash_sidebar_user_name"></h3>
            </article>

            <ul class="dash_sidebar_nav">
                <li class="dash_sidebar_nav_li">
                    <a style="{{(Route::current()->getName() == "admin.index") ? "color: #000 !important; background: #fff" : "" }}"  
                    class="icon-pencil-square-o" href="{{route("admin.index")}}">Hero</a> 
                </li>
                <li class="dash_sidebar_nav_li ">
                    <a  class="icon-pencil-square-o" style="{{(Route::current()->getName() == "admin.about") ? "color: #000 !important; background: #fff" : ""}}"
                    href="{{route("admin.about")}}">Quem Somos</a> 
                </li>

                <li class="dash_sidebar_nav_li ">
                    <a  class="icon-pencil-square-o" style="{{(Route::current()->getName() == "admin.detail") ? "color: #000 !important; background: #fff" : ""}}"
                    href="{{route("admin.detail")}}">Detalhes</a> 
                </li>

                <li class="dash_sidebar_nav_li ">
                    <a  class="icon-pencil-square-o" style="{{(Route::current()->getName() == "admin.infowhy") ? "color: #000 !important; background: #fff" : ""}}"
                    href="{{route("admin.infowhy")}}">Informação</a> 
                </li>

                <li class="dash_sidebar_nav_li ">
                    <a  class="icon-pencil-square-o" style="{{(Route::current()->getName() == "admin.footer") ? "color: #000 !important; background: #fff" : ""}}"
                    href="{{route("admin.footer")}}">Contactos/Rodapé</a> 
                </li>
            </ul>
        </aside>
        <section class="dash_content">
            <div class="dash_userbar">
                
                <div class="dash_userbar_box">
                    <div class="dash_content_box">
                        <h1 class="icon-cog transition"><a href="">Painel<b> Administrativo</b></a></h1>
                       
                    </div>
                </div>

                <div class="notification_center">

                    <div data-link=""
                        class="notification_center_item radius transition ">
                        <div class="image">
                            <img class="rounded" src="{{asset('dashboard/assets/images/notify.jpg')}}"/>
                        </div>

                        <div class="info">
                            <p class="title">Robson V. Leite assinou o plano PRO por R$ 5,00/mês</p>
                            <p class="time icon-clock-o">22/07/19 - 14hs 22min</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dash_content_box">
                @yield('contente')
            </div>
            <div>
                @yield("table")
            </div>
        </section>
    </div>

@endsection