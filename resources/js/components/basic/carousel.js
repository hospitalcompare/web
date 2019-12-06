var isCarouselPaused = false;

$( window ).on( 'load resize', function() {
    if ( document.documentElement.clientWidth <= 767 ) {
        $('.carousel-mobile').carousel({
            touch: true
        });
        // if ( !isCarouselPaused ) {
        //     isCarouselPaused = true;
        // }
    } else {
        $('.carousel-mobile').carousel('pause');
        // if ( isCarouselPaused ) {
        //
        //     isCarouselPaused = false;
        // }
    }
});
