// Bootstrap modal
$(document).ready(function () {
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
});
function showNhsModal(event) {

    var $button = $(event.relatedTarget);// Button that triggered the modal
    var $title = $button.data('hospital-title');// Extract info from data-* attributes
    var $url = $button.data('hospital-url');// Extract info from data-* attributes
    var modal = $(this);
    modal.find('.modal-title').html($title);
    modal.find('.btn-enquire').attr("href", 'http://' + $url);
}

// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
$('#hc_modal_enquire_nhs').on('show.bs.modal', showNhsModal);
