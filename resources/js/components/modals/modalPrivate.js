// Bootstrap modal
var $privateModal = $('#hc_modal_enquire_private');
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
// Private enquiry form - show title of hospital clicked


$(document).on('show.bs.modal', '#hc_modal_enquire_private', function (event) {

    var $button = $(event.relatedTarget);// Button that triggered the modal
    $('#info_text').text($button.data('modal-text'));

    var hospitalTitle   = $button.data('hospital-title');// Extract info from data-* attributes
    var modal           = $privateModal;
    // var hospitalId      = $button.attr('id').replace('enquire_', '');
    var hospitalId      = $button.data('hospital-id');

    modal.find('.hospital-title').html(hospitalTitle);
    modal.find("input[name='hospital_id']").val(hospitalId);

    // Add class to body
    $body.addClass('enquiry-form-open');
});

var $info = $('#col_additional_information');
// Clear form checkboxes inputs when closing modal
$privateModal.on('hide.bs.modal', function (event) {
    // empty checkbox
    $(this)
        .find('input[type=checkbox]')
        .prop('checked', false);

    // Clear text inputs
    $(this)
        .find('input[type=text]')
        .val('');

    // Close the info box and empty contents
    $info
        .find('textarea')
        .val('');

    var validator = $( "#hc_modal_enquire_private" ).validate();
    validator.resetForm();
});

// Remove the body class
$(document).on('hide.bs.modal', '#hc_modal_enquire_private', function (event) {
    $body.removeClass('enquiry-form-open');
    handleFormReset();
});

