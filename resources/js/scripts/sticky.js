// Make the search header sticky on scroll
$(document).ready(function(){
    var $stickyThing = $('#sort_categories_parent');
    console.log($stickyThing.length);

    if ($stickyThing.length > 0) {
        $(window).on('scroll', function () {
            var $top = $stickyThing.offset().top;

            if ($(window).scrollTop() > $top) {
                $stickyThing.addClass("sticky");
            } else {
                $stickyThing.removeClass("sticky");
            }

        });

    }

})

