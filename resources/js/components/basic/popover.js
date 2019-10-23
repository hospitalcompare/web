// Bootstrap popover - speech bubble with advanced contents
$(document).ready(function () {
    $('[data-toggle="popover"]')
        .popover({
            template: `<div class="popover popover-regular">
                            <div class="popover-body">
                            </div>
                            <div class="arrow">
                            </div>
                        </div>`,
        });

    $('[data-toggle="popover-cqc"]')
        .popover({
            template: `<div class="popover popover-cqc popover-regular">
                            <div class="popover-body">
                            </div>
                            <div class="arrow">
                            </div>
                        </div>`,
        });

    // Larger, speech bubble popover
    $('[data-toggle="popover-large"]')
        .popover({
            template: `<div class="popover popover-large">
                            <div class="popover-body">
                            </div>
                            <div class="arrow arrow-large">
                            </div>
                        </div>`
        });

    // Popover with close button or x button
    $(document).on("click", ".popover .btn-close", hidePopover);
    $(document).on("click", ".popover .close", hidePopover);

    function hidePopover(e) {
        e.preventDefault();
        $(this).parents(".popover").popover('hide');
    }

    // Add a custom class to the popover, so we can target popovers triggered by hover
    function addDynamicClassToPopover(shownEvent) {
        var $trigger = $(shownEvent.target);
        var $classToAdd = $trigger.data('trigger');
        var $id = $trigger.attr('aria-describedby');
        $('#'+ $id).addClass('popover-' + $classToAdd);
    }

    // trigger the enquiry form on click of link inside popover
    // $("[data-toggle='popover']").on('shown.bs.popover', function (event) {
    //     var targetButton = $(event.target).parents('.sort-categories-inner').find('.btn-enquire');
    //     $('.modal-enquire-trigger').on('click', function(){
    //         targetButton.trigger('click');
    //     })
    // });

    // if the popover is triggered on hover, stop the flickering effect bug
    $("[data-toggle*='popover']").on('shown.bs.popover', function (event) {
        addDynamicClassToPopover(event);
    });
});
