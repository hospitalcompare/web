// Launch the exit survey
var $feedbackForm = $('#form_exit_survey');
var $feedbackModal = $('#hc_modal_exit_survey');
var showFeedbackForm = Cookies.get('showFeedbackForm');

// Set the showFeedbackForm cookie to false when she is dismissed
$feedbackModal.on('hide.bs.modal', function (e) {
    setFeedbackToFalse();
});

$feedbackForm.on('submit', function () {
    setFeedbackToFalse();
    showAlert('Thank you for giving us your feedback!');
});

// Popup the form if not already dismissed
$(document).mouseleave(function(e) {
    // if (event.clientY <= 0 || event.clientX <= 0 || (event.clientX >= window.innerWidth || event.clientY >= window.innerHeight)) {
    if (e.clientY <= 0 /* && !Cookies.get('showFeedbackForm') */) {
        $feedbackModal.modal('show')
    }
});

function setFeedbackToFalse() {
    Cookies.set('showFeedbackForm', false, {expires: 21});
}

$('#submit_survey').on('click', function(e){
    e.preventDefault();
});
