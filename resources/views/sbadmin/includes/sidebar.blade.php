<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Painel Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{(Route::current()->getName() == "admin.index") ? "bg-white" : ""}}">
        <a class="nav-link {{(Route::current()->getName() == "admin.index") ? "text-primary" : ""}}" href="{{route("admin.index")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{(Route::current()->getName() == "karamba.delivery.list") ? "bg-white" : ""}}">
        <a class="nav-link {{(Route::current()->getName() == "karamba.delivery.list") ? "text-primary" : ""}}" href="{{route("karamba.delivery.list")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Contrle de Encomeda</span>
        </a>
    </li>

    <li class="nav-item {{(Route::current()->getName() == "admin.index.hero") ? "bg-white" : ""}}">
        <a class="nav-link {{(Route::current()->getName() == "admin.index.hero") ? "text-primary" : ""}}" href="{{route("admin.index.hero")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Hero</span>
        </a>
    </li>

    <li class="nav-item {{(Route::current()->getName() == "admin.about") ? "bg-white" : ""}}">
        <a class="nav-link {{(Route::current()->getName() == "admin.about") ? "text-primary" : ""}}" href="{{route("admin.about")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Sobre</span>
        </a>
    </li>
    

    <li class="nav-item {{(Route::current()->getName() == "admin.footer") ? "bg-white" : ""}}">
        <a class="nav-link {{(Route::current()->getName() == "admin.footer") ? "text-primary" : ""}}" href="{{route("admin.footer")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Footer</span>
        </a>
    </li>

    <li class="nav-item {{(Route::current()->getName() == "admin.infowhy") ? "bg-white" : ""}}">
        <a class="nav-link {{(Route::current()->getName() == "admin.infowhy") ? "text-primary" : ""}}" href="{{route("admin.infowhy")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Detalhes Questão</span>
        </a>
    </li>

    <li class="nav-item {{(Route::current()->getName() == "admin.detail") ? "bg-white" : ""}}">
        <a class="nav-link {{(Route::current()->getName() == "admin.detail") ? "text-primary" : ""}}" href="{{route("admin.detail")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Detalhes</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Publicidade</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{Route::current()->getName() == "anuncio.management.view.retangulo" ? "text-primary" : ""}}" href="{{route("anuncio.management.view.retangulo")}}">Criar Anúncio</a>
                <a class="collapse-item {{Route::current()->getName() == "anuncio.management.lista.quadrado" ? "text-primary" : ""}}" href="{{route("anuncio.management.lista.quadrado")}}">Quadrado</a>
                <a class="collapse-item {{Route::current()->getName() == "anuncio.management.lista.vertical" ? "text-primary" : ""}}" href="{{route("anuncio.management.lista.vertical")}}">Vertical</a>
                <a class="collapse-item {{Route::current()->getName() == "anuncio.management.lista.horizontal" ? "text-primary" : ""}}" href="{{route("anuncio.management.lista.horizontal")}}">Horizontal</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{Route::current()->getName() == "anuncio.management.users" ? "bg-white" : ""}}">
        <a class="nav-link {{Route::current()->getName() == "anuncio.management.users" ? "text-primary" : ""}}" href="{{route("anuncio.management.users")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Utilizadores</span>
        </a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>