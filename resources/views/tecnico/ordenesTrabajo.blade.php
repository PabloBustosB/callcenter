@extends('layouts.app')

@section('content')
    <h1>Trabajos pendientes</h1>
    {{-- <div class="row row-cols-6 ">
        @foreach ($ordenesTrabajo as $orden)
            <x-card-modal :id="$orden->id" :visita="$orden->fecha_visita" :problema="$orden->problema" :estado="$orden->estado" :descripcion="$orden->descripcion"
                :longitud="$orden->longitud" :latitud="$orden->latitud" />
        @endforeach
    </div> --}}
    <div class="container">
        @foreach ($ordenesTrabajo->chunk(4) as $chunk)
            <div class="row row-cols-4">
                @foreach ($chunk as $orden)
                    <div class="col">
                        <x-card-modal :id="$orden->id" :visita="$orden->fecha_visita" :problema="$orden->problema" :estado="$orden->estado" :descripcion="$orden->descripcion"
                            :longitud="$orden->longitud" :latitud="$orden->latitud" />
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    
@endsection
