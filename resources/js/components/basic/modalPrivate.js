// Bootstrap modal
$(document).ready(function () {
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
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

        var $button         = $(event.relatedTarget);// Button that triggered the modal
        var hospitalTitle   = $button.data('hospital-title');// Extract info from data-* attributes
        var modal           = $(this);
        var hospitalId      = $button.attr('id').replace('enquire_', '');

        modal.find('.hospital-title').html(hospitalTitle);
        modal.find("input[name='hospital_id']").val(hospitalId);
    });

    var $info = $('#col_additional_information');
    // Clear form checkboxes inputs when closing modal
    $('#hc_modal_enquire_private').on('hide.bs.modal', function (event) {
        $(this)
            .find('input[type=checkbox]')
            .prop('checked', false);
        // Close the info box and empty contents
        $info
            .removeClass('open')
            .find('textarea')
            .val('');
    });

    // Toggle the additional info box when clicking on the 'other' checkbox
    $('#other').on('click', function(){

        $info.toggleClass('open');
        // if($("#other").is(':checked')) {
        //     $info.addClass()
        // }
    })


});
