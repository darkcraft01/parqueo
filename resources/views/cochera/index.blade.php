@extends('layouts.app')

@section('template_title')
    Cochera
@endsection

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script type="text/javascript">
         function ConfirmDelete(){
            var respuesta = confirm("Estas Seguro de Eliminar al Cliente?");
            if(respuesta ==true)
            {
                return true;
            }
            else
            {
                return false;
            }
         }
</script>

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title" style="font-weight:bold; margin-left:40%;">
                                {{ __('LISTADO DE COCHERAS') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cocheras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <i class="fas fa-user"></i>
                                  {{ __('Nueva Cochera') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                                      
										<th>Numero Cochera</th>
										<th>Medida</th>
										<th>Precio</th>
                                        <th>Tiempo</th>
										<th>Tipo de Espacio</th>
										<th>Estado</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cocheras as $cochera)
                                        <tr>
                                            
                                            
											<td>{{ $cochera->numero_cochera }}</td>
											<td>{{ $cochera->medida }}</td>
											<td>{{ $cochera->precio }}</td>
                                            <td>{{ $cochera->tiempo }}</td>
											<td>{{ $cochera->tipo_espacio }}</td>
                                            <td>{{ $cochera->estado}}</td>
								
                                            <td>
                                                <form action="{{ route('cocheras.destroy',$cochera->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cocheras.show',$cochera->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cocheras.edit',$cochera->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return ConfirmDelete()"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cocheras->links() !!}
            </div>
        </div>
    </div>
@endsection
