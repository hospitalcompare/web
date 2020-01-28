{{--Template for BS modal overlays --}}

<div class="modal modal-mobile-search fade" id="hc_modal_mobile_search" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog mx-auto" role="document">
        <div class="modal-content p-0 h-100">
            <div class="modal-body">
                @include('mobile.components.modals.mobilesearchform', [
                    'hideText'      => true
                ])
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-squared btn-squared_slim w-100 btn-black text-center" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
