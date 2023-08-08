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

                             <div class="float-right">
                                <a href="{{ route('tecnicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar chat') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

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
                                    @foreach ($satisfacciones as $satisfaccion)
                                    <tr>
                                        <td>{{ $satisfaccion->id }}</td>
                                        <td>{{ $satisfaccion->fecha }}</td>
                                        <td style="white-space: pre-line;">{{ $satisfaccion->descripcion }}</td>
                                        <td>{{ $satisfaccion->nombre }}</td>
                                        <td>
                                           @livewire('chat-modal', ['satisfaccionId' => $satisfaccion->id])
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

