<!--{{--Template for corporate video modal --}}-->
<!---->
<div class="modal modal-carousel fade" id="hc_modal_carousel_{{ $id }}" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white bg-black">Close</span>
            </button>
            {!! $carouselContent !!}
        </div>
    </div>
</div>
