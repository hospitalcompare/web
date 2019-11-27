//Check if we don't have the cookie and set it to 0
var compareBar = $('.compare-hospitals-bar');
var compareContent = $('.compare-hospitals-content');
var countSpan = $('#compare_number');
var heartIcon = $('#compare_heart');
// Where we hold the counts of hospital types
// No of each type of hospital in compare
var nhsCountHolder = $('#nhs-hospital-count');
var privateCountHolder = $('#private-hospital-count');
$("body").on('DOMSubtreeModified', privateCountHolder, function() {
    // code here
    if(parseInt($('#private-hospital-count').text()) > 0){
        $('#multiple_enquiries_button').prop('disabled', false);
    } else {
        $('#multiple_enquiries_button').prop('disabled', true);
    }
});

var multiEnquiryIdInput = $('#multiple_enquiries_button');
var nhsHospitalCount = 0;
var privateHospitalCount = 0;
var compareHospitalIds = '';
// var privateHospitalIds = '';
// The target for the content to be added
var target = $('#compare_hospitals_grid');
// The content for any empty column in the comparison
var emptyCol = '<div class="col col-empty h-100">\n' +
    '                    <div class="col-inner">\n' +
    '                        <div class="col-header border-bottom-0">\n' +
    '                            <p class="text-center">Selected Hospital<br>\n' +
    '                                will appear here.</p>\n' +
    '                            <p class="text-center"> Add more hospitals to your\n' +
    '                                Shortlist by clicking the&nbsp;<img width="14" height="12" src="/images/icons/heart.svg" alt="Heart icon">\n' +
    '                            </p>\n' +
    '                        </div>\n' +
    '                    </div>\n' +
    '                </div>';

if (typeof Cookies.get("compareCount") === 'undefined') {
    Cookies.set("compareCount", 0, {expires: 10000});
    // Cookies.set("compareHospitalsData", '', {expires: 10000});
    Cookies.set("compareHospitalsData", '', {expires: 10000});
}

var compareCount = Cookies.get('compareCount');
var compareData = Cookies.get('compareHospitalsData');

// Check if we need to show the Compare hospitals div (on page load)
if (compareCount > 0) {
    // Show the comparison row headings and hide the existing column
    $('#compare_hospitals_headings').removeClass('d-none');
    $('#no_items_added').addClass('d-none');
    // Hide the "you haven't added any items..."
    compareHospitalIds = compareData;
    // Update the value of the enquiry form
    multiEnquiryIdInput.data('hospital-id', removeTrailingCharacter(compareHospitalIds));

    // Ajax request to retrieve all the Hospitals to compare
    getHospitalsByIds(removeTrailingCharacter(compareHospitalIds));
    // var returned = getHospitalsByIds(removeTrailingCharacter(compareHospitalIds));
    // if(compareHospitalIds.length > 0) {
    //     $.each(returned, function (key, element) { //$.parseJSON() method is needed unless chrome is throwing error.
    //         addHospitalToCompare(element);
    //     });
    // }

    // Appending the extra empty columns
    var remainingColCount = 5 - compareCount;
    target.append(repeatStringNumTimes(emptyCol, remainingColCount));
    countSpan.text(compareCount);
    heartIcon.addClass('has-count');
    //Add the `active` class that will change the color to pink
    heartIcon.addClass('active');
} else {
    heartIcon.removeClass('active');
    target.append(repeatStringNumTimes(emptyCol, 5))
}

// Check if we need to disable buttons on pageload
// disableButtons(0);


/**
 * Removes a Hospital from the Comparison Table
 *
 * @param elementId
 * @param data
 * @param compareCount
 */
/**
 * Adds the element to the Comparison Table
 *
 * @param element
 */
