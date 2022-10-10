@extends("template.dashboard")

@section("page_title")
Certificaciones | Nueva
@endsection

@section("body")
<div class="container">
    <div class="row">
        <div class="col-12 mb-4 text-center">
            <h1>Nueva Certificacion</h1>
        </div>
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{route('certificaciones.store')}}" method="POST" class="form form-row">
                @csrf
                @method("POST")
                <div class="col-12 mb-4">
                    <a href="">
                        <i class="fas fa-angle-left"></i>
                        Atras
                    </a>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Unidad de Negocio</b></label>
                    <select name="cargo_col" id="cargo_col" class="form-control">
                        <option value="Ecuador">Ecuador</option>                       
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Gerencia</b></label>
                    <select name="gerencia_cer" id="gerencia_cer" class="form-control">
                        <option value="SOC">SOC</option>                       
                    </select>
                </div>   
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Apellidos y Nombres</b></label>
                    <select name="nombre_cer" id="nombre_cer" class="form-control">
                        <option value="Vidal Pacheco Kevin Paul">Vidal Pacheco Kevin Paul</option>                       
                    </select>
                </div>             
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Cédula</b></label>
                    <input type="text" name="cedula_cer" id="cedula_cer" maxlenght=10 class="form-control">
                </div>    
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Curso</b></label>
                    <select name="curso_cer" id="curso_cer" class="form-control">
                        <option value="Curso 0">Curso 0</option>                       
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>¿Es un Curso de
                        certificación técnica
                        y/o especializada?</b></label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="certificacion_tecnica_cer" id="certificacion_tecnica_cer" autocomplete="off" checked>
                            <label class="btn" for="Si">Sí</label>
                          
                            <input type="radio" class="btn-check" name="certificacion_tecnica_cer" id="certificacion_tecnica_cer" autocomplete="off">
                            <label class="btn" for="No">No</label>
                    </div>
                </div>  
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Si es un Curso de Certificación, ¿el colaborador obtuvo la Certificación en este mes?</b></label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="certificacion_del_mes_cer" id="certificacion_del_mes_cer" autocomplete="off" checked>
                            <label class="btn" for="Si">Sí</label>
                          
                            <input type="radio" class="btn-check" name="certificacion_del_mes_cer" id="certificacion_del_mes_cer" autocomplete="off">
                            <label class="btn" for="No">No</label>

                            <input type="radio" class="btn-check" name="certificacion_del_mes_cer" id="certificacion_del_mes_cer" autocomplete="off">
                            <label class="btn" for="N/A">N/A</label>
                    </div>
                </div>  
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Fecha de Inicio</b></label>
                    <input type="date" name="fecha_de_inicio_cer" id="fecha_de_inicio_cer" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Fecha de Fin</b></label>
                    <input type="date" name="fecha_de_fin_cer" id="fecha_de_fin_cer" class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Total de Horas</b></label>
                    <input type="text" name="total_horas_cer" id="total_horas_cer" maxlenght=4 class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Curso</b></label>
                    <select name="lugar_curso_cer" id="lugar_curso_cer" class="form-control">
                        <option value="Interno">Interno</option>    
                        <option value="Externo">Externo</option>                    
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Area / Partner</b></label>
                    <select name="area_partner_cer" id="area_partner_cer" class="form-control">
                        <option value="marca">nombre marca</option>               
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Metodología</b></label>
                    <select name="metodologia_cer" id="metodologia_cer" class="form-control">
                        <option value="E-learning">E-learning</option>               
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Tipo de Curso</b></label>
                    <select name="tipo_curso_cer" id="tipo_curso_cer" class="form-control">
                        <option value="Técnico">Técnico</option>               
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>% Nota</b></label>
                    <input type="text" name="nota_cer" id="nota_cer" maxlenght=4 class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Asistencia</b></label>
                    <input type="text" name="asistencia_cer" id="asistencia_cer" maxlenght=4 class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>% Satisfacción</b></label>
                    <input type="text" name="satisfacion_cer" id="satisfacion_cer" maxlenght=4 class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Estado</b></label>
                    <select name="estado_cer" id="estado_cer" class="form-control">
                        <option value="Aprobado">Aprobado</option>  
                        <option value="Sin Aprobar">Sin Aprobar</option>              
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Mes de Finalización</b></label>
                    <select name="mes_finalizacion_cer" id="mes_finalizacion_cer" class="form-control">
                        <option value="Enero">Enero</option> 
                        <option value="Febrero">Febrero</option>
                        <option value="Marzo">Marzo</option>
                        <option value="Abril">Abril</option>
                        <option value="Mayo">Mayo</option>
                        <option value="Junio">Junio</option>
                        <option value="Julio">Julio</option>
                        <option value="Agosto">Agosto</option>
                        <option value="Septiembre">Septiembre</option>
                        <option value="Octubre">Octubre</option>
                        <option value="Noviembre">Noviembre</option>
                        <option value="Diciembre">Diciembre</option>              
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Año de Cierre</b></label>
                    <input type="text" name="anio_cierre_cer" id="anio_cierre_cer" maxlenght=4 class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Pago</b></label>
                    <select name="pago_cer" id="pago_cer" class="form-control">
                        <option value="Gratuito">Gratuito</option>    
                        <option value="Pagado">Pagado</option>            
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Costo Curso</b></label>
                    <input type="text" name="costo_curso_cer" id="costo_curso_cer" maxlenght=4 class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Costo Empresa</b></label>
                    <input type="text" name="costo_curso_empresa_cer" id="costo_curso_empresa_cer" maxlenght=4 class="form-control">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label class="form-label" for="customFile"><b>Subir Certificado</b></label>
                    <input type="file" class="form-control" id="customFile" />
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