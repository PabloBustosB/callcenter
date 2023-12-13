<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $planLlamada->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('minutos') }}
            {{ Form::text('minutos', $planLlamada->minutos, ['class' => 'form-control' . ($errors->has('minutos') ? ' is-invalid' : ''), 'placeholder' => 'Minutos']) }}
            {!! $errors->first('minutos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('credito') }}
            {{ Form::text('credito', $planLlamada->credito, ['class' => 'form-control' . ($errors->has('credito') ? ' is-invalid' : ''), 'placeholder' => 'Credito']) }}
            {!! $errors->first('credito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadmb') }}
            {{ Form::number('cantidadmb', $planLlamada->cantidadmb, ['class' => 'form-control' . ($errors->has('cantidadmb') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadmb']) }}
            {!! $errors->first('cantidadmb', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::number('precio', $planLlamada->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>