window.addHospitalToCompare = function(element) {
    // console.log('Element', element);
    compareHospitalIds = Cookies.get('compareHospitalsData');
    // Content for modal trigger button
    var $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g><g><g><path fill="#fff" d="M10.002 18.849c-4.878 0-8.846-3.968-8.846-8.847 0-4.878 3.968-8.846 8.846-8.846 4.879 0 8.847 3.968 8.847 8.846 0 4.879-3.968 8.847-8.847 8.847zm0-18.849C4.488 0 0 4.488 0 10.002c0 5.515 4.488 10.003 10.002 10.003 5.515 0 10.003-4.488 10.003-10.003C20.005 4.488 15.517 0 10.002 0z"></path></g><g><path fill="#fff" d="M14.47 5.848l-5.665 6.375-3.34-2.67a.578.578 0 0 0-.811.088c-.2.25-.158.615.091.815l3.769 3.015a.57.57 0 0 0 .361.125c.167 0 .325-.07.433-.196l6.03-6.783a.579.579 0 0 0 .146-.42.588.588 0 0 0-.191-.4.592.592 0 0 0-.824.05z"></path></g></g></g></svg>';
    var nhsRating = 1;
    var cancelledOps = null;

    if(element.cancelled_op != null) {
        cancelledOps = element.cancelled_op.perc_cancelled_ops;
        // cancelledOps = element.cancelled_op;
    }
    var btnContent = element.hospital_type.name == 'NHS' ? // = "NHS"
        '<a id="' + element.id + '" ' +
        'class="btn btn-icon btn-blue btn-grad btn-enquire enquiry btn-block font-12" ' +
        'role="button" data-toggle="modal" ' +
        'data-hospital-url="' + element.url + '" ' +
        'data-hospital-title="' + element.name + '" ' +
        'data-target="#hc_modal_enquire_nhs">Make an enquiry' +
        $svg +
        '</a>' : // If private == "Independent"
        '<a id="' + element.id + '" ' +
        'class="btn btn-icon btn-blue btn-grad btn-enquire enquiry btn-block font-12" ' +
        'role="button" data-toggle="modal" ' +
        'data-hospital-url="' + element.url + '" ' +
        'data-hospital-title="' + element.name + '" ' +
        'data-hospital-id="' + element.id + '" ' +
        'data-target="#hc_modal_enquire_private">Make an enquiry' +
        $svg +
        '</a>';
    // Content for new hospital added to compare
    var hospitalType = element.hospital_type_id == 1 ? 'Private' : 'NHS';

    if(hospitalType == 'Private') {
        privateHospitalCount += 1;
        privateCountHolder.text(privateHospitalCount);
    } else {
        nhsHospitalCount += 1;
        nhsCountHolder.text(nhsHospitalCount);
    }

    var newColumn =
        '<div class="col text-center" id="compare_hospital_id_' + element.id + '">' +
        '<div class="col-inner">' +
        '<div class="col-header d-flex flex-column justify-content-between align-items-center px-4 pb-3">' +
        '<div class="image-wrapper" style="background-image: url(' + '/images/alder-1.jpg' + ')">' +
        // '<img class="content" src="images/alder-1.jpg" alt="Image of ' + element.name + '">' +
        '<div class="remove-hospital" id="remove_id_' + element.id + '" data-hospital-type="' + slugify(hospitalType) + '-hospital"></div>' +
        '</div>' +
        '<div class="w-100 details font-16 SofiaPro-SemiBold">' + textTruncate(element.name, 30, '...') + '</div>' +
        btnContent +
        '</div>' +
        '<div class="cell">' + hospitalType + '</div>' +
        '<div class="cell">' + getHtmlDashTickValue(element.waiting_time[0].perc_waiting_weeks, " Weeks") + '</div>' +
        '<div class="cell">' + getHtmlStars(element.rating.avg_user_rating) + '</div>' +
        '<div class="cell">' + getHtmlDashTickValue(cancelledOps, "%") + '</div>' +
        '<div class="cell">' + element.rating.latest_rating + '</div>' +
        '<div class="cell">' + getHtmlDashTickValue(element.rating.friends_family_rating, "%") + '</div>' +
        '<div class="cell">' + getHtmlDashTickValue(element.nhsRating) + '</div>' +
        '<div class="cell">' + getHtmlDashTickValue(element.hospital === 'Independent' ? 1 : 0) + '</div>' +
        '<div class="cell column-break"></div>' +
        '<div class="cell">' + element.rating.safe + '</div>' +
        '<div class="cell">' + element.rating.effective + '</div>' +
        '<div class="cell">' + element.rating.caring + '</div>' +
        '<div class="cell">' + element.rating.responsive + '</div>' +
        '<div class="cell">' + element.rating.well_led + '</div>' +
        '<div class="cell column-break"></div>' +
        '<div class="cell">' + (element.place_rating !== null && element.place_rating.cleanliness !== null ? getHtmlDashTickValue(element.place_rating.cleanliness, "%") : 'No data') + '</div>' +
        '<div class="cell">' + (element.place_rating !== null && element.place_rating.food_hydration !== null ? getHtmlDashTickValue(element.place_rating.food_hydration, "%") : 'No data') + '</div>' +
        '<div class="cell">' + (element.place_rating !== null && element.place_rating.privacy_dignity_wellbeing !== null ? getHtmlDashTickValue(element.place_rating.privacy_dignity_wellbeing, "%") : 'No data') + '</div>' +
        '<div class="cell">' + (element.place_rating !== null && element.place_rating.dementia !== null ? getHtmlDashTickValue(element.place_rating.dementia, "%") : 'No data') + '</div>' +
        '<div class="cell">' + (element.place_rating !== null && element.place_rating.disability !== null ? getHtmlDashTickValue(element.place_rating.disability, "%") : 'No data') + '</div>' +
        '</div>' +
        '</div>';
    // Add new item
    target.prepend(newColumn);


};

