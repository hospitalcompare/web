//BACK TO TOP
// $('#back-to-top').on('click',function(){
//     console.log($('body').offset().top)
//     $('html, body').animate({
//         scrollTop: ($('body').offset().top)
//     }, 800);
// });

//Smooth scroll for in page links
$('a[href^="#"]')
    .not('.nav-link')
    .not('.carousel-control')
    .on('click', function (e) {
        e.preventDefault();
        var hash = this.hash;
        scrolling = true;
        $('html, body').animate({
            scrollTop: ($(hash).offset().top)
        }, 800);
    });

// Stuff happening on scroll
// https://daneden.github.io/animate.css/
//PARALLAX
var vp_height = $(window).height();

//Lazy Loader
var lazyloaders = $('.animated');
var lazyloaderslength = lazyloaders.length;


var revealpoint = Math.round(vp_height * 0.2);
var scrolled_distance = 0;

//STICKY NAV AND PARALLAX HEADER
var sticknav = function () {

    var bottom_of_window = $(window).scrollTop() + ($(window).height());
    if (lazyloaderslength >= 1) {
        lazyloaders.each(function (i) {
            var top_of_object = $(this).offset().top;
            if (bottom_of_window > (top_of_object + revealpoint)) {
                $(this)
                    .addClass($(this)
                    .data('animation'));
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
