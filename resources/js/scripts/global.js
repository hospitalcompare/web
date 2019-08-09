$(document).ready(function () {
    // Bootstrap tooltips
    $('[data-toggle="tooltip"]').tooltip()

    // Bootstrap popover - speech bubble with advanced contents
    $('[data-toggle="popover"]').popover();

    // Larger, speech bubble popover
    $('[data-toggle="popover-large"]').popover({
        template: `<div class="popover popover-large">
                        <div class="popover-body">
                        </div>
                        <div class="arrow" style="left: 64px;">
                        </div>
                    </div>`
    })

})
