// Init the google maps
// Open a modal with gmap loaded
var map = null;
var myMarker;
var myLatlng;

const initializeGMap = function(lat, lng, target) {
    myLatlng = new google.maps.LatLng(lat, lng);

    var myOptions = {
        zoom: 14,
        zoomControl: true,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.querySelector(target), myOptions);

    myMarker = new google.maps.Marker({
        position: myLatlng
    });
    myMarker.setMap(map);
}

export default initializeGMap;
