// Init the google maps
// Open a modal with gmap loaded
var map = null;
var myMarker;
var myLatlng;

function initializeGMap(lat, lng, target) {
    myLatlng = new google.maps.LatLng(lat, lng);

    var myOptions = {
        zoom: 14,
        zoomControl: true,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.querySelector(target), myOptions);

    myMarker = new google.maps.Marker({
        position: myLatlng
    });
    myMarker.setMap(map);
}

//Add a delay of 10 ms because rendering is not instant for the new dropdown ( and it's acting weird, sometimes it works and sometimes it doesn't without the delay)
setTimeout(function () {
    //Change the background color of the selectbox when an option with a value different than 0 is selected
    $('.results-page .results-page-select.highlight option[value!="0"]:selected').parent().css('background-color', '#ececec');
    $('.results-page .highlight-search-dropdown option[value!="0"]:selected').parent().next().css('background-color', '#ececec'); //Making the Background color grey for the dropdown with search
}, 200);

//On click event for the sorting ( to submit without clicking the submit button )
$('.results-page .select-sort-by').change(function () {
    $('.results-page .btn-submit-results').click();
});

//Sorting asc/desc when the arrows are clicked
$(document).on("click touchend", ".sort-bar .sort-item", function () {
    //Get all the classes from the element
    var elementClasses = $(this).attr('class');
    //Get the actual target class
    var explodedClasses = elementClasses.split(' ');
    var targetClass = explodedClasses[1];
    //Get the direction (asc/desc)
    var direction = explodedClasses[2];
    //Change the sort order by clicking the dropdown
    changeSortBy(targetClass, direction);
});

//Toggling the Special Offers tabs
$('.ad-block .ad-block-footer').on('click', function (e) {
    $(this).parents('.ad-block')
        .toggleClass('open')
        .find('.ad-block-body').slideToggle();
});

/**
 * Selects an option from the Sort By dropdown and triggers the `change` event
 *
 * @param target
 * @param direction
 */
function changeSortBy(target, direction) {
    var optionTarget = '';

    if (target === "sort-waiting-time") {
        if (direction === 'asc')
            optionTarget = $('.results-page .select-sort-by #sort_by_4');
        else
            optionTarget = $('.results-page .select-sort-by #sort_by_3');

    } else if (target === "sort-user-rating") {
        if (direction === 'asc')
            optionTarget = $('.results-page .select-sort-by #sort_by_6');
        else
            optionTarget = $('.results-page .select-sort-by #sort_by_5');
    } else if (target === "sort-op-cancelled") {
        if (direction === 'asc')
            optionTarget = $('.results-page .select-sort-by #sort_by_8');
        else
            optionTarget = $('.results-page .select-sort-by #sort_by_7');
    } else if (target === "sort-care-quality-rating") {
        if (direction === 'asc')
            optionTarget = $('.results-page .select-sort-by #sort_by_10');
        else
            optionTarget = $('.results-page .select-sort-by #sort_by_9');
    } else if (target === "sort-ff-rating") {
        if (direction === 'asc')
            optionTarget = $('.results-page .select-sort-by #sort_by_12');
        else
            optionTarget = $('.results-page .select-sort-by #sort_by_11');
    } else if (target === "sort-nhs-funded") {
        if (direction === 'asc')
            optionTarget = $('.results-page .select-sort-by #sort_by_14');
        else
            optionTarget = $('.results-page .select-sort-by #sort_by_13');
    } else if (target === "sort-self-pay") {
        if (direction === 'asc')
            optionTarget = $('.results-page .select-sort-by #sort_by_16');
        else
            optionTarget = $('.results-page .select-sort-by #sort_by_15');
    }
    //Check if we have an actual value
    if (optionTarget === '')
        return false;

    optionTarget.prop('selected', true);
    optionTarget.trigger('change');
}

/**
 * Retrieves the new URL with the given Param + value
 *
 * @param key
 * @param value
 * @returns {string}
 */
function updateQueryStringParam(key, value) {
    var baseUrl = [location.protocol, '//', location.host, location.pathname].join(''),
        urlQueryString = document.location.search,
        newParam = key + '=' + value,
        params = '?' + newParam;

    // If the "search" string exists, then build params from it
    if (urlQueryString) {
        keyRegex = new RegExp('([\?&])' + key + '[^&]*');

        // If param exists already, update it
        if (urlQueryString.match(keyRegex) !== null) {
            params = urlQueryString.replace(keyRegex, "$1" + newParam);
        } else { // Otherwise, add it to end of query string
            params = urlQueryString + '&' + newParam;
        }
    }
    return baseUrl + params;
}

//Refresh the page with the Private Hospitals filter ( for the Enquiry modal of Private hospitals )
$(document).on("click", ".results-page .change-url", function (event) {
    window.location.href = updateQueryStringParam('hospital_type', 1);
});

