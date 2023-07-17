@extends('layouts.app')

@section('content')
    {{-- {{ $datos }} --}}
    <h3 class=" text-center">Bienvenido a Nuestro Asistente Virtual</h3>
    <div class="messaging">
        <div class="inbox_msg">
            <div class="inbox_people">
            </div>
            <div class="mesgs">
                @livewire('burbuja-mensaje')
            </div>
        </div>
    </div>
@endsection
