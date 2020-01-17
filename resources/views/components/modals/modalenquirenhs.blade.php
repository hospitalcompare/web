
{{--Template for BS modal overlays --}}

<div class="modal modal-enquire fade" id="hc_modal_enquire_nhs" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('components.basic.closebutton')
            <div class="modal-body">
                <div class="row m-0">
                    <div class="col-12 col-md-6 p-0">
                        <div class="col-inner col-inner__left">
                            <h3 class="modal-title mb-3">Hospital title</h3>
                            <div class="d-flex mb-3">
                                <div class="img-wrap mr-3">
                                    <img class="mr-3 modal-enquire-nhs-image" width="80" height="71" src="./images/hospitals/hospital-placeholder.svg">
                                </div>
                                <div class="modal-copy">
                                    <p>This NHS hospital does not respond to direct enquiries regarding NHS funded elective procedures prior to an appointment being confirmed.</p>
                                </div>

                            </div>
                            <div class="btn-area">
                                @include('components.basic.button', [
                                    'target'            => 'blank',
                                    'buttonText'            => 'Visit hospital website',
                                    'classTitle'        => 'btn btn-icon btn-blue btn-enquire',
                                    'svg'               => 'circle-check'])
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0">
                        <div
                            class="col-inner col-inner__right h-100 text-center bg-pink">
                            <h2 class="text-white">Or go back to results</h2>
                            <div class="text-white modal-copy">
                                <p>Click <a class="text-link"
                                            data-dismiss="modal"
                                            aria-label="Close">here</a>
                                    to return to results</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
