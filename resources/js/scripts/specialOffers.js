// Special offer tabs in solutions bar
$(document).ready(function () {
    $('.special-offer-tab .toggle-special-offer').on('click', function (e) {
        $(this).parents('.special-offer-tab')
            .toggleClass('open')
            .find('.special-offer-body').slideToggle();

        console.log(  );
        // $(this).parents('.special-offer-tab')
        //     .find('.open-text').show();
    })
})
