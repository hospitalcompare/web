// Special offer tabs in solutions bar
$(document).ready(function () {
    $('.special-offer-tab .special-offer-header').on('click', function (e) {
        $(this).parents('.special-offer-tab')
            .toggleClass('open')
            .find('.special-offer-body').slideToggle();
    })
});
