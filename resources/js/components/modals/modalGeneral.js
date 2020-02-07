// General modal - with web links and phone numbers

var modal = $('#hc_modal_contacts_general, #hc_modal_contacts_private');

function showGeneralModal(event) {
    var privateEnquiryButton = modal.find('#private_enquiry_to_nhs_hospital');

    var button = $(event.relatedTarget);                // Button that triggered the modal
    var title = button.data('hospital-title');          // Extract info from data-* attributes
    var id = button.data('hospital-id');                // Extract info from data-* attributes
    var url = button.data('hospital-url');              // Extract info from data-* attributes
    var tel = button.data('hospital-tel');              // Extract info from data-* attributes
    var tel2 = button.data('hospital-tel-2');           // Extract info from data-* attributes
    var hospitalTypeText = button.data('hospital-type') === 'nhs-hospital' ? 'nhs hospital' : 'private hospital';     // Extract info from data-* attributes
    var hospitalTypeClass = button.data('hospital-type') === 'nhs-hospital' ? 'bg-nhs nhs-hospital' : 'bg-private private-hospital';     // Extract info from data-* attributes
    var picture = button.data('image');                 // Extract info from data-* attributes

    // Hide the private enquiry button again
    privateEnquiryButton
        .addClass('d-none')
    // Clear existing classes from the 'hospital type' tab
    modal.find('#hospital_type').removeClass('private-hospital nhs-hospital bg-nhs bg-private');
    // Clear text from 'hospital type' tab
    modal.find('#hospital_type p').text('');



    // Add hospital title to enquiry button

    // If it's an nhs hospital AND has an email
    if (button.data('hospital-type') === 'nhs-hospital' && button.data('has-email') === 1)
        // Set data attr for hospital title
        privateEnquiryButton
            .removeClass('d-none')
            .data('hospital-title', title);
        // Add hospital id to enquiry button
        privateEnquiryButton
            .data('hospital-id', id);



    modal.find('#hospital_title').html(title);
    modal.find('.btn-enquire').attr("href", 'http://' + url);
    modal.find('#hospital_telephone').text('No number supplied');
    modal.find('#hospital_telephone_2').text('No number supplied');
    if (typeof tel !== "undefined")
        modal.find('#hospital_telephone').text('+44' + tel);
    if (typeof tel2 !== "undefined")
        modal.find('#hospital_telephone_2').text('+44' + tel2);

    modal.find('#hospital_type').addClass(hospitalTypeClass);
    modal.find('#hospital_type p').text(hospitalTypeText);
    modal.find('.modal-enquire-nhs-image').attr("src", picture);
    // console.log('NHS form')
}

// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
modal.on('show.bs.modal', showGeneralModal);

