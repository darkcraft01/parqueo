@extends('layouts.app')

@section('template_title')
    Create Vehiculo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="max-width: 28rem; margin-left:35%;">
                    <div class="card-header" style="font-weight:bold; text-align: center;">
                        <span class="card-title">Crear Vehiculo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vehiculos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('vehiculo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
