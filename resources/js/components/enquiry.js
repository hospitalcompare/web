$(document).ready(function () {

    $.validator.addMethod('phoneUK', function(phone_number, element) {
            return this.optional(element) || phone_number.length > 9 &&
                phone_number.match(/^(\(?(0|\+44)[1-9]{1}\d{1,4}?\)?\s?\d{3,4}\s?\d{3,4})$/);
        }, 'Please specify a valid phone number'
    );

    // Get form
    var $form = $('#enquiry_form');

    // Only run if the page contains the enquiry form
    if($form.length > 0) {

        $form.validate({
            rules: {
                title: "required",
                firstName: "required",
                lastName: "required",
                date_of_birth: "required",
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
                email: "Please enter a valid email address",
                confirm_email: "The passwords entered do not match"
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
            // JQuery's awesome submit handler.
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


});

