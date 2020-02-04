{{--Template for BS modal overlays --}}

<div class="modal modal-enquire fade" id="hc_modal_enquire_general" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content position-relative">
            <div id="hospital_type" class="py-1 px-2">
                <p class="m-0"></p>
            </div>
            <div class="modal-body">
                <div class="modal-header d-flex justify-content-between">
                    <button type="button" class="btn-plain ml-auto" data-dismiss="modal" aria-label="Close">
                        @svg('times-black')
                    </button>
                </div>
                <div class="container-fluid p-30">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div
                                class="col-inner h-100 col-inner__left text-center d-flex flex-column justify-content-center align-items-center">
                                <h3 class="modal-title mb-3">Thanks for Your Interest in <span id="hospital_title"></span>
                                    </h3>
                                <div class="d-flex mb-3">
                                    <div class="modal-copy">
                                        <p class="col-grey p-secondary mb-0">Without a GP referral, this NHS hospital won't respond to direct enquiries regarding
                                            treatments. Please call or check their website to find out more about their services
                                            using the following contact details:</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div
                                class="col-inner p-30 d-flex flex-column justify-content-center col-inner__right h-100 text-center border rounded">
                                <h3 class="mb-5">Contact the hospital</h3>
                                <div class="mb-5">
                                    <p>General</p>
                                    <p class="col-brand-primary-1 font-20" id="hospital_telephone"></p>
                                    <p>Private</p>
                                    <p class="col-brand-primary-1 font-20" id="hospital_telephone_2"></p>
                                </div>
                                <div class="btn-area">
                                    @include('components.basic.button', [
                                        'target'            => 'blank',
                                        'buttonText'        => 'Or visit hospital website',
                                        'classTitle'        => 'btn btn-squared btn-squared_slim btn-brand-primary-4 btn-enquire w-100 text-center'])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
