$(document).ready(function () {
    // Submit enquiry to private hospital
    var $enquiry_form = $('#enquiry_form')
    $enquiry_form.on('submit',function(e) {
        e.preventDefault();
        $.ajax({
            url: 'api/enquiry',
            type: 'POST',
            headers: {
                'Authorization':  'Bearer mBu7IB6nuxh8RVzJ61f4',
            },
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: {'hospital_id': '1'},
            success: function (data) {
                alert('Thanks for your enquiry')
            },
            error: function (data) {
                alert('Something went wrong! Please try again.')
            },
        });
    });
});
