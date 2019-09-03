//BACK TO TOP SCRIPT
//SCROLL EFFECT
// Select all links with hashes
// $(document).ready(function () {
//     $('a[href*="#"]') // Remove links that don't actually link to anything
//         .not('[href="#"]')
//         .not('[href="#0"]')
//         .click(function (event) {
//             // On-page links
//             if (
//                 location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
//                 &&
//                 location.hostname == this.hostname
//             ) {
//                 // Figure out element to scroll to
//                 var target = $(this.hash);
//                 target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//                 // Does a scroll target exist?
//                 if (target.length) {
//                     // Only prevent default if animation is actually gonna happen
//                     event.preventDefault();
//                     $('html, body').animate({
//                         scrollTop: target.offset().top
//                     }, 500, function () {
//                         // Callback after animation
//                         // Must change click!
//                         var $target = $(target);
//                         $target.click();
//                         if ($target.is(":click")) { // Checking if the target was clicked
//                             return false;
//                         } else {
//                             $target.attr('tabindex', '-1'); // Adding tabindex for elements not clickable
//                             $target.click(); // Set click again
//                         }
//                         ;
//                     });
//                 }
//             }
//         }); //end of scroll
// })
$(document).ready(function () {
    //BACK TO TOP
    $('#back-to-top').on('click',function(){
        $('html, body').animate({
            scrollTop: ($('body').offset().top)
        }, 800);
    });

    //Smooth scroll for in page links
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        var hash = this.hash;
        // console.log(hash);
        scrolling = true;
        $('html, body').animate({
            scrollTop: ($(hash).offset().top)
        }, 800);
    });

    // Stuff happening on scroll
    // https://daneden.github.io/animate.css/
//PARALLAX
    var $document = $(document);
    var vp_height = $(window).height();

//Lazy Loader
    var lazyloaders = $('.animated');
    var lazyloaderslength = lazyloaders.length;


    var revealpoint = Math.round(vp_height * 0.1);
    var scrolled_distance = 0;

//STICKY NAV AND PARALLAX HEADER
    var sticknav = function () {

        var bottom_of_window = $(window).scrollTop() + ($(window).height());
        if (lazyloaderslength >= 1) {
            lazyloaders.each(function (i) {
                var top_of_object = $(this).offset().top;
                if (bottom_of_window > (top_of_object + revealpoint)) {
                    $(this).addClass($(this).data('animation'));
                // } else {
                //     $(this).removeClass($(this).data('animation'));
                }
            });
        }

        if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            return true;
        }
    }
    $(window).on('scroll', function () {
        requestAnimationFrame(sticknav)
        // setTimeout(
        //   function () {
        //   }
        //   , 2000);
    });

    window.requestAnimationFrame(sticknav);
});

