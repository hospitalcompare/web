// // Make the search header sticky on scroll
// $(document).ready(function () {
//     var $stickyThing = $('#sort_categories_parent');
//     var $top = $stickyThing.offset().top;
//
//     if ($stickyThing.length > 0) {
//
//         function stickyFunc() {
//
//             if ($(window).scrollTop() > $top) {
//                 $('body').addClass("sticky");
//             } else {
//                 $('body').removeClass("sticky");
//             }
//         }
//
//         $(window).on('scroll', function(){
//             requestAnimationFrame(stickyFunc);
//         });
//     }
//
// });
//

// v3
stickybits('.sort-categories-parent', {useStickyClasses: true});
