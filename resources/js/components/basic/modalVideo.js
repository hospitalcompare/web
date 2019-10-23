// Bootstrap modal
$(document).ready(function () {
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    $('#hc_modal_video').on('show.bs.modal', showVideoModal);
    $('#hc_modal_video').on('hide.bs.modal', hideVideoModal);
});

function showVideoModal(event) {
    var $button = $(event.relatedTarget);// Button that triggered the modal
    var $videoUrl = $button.data('video-url');// Extract info from data-* attributes
    var modal = $(this);
    modal.find('video source').attr('src', $videoUrl);
    var video = modal.find('video')[0];
    video.load();
    video.play();
}

function hideVideoModal(event) {
    var modal = $(this);
    var video = modal.find('video')[0];
    video.pause();
    video.curretTime = 0;
}
