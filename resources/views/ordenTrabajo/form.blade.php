<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha_visita') }}
            {{ Form::text('fecha_visita', $ordentrabajo->fecha_visita, ['class' => 'form-control' . ($errors->has('fecha_visita') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Visita']) }}
            {!! $errors->first('fecha_visita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('problema') }}
            {{ Form::text('problema', $ordentrabajo->problema, ['class' => 'form-control' . ($errors->has('problema') ? ' is-invalid' : ''), 'placeholder' => 'Problema']) }}
            {!! $errors->first('problema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('resultado') }}
            {{ Form::text('resultado', $ordentrabajo->resultado, ['class' => 'form-control' . ($errors->has('resultado') ? ' is-invalid' : ''), 'placeholder' => 'Resultado']) }}
            {!! $errors->first('resultado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $ordentrabajo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $ordentrabajo->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_hora_visita_llegada') }}
            {{ Form::text('fecha_hora_visita_llegada', $ordentrabajo->fecha_hora_visita_llegada, ['class' => 'form-control' . ($errors->has('fecha_hora_visita_llegada') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Hora Visita Llegada']) }}
            {!! $errors->first('fecha_hora_visita_llegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_hora_visita_salida') }}
            {{ Form::text('fecha_hora_visita_salida', $ordentrabajo->fecha_hora_visita_salida, ['class' => 'form-control' . ($errors->has('fecha_hora_visita_salida') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Hora Visita Salida']) }}
            {!! $errors->first('fecha_hora_visita_salida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tecnico') }}
            {{ Form::text('id_tecnico', $ordentrabajo->id_tecnico, ['class' => 'form-control' . ($errors->has('id_tecnico') ? ' is-invalid' : ''), 'placeholder' => 'Id Tecnico']) }}
            {!! $errors->first('id_tecnico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_interaccion') }}
            {{ Form::text('id_interaccion', $ordentrabajo->id_interaccion, ['class' => 'form-control' . ($errors->has('id_interaccion') ? ' is-invalid' : ''), 'placeholder' => 'Id Interaccion']) }}
            {!! $errors->first('id_interaccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>