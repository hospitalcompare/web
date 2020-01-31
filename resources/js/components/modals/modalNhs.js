// Bootstrap modal
function showNhsModal(event) {

    var button     = $(event.relatedTarget);// Button that triggered the modal
    var title      = button.data('hospital-title');// Extract info from data-* attributes
    var url        = button.data('hospital-url');// Extract info from data-* attributes
    var tel        = button.data('hospital-tel');// Extract info from data-* attributes
    var picture    = button.data('image');// Extract info from data-* attributes
    var modal      = $(this);

    modal.find('.modal-title').html(title);
    modal.find('.btn-enquire').attr("href", 'http://' + url);

    if(typeof tel !== "undefined")
        modal.find('#hospital_telephone').text('+44' + tel);
    else
        modal.find('#hospital_telephone').text('No number supplied');



    modal.find('.modal-enquire-nhs-image').attr("src", picture);
    // console.log('NHS form')
}

// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
$('#hc_modal_enquire_general').on('show.bs.modal', showNhsModal);

$('.test-page #hc_modal_enquire_general').modal('show');

