<!--{{--Template for corporate video modal --}}-->
<!---->
<div class="modal modal-carousel fade" id="hc_modal_carousel_{{ $id }}" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            @include('components.basic.closebutton')
            {!! $carouselContent !!}
        </div>
    </div>
</div>
