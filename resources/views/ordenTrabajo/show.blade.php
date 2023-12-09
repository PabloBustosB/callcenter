@extends('layouts.app')

@section('template_title')
    {{ $ordentrabajo->name ?? "{{ __('Show') Ordentrabajo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ordentrabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordentrabajos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Visita:</strong>
                            {{ $ordentrabajo->fecha_visita }}
                        </div>
                        <div class="form-group">
                            <strong>Problema:</strong>
                            {{ $ordentrabajo->problema }}
                        </div>
                        <div class="form-group">
                            <strong>Resultado:</strong>
                            {{ $ordentrabajo->resultado }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $ordentrabajo->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $ordentrabajo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora Visita Llegada:</strong>
                            {{ $ordentrabajo->fecha_hora_visita_llegada }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora Visita Salida:</strong>
                            {{ $ordentrabajo->fecha_hora_visita_salida }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tecnico:</strong>
                            {{ $ordentrabajo->id_tecnico }}
                        </div>
                        <div class="form-group">
                            <strong>Id Interaccion:</strong>
                            {{ $ordentrabajo->id_interaccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
