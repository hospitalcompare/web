$(document).ready(function() {

    var faqSearch = $('.faqs-page .faq-search-input');
    faqSearch.on('input',function(e) {
        var search = $(this).val();
        $.ajax({
            url: 'api/search-faq/'+search,
            type: 'POST',
            headers: {
                'Authorization':  'Bearer mBu7IB6nuxh8RVzJ61f4',
            },
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: {},
            success: function (data) {
                // var json_obj = $.parseJSON(data);//parse JSON
                var ajaxBox = $(".faqs-page #faqs_accordion");
                ajaxBox.empty(); // remove old content
                //Check if we have at least one result in our data
                console.log(data.data.faqs);
                if(!$.isEmptyObject(data.data.faqs)) {
                    console.log(data.faqs);
                    $.each(data.data.faqs, function(key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                        ajaxBox.append('<div class="card">'+ obj.question + obj.answer +"</div>");
                    });
                } else {
                    ajaxBox.append('<h3>No FAQs found! Please refine the search.</h3>');
                }
            },
            error: function (data) {
                alert('Something went wrong! Please try again.')
            },
        });
    });
});
