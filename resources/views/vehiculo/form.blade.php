<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('Celula_de_Identidad_del_cliente') }}
            {{ Form::select('cliente_id', $clientes, $vehiculo->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione su CI']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_de_vehiculo') }}
            {{ Form::text('tipo_vehiculo', $vehiculo->tipo_vehiculo, ['class' => 'form-control' . ($errors->has('tipo_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Tipo de Vehiculo']) }}
            {!! $errors->first('tipo_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa_del_vehiculo') }}
            {{ Form::text('placa_vehiculo', $vehiculo->placa_vehiculo, ['class' => 'form-control' . ($errors->has('placa_vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Placa del Vehiculo']) }}
            {!! $errors->first('placa_vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $vehiculo->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $vehiculo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese su Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $vehiculo->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary my-3">Registrar</button>
          <a class="btn btn-secondary" style="margin-left:2%;" href="{{ route('vehiculos.index') }}"> Regresar</a>
    </div>
</div>