@extends('layouts.app')

@section('template_title')
    {{ $funcionario->name ?? 'Show Funcionario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="max-width: 28rem; margin-left:35%;">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="font-weight:bold;">Detalle Funcionario</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $funcionario->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $funcionario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $funcionario->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Celula de Identidad:</strong>
                            {{ $funcionario->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha de Nacimiento:</strong>
                            {{ $funcionario->fecha_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $funcionario->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $funcionario->direccion }}
                        </div>
                    </div>
                    <div class="card-header">
                        <div class="float-left">
                            <a class="btn btn-primary" style="margin-left:45;" href="{{ route('funcionarios.index') }}"> Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
