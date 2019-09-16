$(document).ready(function () {
    // Doctor popover event handler
    var $doctor = $('#doctor-popover');
    $doctor.popover({
        container: 'body',
        template: `<div class="popover popover-large popover-doctor">
                        <span class="fa fa-times close" data-dismiss=""></span>
                        <div class="popover-body">
                        </div>
                        <div class="arrow arrow-large">
                        </div>
                    </div>`,
        content: `<p class="bold mb-0">Need some help?</p><p>Here to help you find<br> the best hospital</p><p><a  class="btn btn-go btn-icon" >Let's Go</a></p>`,
        html: true,
        trigger: 'focus',
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
});
