// Bootstrap popover - speech bubble with advanced contents
$(document).ready(function () {
    $('[data-toggle="popover"]').popover({
        template: `<div class="popover popover-regular">
                        <div class="popover-body">
                        </div>
                        <div class="arrow arrow-large">
                        </div>
                    </div>`
    });

    // Larger, speech bubble popover
    $('[data-toggle="popover-large"]').popover({
        template: `<div class="popover popover-large">
                        <div class="popover-body">
                        </div>
                        <div class="arrow arrow-large">
                        </div>
                    </div>`
    })

    // Popover with close button
    $(document).on("click", ".popover .btn-close", function (e) {
        e.preventDefault();
        $(this).parents(".popover").popover('hide');
    });

    // trigger the enquiry form on click of link inside popover
    $("[data-toggle='popover']").on('shown.bs.popover', function (event) {
        var targetButton = $(event.target).parents('.sort-categories-inner').find('.btn-enquire');
        $('.modal-enquire-trigger').on('click', function(){
            targetButton.trigger('click');
        })
    });


})
