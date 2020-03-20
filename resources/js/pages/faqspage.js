var $faqSearch = $('.faqs-page #faq_search_input');
var $accordion = $(".faqs-page #faqs_accordion");
var $originalData = $accordion.html();

var timer;
var interval = 500;

$faqSearch.focus();

// Do the ajax request with a delay
$faqSearch.on('input', function (e) {
    clearTimeout(timer);
    // Third argument passes the input to the function
    timer = setTimeout(ajaxCall, interval, $(this));
    // if ($faqSearch.val()) {
    // }
});

function ajaxCall(input) {
    var search = input.val();
    if (search) {
        $.ajax({
            url: 'api/search-faq/' + search,
            type: 'POST',
            headers: {
                'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4',
            },
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            data: {},
            success: function (data) {
                // var json_obj = $.parseJSON(data);//parse JSON
                $('.alert').slideUp(); // Hide alert if previously shown
                var ajaxBox = $(".faqs-page #faqs_accordion");
                ajaxBox.empty(); // remove old content
                //Check if we have at least one result in our data
                if (!$.isEmptyObject(data.data.faqs)) {
                    $.each(data.data.faqs, function (key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
                        // var regex = new RegExp(search, 'gi');
                        // Replace the search term within the results with a highlighted span
                        // result = result.replace(regex, `<span class="hl">${search}</span>`);
                        ajaxBox.append('<div class="card"><div class="card-header" id="heading'+key+'">\n' +
                                '                                <h2 class="mb-0">\n' +
                                '                                    <button class="btn btn-link collapsed text-left" type="button"\n' +
                                '                                            data-toggle="collapse"\n' +
                                '                                            data-target="#collapse'+key+'" aria-expanded="false"\n' +
                                '                                            aria-controls="collapse'+key+'">' + obj.question + "</button>\n" +
                                "                                </h2>\n" +
                                '                            </div><div id="collapse'+key+'" class="collapse" aria-labelledby="heading'+key+'" data-parent="#faqs_accordion">\n' +
                            '<div class="card-body">\n' +
                            '<p>' + obj.answer + '</button>\n' +
                            '  </p>\n' +
                            '</div>\n' +
                            '</div></div>');
                    });
                    ajaxBox.highlight(search); // Use the highlight API to search for keyword, not including HTML tags
                } else {
                    ajaxBox.append('<h3>No FAQs found! Please refine the search.</h3>');
                }
            },
            error: function (data) {
                showAlert('Something went wrong! Please try again.', false);
            },
        });
    } else {
        // Show the full list when the search is empty, or deleted
        $accordion.html($originalData);
    }
};
