$(document).ready(function () {
    //Set the first option of the Procedures dropdown to 'Not Known'
    $("select[name='procedure_id'] option:first").attr('disabled', true).attr('hidden', true);

    //Set the checked value of checkboxes to boolean 0/1
    $("input[type='checkbox']").on('change', function(){
        $(this).val(this.checked ? 1 : 0);
    });

    // Bootstrap select pickers - searchable dropdowns
    var $pickers = $('.select-picker');
    // Initiate select-pickers
    $pickers.selectpicker({
        style: '',
        styleBase: ''
    });

    // Do something when select pickers open
    $pickers.on('show.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        // Stop body scrolling
        $('body').addClass('select-open');
    });

    $pickers.on('hide.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        // Stop body scrolling
        $('body').removeClass('select-open');
    });


});

// Scroll up to show alert bar
window.scrollToAlert = function () {
    $('html, body').animate({
        scrollTop: ($('#hc_alert').offset().top)
    }, 400);
};

// Show the bootstrap alert bar
window.showAlert = function(message, success) {
    var $alertClass = (success) ? 'alert-success' : 'alert-danger';
    $('.alert')
        .find('.alert-text')
        .html(message)
        .parents('.alert')
        .removeClass('alert-success alert-danger')
        .addClass($alertClass + ' show')
        .show();
    // Scroll to alert bar
    scrollToAlert();
}

