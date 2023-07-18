@extends('layouts.app')

@section('content')
    {{-- {{ $datos }} --}}
    <div id="warning">
        <h1 style="font-weight:500;">Speech Recognition Speech SDK not found (microsoft.cognitiveservices.speech.sdk.bundle.js missing).</h1>
    </div>
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
    <script src="https://aka.ms/csspeech/jsbrowserpackageraw"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
