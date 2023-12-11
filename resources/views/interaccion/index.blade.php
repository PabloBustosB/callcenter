@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Interaccion y Chat') }}
                            </span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Fecha</th>
                                        <th>%Satisfaccion</th>
                                        <th>Nombre Cliente</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($satisfacciones as $key => $satisfaccion)
                                        @php
                                            $contador = $key + 1;
                                        @endphp
                                        <tr>
                                            <td>{{ $contador }}</td>
                                            {{-- <td>{{ $satisfaccion->id }}</td> --}}
                                            <td>{{ $satisfaccion->fecha }}</td>
                                            <td style="white-space: pre-line;">{{ $satisfaccion->descripcion }}</td>
                                            <td>{{ $satisfaccion->nombre }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('interacciones.show', $satisfaccion->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
