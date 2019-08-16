$(document).ready(function() {
    //Change the background color of the selectbox when an option with a value different than 0 is selected
    $('.results-page .searchPageSelect.highlight option[value!="0"]:selected').parent().css('background-color', '#ececec');

    //On click event for the sorting ( to submit without clicking the submit button )
    $('.results-page .select-sort-by').change(function(){
        $('.results-page .btn-submit-results').click();
    })
});
