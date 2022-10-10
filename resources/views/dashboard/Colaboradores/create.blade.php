@extends("template.dashboard")

@section("page_title")
Colaboradores | Nuevo
@endsection

@section("body")
<div class="container">
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <h1>Nuevo Colaborador</h1>
        </div>
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{route('colaboradores.store')}}" method="POST" class="form form-row">
                @csrf
                @method("POST")
                <div class="col-12 mb-4">
                    <a href="">
                        <i class="fas fa-angle-left"></i>
                        Atras
                    </a>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Nombres</b></label>
                    <input type="text" name="nombre_col" id="nombre_col" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Apellidos</b></label>
                    <input type="text" name="apellido_col" id="apellido_col" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Cédula</b></label>
                    <input type="text" name="cedula_col" id="cedula_col" maxlenght=10 class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Cargo</b></label>
                    <select name="cargo_col" id="cargo_col" class="form-control">
                        <option value="Operador de monitoreo">Operador de monitoreo</option>
                        <option value="Analista">Analista</option>
                        <option value="Lider de Operadores">Líder de Operadores</option>
                        <option value="Lider de Analistas">Líder de Analistas</option>
                        <option value="Jefe/a del SOC">Jefe/a del SOC</option>                        
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Fecha de Ingreso</b></label>
                    <input type="date" name="fecha_ingreso_col" id="fecha_ingreso_col" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Celular</b></label>
                    <input type="text" name="celular_col" id="celular_col" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Dirección</b></label>
                    <input type="text" name="direccion_col" id="direccion_col" class="form-control">
                </div>
                <div class="col-12 text-right mb-4">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i>
                        Guardar
                    </button>                                        
                </div>
            </form>
        </div>
    </div>        
</div>
@endsection

@section("js")
    
@endsection