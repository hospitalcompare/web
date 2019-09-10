$(document).ready(function () {

    // Add a custom validation to the jquery validate object - validate phone number field as UK format
    $.validator.addMethod('phoneUK', function(phone_number, element) {
            return this.optional(element) || phone_number.length > 9 &&
                phone_number.match(/^(\(?(0|\+44)[1-9]{1}\d{1,4}?\)?\s?\d{3,4}\s?\d{3,4})$/);
        }, 'Please specify a valid phone number'
    );

    $.validator.addMethod("dateFormat", function(date, element) {
            // put your own logic here, this is just a (crappy) example
            return date.match(/^\d\d\d\d?\/\d\d?\/\d\d$/);
        },
        "Please enter a date in the format yyyy/mm/dd."
    );

    // Get form
    var $form = $('#enquiry_form');

    // Only run if the page contains the enquiry form
    if($form.length > 0) {

        // jquery validate options
        $form.validate({
            rules: {
                title: "required",
                firstName: "required",
                lastName: "required",
                date_of_birth: {
                    required: true,
                    dateFormat: true
                    // dateNL: true
                },
                email: {
                    required: true,
                    email: true
                },
                confirm_email: {
                    required: true,
                    equalTo: email
                },
                phone_number: {
                    required: true,
                    phoneUK: true
                },
                postcode: "required",
                procedure_id: "required"
            },
            messages: {
                title: "Please select your title",
                firstName: "Please enter your first name",
                lastName: "Please enter your surname",
                // date_of_birth: "Please enter your date of birth",
                email: "Please enter a valid email address",
                confirm_email: "The passwords entered do not match",
                phone_number: "Please enter your contact number",
                postcode: "Please enter a valid UK postcode",
                procedure_id: "Please select the procedure required",
                gdpr: "Please confirm you consent to our terms and conditions"
            },
            errorPlacement: function(error, element) {
                var customError = $([
                    '<span class="invalid-feedback d-block">',
                    '  <span class="mb-0 d-block">',
                    '  </span>',
                    '</span>'
                ].join(""));

                // Add `form-error-message` class to the error element
                error.addClass("form-error-message");

                // Insert it inside the span that has `mb-0` class
                error.appendTo(customError.find("span.mb-0"));

                // Insert your custom error
                customError.insertBefore( element );
            },
            // Submit handler - what happens when form submitted
            submitHandler: function(form) {
                // Create an FormData object
                var data = new FormData($form[0]);

                // If you want to add an extra field for the FormData
                // data.append("CustomField", "This is some extra data, testing);

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/api/enquiry",
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    headers: {
                        'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4',
                    },
                    success: function (data) {
                        alert('Thanks, your enquiry has been submitted');
                        $('#hc_modal_enquire_private').modal('hide');
                        // $("#btn_submit").prop("disabled", false);

                    },
                    error: function (e) {
                        // $('.alert')
                        //     .html('<pre>' + e.responseText + '</pre>')
                        //     .show();
                        console.log("ERROR : ", e.responseText);
                        // $("#btn_submit").prop("disabled", false);

                    }
                });
            }
        })
    }

    // Send the form on click of the button
    $('#btn_submit').on('click', function(e){
        e.preventDefault();
        $(this)
            .parents('form')
            .submit();
    })
});

