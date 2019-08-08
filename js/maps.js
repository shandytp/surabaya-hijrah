// fungsi initialize untuk mempersiapkan peta
function initMap() {
    var propertiPeta = {
        center: new google.maps.LatLng(-8.5830695, 116.3202515),
        zoom: 9,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

    // membuat Marker
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(-8.5830695, 116.3202515),
        map: peta
    });
}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initMap);