function removeHospitalFromCompare(elementId, data, compareCount, hospitalType) {
    $('#compare_hospital_id_' + elementId).remove();
    target.append(emptyCol);
    $('button#' + elementId + '.compare').removeClass('selected');

    // Filter out the clicked item from the data
    var dataArr = data.split(',');
    var elementIndex = dataArr.indexOf(elementId);
    dataArr.splice(elementIndex, 1);
    data = dataArr.join(',');

    // Update the ids in the multi enquiry form
    multiEnquiryIdInput.data('hospital-id', removeTrailingCharacter(data));

    compareCount = parseInt(compareCount) - 1;

    if(hospitalType == 'private-hospital' || hospitalType == 'private') {
        privateHospitalCount -= 1;
        privateCountHolder.text(privateHospitalCount)
    } else {
        nhsHospitalCount -= 1;
        nhsCountHolder.text(nhsHospitalCount);
    }

    // Slide content down when all data removed
    if (compareCount === 0) {
        // Switch the first column round
        $('#compare_hospitals_headings').addClass('d-none');
        $('#no_items_added').removeClass('d-none');
        // Hide the comparison area
        compareContent.slideUp();
        $('body').removeClass('shortlist-open');
        compareContent.removeClass('revealed');
        $('.compare-arrow').toggleClass('rotated');
    }

    // Check to see if we need to re-enable the buttons
    enableButtons();

    // var countSpan = $('#compare_number');
    countSpan.text(compareCount);

    //Reset compareCount and compareHospitalsData
    Cookies.set("compareCount", 0, -1);
    Cookies.set("compareHospitalsData", '', -1);
    //Set them back again
    Cookies.set("compareCount", compareCount, {expires: 10000});
    Cookies.set("compareHospitalsData", data, {expires: 10000});

}

