$(function() {
    $('.postcode-autocomplete-cont').hide();
    $('.homePostCodeParent #input_postcode').on('input',function(e){
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
                var el = $(".homePostCodeParent .postcode-autocomplete-cont .ajax-box");
                el.empty(); // remove old options
                //Check if we have at least one result in our data
                if(!$.isEmptyObject(data.data.result)) {
                    $.each(data.data.result, function(key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                        el.append("<p>"+ obj.postcode +"</p>");
                    });
                    $('.postcode-autocomplete-cont').show();
                } else {
                    alert('Invalid Postcode! Please try again.');
                }
            },
            error: function (data) {
                alert('Something went wrong! Please try again.')
            },
        });
    })
});