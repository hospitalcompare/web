// // Open a modal with gmap loaded
// var map = null;
// var myMarker;
// var myLatlng;
//
// function initializeGMap(lat, lng, target) {
//     myLatlng = new google.maps.LatLng(lat, lng);
//
//     var myOptions = {
//         zoom: 14,
//         zoomControl: true,
//         center: myLatlng,
//         mapTypeId: google.maps.MapTypeId.ROADMAP
//     };
//
//     map = new google.maps.Map(document.querySelector(target), myOptions);
//
//     myMarker = new google.maps.Marker({
//         position: myLatlng
//     });
//     myMarker.setMap(map);
// }

// var $mapModal = $('#hc_modal_map');
// // Re-init map before show modal
// $mapModal.on('show.bs.modal', function(event) {
//     var button = $(event.relatedTarget);
//     initializeGMap(button.data('latitude'), button.data('longitude'), '#map');
//     // $("#location-map").css("width", "100%");
//     // $("#map").css("height", "400px");
//     $(this).find('.address').html(button.data('address'));
//     $(this).find('.image').prop('src', button.data('image'));
// });
//
// // Trigger map resize event after modal shown
// $mapModal.on('shown.bs.modal', function() {
//     google.maps.event.trigger(map, "resize");
//     map.setCenter(myLatlng);
// });



// // Maps within the tabs of corporate content
// $('.map-tab').one('show.bs.tab', function(e){
//     var tab = $(e.target);
//     var $targetMap = tab.data('map-target');
//     var $latitude = tab.data('latitude');
//     var $longitude = tab.data('longitude');
//     initializeGMap($latitude, $longitude, $targetMap);
// });


