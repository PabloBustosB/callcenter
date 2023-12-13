<div>
    <div id="map" style="height: 400px;"></div>
    <form method="POST" action="{{ route('ordenTrabajo.update') }}">
        @csrf
        @method('PUT')
        <input hidden="true" type="text" wire:model="latitud" id="latitud">
        <input hidden="true" type="text" wire:model="longitud" id="longitud">
        <button type="submit" class="btn btn-primary">Guardar Ubicacion</button>
    </form>


</div>

@push('scripts')
    <script>
        Livewire.on('updateCoordinates', function (coordinates) {
            document.getElementById('latitud').value = coordinates.latitud;
            document.getElementById('longitud').value = coordinates.longitud;
        });
    </script>
@endpush
