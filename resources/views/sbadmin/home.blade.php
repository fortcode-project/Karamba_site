@extends("layouts.index")
@section("title", "Painel Administrativo")
@section("content")
@include("sbadmin.includes.sidebar")
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        @include("sbadmin.includes.topbar")
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" style="margin-top: 17rem">
            <div class="row col-xl-12 d-flex justify-content-center align-content-center">
            
                <div class="text-center">
                    <h1>Bem Vindo ao Painel Administrativo do teu site</h1>
                   
                </div>

                
            </div> 
            <div>
                <iframe src="" frameborder="0" srcrolling="no" width="100%" height="300"></iframe>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
@endsection