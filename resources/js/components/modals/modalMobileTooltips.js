// Bootstrap modal
function showMobileInfoModal(event) {
    // Clear the existing text
    $('.modal-body').html('');
    var $button = $(event.relatedTarget);// Button that triggered the modal
    var content = $button.data('modal-text');// Extract info from data-* attributes
    var modal = $(this);
    modal.find('.modal-body').html(content);
}

// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
$('#hc_modal_mobile_tooltip').on('show.bs.modal', showMobileInfoModal);
