$(document).ready(function () {
    //Set the first option of the Procedures dropdown to 'Not Known'
    $("select[name='procedure_id'] option:first").attr('disabled', true).attr('hidden', true);

    //Set the checked value of checkboxes to boolean 0/1
    $("input[type='checkbox']").on('change', function(){
        $(this).val(this.checked ? 1 : 0);
    });

    // Bootstrap select pickers - searchable dropdowns
    var $pickers = $('.select-picker');
    // Initiate select-pickers
    $pickers.selectpicker({
        style: '',
        styleBase: ''
    });

    $('.dropdown-toggle').attr('data-boundary', 'window');
    // Do something when select pickers open

    $pickers.on('show.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        // Stop body scrolling
        $('body').addClass('select-open');
    });

    $pickers.on('hide.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        // Stop body scrolling
        $('body').removeClass('select-open');
    });


});

// Scroll up to show alert bar
window.scrollToAlert = function () {
    $('html, body').animate({
        scrollTop: ($('#hc_alert').offset().top)
    }, 400);
};

// Show the bootstrap alert bar
window.showAlert = function(message, success = true, scroll = false) {
    var $alertClass = (success) ? 'alert-success' : 'alert-danger';
    $('#hc_alert')
        .find('.alert-text')
        .html(message)
        .parents('.alert')
        .removeClass('alert-success alert-danger')
        .addClass($alertClass + ' show')
        .slideDown();
    // Scroll to alert bar
    if(scroll) scrollToAlert();
};

/**
 * Generates HTML code based on a given rating ( between 0 - 5 )
 * NB: Make sure that if this function is changed, the equivalent PhP function is changed as well ( /App/Helpers/Utils.php )
 *
 * @param rating
 * @returns {string}
 */
window.getHtmlStars = function(rating) {
    if(rating == null)
        return "";

    if(rating == 0) {
        return "<img src=\"images/icons/dash-black.svg\" alt=\"Dash icon\">";
    }

    rating = parseFloat(rating);
    if (rating > 5)
        return "";

    // Round down to get number of whole stars needed
    var wholeStars = Math.floor(rating);

    // This will be 1 if you have a half-rating, 0 if not.
    var halfStar = Math.round(rating * 2) % 2;

    // Get the number of empty stars
    var emptyStars = 5 - wholeStars - halfStar;

    // This will hold your html markup
    var html = "";

    // write img tags for each whole star
    for (var i = 0; i < wholeStars; i++) {
        html += "<img class='star-icon' src='images/icons/star.svg' alt='Whole Star'>";
    }

    // write img tag for half star if needed
    if (halfStar) {
        html += "<img class='star-icon' src='images/icons/star-half.svg' alt='Half Star'>";
    }

    //Check if we need to add empty stars as image
    if(emptyStars != null && emptyStars > 0) {
        for (var i = 0; i < emptyStars; i++) {
            html += "<img class='star-icon' src='../images/icons/star-outline.svg' alt='Empty Star'>"; //TODO: Add the image for the empty stars
        }
    }

    return html;
}

/**
 * Generates HTML code based on a given value (percentage or 0 or 1)
 *
 * @param value
 * @returns {string}
 */
window.getHtmlDashTickValue = function(value, text = "") {
    if(value == null)
        return "";

    var html = "";

    value = parseFloat(value);

    if(value === 0) {
        html += "<img src=\"images/icons/dash-black.svg\" alt=\"Dash icon\">";

    } else if(value === 1) {
        html += "<img src=\"images/icons/tick-green.svg\" alt=\"Tick icon\">";
    } else {
        return value + text;
    }
    return html;
};

window.toggleContent = function(speed = 400) {
    var $target = $($(this).data('target'));
    // console.log($target);
    if($target.is(':visible'))
        $target
            .slideUp(speed)
            .removeClass('open');
    else
        $target
            .slideDown(speed)
            .removeClass('open');
};


$('.btn-more-info').on('click', toggleContent);
