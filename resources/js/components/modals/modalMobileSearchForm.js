// Init the select pickers in the popup search form
function initSelectPickers() {
    var modal = $(this);
    // console.log(modal);
    modal.find('.select-picker').selectpicker();
}

// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
// $('#hc_modal_mobile_search').on('show.bs.modal', initSelectPickers);
$(document).on('show.bs.modal','#hc_modal_mobile_search', initSelectPickers);
