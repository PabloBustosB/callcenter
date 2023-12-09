@extends('layouts.app')

@section('content')
    <h3 class="modal-title">Detalles del Chat</h3>
    <div class="card mb-4">
        <div class="card-body">
            <form>

                <div class="form-group">
                    <label class="form-label">Nombre:</label>
                    <h2>{{ $datosUsuario->nombre }}</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Fecha de la conversacion</label>
                        <h2>{{ date('d-m-Y', strtotime($datosUsuario->fecha)) }}</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="form-label">Tiempo de la interaccion</label>
                        <h2>{{ $minutosDiferencia }} minutos y {{ $segundosDiferencia }} segundos</h2>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="form-label">% Feedback</label>
                        <h2> {{ $datosUsuario->descripcion }}</h2>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h2>Historial de la conversación</h2>
    <div class="card mb-4">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Emisor</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Porcentaje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($chats as $chat)
                        @if ($chat->emisor == 'Asistente-Virtual')
                            <tr>
                            @elseif ($chat->porcentaje * 100 > 0)
                            <tr class="bg-success">
                            @else
                            <tr class="bg-warning">
                        @endif

                        <td>{{ $chat->emisor }}</td>
                        <td style="white-space: pre-line;">{{ $chat->mensaje }}</td>
                        <td>{{ date('H:i:s', strtotime($chat->fecha)) }}</td>
                        <td>{{ $chat->porcentaje * 100 . ' %' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
