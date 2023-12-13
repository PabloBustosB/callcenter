@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Plan Llamada
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">
                            <h2>Actualizar datos del Plan Llamada</h2>
                        </span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('plan-llamadas.update', $planLlamada->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('plan-llamada.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
