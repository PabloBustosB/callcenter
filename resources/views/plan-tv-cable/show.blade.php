@extends('layouts.app')

@section('template_title')
    {{ $planTvCable->name ?? "{{ __('Show') Plan Tv Cable" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Plan Tv Cable</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plan-tv-cables.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $planTvCable->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $planTvCable->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
