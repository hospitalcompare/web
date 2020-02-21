// Show the radius input
function showRadius(element){
    var $direction = element.data('reveal-direction');
    element.addClass('revealed-' + $direction);
}

// Check valid postcode
function valid_postcode(postcode) {
    postcode = postcode.replace(/\s/g, "");
    var regex = /^((([A-PR-UWYZ][0-9])|([A-PR-UWYZ][0-9][0-9])|([A-PR-UWYZ][A-HK-Y][0-9])|([A-PR-UWYZ][A-HK-Y][0-9][0-9])|([A-PR-UWYZ][0-9][A-HJKSTUW])|([A-PR-UWYZ][A-HK-Y][0-9][ABEHMNPRVWXY]))\s?([0-9][ABD-HJLNP-UW-Z]{2})|(GIR)\s?(0AA))$/i;
    return regex.test(postcode);
}

function ajaxCall(input, resultsContainer, ajaxBox) {
    var postcode = input.val();
    $.ajax({
        url: 'api/getLocations/' + postcode,
        type: 'GET',
        headers: {
            'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4',
        },
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: {},
        success: function (data) {
            ajaxBox.empty(); // remove old options
            $('#hc_alert').slideUp(); // Hide the alert bar
            //Check if we have at least one result in our data
            if (!$.isEmptyObject(data.data.result)) {
                $.each(data.data.result, function (key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                    ajaxBox.append("<p class='postcode-item' >" + obj.postcode + ', ' + obj.admin_district + "</p>");
                });
                resultsContainer.slideDown();
            } else {
                showAlert('Invalid Postcode! Please try again.', false);
                input.val("");
                resultsContainer.slideUp();
            }
        },
        error: function (data) {
            showAlert('Something went wrong! Please try again.', false)
        },
    })
}

function handlePostcode() {
    //POSTCODE Autocomplete
    var $postcode_input = $('.input-postcode');
    // The wrapper for distance dropdown
    var $radiusParent = $postcode_input.parents('form').find('.radius-parent');
    var timer;
    var interval = 200;
    var $resultsContainer = $postcode_input.parents('form').find('.postcode-results-container');
    var $ajaxBox = $postcode_input.parents('form').find('.ajax-box');


    // Do the ajax request with a delay
    $($postcode_input).on('keyup', function() {
        clearTimeout(timer);

        if($(this).val()) {
            // Third argument passes the input to the function
            timer = setTimeout(ajaxCall, interval, $(this), $resultsContainer, $ajaxBox);

            if(valid_postcode($(this).val())){
                showRadius($radiusParent);
            }
        } else {
            $ajaxBox.empty();
            $resultsContainer.slideUp();
        }
    });


    $ajaxBox.on('click', '.postcode-item', function () {
        var newPostcode = $(this).text();
        //Get the actual postcode (everything that's before `,`)
        newPostcode = newPostcode.substr(0, newPostcode.indexOf(','));
        var parent = $('.postcode-parent #input_postcode');

        parent.val(newPostcode);
        $ajaxBox.empty();
        $resultsContainer.slideUp();

        // Show the radius select if postcode is selected
        if(valid_postcode(newPostcode)){
            showRadius($radiusParent);
        }
    });

    //On Submit form, remove the `fake_postcode` input
    $('#search_form').on('submit', function(){
        $('#fake_postcode').attr("disabled", "disabled");

        return true; // ensure form still submits
    });
}

$(document).ready(function(){
    handlePostcode()
});
