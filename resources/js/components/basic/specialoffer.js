// Bootstrap modal
$(document).ready(function () {
    $('.toggle-special-offer').on('click', function (e) {
        console.log('toggle');
        $(this).parents('.sortCategories').find('.special-offers-slide').toggleClass('show')
    })
})
