$(document).ready(function () {
    // Doctor popover event handler
    var $doctor = $('#doctor-popover');
    var $message = $('.doctor').data('message');
    var $content = `<p class="bold mb-0">${$message}</p>
                    <p class="mt-3"><a class="btn btn-close btn-close__small btn-teal btn-icon">Close</a></p>`;
    // console.log($content);
    $doctor.popover({
        container: 'body',
        template: `<div class="popover popover-large popover-doctor">
                        <span class="fa fa-times close" data-dismiss=""></span>
                        <div class="popover-body">
                        </div>
                        <div class="arrow arrow-large">
                        </div>
                    </div>`,
        content: $content,
        html: true,
        trigger: 'click',
        placement: 'top'
    });

    var $showDoctor =  Cookies.get('showDoctor');

    if($showDoctor != 'false') {
        // Show the doctor popover after 1 sec delay (if she hasn't already been dismissed
        setTimeout(function () {
            $doctor
                .focus()
        }, 1000);
    }

    $doctor.on('shown.bs.popover', function (e) {
        $('.popover-doctor')
            .find('.btn-go')
            .addClass('popover-open')
    });

    // Set the showDoctor cookie to false when she is dismissed
    $doctor.on('hide.bs.popover', function (e) {
        Cookies.set('showDoctor', 'false');
    });

    // Highlight page sections when hovering over the list items
});
