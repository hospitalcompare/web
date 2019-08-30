// Bootstrap modal
$(document).ready(function () {
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    $('#hc_modal_enquire_nhs, #hc_modal_special').on('show.bs.modal', function (event) {
        var $button = $(event.relatedTarget);// Button that triggered the modal
        var content = $button.data('content');// Extract info from data-* attributes
        var modal = $(this);
        modal.find('.modal-content').html(content);
    });

    // Private enquiry form - show title of hospital clicked
    $('#hc_modal_enquire_private').on('show.bs.modal', function (event) {
        var $button = $(event.relatedTarget);// Button that triggered the modal
        // Pre-check the checkboxes
        if($button.hasClass('enquire-prices')){
            $('#prices').prop('checked', true)
        }
        if($button.hasClass('enquire-times')){
            $('#waiting_times').prop('checked', true)
        }

        var hospitalTitle = $button.data('hospital-title');// Extract info from data-* attributes
        var modal = $(this);
        var hospitalId = $button.attr('id').replace('modal_button_private_enquiry_', '');
        modal.find('.hospital-title').html(hospitalTitle);
        modal.find("input[name='hospital_id']").val(hospitalId);
    });


});
