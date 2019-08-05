$(document).ready(function () {
    //POSTCODE Autocomplete
    // $('.postcode-autocomplete-cont').hide();
    var $postcode_input = $('.homePostCodeParent #input_postcode')
    $postcode_input.on('input',function(e) {
        var postcode = $(this).val();
        $.ajax({
            url: 'api/getLocations/'+postcode,
            type: 'GET',
            headers: {
                'Authorization':  'Bearer mBu7IB6nuxh8RVzJ61f4',
            },
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: {},
            success: function (data) {
                // var json_obj = $.parseJSON(data);//parse JSON
                var ajaxBox = $(".homePostCodeParent .postcode-autocomplete-cont .ajax-box");
                ajaxBox.empty(); // remove old options
                //Check if we have at least one result in our data
                if(!$.isEmptyObject(data.data.result)) {
                    $.each(data.data.result, function(key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                        ajaxBox.append("<p class='postcode-item' >"+ obj.postcode +"</p>");
                    });
                    $('.postcode-autocomplete-cont').show();
                } else {
                    alert('Invalid Postcode! Please try again.');
                    $postcode_input.val("");
                    $('.postcode-autocomplete-cont').hide();
                }
            },
            error: function (data) {
                alert('Something went wrong! Please try again.')
            },
        });
    });

    $('.ajax-box').on('click', '.postcode-item', function(){
        var newPostcode = $(this).text();
        var parent      = $('.homePostCodeParent #input_postcode');
        var ajaxBox     = $('.postcode-autocomplete-cont .ajax-box');
        parent.val(newPostcode);
        ajaxBox.empty();
        $('.postcode-autocomplete-cont').hide();
    });

    //Hide first option tag value from displaying in select element options
    // $('.firstOption').hide();
});
