// Launch the exit survey
var $feedbackForm = $('#form_exit_survey');
var $feedbackModal = $('#hc_modal_exit_survey');
var showFeedbackForm = Cookies.get('showFeedbackForm');

// Set the showFeedbackForm cookie to false when she is dismissed
$feedbackModal.on('hide.bs.modal', function (e) {
    setFeedbackToFalse();
});

// Popup the form if not already dismissed
$(document).mouseleave(function (e) {
    // if (event.clientY <= 0 || event.clientX <= 0 || (event.clientX >= window.innerWidth || event.clientY >= window.innerHeight)) {
    if (e.clientY <= 0 && !Cookies.get('showFeedbackForm')) {
        $feedbackModal.modal('show')
    }
});

// Set the cookie to stop further popups
function setFeedbackToFalse() {
    Cookies.set('showFeedbackForm', false, {expires: 21});
}


function ajaxSurvey() {
    var data = new FormData($feedbackForm[0]);

    $.ajax({
        url: '/api/survey',
        type: "POST",
        enctype: 'multipart/form-data',
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        timeout: 600000,
        headers: {
            'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4',
        },
        dataType: "json",
        success: function (data) {
            //Check if we have at least one result in our data
            if (!$.isEmptyObject(data)) {
                showAlert('Thanks for sharing your feedback!')
            } else {
                showAlert('Something went wrong! Please try again.', false);
            }
        },
        error: function (data) {
            showAlert('Something went wrong! Please try again.', false)
        },
    })
}

$feedbackForm.on('submit', function (e) {
    e.preventDefault();
    // Submit the form
    ajaxSurvey();
    // Set cookie to prevent further popups
    setFeedbackToFalse();
    // Hide the modal
    $feedbackModal.modal('hide');
    // Clear the inputs
    $('input[name=rating]:checked', $feedbackForm).prop('checked', false);
    $('#further_feedback').val('');
});


