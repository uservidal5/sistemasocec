@extends("template.dashboard")

@section("page_title")
Certificaciones | Editar
@endsection

@section("body")
<div class="container">
    <div class="row">
        <div class="col-12 my-4">
            <a href="{{ route('certificaciones.index') }}">
                <i class="fas fa-angle-left"></i>
                Atras
            </a>
        </div>
        <div class="col-12 mb-4 text-center">
            <h1>Actualizar Certificacion</h1>
        </div>
        <div class="col-12 col-md-6 mx-auto">
            <form action="{{route('certificaciones.update', ['certificacion' => $certificacion])}}" method="POST" class="form form-row">
                @csrf
                @method("PUT")
                <div class="col-12 mb-4">
                    <a href="">
                        <i class="fas fa-angle-left"></i>
                        Atras
                    </a>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Unidad de Negocio</b></label>
                    <select name="unidad_negocio_cer" id="unidad_negocio_cer" class="form-control">
                        <option {{ $certificacion->unidad_negocio_cer == 'Ecuador' ? 'selected' : '' }} 
                            value="Ecuador">Ecuador</option>                       
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Gerencia</b></label>
                    <select name="gerencia_cer" id="gerencia_cer" class="form-control">
                        <option {{ $certificacion->gerencia_cer == 'SOC' ? 'selected' : '' }}
                        value="SOC">SOC</option>                       
                    </select>
                </div>   
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Apellidos y Nombres</b></label>
                    <select name="nombre_cer" id="nombre_cer" class="form-control">
                        <option {{ $certificacion->nombre_cer == 'Vidal Pacheco Kevin Paul' ? 'selected' : '' }}
                        value="Vidal Pacheco Kevin Paul">Vidal Pacheco Kevin Paul</option>                       
                    </select>
                </div>             
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Cédula</b></label>
                    <input type="text" name="cedula_cer" id="cedula_cer" maxlenght=10 class="form-control"
                    value="{{ $certificacion->cedula_cer }}">
                </div>    
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Curso</b></label>
                    <select name="curso_cer" id="curso_cer" class="form-control">
                        <option {{ $certificacion->curso_cer == 'Curso 0' ? 'selected' : '' }}
                        value="Curso 0">Curso 0</option>                       
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
                    <input type="date" name="fecha_de_inicio_cer" id="fecha_de_inicio_cer" class="form-control"
                    value="{{ $certificacion->fecha_de_inicio_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Fecha de Fin</b></label>
                    <input type="date" name="fecha_de_fin_cer" id="fecha_de_fin_cer" class="form-control"
                    value="{{ $certificacion->fecha_de_fin_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Total de Horas</b></label>
                    <input type="text" name="total_horas_cer" id="total_horas_cer" maxlenght=4 class="form-control"
                    value="{{ $certificacion->total_horas_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Curso</b></label>
                    <select name="lugar_curso_cer" id="lugar_curso_cer" class="form-control">
                        <option {{ $certificacion->lugar_curso_cer == 'Interno' ? 'selected' : '' }}
                        value="Interno">Interno</option>    
                        <option {{ $certificacion->lugar_curso_cer == 'Externo' ? 'selected' : '' }}
                        value="Externo">Externo</option>                    
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Area / Partner</b></label>
                    <select name="area_partner_cer" id="area_partner_cer" class="form-control">
                        <option {{ $certificacion->area_partner_cer == 'nombre marca' ? 'selected' : '' }}
                        value="marca">Nombre marca</option>               
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Metodología</b></label>
                    <select name="metodologia_cer" id="metodologia_cer" class="form-control">
                        <option {{ $certificacion->metodologia_cer == 'E-learning' ? 'selected' : '' }}
                        value="E-learning">E-learning</option>               
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Tipo de Curso</b></label>
                    <select name="tipo_curso_cer" id="tipo_curso_cer" class="form-control">
                        <option {{ $certificacion->tipo_curso_cer == 'Técnico' ? 'selected' : '' }}
                        value="Técnico">Técnico</option>               
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>% Nota</b></label>
                    <input type="text" name="nota_cer" id="nota_cer" maxlenght=4 class="form-control"
                    value="{{ $certificacion->nota_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>% Asistencia</b></label>
                    <input type="text" name="asistencia_cer" id="asistencia_cer" maxlenght=4 class="form-control"
                    value="{{ $certificacion->asistencia_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>% Satisfacción</b></label>
                    <input type="text" name="satisfacion_cer" id="satisfacion_cer" maxlenght=4 class="form-control"
                    value="{{ $certificacion->satisfacion_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Estado</b></label>
                    <select name="estado_cer" id="estado_cer" class="form-control">
                        <option {{ $certificacion->estado_cer == 'Aprobado' ? 'selected' : '' }}
                        value="Aprobado">Aprobado</option>  
                        <option {{ $certificacion->estado_cer == 'Sin Aprobar' ? 'selected' : '' }}
                        value="Sin Aprobar">Sin Aprobar</option>              
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Mes de Finalización</b></label>
                    <select name="mes_finalizacion_cer" id="mes_finalizacion_cer" class="form-control">
                        <option {{ $certificacion->mes_finalizacion_cer == 'Enero' ? 'selected' : '' }} value="Enero">Enero</option> 
                        <option {{ $certificacion->mes_finalizacion_cer == 'Febro' ? 'selected' : '' }} value="Febrero">Febrero</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Marzo' ? 'selected' : '' }} value="Marzo">Marzo</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Abril' ? 'selected' : '' }} value="Abril">Abril</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Mayo' ? 'selected' : '' }} value="Mayo">Mayo</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Junio' ? 'selected' : '' }} value="Junio">Junio</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Julio' ? 'selected' : '' }} value="Julio">Julio</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Agosto' ? 'selected' : '' }} value="Agosto">Agosto</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Septiembre' ? 'selected' : '' }} value="Septiembre">Septiembre</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Octubre' ? 'selected' : '' }} value="Octubre">Octubre</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Noviembre' ? 'selected' : '' }} value="Noviembre">Noviembre</option>
                        <option {{ $certificacion->mes_finalizacion_cer == 'Diciembre' ? 'selected' : '' }} value="Diciembre">Diciembre</option>              
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Año de Cierre</b></label>
                    <input type="text" name="anio_cierre_cer" id="anio_cierre_cer" maxlenght=4 class="form-control"
                    value="{{ $certificacion->anio_cierre_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Pago</b></label>
                    <select name="pago_cer" id="pago_cer" class="form-control">
                        <option {{ $certificacion->pago_cer == 'Gratuito' ? 'selected' : '' }}
                        value="Gratuito">Gratuito</option>    
                        <option {{ $certificacion->pago_cer == 'Pagado' ? 'selected' : '' }}
                        value="Pagado">Pagado</option>            
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Costo Curso</b></label>
                    <input type="text" name="costo_curso_cer" id="costo_curso_cer" maxlenght=4 class="form-control"
                    value="{{ $certificacion->costo_curso_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for=""><b>Costo Empresa</b></label>
                    <input type="text" name="costo_curso_empresa_cer" id="costo_curso_empresa_cer" maxlenght=4 class="form-control"
                    value="{{ $certificacion->costo_curso_empresa_cer }}">
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label class="form-label" for="customFile"><b>Subir Certificado</b></label>
                    <input type="file" class="form-control" id="customFile" />
                </div>
                
                <div class="col-12 text-right mb-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>
                        Actualizar
                    </button>                                        
                </div>
            </form>
        </div>
    </div>        
</div>
@endsection

@section("js")
    
@endsection