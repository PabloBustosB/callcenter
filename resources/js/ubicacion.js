var map;
var marker;

document.addEventListener('livewire:load', function() {
    Livewire.on('mapaCargado', function() {
        inicializarMapa();
    });
});

function inicializarMapa() {
    // // Configuración y código para inicializar el mapa
    // var mapOptions = {
    //     center: {
    //         lat: -17.7862900,
    //         lng: -63.1811700
    //     },
    //     zoom: 8
    // };

    // var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    // var marker = new google.maps.Marker({
    //     map: map,
    //     draggable: true,
    //     animation: google.maps.Animation.DROP,
    //     position: {
    //         lat: -17.7862900,
    //         lng: -63.1811700
    //     }
    // });

    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -17.7862900, lng: -63.1811700},
        zoom: 10
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