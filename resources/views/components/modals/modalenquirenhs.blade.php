
{{--Template for BS modal overlays --}}

<div class="modal modal-enquire fade" id="hc_modal_enquire_nhs" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header d-flex justify-content-between">
                    <button type="button" class="btn-plain ml-auto" data-dismiss="modal" aria-label="Close">
                        @svg('times-black')
                    </button>
                </div>
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="col-inner col-inner__left">
                            <h3 class="modal-title mb-3">Hospital title</h3>
                            <div class="d-flex mb-3">
                                <div class="modal-copy">
                                    <p>This NHS hospital does not respond to direct enquiries regarding NHS funded elective procedures prior to an appointment being confirmed.</p>
                                </div>

                            </div>
                            <div class="btn-area">
                                @include('components.basic.button', [
                                    'target'            => '_blank',
                                    'buttonText'        => 'Visit hospital website',
                                    'classTitle'        => 'btn btn-icon btn-blue btn-enquire pr-3',
                                    'svg'               => 'circle-check'])
                            </div>
                        </div>
                    </div>
{{--                    <div class="col-12 col-md-6 p-0">--}}
{{--                        <div--}}
{{--                            class="col-inner col-inner__right h-100 text-center bg-pink">--}}
{{--                            <h2 class="text-white">Or go back to results</h2>--}}
{{--                            <div class="text-white modal-copy">--}}
{{--                                <p>Click <a class="text-link"--}}
{{--                                            data-dismiss="modal"--}}
{{--                                            aria-label="Close">here</a>--}}
{{--                                    to return to results</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
