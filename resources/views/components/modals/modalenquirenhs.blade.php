
{{--Template for BS modal overlays --}}

<div class="modal modal-enquire fade" id="hc_modal_enquire_nhs" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @include('components.basic.closebutton')
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-6 p-0">
                            <div class="col-inner col-inner__left">
                                <h3 class="modal-title mb-3">Hospital title</h3>
                                <div class="d-flex mb-3">
                                    <div class="image-wrapper mr-3">
                                        <img class="mr-3" src="images/alder-1.png">
                                    </div>
                                    <div class="modal-copy">
                                        <p>This NHS hospital does not respond to direct enquiries regarding NHS funded elective procedures prior to an appointment being confirmed.</p>
                                    </div>

                                </div>
                                <div class="btn-area">
                                    @include('components.basic.button', [
                                        'target'            => 'blank',
                                        'button'            => 'Visit hospital website',
                                        'classTitle'        => 'btn btn-icon btn-blue btn-enquire',
                                        'svg'               => 'circle-check'])
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 p-0">
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
</div>
