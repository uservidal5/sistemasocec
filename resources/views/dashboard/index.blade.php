@extends("template.dashboard")

@section("page_title")
Dashboard | Inicio
@endsection

@section("body")
<div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1>SISTEMA SOC - Dashboard</h1>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-info" href="{{route('colaboradores.index')}}">
                    <i class="fas fa-user mr-2"></i>    
                    Colaboradores</a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-info" href="{{route('certificaciones.index')}}">
                    <i class="fas fa-file mr-2"></i>    
                    Certificaciones</a>
                </div>
            </div>
        </div>
@endsection