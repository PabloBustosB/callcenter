@extends('layouts.app')

@section('template_title')
    {{ $planinternet->name ?? "{{ __('Show') Planinternet" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Planinternet</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('planinternets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $planinternet->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Velocidad:</strong>
                            {{ $planinternet->velocidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $planinternet->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
