$(document).ready(function () {


});


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
disableButtons(0);


/**
 * Removes a Hospital from the Comparison Table
 *
 * @param elementId
 * @param data
 * @param compareCount
 */

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
            if (compareCount == 0) {
                // Toggle the first column of comparison
                // Switch the first column round
                $('#compare_hospitals_headings').removeClass('d-none');
                $('#no_items_added').addClass('d-none');

            }
            var element = {
                'id': elementId,
                // 'enquireBtn': enquireBtn,
                // 'name': name.trim(),
                // 'url': url,
                // 'type': type,
                // 'waitingTime': waitingTime,
                // 'userRating': userRating,
                // 'opCancelled': opCancelled,
                // 'qualityRating': qualityRating,
                // 'ffRating': ffRating,
                // 'nhsFunded': nhsFunded,
                // 'nhsPrivatePay': nhsPrivatePay
            };
            //Add data to Cookies and send the element to populate the table
            data += elementId + ',';
            // Update the enquiry form
            multiEnquiryIdInput.data('hospital-id', removeTrailingCharacter(data));
            // Update compare count
            compareCount = parseInt(compareCount) + 1;

            // Remove placeholder column
            target.children().last().remove();
            // var countSpan = $('#compare_number');
            countSpan.text(compareCount);
            // Add to the comparison area
            addHospitalToCompare(getHospitalsByIds(elementId)[0]);
            // Disable buttons if we have reached the max number of items
            if (compareCount === 5) {
                disableButtons(1);
            }
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
