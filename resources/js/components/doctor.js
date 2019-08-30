$(document).ready(function () {
    // Doctor popover event handler
    $('#doctor-popover').popover({
        container: 'body',
        template: `<div class="popover popover-large">
                        <div class="popover-body">
                        </div>
                        <div class="arrow arrow-large">
                        </div>
                    </div>`,
        content: `<p class="bold mb-0">Need some help?</p><p>Here to help you find the best hospital</p><p><a  class="btn btn-go btn-icon" >Let's Go</a></p>`,
        html: true,
        trigger: 'focus',
        placement: 'top'
    });

    // Show the doctor popover after 1 sec delay
    setTimeout(function () {
        $('#doctor-popover').popover('show')
            // .focus()
            // .find('.btn-go')
            // .css('backgroundColor', 'red')
    }, 1000)

})
