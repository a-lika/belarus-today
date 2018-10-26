$COOL = 26;
$ROWS = 24;
$ZOOM = 5;

var city_map_Minsk;

function initMapMinsk() {
    city_map_Minsk = new google.maps.Map(document.getElementById('city_map_Minsk'), {
        center: {
            lat: 26,
            lng: 24
        },
        zoom: 6
    });

    var marker_Minsk = new google.maps.Marker({
        position: {
            lat: 26,
            lng: 24
        },
        map: city_map_Minsk,
        icon: 'images/mark/mark.png',
        animation: google.maps.Animation.DROP
    });
};
