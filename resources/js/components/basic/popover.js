$(document).ready(function () {
    // Bootstrap popover - speech bubble with advanced contents
    $('[data-toggle="popover"]').popover();

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
    $(document).on("click", ".popover .btn-close" , function(e){
        e.preventDefault();
        $(this).parents(".popover").popover('hide');
    });
})