//Set the OnClick event for the Compare button
$(document).on("click", ".result-item-section-3 .compare", function () {
    // Get hospital type of item whose button has been clicked to remove it
    var hospitalTypeClicked = $(this).data('hospital-type');
    //Get the Data that is already in the Cookies
    var compareCount = parseInt(Cookies.get("compareCount"));
    var data = Cookies.get("compareHospitalsData");
    //Load the Cookies with the data that we need for the comparison
    var elementId = $(this).attr('id');

    // Split data string into Array
    var dataArr = data.split(',');
    // Check if value is in array
    var result = false;
    for (var i = 0; i < dataArr.length; i++) {
        var stringPart = dataArr[i];
        if (stringPart != elementId) continue;

        result = true;
        break;
    }

    //Check if there are already 5 hospitals for comparison in Cookies
    if (compareCount < 5) {
        //Check if we don't have the hospital in our comparison and add it - if not true then add to compare - also add the id to the enquiry form
        if (!result) {
            // Show the headings column when first item added, and it's not already in the
            if (compareCount === 0) {
                // Toggle the first column of comparison
                // Switch the first column round
                $('#compare_hospitals_headings').removeClass('d-none');
                $('#no_items_added').addClass('d-none');

            }
            //Add data to Cookies and send the element to populate the table
            data += elementId + ',';
            // Update the enquiry form
            multiEnquiryIdInput.data('hospital-id', removeTrailingCharacter(data));


            // Remove placeholder column
            target.children().last().remove();
            // var countSpan = $('#compare_number');

            // Add to the comparison area
            getHospitalsByIds(elementId);

            // addHospitalToCompare();
            // Disable buttons if we have reached the max number of items
            // Update compare count
            compareCount = parseInt(compareCount) + 1;
            countSpan.text(compareCount);
            // if (compareCount === 5) {
            //     disableButtons();
            // }
        }
        // Adding the first item to compare, i


    }

    // Check if we have to remove the data of the element that has been clicked - if true, it is already in the data
    if (result) {
        //Remove the hospital from the comparison table
        removeHospitalFromCompare(elementId, data, compareCount, hospitalTypeClicked);
        var dataArr = data.split(',');
        var elementIndex = dataArr.indexOf(elementId);
        dataArr.splice(elementIndex, 1);
        data = dataArr.join(',');
        compareCount = parseInt(compareCount) - 1;
    }


    // Pulsate the heart every time there is an action
    heartIcon.removeClass('has-count');
    setTimeout(function () {
        heartIcon.addClass('has-count');
    }, 100);

    if(compareCount > 0){
        heartIcon.addClass('active');
    } else {
        heartIcon.removeClass('active');
    }

    //Reset compareCount and compareHospitalsData
    Cookies.set("compareCount", 0, -1);
    Cookies.set("compareHospitalsData", '', {expires: 10000});
    //Set them back again
    Cookies.set("compareHospitalsData", data, {expires: 10000});
    Cookies.set("compareCount", compareCount, {expires: 10000});

});

//Set the OnClick event for the Remove Hospital on the Comparison table
$(document).on("click", ".compare-hospitals-bar .remove-hospital", function (e) {
    var hospitalTypeClicked = $(this).data('hospital-type');
    e.stopPropagation();
    var elementId = $(this).attr('id');
    var data = Cookies.get("compareHospitalsData");
    var compareCount = parseInt(Cookies.get("compareCount"));
    if(compareCount === 1){
        heartIcon.removeClass('active');
    }
    elementId = elementId.replace('remove_id_', '');

    removeHospitalFromCompare(elementId, data, compareCount, hospitalTypeClicked);
});

//Set the Onclick event for the Comparison Header
$(document).on("click", ".compare-hospitals-bar .compare-button-title", function (e) {
    var compareCount = parseInt(Cookies.get("compareCount"));
    var openTabs = $('.special-offer-tab.open');
    // var solutionsBar = $('.compare-hospitals-bar');
    if (compareCount > -1) {
        // solutionsBar.toggleClass('open');
        compareContent.slideToggle();
        $('body').toggleClass('shortlist-open');
        $('.compare-arrow').toggleClass('rotated');
        compareContent.toggleClass('revealed');
        // Close the special offer tabs if any are open
        openTabs
            .removeClass('open')
            .find('.special-offer-body')
            .slideUp();
        var $isSticky = $('.result-item-parent').hasClass('js-is-sticky');
        if($isSticky){
            stickybits('.result-item-parent').cleanup();
            return;
        }
        stickybits('.result-item-parent', {useStickyClasses: true});
    }
});

$(document).on('click', function (e) {
    // Hide shortlist bar if clicking outside it, but only if it is already open
    if (compareBar.has(e.target).length === 0 && compareContent.hasClass('revealed')) {
        compareContent.slideUp();
        $('body').removeClass('shortlist-open');
        $('.compare-arrow').removeClass('rotated');
        compareContent.removeClass('revealed');
    }
});
