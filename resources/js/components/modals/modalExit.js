// General modal - with web links and phone numbers

var modal = $('#hc_modal_enquire_general');
function showGeneralModal(event) {

// Bootstrap modal
    var button                  = $(event.relatedTarget);           // Button that triggered the modal
    var title                   = button.data('hospital-title');    // Extract info from data-* attributes
    var url                     = button.data('hospital-url');      // Extract info from data-* attributes
    var tel                     = button.data('hospital-tel');      // Extract info from data-* attributes
    var hospitalTypeText        = button.data('hospital-type') === 'nhs-hospital' ? 'nhs hospital' : 'private hospital';     // Extract info from data-* attributes
    var hospitalTypeClass       = button.data('hospital-type') === 'nhs-hospital' ? 'bg-nhs nhs-hospital' : 'bg-private private-hospital' ;     // Extract info from data-* attributes
    var picture                 = button.data('image');             // Extract info from data-* attributes

    modal.find('#hospital_title').html(title);
    modal.find('.btn-enquire').attr("href", 'http://' + url);

    if(typeof tel !== "undefined")
        modal.find('#hospital_telephone').text('+44' + tel);
    else
        modal.find('#hospital_telephone').text('No number supplied');

    modal.find('#hospital_type').addClass(hospitalTypeClass);
    modal.find('#hospital_type p').text(hospitalTypeText);



    modal.find('.modal-enquire-nhs-image').attr("src", picture);
    // console.log('NHS form')
}

function hideGeneralModal(event) {
    // Clear text and classes
    modal.find('#hospital_type p').text('');
    modal.find('#hospital_type').removeClass('private-hospital nhs-hospital');
}

// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
modal.on('show.bs.modal', showGeneralModal);
modal.on('hide.bs.modal', hideGeneralModal);

$('.test-page #hc_modal_exit_survey').modal('show');

