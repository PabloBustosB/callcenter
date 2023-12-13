document.addEventListener('livewire:load', function () {
    var map;
    var marker;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -17.7862900, lng: -63.1811700},
            zoom: 8
        });

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {lat: -17.7862900, lng: -63.1811700}
        });

        google.maps.event.addListener(marker, 'dragend', function(event) {
            // Actualizar latitud y longitud en el componente de Livewire
            Livewire.emit('updateCoordinates', {
                latitud: marker.getPosition().lat(),
                longitud: marker.getPosition().lng()
            });
        });
    }

    initMap();
});
