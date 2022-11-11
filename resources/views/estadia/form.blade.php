<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cochera_id') }}
            {{ Form::select('cochera_id', $cocheras, $estadia->cochera_id, ['class' => 'form-control' . ($errors->has('cochera_id') ? ' is-invalid' : ''), 'placeholder' => 'Cochera Id']) }}
            {!! $errors->first('cochera_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculo_id') }}
            {{ Form::select('vehiculo_id', $vehiculos, $estadia->vehiculo_id, ['class' => 'form-control' . ($errors->has('vehiculo_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Id']) }}
            {!! $errors->first('vehiculo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::select('usuario_id', $users, $estadia->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_id') }}
            {{ Form::select('precio_id', $cocheraprecio, $estadia->precio_id, ['class' => 'form-control' . ($errors->has('precio_id') ? ' is-invalid' : ''), 'placeholder' => 'Precio Id']) }}
            {!! $errors->first('precio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $estadia->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ingreso') }}
            {{ Form::text('fecha_ingreso', $estadia->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_ingreso') }}
            {{ Form::text('hora_ingreso', $estadia->hora_ingreso, ['class' => 'form-control' . ($errors->has('hora_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Hora Ingreso']) }}
            {!! $errors->first('hora_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_salida') }}
            {{ Form::text('fecha_salida', $estadia->fecha_salida, ['class' => 'form-control' . ($errors->has('fecha_salida') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Salida']) }}
            {!! $errors->first('fecha_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_salida') }}
            {{ Form::text('hora_salida', $estadia->hora_salida, ['class' => 'form-control' . ($errors->has('hora_salida') ? ' is-invalid' : ''), 'placeholder' => 'Hora Salida']) }}
            {!! $errors->first('hora_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>