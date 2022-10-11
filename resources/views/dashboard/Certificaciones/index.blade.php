@extends("template.dashboard")

@section("page_title")
Certificaciones | Inicio
@endsection

@section("body")
<div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>• Certificaciones</h1>
                    <a href="{{route('dashboard.index')}}">
                        <i class="fas fa-angle-left"></i>
                        Dashboard</a>
                    {{-- <h3>{{dd($certificaciones)}}</h3> --}}
                </div>
                <div class="col-12 text-right mb-4">
                    <a href="{{route('certificaciones.create')}}" class="btn btn-primary">
                        Nueva Certificacion
                        <i class="fas fa-plus ml-2"></i>
                    </a>
                </div>
                <div class="col-12" mb-4>
                    <div class="table-responsive">
                        <table class="table table-hover" id=tabla-certificaciones >
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Colaborador</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Certificado</th>
                                <th scope="col">Fecha Fin</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Vigencia</th>
                                <th scope="col">Pago</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">
                                    <i class="fas fa-cog"></i>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificaciones as $certificacion)                                                  
                                    <tr>
                                        <th scope="row">{{$certificacion->id}}</th>
                                        <td>{{$certificacion->nombre_cer}}</td>
                                        <td>{{$certificacion->area_partner_cer}}</td>
                                        <td>{{$certificacion->curso_cer}}</td>
                                        <td>{{$certificacion->fecha_de_fin_cer}}</td> 
                                        <td>{{$certificacion->estado_cer}}</td> 
                                        <td>{{$certificacion->estado_cer}}</td> 
                                        <td>{{$certificacion->pago_cer}}</td> 
                                        <td>{{$certificacion->documento_curso_cer}}</td>    
                                        <td>
                                            <div class="btn-group">
                                                {{-- <a href="{{route('certificaciones.show', ['id'=>$certificacion])}}" class="btn">
                                                    <i class="fas fa-eye"></i>
                                                </a> --}}
                                                <a href="{{ route('certificaciones.edit', ['certificacion' => $certificacion]) }}"
                                                    class="btn">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <form class="d-inline-block" method="POST"
                                                id="form-delete-{{ $certificacion->id }}"
                                                action="{{ route('certificaciones.delete', ['certificacion' => $certificacion]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn">
                                                    <i class="fas fa-trash text-danger"></i>
                                                </button>
                                            </form>
                                            </div>                                            
                                        </td>                                      
                                    </tr>
                                @endforeach                                                                                            
                              
                            </tbody>
                          </table>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection

@section("js")
    <script>
        $(() =>{ 
            $("#tabla-certificaciones").DataTable();
        });
    </script>
@endsection