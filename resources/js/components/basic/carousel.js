
var isCarouselPaused = false;

$( window ).on( 'load resize', function() {
    if ( document.documentElement.clientWidth >= 992 ) {
        if ( !isCarouselPaused ) {
            $( '.carousel-mobile' ).carousel('pause');
            isCarouselPaused = true;
        }
    } else {
        if ( isCarouselPaused ) {
            $( '.carousel-mobile' ).carousel('cycle');
            isCarouselPaused = false;
        }
    };
});


// Dr S tour carousel modal schtooooff
$('#carousel_tour').on('slid.bs.carousel', function (event) {
    // do something…
    var nextSlideNo = event.to;
    nextSlideNo += 1;
    $('#slide_number span').text(nextSlideNo);
});
