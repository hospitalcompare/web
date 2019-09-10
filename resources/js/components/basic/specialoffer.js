// Special offer slide out in search result item
$(document).ready(function () {
    $('.toggle-special-offer').on('click', function (e) {
        $(this).parents('.sort-categories')
            .find('.special-offers-slide')
            .toggleClass('show')
        $(this).parents('.sort-categories')
            .siblings()
            .find('.special-offers-slide')
            .removeClass('show')
    })
})
