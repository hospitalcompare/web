{{--Template for BS modal overlays --}}

<div style="" class="modal modal-enquire-form fade show" id="hc_modal_enquire_private" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white bg-black">Close</span>
            </button>
            @include('components.privateenquiryform', [
                'procedures'    => $procedures,
                'title'         => $title ?? '',
                'firstName'     => $firstName ?? '',
                'lastName'      => $lastName ?? '',
                'dob'           => $dob ?? '',
                'email'         => $email ?? '',
                'postCode'      => $postCode ?? '',
                'phone'         => $phone ?? ''])
        </div>
    </div>
</div>
