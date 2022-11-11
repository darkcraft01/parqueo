@extends('layouts.app')

@section('template_title')
    {{ $cochera->name ?? 'Show Cochera' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="max-width: 28rem; margin-left:35%;">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title" style="font-weight:bold;" >Detalle Cochera</span>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numero Cochera:</strong>
                            {{ $cochera->numero_cochera }}
                        </div>
                        <div class="form-group">
                            <strong>Medida:</strong>
                            {{ $cochera->medida }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $cochera->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Espacio:</strong>
                            {{ $cochera->tipo_espacio }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $cochera->estado }}
                        </div>

                    </div>
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cocheras.index') }}"> Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
