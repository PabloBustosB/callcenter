<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('minutos disponibles') }}
            {{ Form::number('minutos', $planLlamada->minutos, ['class' => 'form-control' . ($errors->has('minutos') ? ' is-invalid' : ''), 'placeholder' => 'Minutos']) }}
            {!! $errors->first('minutos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('credito para todo el mes') }}
            {{ Form::number('credito', $planLlamada->credito, ['class' => 'form-control' . ($errors->has('credito') ? ' is-invalid' : ''), 'placeholder' => 'Credito']) }}
            {!! $errors->first('credito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad megas') }}
            {{ Form::number('cantidadmb', $planLlamada->cantidadmb, ['class' => 'form-control' . ($errors->has('cantidadmb') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadmb']) }}
            {!! $errors->first('cantidadmb', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio Bs.') }}
            {{ Form::number('precio', $planLlamada->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>