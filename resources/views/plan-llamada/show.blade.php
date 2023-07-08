@extends('layouts.app')

@section('template_title')
    {{ $planLlamada->name ?? "{{ __('Show') Plan Llamada" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Plan Llamada</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plan-llamadas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Minutos:</strong>
                            {{ $planLlamada->minutos }}
                        </div>
                        <div class="form-group">
                            <strong>Credito:</strong>
                            {{ $planLlamada->credito }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadmb:</strong>
                            {{ $planLlamada->cantidadmb }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $planLlamada->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
