@extends('layouts.app')

@section('template_title')
    Create Funcionario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="max-width: 28rem; margin-left:35%;">
                    <div class="card-header" style="font-weight:bold; text-align: center;">
                        <span class="card-title">Crear Funcionario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('funcionarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('funcionario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
