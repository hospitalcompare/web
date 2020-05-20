<!--{{--Template for corporate video modal --}}-->
<!---->
<div class="modal modal-video fade" id="hc_modal_video" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            <div class="video-wrapper position-relative">
                <video class="content w-100" poster="{{ url('images/video_placeholder.jpg') }}">
                    <source src="{{ asset('/video/For_Wes.mp4') }}" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <div class="player-button toggle">@svg('youtube')</div>
            </div>
        </div>
    </div>
</div>
