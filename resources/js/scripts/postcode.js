$(document).ready(function () {
    //POSTCODE Autocomplete
    var $postcode_input = $('.postcode-parent #input_postcode');
    // The wrapper for distance dropdown
    var $radiusParent = $('.radius-parent');
    var timer;
    var interval = 500;

    // Do the ajax request with a delay
    $postcode_input.on('keyup', function() {
        clearTimeout(timer);

        if($(this).val()) {
            // Third argument passes the input to the function
            timer = setTimeout(ajaxCall, interval, $(this));

            if(valid_postcode($(this).val())){
                $radiusParent.show();
            }
            // else {
            //     $radiusParent.hide();
            // }
        }
    });

    // Check valid postcode
    function valid_postcode(postcode) {
        postcode = postcode.replace(/\s/g, "");
        var regex = /^[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}$/i;
        return regex.test(postcode);
    }

    function ajaxCall(input) {
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
                // var json_obj = $.parseJSON(data);//parse JSON
                var ajaxBox = $(".ajax-box");
                ajaxBox.empty(); // remove old options
                $('#hc_alert').hide(); // Hide the alert bar
                //Check if we have at least one result in our data
                if (!$.isEmptyObject(data.data.result)) {
                    $.each(data.data.result, function (key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                        ajaxBox.append("<p class='postcode-item' >" + obj.postcode + ', ' + obj.primary_care_trust + "</p>");
                    });
                    $('.postcode-results-container').slideDown();
                } else {
                    showAlert('Invalid Postcode! Please try again.', false);
                    $postcode_input.val("");
                    $('.postcode-results-container').slideUp();
                }
            },
            error: function (data) {
                showAlert('Something went wrong! Please try again.', false)
            },
        })
    }

    $('.ajax-box').on('click', '.postcode-item', function () {
        var newPostcode = $(this).text();
        //Get the actual postcode (everything that's before `,`)
        newPostcode = newPostcode.substr(0, newPostcode.indexOf(','));
        var parent = $('.postcode-parent #input_postcode');
        var ajaxBox = $('.postcode-results-container .ajax-box');
        parent.val(newPostcode);
        ajaxBox.empty();
        $('.postcode-results-container').hide();

        // Show the radius select if postcode is selected
        if(valid_postcode(newPostcode)){
            $radiusParent.show();
        }
    });

    //On Submit form, remove the `fake_postcode` input
    $('#search_form').on('submit', function(){
        $('#fake_postcode').attr("disabled", "disabled");

        return true; // ensure form still submits
    });
});

