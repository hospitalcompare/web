// Special offer slide out in search result item
$('.toggle-special-offer').on('click', function (e) {
    // Get the row that this slide belongs to
    var $parentRow = $(this).parents('.result-item');
    // Get the widths of the columns in the centre section of the results row
    // var $leftWidth = $parentRow.find('.hospital-details').outerWidth();
    // var $rightWidth = $parentRow.find('.result-item-section-2').outerWidth();
    // var $totalWidth = $leftWidth + $rightWidth;
    // console.log($totalWidth);
    $parentRow
        .find('.special-offers-slide')
        // .css('width', $totalWidth)
        .toggleClass('show');
    $parentRow
        .siblings()
        .find('.special-offers-slide')
        .removeClass('show');
})
