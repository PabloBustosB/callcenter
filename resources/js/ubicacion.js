// var map;
// var marker;

//         function initMap() {
//             map = new google.maps.Map(document.getElementById('map'), {
//                 center: {lat: -17.7862900, lng: -63.1811700},
//                 zoom: 8
//             });

//             marker = new google.maps.Marker({
//                 map: map,
//                 draggable: true,
//                 animation: google.maps.Animation.DROP,
//                 position: {lat: -17.7862900, lng: -63.1811700}
//             });

//             google.maps.event.addListener(marker, 'dragend', function(event) {
//                 document.getElementById('latitud').value = marker.getPosition().lat();
//                 document.getElementById('longitud').value = marker.getPosition().lng();
//             });
//         }

//         document.addEventListener('DOMContentLoaded', function () {
//             initMap();
//         });
// En tu archivo de script JavaScript

document.addEventListener('livewire:load', function () {
    var map;
    var marker;

    Livewire.on('inicializarMapa', function () {
        inicializarMapa();
    });

    // Función para inicializar el mapa
    function inicializarMapa() {
        // Limpiar el contenedor del mapa antes de inicializarlo
        $('#map').html('');

        // Inicializar el mapa utilizando Google Maps
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
            document.getElementById('latitud').value = marker.getPosition().lat();
            document.getElementById('longitud').value = marker.getPosition().lng();
        });
    }

    // Asegúrate de que el mapa se destruya al cerrar el modal
    $('#ubicacionModal').on('hidden.bs.modal', function () {
        if (map) {
            google.maps.event.clearInstanceListeners(map);
            google.maps.event.clearInstanceListeners(marker);
            marker.setMap(null);
            map = null;
        }
    });

    // Inicializar el mapa al cargar la página
    inicializarMapa();
});

