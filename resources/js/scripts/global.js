window.$body = $('body');
window.isDesktop = $body.hasClass('results-page-desktop');
window.isMobile = $body.hasClass('results-page-mobile');

// Set attribute on document for user agent
var doc = document.documentElement;
doc.setAttribute('data-useragent', navigator.userAgent);

// Reveal the main menu on mobile
$('#menu_toggle').on('click', function () {
    $body.toggleClass('menu-open');
});

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
    $body.addClass('select-open');
});

$pickers.on('hide.bs.select', function (e, clickedIndex, isSelected, previousValue) {
    // Stop body scrolling
    $body.removeClass('select-open');
});

var $howToUseSelectPlaceholder = 'Select';
// Change text on the dropdowns in how to use page
$('.flat-form .treatment-parent .dropdown-toggle .filter-option-inner-inner').text('Choose treatment');
$('#how_to_use_filter_policies .dropdown-toggle .filter-option-inner-inner').text($howToUseSelectPlaceholder);

$('#how_to_use_policies').on('shown.bs.select', function () {
    $('.dropdown-menu li:first-child a').text($howToUseSelectPlaceholder);
});

// Repeat string x times
window.repeatStringNumTimes = function (string, times) {
    var repeatedString = "";
    while (times > 0) {
        repeatedString += string;
        times--;
    }
    return repeatedString;
};

// Remove trailing comma from comparison ids
window.removeTrailingComma = function (string) {
    if (string.charAt(string.length - 1) === ',') {
        return string.replace(/,\s*$/, "");
    }
    return string;
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
        return "<img class='dash-or-tick' src=\"images/icons/dash-black.svg\" alt=\"Dash icon\">";
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
            html += "<img class='star-icon' src='../images/icons/star-outline.svg' alt='Empty Star'>";
        }
    }

    return html;
};

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
        html += "<img class='dash-or-tick' width=\"26\" src=\"images/icons/dash-black.svg\" alt=\"Dash icon\">";

    } else if (value === 1) {
        html += "<img class='dash-or-tick' width=\"26\" src=\"images/icons/tick-green.svg\" alt=\"Tick icon\">";
    } else {
        return value + text;
    }
    return html;
};

window.toggleContent = function (speed = 400, parent = 'body') {
    var $target = $($(this).data('target'));
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
// <!--                     <p class="mt-3"><a class="btn btn-close btn-close__small btn-brand-primary-1 btn-icon">Close</a></p>-->
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

window.slugify = function (string) {
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
window.getHospitalsByIds = function (hospitalIds) {
    var procedureId = getUrlParameter('procedure_id');
    if (typeof procedureId == "undefined")
        procedureId = 0;

    $.ajax({
        url: 'api/getHospitalsByIds/' + hospitalIds + '/' + procedureId,
        type: 'GET',
        headers: {
            'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4',
        },
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: {},
        success: function (data) {
            //Check if we have at least one result in our data
            if (!$.isEmptyObject(data.data)) {
                // console.log('Data:', data.data[0]);

                $.each(data.data, function (key, element) { //$.parseJSON() method is needed unless chrome is throwing error.
                    // console.log(key, element.email !== "");
                    //Toggle the full heart or empty heart  class of the button
                    $('button#' + element.id + '.compare').addClass('selected');
                    addHospitalToCompare(element);
                });

                // console.log('Data added to compare, ', parseInt(Cookies.get('compareCount')));
                // Disable buttons if we have reached the max number of items
                if (getCompareCount() === 5) {
                    disableButtons();
                }
            }
        },
        error: function (data) {
            showAlert('Something went wrong! Please try again.', false)
        },
    });
};

// Truncate sentence
window.textTruncate = function (str, length, ending) {
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

//Check if we have a parameter in the URL
window.getUrlParameter = function (sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};


// Get compare count from compare hospitals data
window.getCompareCount = function () {
    if (Cookies.get("compareHospitalsData") != "") {
        return parseInt(removeTrailingComma(Cookies.get('compareHospitalsData')).split(',').length);
    }
    return 0;
};

// Remove trailing comma from comparison ids
window.removeTrailingComma = function (string) {
    if (string.charAt(string.length - 1) === ',') {
        return string.replace(/,\s*$/, "");
    }
    return string;
};

// Compare functions
/**
 * Disable compare buttons if we have reached the max no of items
 *
 */
window.disableButtons = function (modifier = 0) {
    var $notSelected = $('.compare').not($('.selected'));
    $notSelected
        .addClass('disabled')
        .parent();
};

// Reenable buttons to allow to add to compare
window.enableButtons = function () {
    $('.compare')
        .removeClass('disabled')
        .parent()
        .prop('title', '');
};

// Refresh the page on resize, so that the currentt version is showing
// if($body.hasClass('results-page'))
//     $(window).resize(function(){location.reload();});

// Close menu if clicking outside it, but only if it is already open
var $mainNav = $('#main_nav');
$(document).on('click', function (e) {
    if ($body.hasClass('menu-open')) {
        if ($mainNav.has(e.target).length === 0 && $('#menu_toggle').has(e.target).length === 0) {
            $body.removeClass('menu-open');
        }
    }
});

// Recaptcha callback - clear error message when correctly submitted
// window.recaptchaCallback = function() {
//     $('#hiddenRecaptcha').valid();
// };
//

// Reset elements of enquiry form
window.handleFormReset = function() {

    var $form = $('#enquiry_form');
    // Reset select pickers

    // Clear text inputs
    // $textInputs = $form.find('input[type=text');
    // $textInputs.val('');

    // Clear email imputs
    // $emailInputs = $form.find('input[type=email');
    // $emailInputs.val('');

    // Clear text area
    // $textAreas = $form.find('textarea');
    // $textAreas.val('');

    // Uncheck checkbox
    // $checkBoxes = $form.find('input[type=checkbox]');
    // $checkBoxes.prop('checked', false);

    // Reset selectpickers
    // $selectPickers = $form.find('.select-picker');
    // // $selectPickers.val('default').selectpicker("refresh");
    // $selectPickers.each(function(index, element){
    //     // $(this).find("option[selected]").removeAttr("selected");
    //     //
    //     // $(this).find("option[value=0]").attr('selected', 'selected');
    //
    //     $(this).val('0').selectpicker("refresh");
    //     // $(this).selectpicker('refresh');
    // });

    // reset the recaptcha
    grecaptcha.reset();
};

// Handle the covid alert message
// Set the cookie to stop further popups
var $specialAlert = $('#hc_special_alert');

function setShowAlertToFalse() {
    Cookies.set('showSpecialAlert', false, {expires: 1});
}

function showSpecialAlert() {
    $specialAlert
        // .find('.alert-text')
        // .html(message)
        // .parents('.alert')
        // .removeClass('alert-success alert-danger')
        .addClass('show')
        .slideDown();
}

// When closing the message, set the cookie to show that it has been dismissed
$specialAlert.on('close.bs.alert', function () {
    // Set the cookie to false
    setShowAlertToFalse();
});

$('#special_alert_link').on('click', function () {
    setShowAlertToFalse();
});

// Show the covid alert message if the cookie is not set
$(document).ready(function () {
    if (Cookies.get("showSpecialAlert") != 'false') {
        showSpecialAlert();
    }
});
