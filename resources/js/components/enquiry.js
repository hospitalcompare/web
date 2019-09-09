$(document).ready(function () {
    $("#btn_submit").click(function (event) {

        //stop submit the form, we will post it manually.
        // Get form
        var $form = $('#enquiry_form');

        event.preventDefault();

        // Create an FormData object
        var data = new FormData($form[0]);

        // If you want to add an extra field for the FormData
        // data.append("CustomField", "This is some extra data, testing);

        // disable the submit button
        //$("#btn_submit").prop("disabled", true);

        $form.validate({
            ignore: [],
            rules: {
                title: "required",
                firstName: "required",
                lastName: "required",
                email: {
                    required: true,
                    email: true
                },
                confirm_email: {
                    equalTo: email
                }
            },
            messages: {
                email: "Please enter a valid email address",
                confirm_email: "The passwords entered do not match"
            },
            // JQuery's awesome submit handler.
            submitHandler: function(form) {
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
                        $("#result").text(data);
                        $("#btn_submit").prop("disabled", false);

                    },
                    error: function (e) {
                        $('.alert')
                            .text(e.responseText)
                            .show();
                        // alert(e.responseText);
                        // $("#result").text(e.responseText);
                        console.log("ERROR : ", e);
                        // $("#btn_submit").prop("disabled", false);

                    }
                });
            }
        })
    });

});

