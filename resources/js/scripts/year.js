// Output time (year) dynamically
$( document ).ready(function() {
    var date = new Date();
    var thisyear = date.getFullYear();
    $('#thisYear').text(thisyear);
});
