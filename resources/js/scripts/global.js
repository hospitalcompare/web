//Set the first option of the Procedures dropdown to 'Not Known'
$("select[name='procedure_id'] option:first").attr('disabled', true).attr('hidden', true);

//Set the checked value of checkboxes to boolean 0/1
$("input[type='checkbox']").on('change', function () {
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

var $howToUseSelectPlaceholder = 'Select';
// Change text on the dropdowns in how to use page
$('.flat-box .dropdown-toggle .filter-option-inner-inner').text('Choose treatment');
$('#how_to_use_filter_policies .dropdown-toggle .filter-option-inner-inner').text($howToUseSelectPlaceholder);

$('#how_to_use_policies').on('shown.bs.select', function(){
    // console.log($howToUseSelectPlaceholder);
    $('.dropdown-menu li:first-child a').text($howToUseSelectPlaceholder);
})
$(document).ready(function () {

});

// Repeat string x times
window.repeatStringNumTimes = function(string, times) {
    var repeatedString = "";
    while (times > 0) {
        repeatedString += string;
        times--;
    }
    return repeatedString;
};

// Remove trailing comma from comparison ids
window.removeTrailingCharacter = function(string){
    return string.replace(/,\s*$/, "")
};

// Scroll up to show alert bar
window.scrollToAlert = function () {
    $('html, body').animate({
        scrollTop: ($('#hc_alert').offset().top)
    }, 400);
};

// Show the bootstrap alert bar
window.showAlert = function (message, success = true, scroll = false) {
    var $alertClass = (success) ? 'alert-success' : 'alert-danger';
    $('#hc_alert')
        .find('.alert-text')
        .html(message)
        .parents('.alert')
        .removeClass('alert-success alert-danger')
        .addClass($alertClass + ' show')
        .slideDown();
    // Scroll to alert bar
    if (scroll) scrollToAlert();
};

/**
 * Generates HTML code based on a given rating ( between 0 - 5 )
 * NB: Make sure that if this function is changed, the equivalent PhP function is changed as well ( /App/Helpers/Utils.php )
 *
 * @param rating
 * @returns {string}
 */
window.getHtmlStars = function (rating) {
    if (rating == null)
        return "No data";

    if (rating == 0) {
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
    if (emptyStars != null && emptyStars > 0) {
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
window.getHtmlDashTickValue = function (value, text = "") {
    if (value == null)
        return "No data";

    var html = "";

    value = parseFloat(value);

    if (value === 0) {
        html += "<img src=\"images/icons/dash-black.svg\" alt=\"Dash icon\">";

    } else if (value === 1) {
        html += "<img src=\"images/icons/tick-green.svg\" alt=\"Tick icon\">";
    } else {
        return value + text;
    }
    return html;
};

window.toggleContent = function (speed = 400, parent = 'body') {
    var $target = $($(this).data('target'));
    // console.log($target);
    $(this).toggleClass('target-open');
    if ($target.is(':visible')) {
        $(parent).addClass($(this).data('target') + '_open');
        $target
            .slideUp(speed)
            .removeClass('open');
    } else {
        $(parent).removeClass($(this).data('target') + '_open');
        $target
            .slideDown(speed)
            .addClass('open');
    }
};

// Handle the popup of the doctor
// window.$doctor = $('#doctor-popover');
// window.popupDoctor = function (message, delay) {
//
//     $doctor.popover('dispose');
//     $doctor.popover({
//         container: 'body',
//         template: `<div class="popover popover-large popover-doctor">
//                         <span class="fa fa-times close" data-dismiss=""></span>
//                         <div class="popover-body">
//                         </div>
//                         <div class="arrow arrow-large">
//                         </div>
//                     </div>`,
//         content: `<p class="bold mb-0">${message}</p>
// <!--                     <p class="mt-3"><a class="btn btn-close btn-close__small btn-turq btn-icon">Close</a></p>-->
// `,
//         html: true,
//         trigger: 'focus',
//         placement: 'auto'
//     });
//
//     if (delay != 0 || delay != '') {
//         setTimeout(function () {
//             $doctor.focus();
//         }, delay);
//         return;
//     }
//
//     $doctor.focus();
//
// };

// Slugify a string

window.slugify = function(string) {
    const a = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;'
    const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------'
    const p = new RegExp(a.split('').join('|'), 'g')

    return string.toString().toLowerCase()
        .replace(/\s+/g, '-') // Replace spaces with -
        .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
        .replace(/&/g, '-and-') // Replace & with 'and'
        .replace(/[^\w\-]+/g, '') // Remove all non-word characters
        .replace(/\-\-+/g, '-') // Replace multiple - with single -
        .replace(/^-+/, '') // Trim - from start of text
        .replace(/-+$/, '') // Trim - from end of text
};

// Compare functions
/**
 * Disable compare buttons if we have reached the max no of items
 *
 */
window.disableButtons = function (modifier = 0) {
    var compareCount = parseInt(Cookies.get('compareCount'));
    // console.log('Compare count: ' + compareCount);

    var $notSelected = $('.compare').not($('.selected'));

    if (compareCount + modifier === 5) {
        $notSelected
            .addClass('disabled')
            .parent()
        // .prop('title', 'Sorry, you have reached the limit of hospitals to compare.')
        // .attr('data-toggle', 'tooltip');
        // enable tooltips
        // $('[data-toggle="tooltip"]').tooltip();
    }
};

// Reenable buttons to allow to add to compare
window.enableButtons = function () {
    compareCount = Cookies.get('compareCount');
    compareCount = parseInt(compareCount);

    if (compareCount === 5) {
        $('.compare')
            .removeClass('disabled')
            .parent()
            .prop('title', '');
    }
};

window.getHospitalsByIds = function(hospitalIds) {
    var procedureId = 0;
    var items = [];

    $.ajax({
        url: 'api/getHospitalsByIds/' + hospitalIds +'/' + procedureId,
        type: 'GET',
        headers: {
            'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4',
        },
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        // async: false,
        // data: [],
        success: function (data) {
            // console.log(data.data.hospitals);
            //Check if we have at least one result in our data
            if (!$.isEmptyObject(data.data)) {
                items = data.data;
            }
            // else {
            //     showAlert('Invalid Postcode! Please try again.', false);
            //     $postcode_input.val("");
            //     $resultsContainer.slideUp();
            // }
        },
        error: function (data) {
            showAlert('Something went wrong! Please try again.', false)
        },
    });

    return items;
};

// Truncate sentence
window.textTruncate = function(str, length, ending) {
    if (length == null) {
        length = 100;
    }
    if (ending == null) {
        ending = '...';
    }
    if (str.length > length) {
        return str.substring(0, length - ending.length) + ending;
    } else {
        return str;
    }
};


