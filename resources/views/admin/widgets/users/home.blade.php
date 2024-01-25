@extends('admin.dashboard.dash')
@section('contente')


<section class="dash_content_app">
    
    <header class="dash_content_app_header">
        <h2 class="icon-user">Usuários</h2>
        <form action="" class="app_search_form">
            <input type="text" name="s" placeholder="Pesquisar Usuário:">
            <button class="icon-search icon-notext"></button>
        </form>

        <a class="icon-plus-circle radius active" href="{{route('admin.form.users')}}">Novo usuário</a>
    </header>

    <div class="dash_content_app_box">
        <section class="app_users_home">
           
                @foreach ($users as $user )
                    
                    <article class="user radius">
                        <div class="cover">
                            <img src="" alt="imagem">
                        </div>
                        <p class="level icon-life-ring">{{$user->perfil}}</p>
                        <h4>{{$user->name}}</h4>


                        <div class="info">
                            <p>{{$user->email}}</p>
                        
                        </div>

                        <div class="actions">
                            <a class="icon-cog btn btn-blue" href="" title="">Gerenciar</a>
                        </div>
                    </article>

                @endforeach

                

                

            <nav class="paginator">
                <a class="paginator_item" title="Primeira página" href="">&lt;&lt;</a>
                <span class="paginator_item paginator_active">1</span>
                <a class="paginator_item" title="Página 2" href="">2</a>
                <a class="paginator_item" title="Página 3" href="">3</a>
                <a class="paginator_item" title="Página 4" href="">4</a>
                <a class="paginator_item" title="Última página" href="">&gt;&gt;</a>
            </nav>
        </section>
    </div>
</section>
@endsection