// Open a modal with gmap loaded
$(document).ready(function() {

    var initMap = function(){
        console.log('Maps init')
    }
    var map = null;
    var myMarker;
    var myLatlng;

    function initializeGMap(lat, lng) {
        myLatlng = new google.maps.LatLng(lat, lng);

        var myOptions = {
            zoom: 14,
            zoomControl: true,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById("map"), myOptions);

        myMarker = new google.maps.Marker({
            position: myLatlng
        });
        myMarker.setMap(map);
    }

    // Re-init map before show modal
    $('#hc_modal_map').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        initializeGMap(button.data('latitude'), button.data('longitude'));
        // $("#location-map").css("width", "100%");
        $("#map").css("height", "263px");
    });

    // Trigger map resize event after modal shown
    $('#hc_modal_map').on('shown.bs.modal', function() {
        google.maps.event.trigger(map, "resize");
        map.setCenter(myLatlng);
    });
});


