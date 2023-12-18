<!-- Card -->
<div class="col mb-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Fecha de visita: {{ $visita }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $estado }}</h6>
            <p class="card-text">{{ $problema }}</p>
            <!-- Boton Modal-->
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#ubicacionModal{{ $id }}">
                Ver Ubicación
            </button>

            <!-- Modal -->
            <div class="modal fade" id="ubicacionModal{{ $id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detalles de Ubicación</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                                    aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenedor para el mapa -->
                            <div id="map{{ $id }}" style="height: 300px;"></div>
                            <script>
                                var map{{ $id }};
                                var marker{{ $id }};
                                map = new google.maps.Map(document.getElementById('map{{ $id }}'), {
                                    center: {
                                        lat: {{ $latitud }},
                                        lng: {{ $longitud }}
                                    },
                                    zoom: 16
                                });

                                marker{{ $id }} = new google.maps.Marker({
                                    map: map,
                                    draggable: false,
                                    animation: google.maps.Animation.DROP,
                                    position: {
                                        lat: {{ $latitud }},
                                        lng: {{ $longitud }}
                                    }
                                });
                            </script>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
