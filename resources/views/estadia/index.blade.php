@extends('layouts.app')

@section('template_title')
    Estadia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estadia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estadias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Cochera Id</th>
										<th>Vehiculo Id</th>
										<th>Usuario Id</th>
										<th>Precio Id</th>
										<th>Estado</th>
										<th>Fecha Ingreso</th>
										<th>Hora Ingreso</th>
										<th>Fecha Salida</th>
										<th>Hora Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estadias as $estadia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estadia->cochera_id }}</td>
											<td>{{ $estadia->vehiculo_id }}</td>
											<td>{{ $estadia->usuario_id }}</td>
											<td>{{ $estadia->precio_id }}</td>
											<td>{{ $estadia->estado }}</td>
											<td>{{ $estadia->fecha_ingreso }}</td>
											<td>{{ $estadia->hora_ingreso }}</td>
											<td>{{ $estadia->fecha_salida }}</td>
											<td>{{ $estadia->hora_salida }}</td>

                                            <td>
                                                <form action="{{ route('estadias.destroy',$estadia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estadias.show',$estadia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estadias.edit',$estadia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estadias->links() !!}
            </div>
        </div>
    </div>
@endsection
