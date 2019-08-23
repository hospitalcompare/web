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
    jQuery('#back-to-top').on('click',function(){
        jQuery('html, body').animate({
            scrollTop: (jQuery('body').offset().top)
        }, 800);
    });
});

