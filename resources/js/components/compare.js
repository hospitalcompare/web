$(document).ready(function () {
    //Check if we don't have the cookie and set it to 0
    var compareBar = $('.compare-hospitals-bar');
    var compareContent = $('.compare-hospitals-content');
    var countSpan = $('#compare_number');
    var heartIcon = $('#compare_heart');
    // Where we hold the counts of hospital types
    // No of each type of hospital in compare
    var nhsCountHolder = $('#nhs-hospital-count');
    var privateCountHolder = $('#private-hospital-count');


    var multiEnquiryHospitalIds = $('input[name=hospital_id]');
    console.log('Hello ' + multiEnquiryHospitalIds);
    var nhsHospitalCount = 0;
    var privateHospitalCount = 0;
    var compareHospitalIds = '';
    var privateHospitalIds = '';

    if (typeof Cookies.get("compareCount") === 'undefined') {
        Cookies.set("compareCount", 0, {expires: 10000});
        // Cookies.set("compareHospitalsData", '', {expires: 10000});
        Cookies.set("compareHospitalsData", JSON.stringify(''), {expires: 10000});
    }

    var compareCount = Cookies.get('compareCount');
    var compareData = JSON.parse(Cookies.get('compareHospitalsData'));

    // Check if we need to show the Compare hospitals div
    if (compareCount > 0) {
        // compareContent.slideDown();
        // $('body').addClass('shortlist-open');
        //Hide the contents and increase the span with number
        // compareContent.addClass('revealed');
        //Populate the table with the given data
        // for (i = 1; i <= compareCount; i++) {
        //     var element = compareData[i];
        //     //Add the IDs on the hidden span
        //     compareHospitalIds += element.id + ',';
        //
        //Remove the last , after all the ids have been added
        // get the hospital ids from the cookie
        // }
        compareHospitalIds = compareData;


        //Set the new value
        //compareHospitalIdsSpan.val(compareHospitalIds);
        //Ajax request to retrieve all the Hospitals to compare
        var returned = getHospitalsByIds(compareHospitalIds);
        if(compareHospitalIds.length > 0) {
            // console.log(returned);
            // for (var item in returned) {
            //     console.log(item)
            // }
            $.each(returned, function (key, element) { //$.parseJSON() method is needed unless chrome is throwing error.
                // console.log(element);
                addHospitalToCompare(element);
            });
        }
        // console.log(elements, element);

        countSpan.text(compareCount);
        heartIcon.addClass('has-count');
        //Add the `active` class that will change the color to pink
        heartIcon.addClass('active');
    } else {
        heartIcon.removeClass('active');
    }

    // Check if we need to disable buttons on pageload
    disableButtons(0);

    /**
     * Adds the element to the Comparison Table
     *
     * @param element
     */
    function addHospitalToCompare(element) {
        // console.log(element);
        var target = $('#compare_hospitals_grid');
        // Content for modal trigger button
        var $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g><g><g><path fill="#fff" d="M10.002 18.849c-4.878 0-8.846-3.968-8.846-8.847 0-4.878 3.968-8.846 8.846-8.846 4.879 0 8.847 3.968 8.847 8.846 0 4.879-3.968 8.847-8.847 8.847zm0-18.849C4.488 0 0 4.488 0 10.002c0 5.515 4.488 10.003 10.002 10.003 5.515 0 10.003-4.488 10.003-10.003C20.005 4.488 15.517 0 10.002 0z"></path></g><g><path fill="#fff" d="M14.47 5.848l-5.665 6.375-3.34-2.67a.578.578 0 0 0-.811.088c-.2.25-.158.615.091.815l3.769 3.015a.57.57 0 0 0 .361.125c.167 0 .325-.07.433-.196l6.03-6.783a.579.579 0 0 0 .146-.42.588.588 0 0 0-.191-.4.592.592 0 0 0-.824.05z"></path></g></g></g></svg>';
        var nhsRating = 1;
        var cancelledOps = null;

        if(element.cancelled_op !== null) {
            // cancelledOps = element.cancelled_op.perc_cancelled_ops;
            cancelledOps = element.cancelled_op;
        }
        var btnContent = element.type == 'nhs-hospital' ?
            '<a id="' + element.id + '" ' +
            'class="btn btn-icon btn-blue btn-enquire enquiry mr-2 btn-block" ' +
            'role="button" data-toggle="modal" ' +
            'data-hospital-url="' + element.url + '" ' +
            'data-hospital-title="' + element.name + '" ' +
            'data-target="#hc_modal_enquire_nhs">Make an enquiry' +
             $svg +
            '</a>' :
            '<a id="' + element.id + '" ' +
            'class="btn btn-icon btn-blue btn-enquire enquiry mr-2 btn-block" ' +
            'role="button" data-toggle="modal" ' +
            'data-hospital-url="' + element.url + '" ' +
            'data-hospital-title="' + element.name + '" ' +
            'data-target="#hc_modal_enquire_private">Make an enquiry' +
             $svg +
            '</a>';
        // Content for new hospital added to compare
        // console.log(element.hospital_type_id);
        var hospitalType = element.hospital_type_id == 1 ? 'Private Hospital' : 'NHS Hospital';

        if(hospitalType == 'Private Hospital') {
            privateHospitalCount += 1;
            privateCountHolder.text(privateHospitalCount);
            // Add the id to the list for mulitiple enquiries
            privateHospitalIds += element.id + ',';
            console.log(privateHospitalIds);
            // Update the value of the enquiry form
            $('input[name=hospital_id]').val(privateHospitalIds.replace(/,\s*$/, ""));

        } else {
            nhsHospitalCount += 1;
            nhsCountHolder.text(nhsHospitalCount);
        }
        var newRowContent =
            '<div class="col-2 text-center" id="compare_hospital_id_' + element.id + '">' +
                '<div class="col-inner">' +
                    '<div class=" mx-auto col-header d-flex flex-column justify-content-between">' +
                        '<div class="image-wrapper h-100">' +
                            '<img class="" src="images/alder-1.jpg" alt="Image of ' + element.name + '">' +
                            '<div class="remove-hospital" id="remove_id_' + element.id + '" data-hospital-type="' + slugify(hospitalType) + '"></div>' +
                                '<div class="details">' +
                                '<p class="w-100 mt-auto">' + element.name + '</p>' +
                                btnContent +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="cell">' + hospitalType + '</div>' +
                    '<div class="cell">' + getHtmlDashTickValue(element.waiting_time[0].perc_waiting_weeks, " Weeks") + '</div>' +
                    '<div class="cell">' + getHtmlStars(element.rating.avg_user_rating) + '</div>' +
                    '<div class="cell">' + getHtmlDashTickValue(cancelledOps, "%") + '</div>' +
                    '<div class="cell">' + element.rating.latest_rating + '</div>' +
                    '<div class="cell">' + getHtmlDashTickValue(element.rating.friends_family_rating, "%") + '</div>' +
                    '<div class="cell">' + getHtmlDashTickValue(element.nhsRating) + '</div>' +
                    '<div class="cell">' + getHtmlDashTickValue(element.nhsRating) + '</div>' +
                '</div>' +
            '</div>';
        target.append(newRowContent);
        //Toggle the full heart or empty heart  class of the button
        $('button#' + element.id + '.compare').addClass('selected');
    }

    /**
     * Removes a Hospital from the Comparison Table
     *
     * @param elementId
     * @param data
     * @param compareCount
     */

    function removeHospitalFromCompare(elementId, data, compareCount, hospitalType) {
        $('#compare_hospital_id_' + elementId).remove();
        $('button#' + elementId + '.compare').removeClass('selected');

        // property found, access the foo property using result[0].foo
        // Filter out the clicked item from the data
        var dataArr = data.split(',');
        var elementIndex = dataArr.indexOf(elementId);
        dataArr.splice(elementIndex, 1);
        data = dataArr.join(',');

        // console.log('Data after removing this item: ' + data);
        compareCount = parseInt(compareCount) - 1;

        if(hospitalType == 'private-hospital') {
            privateHospitalCount -= 1;
            privateCountHolder.text(privateHospitalCount)
        } else {
            nhsHospitalCount -= 1;
            nhsCountHolder.text(nhsHospitalCount);
        }

        // Slide content down when all data removed
        if (compareCount === 0) {
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
        Cookies.set("compareHospitalsData", JSON.stringify('data'), -1);
        //Set them back again
        Cookies.set("compareCount", compareCount, {expires: 10000});
        Cookies.set("compareHospitalsData", JSON.stringify(data), {expires: 10000});

    }

    //Set the OnClick event for the Compare button
    $(document).on("click", ".result-item-section-3 .compare", function () {
        // Get hsopital type of item whose button has been clicked to remove it
        var hospitalTypeClicked = $(this).data('hospital-type');
        //Get the Data that is already in the Cookies
        var compareCount = parseInt(Cookies.get("compareCount"));
        // console.log('Compare count: ' + compareCount);
        var data = JSON.parse(Cookies.get("compareHospitalsData"));
        // console.log('Data: ' + data);
        //Load the Cookies with the data that we need for the comparison
        var elementId = $(this).attr('id');

        // Do the AJAX request
        // console.log(getHospitalsByIds(elementId));

        // var enquireBtn = $('#enquire_' + elementId).outerHTML;
        var name = $('#item_name_' + elementId).text();
        var url = $('#item_hospital_url_' + elementId).text();
        var type = $('#item_hospital_type_class_' + elementId).text();
        var waitingTime = $('#item_waiting_time_' + elementId).text();
        var userRating = $('#item_user_rating_' + elementId).text();
        var opCancelled = $('#item_op_cancelled_' + elementId).text();
        var qualityRating = $('#item_quality_rating_' + elementId).text();
        var ffRating = $('#item_ff_rating_' + elementId).text();
        var nhsFunded = $('#item_nhs_funded_' + elementId).text();
        var nhsPrivatePay = $('#item_nhs_private_pay_' + elementId).text();

        // Return the matching elements from the array
        // var result = $.grep(data, function (e) {
        //     return e.id == elementId;
        // });
        // Remove trailing comma
        // data = data.slice(0, -1);

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

        // console.log('Result: ' + result);

        // Trigger Dr S when someone adds the first hospital
        // if(compareCount === 0){
        //     var $delay = 5000;
        //     var $message = 'Great! You have added your first hospital to your shortlist. You can add up to five hospitals to your shortlist. Why not give it a try?';
        //     popupDoctor($message, $delay);
        // }

        //Check if there are already 5 hospitals for comparison in Cookies
        if (compareCount < 5) {
            //Check if we don't have the hospital in our comparison and add it - if not true then add to compare
            if (!result) {
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
                addHospitalToCompare(getHospitalsByIds(elementId)[0]);
                compareCount = parseInt(compareCount) + 1;
                // Disable buttons if we have reached the max number of items
                if (compareCount === 5) {
                    // console.log('Max reached');
                    disableButtons(1);
                }
                // var countSpan = $('#compare_number');
                countSpan.text(compareCount);
            }
        }

        // Check if we have to remove the data of the element that has been clicked - if true, it is already in the data

        if (result) {
            // console.log('Already added, now removing');
            //Remove the hospital from the comparison table
            removeHospitalFromCompare(elementId, data, compareCount, hospitalTypeClicked);
            var dataArr = data.split(',');
            var elementIndex = dataArr.indexOf(elementId);
            dataArr.splice(elementIndex, 1);
            data = dataArr.join(',');
            compareCount = parseInt(compareCount) - 1;
        }

        // Slide content down when all data removed
        if (compareCount === 0) {
            compareContent.slideUp();
            $('body').removeClass('shortlist-open');
            compareContent.removeClass('revealed');
            $('.compare-arrow').toggleClass('rotated');
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
        Cookies.set("compareHospitalsData", JSON.stringify('data'), {expires: 10000});
        //Set them back again
        Cookies.set("compareHospitalsData", JSON.stringify(data), {expires: 10000});
        Cookies.set("compareCount", compareCount, {expires: 10000});

    });

    //Set the OnClick event for the Remove Hospital on the Comparison table
    $(document).on("click", ".compare-hospitals-bar .remove-hospital", function (e) {
        var hospitalTypeClicked = $(this).data('hospital-type');
        e.stopPropagation();
        var elementId = $(this).attr('id');
        // console.log(JSON.parse(Cookies.get("compareHospitalsData")));
        var data = JSON.parse(Cookies.get("compareHospitalsData"));
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


});
