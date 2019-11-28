// Custom controls for video players
var $videoPlayers = $('.video-wrapper');
// alert($videoPlayers.length);
if ($videoPlayers.length >= 1) {

    Array.from($videoPlayers).forEach(function (videoPlayer) {

        const video = videoPlayer.querySelector('video');

        const toggle = videoPlayer.querySelector('.toggle');
        // const mute = videoPlayer.querySelector('.mute');


        // Build functions

        function togglePlay() {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }

        function toggleSound(e) {
            e = e || window.event;
            video.muted = !video.muted;
            e.preventDefault();

            const icon = video.muted ? '<img src="/images/icons/volume-off.svg" alt="off">' : '<img src="/images/icons/volume.svg" alt="on">';
            mute.innerHTML = icon;
        }

        function updateButton() {
            const opacity = this.paused ? '1' : '0';
            toggle.querySelector('img').style.opacity = opacity;
        }


        // video events
        video.addEventListener('click', togglePlay);
        // video.addEventListener('play', updateButton);
        // video.addEventListener('pause', updateButton);

        if(toggle){
            toggle.addEventListener('click', togglePlay);
        }

        // mute.addEventListener('click', toggleSound);

        // window events
        window.addEventListener('keydown', function (event) {
            if (event.which == 32 || event.which == 179) {
                togglePlay();
            }
        })
    })
};


