@extends("template.dashboard")

@section("page_title")
Colaboradores | Inicio
@endsection

@section("body")
<div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>• Colaboradores</h1>
                    <a href="{{route('dashboard.index')}}">Dashboard></a>
                    {{-- <h3>{{dd($colaboradores)}}</h3> --}}
                </div>
                <div class="col-12 text-right mb-4">
                    <a href="{{route('colaboradores.create')}}" class="btn btn-primary">
                        Nuevo Colaborador
                        <i class="fas fa-plus ml-2"></i>
                    </a>
                </div>
                <div class="col-12" mb-4>
                    <div class="table-responsive">
                        <table class="table table-hover" id=tabla-colaboradores >
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Cargo</th>
                                <th scope="col">
                                    <i class="fas fa-cog"></i>
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($colaboradores as $colaborador)                                                  
                                    <tr>
                                        <th scope="row">{{$colaborador->id}}</th>
                                        <td>{{$colaborador->apellido_col}}</td>
                                        <td>{{$colaborador->nombre_col}}</td>
                                        <td>{{$colaborador->cargo_col}}</td>   
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('colaboradores.show', ['id'=>$colaborador])}}" class="btn">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{route('colaboradores.edit', ['colaborador' => $colaborador])}}" class="btn">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <form class="d-inline-block" method="POST"
                                                    id="form-delete-{{ $colaborador->id }}"
                                                    action="{{route('colaboradores.delete', ['colaborador' => $colaborador])}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button"
                                                        onclick="borrarColaborador({{ $colaborador->id }});"
                                                        class="btn">
                                                        <i class="fas fa-trash"></i>
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
        function borrarColaborador(id) {
            Swal.fire({
                title: 'Espera!',
                text: '¿Deseas eliminar este registro?',
                icon: 'question',
                showConfirmButton: false,
                cancelButtonText: "Cancelar",
                showCancelButton: true,
                showDenyButton: true,
                denyButtonText: 'Si, deseo eliminar',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isDenied) {
                    $(`#form-delete-${id}`).submit();
                }
            })
        }


        $(() =>{ 
            $("#tabla-colaboradores").DataTable();
        });
    </script>
@endsection