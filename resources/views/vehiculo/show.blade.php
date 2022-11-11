@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->name ?? 'Show Vehiculo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="max-width: 28rem; margin-left:35%;">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="font-weight:bold;">Detalle del Vehiculo</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Celula de Identidad:</strong>
                            {{ $vehiculo->cliente->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de Vehiculo:</strong>
                            {{ $vehiculo->tipo_vehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Placa del Vehiculo:</strong>
                            {{ $vehiculo->placa_vehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $vehiculo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $vehiculo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $vehiculo->color }}
                        </div>

                    </div>
                    <div class="card-header">
                         <div class="float-left">
                            <a class="btn btn-primary" style="margin-left:45;" href="{{ route('vehiculos.index') }}"> Regresar</a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
