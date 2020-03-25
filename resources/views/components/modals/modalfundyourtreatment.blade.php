<!--{{--Template for corporate video modal --}}-->
<!---->

<div class="modal modal-tour fade {{ !empty($displayBlock) ? 'd-block show' : '' }}"
     style="{{ !empty($displayBlock) ? 'opacity: 1' : '' }}"
     id="hc_modal_fund_treatment"
     tabindex="-1"
     role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-end">
                <button type="button" class="btn-plain" data-dismiss="modal" aria-label="Close">
                    @svg('times-black')
                </button>
            </div>
            <div class="modal-body p-3 position-relative">
                <p class="col-grey font-16">Fund Your Treatment and Get Seen Faster</p>
                <p>There are a number of private treatment funding options, from loans designed specifically for medical
                    treatment, standard unsecured loans, as well as
                    options created by the providers below. Hospital Compare has carefully identified the following
                    providers (based on their high customer ratings) as some
                    options you may wish to consider. <a class="btn-link" href="/blog/1">Read our guide to treatment funding.</a></p>
                <p>Contact a provider</p>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-vitality', 'logo-insurance')
                                </div>
                            </td>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-reviews', 'logo-insurance')
                                </div>
                            </td>
                            <td>Treatment at any hospital</td>
                            <td>0% finance available</td>
                            <td>
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 font-12 w-100',
                                    'buttonText'        =>  'Make enquiry',
                                    'hrefValue'         =>  '',
                                    'svg'               =>  'circle-check'
                                ])
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-vitality', 'logo-insurance')
                                </div>
                            </td>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-reviews', 'logo-insurance')
                                </div>
                            </td>
                            <td>Treatment at any hospital</td>
                            <td>0% finance available</td>
                            <td>
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 font-12 w-100',
                                    'buttonText'        =>  'Make enquiry',
                                    'hrefValue'         =>  '',
                                    'svg'               =>  'circle-check'
                                ])
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-vitality', 'logo-insurance')
                                </div>
                            </td>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-reviews', 'logo-insurance')
                                </div>
                            </td>
                            <td>Treatment at any hospital</td>
                            <td>0% finance available</td>
                            <td>
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 font-12 w-100',
                                    'buttonText'        =>  'Make enquiry',
                                    'hrefValue'         =>  '',
                                    'svg'               =>  'circle-check'
                                ])
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-vitality', 'logo-insurance')
                                </div>
                            </td>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-reviews', 'logo-insurance')
                                </div>
                            </td>
                            <td>Treatment at any hospital</td>
                            <td>0% finance available</td>
                            <td>
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 font-12 w-100',
                                    'buttonText'        =>  'Make enquiry',
                                    'hrefValue'         =>  '',
                                    'svg'               =>  'circle-check'
                                ])
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-vitality', 'logo-insurance')
                                </div>
                            </td>
                            <td>
                                <div class="image-wrapper">
                                    @svg('logo-reviews', 'logo-insurance')
                                </div>
                            </td>
                            <td>Treatment at any hospital</td>
                            <td>0% finance available</td>
                            <td>
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 font-12 w-100',
                                    'buttonText'        =>  'Make enquiry',
                                    'hrefValue'         =>  '',
                                    'svg'               =>  'circle-check'
                                ])
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
