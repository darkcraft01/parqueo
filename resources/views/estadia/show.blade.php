@extends('layouts.app')

@section('template_title')
    {{ $estadia->name ?? 'Show Estadia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estadia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estadias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cochera Id:</strong>
                            {{ $estadia->cochera_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculo Id:</strong>
                            {{ $estadia->vehiculo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $estadia->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Id:</strong>
                            {{ $estadia->precio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $estadia->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $estadia->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Ingreso:</strong>
                            {{ $estadia->hora_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Salida:</strong>
                            {{ $estadia->fecha_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Salida:</strong>
                            {{ $estadia->hora_salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
