$(document).ready(function () {
    //POSTCODE Autocomplete
    var $postcode_input = $('.home-postcode-parent #input_postcode');
    var $radiusInputParent = $('.home-radius-parent');
    var timer;
    var interval = 1000;

    // Do the ajax request with a delay
    $postcode_input.on('keyup', function() {
        clearTimeout(timer);

        if($(this).val()) {
            // Third argument passes the input to the function
            timer = setTimeout(ajaxCall, interval, $(this));

            if(valid_postcode($(this).val())){
                $radiusInputParent.slideDown();
            } else {
                $radiusInputParent.slideUp();
            }
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
                var ajaxBox = $(".home-postcode-parent .postcode-autocomplete-container .ajax-box");
                ajaxBox.empty(); // remove old options
                $('#hc_alert').slideUp(); // Hide the alert bar
                //Check if we have at least one result in our data
                if (!$.isEmptyObject(data.data.result)) {
                    $.each(data.data.result, function (key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                        ajaxBox.append("<p class='postcode-item' >" + obj.postcode + "</p>");
                    });
                    $('.postcode-autocomplete-container').show();
                } else {
                    showAlert('Invalid Postcode! Please try again.', false);
                    $postcode_input.val("");
                    $('.postcode-autocomplete-container').hide();
                }
            },
            error: function (data) {
                showAlert('Something went wrong! Please try again.', false)
            },
        })
    }

    $('.ajax-box').on('click', '.postcode-item', function () {
        var newPostcode = $(this).text();
        var parent = $('.home-postcode-parent #input_postcode');
        var ajaxBox = $('.postcode-autocomplete-container .ajax-box');
        parent.val(newPostcode);
        ajaxBox.empty();
        $('.postcode-autocomplete-container').hide();

        // Show the radius select if postcode is selected
        if(valid_postcode(newPostcode)){
            $radiusInputParent.slideDown();
        }
    });
});

