/**
 * Disable compare buttons if we have reached the max no of items
 *
 */
window.disableButtons = function (modifier = 0) {
    compareCount = Cookies.get('compareCount');
    compareCount = parseInt(compareCount);

    var $notSelected = $('.compare').not($('.selected'));

    if (compareCount + modifier === 5) {
        // console.log(compareCount, 'Disabling buttons');
        $notSelected
            .addClass('disabled')
            .parent()
            .prop('title', 'Sorry, you have reached the limit of hospitals to compare.')
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
            // .attr('data-toggle', '');
    }
};

$(document).ready(function () {
    //Check if we don't have the cookie and set it to 0
    var compareBar = $('.compare-hospitals-bar');
    var compareContent = $('.compare-hospitals-content');
    var countSpan = $('#compare_number');
    var heartIcon = $('#compare_heart');

    if (typeof Cookies.get("compareCount") === 'undefined') {
        Cookies.set("compareCount", 0, {expires: 10000});
        Cookies.set("compareHospitalsData", JSON.stringify([{}]), {expires: 10000});
    }

    var compareCount = Cookies.get('compareCount');
    var compareData = JSON.parse(Cookies.get('compareHospitalsData'));

    //Check if we need to show the Compare hospitals div
    if (compareCount > 0) {
        // compareContent.slideDown();
        // $('body').addClass('modal-open');
        //Hide the contents and increase the span with number
        // compareContent.addClass('revealed');
        //Populate the table with the given data
        for (i = 1; i <= compareCount; i++) {
            var element = compareData[i];
            addHospitalToCompare(element);
        }
        countSpan.text(compareCount);
        heartIcon.addClass('has-count');
        //Add the `active` class that will change the color to pink
        $('#compare_heart').addClass('active');
    } else {
        $('#compare_heart').removeClass('active');
    }

    // Check if we need to disable buttons on pageload
    disableButtons(0);

    /**
     * Adds the element to the Comparison Table
     *
     * @param element
     */
    function addHospitalToCompare(element) {
        var target = $('#compare_hospitals_grid');
        // Content for modal trigger button
        var $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g><g><g><path fill="#fff" d="M10.002 18.849c-4.878 0-8.846-3.968-8.846-8.847 0-4.878 3.968-8.846 8.846-8.846 4.879 0 8.847 3.968 8.847 8.846 0 4.879-3.968 8.847-8.847 8.847zm0-18.849C4.488 0 0 4.488 0 10.002c0 5.515 4.488 10.003 10.002 10.003 5.515 0 10.003-4.488 10.003-10.003C20.005 4.488 15.517 0 10.002 0z"></path></g><g><path fill="#fff" d="M14.47 5.848l-5.665 6.375-3.34-2.67a.578.578 0 0 0-.811.088c-.2.25-.158.615.091.815l3.769 3.015a.57.57 0 0 0 .361.125c.167 0 .325-.07.433-.196l6.03-6.783a.579.579 0 0 0 .146-.42.588.588 0 0 0-.191-.4.592.592 0 0 0-.824.05z"></path></g></g></g></svg>';
        var btnContent = element.type == 'nhs-hospital' ?
            '<a id="' + element.id + '" ' +
            'class="btn btn-icon btn-blue btn-enquire enquiry mr-2 btn-block" ' +
            'role="button" data-toggle="modal" ' +
            'data-hospital-url="' + element.url + '" ' +
            'data-hospital-title="' + element.name + '" ' +
            'data-target="#hc_modal_enquire_nhs">Make an enquiry' +
            '    <i class=""></i>' +
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
        var newRowContent =
            '<div class="col-2 text-center" id="compare_hospital_id_' + element.id + '">' +
            '<div class="col-inner">' +
            '<div class="image-wrapper mx-auto">' +
            '<img class="" src="images/alder-1.png">' +
            '<div class="remove-hospital" id="remove_id_' + element.id + '"></div>' +
            '</div>' +
            '<div class="details">' +
            '<p class="w-100">' + element.name + '</p>' +
            btnContent +
            '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(element.waitingTime, " Weeks") + '</div>' +
            '<div class="cell">' + getHtmlStars(element.userRating) + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(element.opCancelled, "%") + '</div>' +
            '<div class="cell">' + element.qualityRating + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(element.ffRating, "%") + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(element.nhsFunded) + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(element.nhsPrivatePay) + '</div>' +
            '</div>' +
            '</div>';
        target.append(newRowContent);
        //Toggle the full heart or empty heart  class of the button
        $('a#' + element.id + '.compare').addClass('selected');
    }

    /**
     * Removes a Hospital from the Comparison Table
     *
     * @param elementId
     * @param data
     * @param compareCount
     */

    function removeHospitalFromCompare(elementId, data, compareCount) {
        $('#compare_hospital_id_' + elementId).remove();
        $('a#' + elementId + '.compare').removeClass('selected');

        // property found, access the foo property using result[0].foo
        data = $.grep(data, function (e) {
            return e.id != elementId;
        });
        compareCount = parseInt(compareCount) - 1;

        // Slide content down when all data removed
        if (compareCount === 0) {
            compareContent.slideUp();
            $('body').removeClass('modal-open');
            compareContent.removeClass('revealed');
            $('.compare-arrow').toggleClass('rotated');
        }

        // Check to see if we need to re-enable the buttons
        enableButtons();

        // var countSpan = $('#compare_number');
        countSpan.text(compareCount);

        //Reset compareCount and compareHospitalsData
        Cookies.set("compareCount", 0, -1);
        Cookies.set("compareHospitalsData", 0, -1);
        //Set them back again
        Cookies.set("compareHospitalsData", JSON.stringify(data), {expires: 10000});
        Cookies.set("compareCount", compareCount, {expires: 10000});
    }

    //Set the OnClick event for the Compare button
    $(document).on("click", ".result-item-section-3 .compare", function () {
        //Get the Data that is already in the Cookies
        var compareCount = parseInt(Cookies.get("compareCount"));
        var data = JSON.parse(Cookies.get("compareHospitalsData"));
        // compareBar.slideDown();

        // $('body').addClass('modal-open');
        // compareContent.removeClass('revealed');

        //Load the Cookies with the data that we need for the comparison
        var elementId = $(this).attr('id');
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
        var result = $.grep(data, function (e) {
            return e.id == elementId;
        });



        // Trigger Dr S when someone adds the first hospital

        if(compareCount === 0){
            var $delay = 5000;
            var $message = 'Great! You have added your first hospital to your shortlist. You can add up to five hospitals to your shortlist. Why not give it a try?';
            popupDoctor($message, $delay);
        }

        //Check if there are already 3 hospitals for comparison in Cookies
        if (compareCount < 5) {
            //Check if we don't have the hospital in our comparison and add it
            if (result.length === 0) {
                var element = {
                    'id': elementId,
                    // 'enquireBtn': enquireBtn,
                    'name': name.trim(),
                    'url': url,
                    'type': type,
                    'waitingTime': waitingTime,
                    'userRating': userRating,
                    'opCancelled': opCancelled,
                    'qualityRating': qualityRating,
                    'ffRating': ffRating,
                    'nhsFunded': nhsFunded,
                    'nhsPrivatePay': nhsPrivatePay
                };
                //Add data to Cookies and send the element to populate the table
                data.push(element);
                addHospitalToCompare(element);
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

        //Check if we have to remove the data of the element that has been clicked

        if (result.length === 1) {
            //Remove the hospital from the comparison table
            removeHospitalFromCompare(elementId, data, compareCount);
            data = $.grep(data, function (e) {
                return e.id != elementId;
            });
            compareCount = parseInt(compareCount) - 1;
        }

        // Slide content down when all data removed
        if (compareCount === 0) {
            compareContent.slideUp();
            $('body').removeClass('modal-open');
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
        Cookies.set("compareHospitalsData", 0, -1);
        //Set them back again
        Cookies.set("compareHospitalsData", JSON.stringify(data), {expires: 10000});
        Cookies.set("compareCount", compareCount, {expires: 10000});

    });

    //Set the OnClick event for the Remove Hospital on the Comparison table
    $(document).on("click", ".compare-hospitals-bar .remove-hospital", function (e) {
        e.stopPropagation();
        var elementId = $(this).attr('id');
        // console.log(JSON.parse(Cookies.get("compareHospitalsData")));
        var data = JSON.parse(Cookies.get("compareHospitalsData"));
        var compareCount = parseInt(Cookies.get("compareCount"));
        if(compareCount === 1){
            heartIcon.removeClass('active');
        }
        elementId = elementId.replace('remove_id_', '');

        removeHospitalFromCompare(elementId, data, compareCount);
    });

    //Set the Onclick event for the Comparison Header
    $(document).on("click", ".compare-hospitals-bar .compare-button-title", function (e) {
        var compareCount = parseInt(Cookies.get("compareCount"));
        var openTabs = $('.special-offer-tab.open');
        if (compareCount > 0) {
            compareContent.slideToggle();
            $('body').toggleClass('shortlist-open');
            $('.compare-arrow').toggleClass('rotated');
            compareContent.toggleClass('revealed');
            // Close the special offer tabs if any are open
            openTabs
                .removeClass('open')
                .find('.special-offer-body')
                .slideUp();
        }
    });

    $(document).on('click', function (e) {
        // Hide shortlist bar if clicking outside it, but only if it is already open
        if (compareBar.has(e.target).length === 0 && compareContent.hasClass('revealed')) {
            compareContent.slideUp();
            $('body').removeClass('modal-open');
            $('.compare-arrow').removeClass('rotated');
            compareContent.removeClass('revealed');
        }
    });
});

// TODO: refactor the toggling classes into a function
