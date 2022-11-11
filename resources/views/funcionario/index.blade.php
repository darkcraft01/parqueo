@extends('layouts.app')

@section('template_title')
    Funcionario
@endsection

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<script type="text/javascript">
    function ConfirmDelete(){
       var respuesta = confirm("Estas Seguro de Eliminar al Funcionario?");
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
                <form>
                    <div class="input-group my-3">
                            <input style="max-width: 20rem; margin-left:72%;" name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" value="{{ $buscarpor }}">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit">Buscar</button>
                            </span>       
                    </div>
                </form>  
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title" style="font-weight:bold; margin-left:40%;">
                                {{ __('LISTADO DE FUNCIONARIOS') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('funcionarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    <i class="fas fa-user"></i>
                                    {{ __('Nuevo Funcionario') }}
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
                                        <th>No</th>
                                        
										<th>Cargo</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Celula de Identidad</th>
										<th>Fecha de Nacimiento</th>
										<th>Telefono</th>
										<th>Direccion</th>
                                        <th>Tipo Horario</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($funcionarios as $funcionario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $funcionario->user->name }}</td>
											<td>{{ $funcionario->nombre }}</td>
											<td>{{ $funcionario->apellido }}</td>
											<td>{{ $funcionario->ci }}</td>
											<td>{{ $funcionario->fecha_nac }}</td>
											<td>{{ $funcionario->telefono }}</td>
											<td>{{ $funcionario->direccion }}</td>
                                            <td>{{ $funcionario->horario }}</td>

                                            <td>
                                                <form action="{{ route('funcionarios.destroy',$funcionario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-info " href="{{ route('funcionarios.show',$funcionario->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('funcionarios.edit',$funcionario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $funcionarios->links() !!}
            </div>
        </div>
    </div>
@endsection
