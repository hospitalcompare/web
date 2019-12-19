// Bootstrap modal
var $modalVideo = $('#hc_modal_video');
$modalVideo.on('show.bs.modal', showVideoModal);
$modalVideo.on('hide.bs.modal', hideVideoModal);

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
