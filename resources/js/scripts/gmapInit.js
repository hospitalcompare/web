$(document).ready(function () {

    // On modal show event
    $('#hc_modal_map').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        // var data = button.data('test'); // Extract info from data-* attributes
        var data = button.data('longitude'); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        console.log(data);
        modal.find('.modal-content').text('New message to ' + data)
    })

})
