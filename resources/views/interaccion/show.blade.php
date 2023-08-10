@extends('layouts.app')

@section('content')
    <h5 class="modal-title">Detalles del Chat</h5>
    <div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>
                <th>Emisor</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Porcentaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chats as $chat)
                <tr>
                    <td>{{ $chat->emisor }}</td>
                    <td style="white-space: pre-line;">{{ $chat->mensaje }}</td>
                    <td>{{ $chat->fecha }}</td>
                    <td>{{ $chat->porcentaje * 100 . ' %' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
