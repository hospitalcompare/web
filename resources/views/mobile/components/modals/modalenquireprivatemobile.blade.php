{{--Template for BS modal overlays --}}

<div style="" class="modal modal-mobile-enquire-form fade show" id="hc_modal_enquire_private" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog m-3 mx-md-auto" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <button type="button" class="btn-plain ml-auto" data-dismiss="modal" aria-label="Close">
                    @svg('times-black')
                </button>
            </div>
            @include('components.privateenquiryform', [
                'procedures'    => $procedures,
                'title'         => $title ?? '',
                'firstName'     => $firstName ?? '',
                'lastName'      => $lastName ?? '',
                'dob'           => $dob ?? '',
                'email'         => $email ?? '',
                'postCode'      => $postCode ?? '',
                'phone'         => $phone ?? ''])
            <div class="modal-footer m-0 p-3">
                <button type="button" class="btn btn-squared btn-squared_slim w-100 btn-black text-center" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
