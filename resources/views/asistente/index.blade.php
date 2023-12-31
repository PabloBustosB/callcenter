@extends('layouts.app')

@section('content')
    <div id="warning">
        <!-- {{ $idusuario = Auth::user()->id }}
        {{ $usuario = Auth::user()->nombre }} -->
         <h1 style="font-weight:500;">Cargando Speech Recognition Speech SDK...</h1>
    </div>
    <h3 class=" text-center">Bienvenido a Nuestro Asistente Virtual</h3>
    <div class="messaging">
        <div class="inbox_msg">
            <div class="inbox_people">
            </div>
            <div class="mesgs">
                @livewire('burbuja-mensaje', ['idusuario' => $idusuario])
            </div>
        </div>
    </div>
    <script src="https://aka.ms/csspeech/jsbrowserpackageraw"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
