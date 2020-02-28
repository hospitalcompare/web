{{--Template for BS modal overlays --}}

<div class="modal modal-enquire-form fade show p-3" id="hc_modal_enquire_private" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <button type="button" class="btn-plain ml-auto" data-dismiss="modal" aria-label="Close">
                    @svg('times-black')
                </button>
            </div>
            {{--            @include('components.basic.closebutton')--}}
            @include('components.privateenquiryform', [
                'procedures'    => $procedures,
                'title'         => $title ?? '',
                'firstName'     => $firstName ?? '',
                'lastName'      => $lastName ?? '',
                'dob'           => $dob ?? '',
                'email'         => $email ?? '',
                'postcode'      => Request::input('postcode') ?? '',
                'phone'         => $phone ?? ''])
        </div>
    </div>
</div>
