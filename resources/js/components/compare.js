$(document).ready(function () {
    //Check if we don't have the cookie and set it to 0
    var compareBar = $('.compare-hospitals-bar');
    var countSpan = $('#compare_number');
    var icon = $('.compare-heart');
    if (typeof Cookies.get("compareCount") === 'undefined') {
        Cookies.set("compareCount", 0, {expires: 10000});
        Cookies.set("compareHospitalsData", JSON.stringify([{}]), {expires: 10000});
    }

    var compareCount = Cookies.get('compareCount');
    var compareData = JSON.parse(Cookies.get('compareHospitalsData'));

    //Check if we need to show the Compare hospitals div
    if (compareCount > 0) {
        compareBar.slideDown();
        //Hide the contents and increase the span with number
        $('.compare-hospitals-bar .compare-hospitals-content').removeClass('revealed');
        //Populate the table with the given data
        for (i = 1; i <= compareCount; i++) {
            var element = compareData[i];
            addHospitalToCompare(element);
        }
        // var countSpan = $('#compare_number');
        countSpan.text(compareCount);
        icon.addClass('has-count');
    }

    /**
     * Adds the element to the Comparison Table
     *
     * @param element
     */
    function addHospitalToCompare(element) {
        var target = $('#compare_hospitals_grid');
        var newRowContent =
            '<div class="col-2 text-center" id="compare_hospital_id_' + element.id + '">' +
                '<div class="col-inner">' +
                    '<div class="image-wrapper mx-auto">' +
                        '<img class="" src="images/alder-1.png">' +
                        '<div class="remove-hospital" id="remove_id_' + element.id + '"></div>' +
                    '</div>' +
                    '<div class="details">' +
                        '<p>' + element.name + '</p>' +
                        // element.enquireBtn +
                    '</div>' +
                    '<div class="cell">' + element.waitingTime + '</div>' +
                    '<div class="cell">' + element.userRating + '</div>' +
                    '<div class="cell">' + element.opCancelled + '</div>' +
                    '<div class="cell">' + element.qualityRating + '</div>' +
                    '<div class="cell">' + element.ffRating + '</div>' +
                    '<div class="cell">' + element.nhsFunded + '</div>' +
                    '<div class="cell">' + element.nhsPrivatePay + '</div>' +
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
            $('.compare-hospitals-bar .compare-hospitals-content').slideUp();
            $('.compare-arrow').toggleClass('rotated');
            icon.removeClass('has-count');
        }

        var countSpan = $('#compare_number');
        countSpan.text(compareCount);

        //Reset compareCount and compareHospitalsData
        Cookies.set("compareCount", 0, -1);
        Cookies.set("compareHospitalsData", 0, -1);
        //Set them back again
        Cookies.set("compareHospitalsData", JSON.stringify(data), {expires: 10000});
        Cookies.set("compareCount", compareCount, {expires: 10000});
    }

    //Set the OnClick event for the Compare button
    $(document).on("click touchend", ".sort-categories-section-3 .compare", function () {
        //Get the Data that is already in the Cookies
        var compareCount = parseInt(Cookies.get("compareCount"));
        var data = JSON.parse(Cookies.get("compareHospitalsData"));
        compareBar.slideDown();

        //Load the Cookies with the data that we need for the comparison
        var elementId = $(this).attr('id');
        // var enquireBtn = $('#enquire_' + elementId).outerHTML;
        var name = $('#item_name_' + elementId).text();
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

        //Check if there are already 3 hospitals for comparison in Cookies
        if (compareCount < 5) {
            //Check if we don't have the hospital in our comparison and add it
            if (result.length === 0) {
                var element = {
                    'id': elementId,
                    // 'enquireBtn': enquireBtn,
                    'name': name,
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
                var countSpan = $('#compare_number');
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
            $('.compare-hospitals-bar .compare-hospitals-content').slideUp();
            $('.compare-arrow').toggleClass('rotated');
        }

        // If more than one item, highlight the heart icon
        if (compareCount > 0) {
            icon.addClass('has-count');
        }

        //Reset compareCount and compareHospitalsData
        Cookies.set("compareCount", 0, -1);
        Cookies.set("compareHospitalsData", 0, -1);
        //Set them back again
        Cookies.set("compareHospitalsData", JSON.stringify(data), {expires: 10000});
        Cookies.set("compareCount", compareCount, {expires: 10000});

    });

    //Set the OnClick event for the Remove Hospital on the Comparison table
    $(document).on("click touchend", ".compare-hospitals-bar .remove-hospital", function () {
        var elementId = $(this).attr('id');
        var data = JSON.parse(Cookies.get("compareHospitalsData"));
        var compareCount = parseInt(Cookies.get("compareCount"));
        elementId = elementId.replace('remove_id_', '');

        removeHospitalFromCompare(elementId, data, compareCount);
    });

    //Set the Onclick event for the Comparison Header
    $(document).on("click touchend", ".compare-hospitals-bar .compare-button-title", function (e) {
        var compareCount = parseInt(Cookies.get("compareCount"));
        if (compareCount > 0) {
            $('.compare-hospitals-bar .compare-hospitals-content').slideToggle();
            $('.compare-arrow').toggleClass('rotated');
        }
    });

    $(document).on('click', function (e) {
        // Hide compare bar if clicking outside
        // console.log( $.contains( $(e.target), $('.compare-hospitals-bar')) );
        // console.log($('.compare-hospitals-bar').has(e.target).length)
        // if ($('.compare-hospitals-bar').has(e.target).length === 0) {
        //     $('.compare-hospitals-bar .compare-hospitals-content').slideUp();
        //     $('.compare-arrow').removeClass('rotated');
        // }
    });
});
