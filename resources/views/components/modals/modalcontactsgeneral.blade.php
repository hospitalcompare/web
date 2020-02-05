{{--Template for BS modal overlays --}}

<div class="modal modal-enquire fade" id="hc_modal_contacts_general" tabindex="-1" role="dialog"
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
                                <div class="">
                                    <p class="mb-1">Main switchboard</p>
                                    <p class="col-brand-primary-1 font-20 mb-1" id="hospital_telephone"></p>
                                    @include('components.basic.button', [
                                        'hospitalType'      => 'nhs-hospital',
                                        'target'            => 'blank',
                                        'hrefValue'         => '',
                                        'hospitalUrl'       => '',
                                        'classTitle'        => 'p-0 btn-link col-brand-primary-1 enquiry font-12 mb-4 d-inline-block',
                                        'buttonText'        => 'Visit website'])

                                    <p class="mb-1">Private</p>
                                    <p class="col-brand-primary-1 font-20 mb-1" id="hospital_telephone_2"></p>
                                    @include('components.basic.button', [
                                        'hospitalType'      => 'nhs-hospital',
                                        'target'            => 'blank',
                                        'hrefValue'         => '',
                                        'hospitalUrl'       => '',
                                        'classTitle'        => 'p-0 btn-link col-brand-primary-1 enquiry font-12 mb-4 d-inline-block',
                                        'buttonText'        => 'Visit website'])
                                </div>
{{--                               Trigger enquiry form for PRIVATE treatment at NHS hospital --}}
                                @include('components.basic.modalbutton', [
                                    'id'                => 'private_enquiry_to_nhs_hospital',
                                    'hospitalType'      => 'nhs-hospital',
                                    'hospitalIds'       => '',
                                    'hrefValue'         => '',
                                    'hospitalTitle'     => '',
                                    'modalTarget'       => '#hc_modal_enquire_private',
                                    'classTitle'        => 'btn btn-squared btn-squared_slim btn-enquire btn-brand-secondary-3 enquiry font-12 text-center d-none',
                                    'buttonText'        => 'Make a private treatment enquiry',
                                    'svg'               => 'circle-check',
                                    'svgClass'          => 'mr-2'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
