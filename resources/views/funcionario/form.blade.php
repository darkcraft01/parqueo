<meta charset="utf-8">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::select('cargo_id', $usuarios, $funcionario->cargo_id, ['class' => 'form-control' . ($errors->has('cargo_id') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Cargo']) }}
            {!! $errors->first('cargo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $funcionario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'onkeypress' => 'return (event.charCode >= 65 && event.charCode <= 90)||(event.charCode >= 97 && event.charCode <= 122)||(event.charCode == 209)||(event.charCode == 241)||(event.charCode == 32)', 'placeholder' => 'Ingrese su Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $funcionario->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'onkeypress' => 'return (event.charCode >= 65 && event.charCode <= 90)||(event.charCode >= 97 && event.charCode <= 122)||(event.charCode == 209)||(event.charCode == 241)||(event.charCode == 32)', 'placeholder' => 'Ingrese su Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celula de identidad') }}
            {{ Form::text('ci', $funcionario->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'maxlength' => '8','onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57)', 'placeholder' => 'Ingrese su CI']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha de nacimiento') }}
            <div class="input-group date" id="datepicker"> 
            {{ Form::text('fecha_nac', $funcionario->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
                <span class="input-group-append">
                    <span class="input-group-text bg-white">
                        <i class="fa fa-calendar"></i>
                    </span>
                </span>
            </div>  
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $funcionario->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'maxlength' => '12','onkeypress' => 'return (event.charCode >= 48 && event.charCode <= 57)', 'placeholder' => 'Ingrese su Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $funcionario->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario') }}
            {{ Form::text('horario', $funcionario->horario, ['class' => 'form-control' . ($errors->has('horario') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Horario']) }}
            {!! $errors->first('horario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        echo Form::checkbox('name', 'value');
        <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        </select>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary my-3">Registrar</button>
            <a class="btn btn-secondary" style="margin-left:2%;" href="{{ route('funcionarios.index') }}"> Regresar</a>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy'  
        });
    });
</script>