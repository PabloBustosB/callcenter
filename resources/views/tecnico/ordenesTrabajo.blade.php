@extends('layouts.app')

@section('content')
<h1>Ubicaciones</h1>
<div class="row row-cols-1 row-cols-md-2">
        @foreach ($ordenesTrabajo as $orden)
                <x-card-modal
                    :id="$orden->id"
                    :visita="$orden->fecha_visita"
                    :problema="$orden->problema"
                    :estado="$orden->estado"
                    :descripcion="$orden->descripcion"
                    :longitud="$orden->longitud"
                    :latitud="$orden->latitud"
                />
        @endforeach
</div>
@endsection
