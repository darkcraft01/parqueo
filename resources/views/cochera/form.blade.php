<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('numero_cochera') }}
            {{ Form::text('numero_cochera', $cochera->numero_cochera, ['class' => 'form-control' . ($errors->has('numero_cochera') ? ' is-invalid' : ''), 'placeholder' => 'Numero Cochera']) }}
            {!! $errors->first('numero_cochera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medida') }}
            {{ Form::text('medida', $cochera->medida, ['class' => 'form-control' . ($errors->has('medida') ? ' is-invalid' : ''), 'placeholder' => 'Medida']) }}
            {!! $errors->first('medida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $cochera->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tiempo') }}
            {{ Form::text('tiempo', $cochera->tiempo, ['class' => 'form-control' . ($errors->has('tiempo') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo']) }}
            {!! $errors->first('tiempo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_espacio') }}
            {{ Form::text('tipo_espacio', $cochera->tipo_espacio, ['class' => 'form-control' . ($errors->has('tipo_espacio') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Espacio']) }}
            {!! $errors->first('tipo_espacio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $cochera->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary my-3">Registrar</button>
        <a class="btn btn-secondary" style="margin-left:2%;" href="{{ route('cocheras.index') }}"> Regresar</a>
    </div>
</div>