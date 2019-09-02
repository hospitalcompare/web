(function () {
    // Doctor popover event handler
    $('#doctor-popover').popover({
        container: 'body',
        template: `<div class="popover popover-large popover-doctor">
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

    // Show the doctor popover after 1 sec delay
    setTimeout(function () {
        $('#doctor-popover')
            .focus()
    }, 1000)

    $('#doctor-popover').on('shown.bs.popover', function (e) {
        // do something…
        $('.popover-doctor')
            .find('.btn-go')
            .addClass('popover-open')
            // .animate({
            //     backgroundPosition: '0%'
            // }, 1000, function(){
            //     console.log('finished')
            // })
    })
})();