// function toggleShowFiltersText() {
//     $body.hasClass('filters-open') ? $showFiltersDiv.text('Show Filters') : $showFiltersDiv.text('Hide Filters');
// }

// Toggle filter section
var $resultspageform = $('#resultspage_form');
var $filters = $('#resultspage_form .filter-parent');
var $showFilters = $('#show_filters');
var $showFiltersDiv = $('#show_filters div');

// Click handler for 'Show filters' button
$showFilters.on('click', function () {
    // If on the desktop view
    if ($body.hasClass('results-page-desktop')) {
        $filters.slideToggle();
        // Change the text of show filters button
        // toggleShowFiltersText();
    }
    $body.toggleClass('filters-open');
    // Toggle the open class on the button
    $(this).toggleClass('open');
    // // Refresh the range slider as it is initially hidden
    $("#radiusProx").slider('relayout');
});

// Close filters when clicking outside
$(document).on('click', function (e) {
    // Is the click outside the results form, or inside one of the select picker dropdowns
    if ($body.hasClass('results-page-desktop') && $resultspageform.has(e.target).length === 0 && !$(e.target).parents('.dropdown-menu').length && $body.hasClass('filters-open')) {
        $filters.slideUp();
        $body.removeClass('filters-open');
        // Change the text of show filters button
        // $showFiltersDiv.text('Show filters')
    }
});

// Hide the filters in the mobile results page view
$hideFilters = $('#close_mobile_filters');
$hideFilters.on('click', function () {
    $('body').removeClass('filters-open');
});

// Open the filters form when tabbing off the 'Filter resutls' button
$showFilters.bind('keydown', function (e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode == 9) {  //If it's the tab key
        $(this).trigger('click'); //Force a click outside the dropdown, so it forces a close
        $('button[data-id="resultspage_treatment_dropdown"]').focus();
    }
});

// Toggle sort dropdown
// $('#show_sort').on('click', function(){
//     $('#sort_parent').slideToggle();
//     $(this).toggleClass('open');
// });


// Reset filters
$('#clear_filters').on('click', function (e) {
    // Clear postcode
    $('#input_postcode').val('');

    // Reset selectpickers
    $("#resultspage_form .select-picker option[selected]").removeAttr("selected");
    $('#resultspage_form .select-picker option[value=0]').attr('selected', 'selected');
    $('#resultspage_form .select-picker').selectpicker('refresh');

    // Reset range to default
    $('#resultspage_form #radiusProx').slider('setValue', 4);

    // Submit form with 0.5 sec delay
    setTimeout(function () {
        $resultspageform.submit();
    }, 500);
});

// TABS ************************************************************** //
// Toggle the corporate content area
$('.btn-more-info').on('click', function () {
    var $target = $($(this).data('target'));
    // the related tab to opn in the CC area
    var $tabTarget = $($(this).data('tab-target'));
    var hiddenText = $(this).data('hidden-text');
    var visibleText = $(this).data('visible-text');

    // Add data-attribute for the tab to open
    var $isToggleButton = $(this).hasClass('btn-more-info');
    // The offset
    var scrollOffset = isDesktop ? 87 : 150;
    $(this)
        .parents('.result-item')
        .toggleClass('corporate-content-open');

    if ($target.is(':visible')) {
        $target
            .slideUp()
            .removeClass('open');
        // Only change text for 'More info' button
        if ($isToggleButton)
            isDesktop ? $(this).find('span, div').text(hiddenText) : $(this).find('span, div').text(hiddenText);
        // $(this).find('span, div').text('More info');
        // Scroll back to the result item
        var $scrollBack = $(this).parents('.result-item').offset().top;
        $('html, body').animate({
            scrollTop: $scrollBack - scrollOffset
        }, 800);
        //Change the `Close info` to `More info`
    } else {
        $target
            .slideDown()
            .addClass('open');
        // open the corresponding tab
        $tabTarget.tab('show');
        // Scroll to the corporate content area (compensate for the height of sticky header bar)
        $('html, body').animate({
            scrollTop: ($(this).parents('.result-item').offset().top) - scrollOffset
        }, 800);
        // Only change text for 'More info' button
        if ($isToggleButton)
            // $(this).find('span, div').text('Close info');
            isDesktop ? $(this).find('span, div').text(visibleText) : $(this).find('span, div').text(visibleText);
    }
});

$(document).on('shown.bs.tab', '[data-toggle="tab"]', function (e) {
    var targetMapContainerId = $(this).data('map-target');
    var $targetMapContainerElement = $(targetMapContainerId);
    var latitude = $targetMapContainerElement.data('latitude');
    var longitude = $targetMapContainerElement.data('longitude');
    initializeGMap(latitude, longitude, targetMapContainerId);
});
