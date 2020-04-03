<div class="synergy-bar">
    <div class="synergy-ad-list mb-0 d-flex flex-nowrap align-items-end">
        @if(!empty($specialOffers))
            @foreach($specialOffers as $key => $specialOffer )
                <div class="ad-col">
                    @include('components.basic.adblock', [
                        'headerText'        =>  ((empty($data['outstanding']) ?
                                                    'Your Nearest ' . $specialOffer['rating']['latest_rating'] . ' ' . ($specialOffer['hospital_type']['name'] === 'Independent' ? 'Private' : 'NHS' ) . ' Hospital ' . (!empty($specialOffer['radius']) ? '<small> - ' . round($specialOffer['radius'], 1) . ' miles away</small>' : '') :
                                                    $specialOffer['rating']['latest_rating'] . ' Hospital With Low Waiting Time (<small>' . number_format((float)$specialOffer['waiting_time'][0]['perc_waiting_weeks'], 1) . ' Weeks</small>)' . (!empty($specialOffer['radius']) ? '<small> - ' . round($specialOffer['radius'], 1) . ' miles</small>' : '')) ),
                        'offerPrice'        =>  null,
                        'hospitalType'      =>  $specialOffer['hospital_type']['name'],
                        'title'             =>  $specialOffer['name'],
                        'url'               =>  $specialOffer['url'],
                        'url2'              =>  $specialOffer['nhs_private_url'],
                        'id'                =>  $specialOffer['id'],
                        'tel'               =>  $specialOffer['phone_number'],
                        'tel2'              =>  $specialOffer['phone_number_2'],
                    ])
                </div>
            @endforeach
        @endif
        {{--  Fund treatment/health insurance/travel insurance  --}}
        <div class="ad-col">
            <div class="ad-block rounded ad-block-insurance">
                <div class="ad-block-header d-flex align-items-center">
                    <div class="ad-block-header-text">
                        <p class="ad-block-header-title mb-0 col-white">Compare Health Insurance
                            for Pre-Existing Conditions</p>
                    </div>
                </div>
                <div class="ad-block-body d-xxl-block">
                    <div
                        class="inner-body p-13 rounded bg-white d-flex flex-column justify-content-center align-items-center h-100">
                        <div class="btn-area d-flex flex-column mx-auto">
                            <div class="btn-wrapper mb-2">
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 w-100',
                                    'buttonText'        =>  'Compare online',
                                    'svg'               =>  'icon-white-chevron',
                                    'htmlButton'        =>  true
                                ])
                            </div>
                            <div class="btn-wrapper mb-2">
                                @include('components.basic.modalbutton', [
                                    'classTitle'        =>  'btn btn-outline w-100',
                                    'buttonText'        =>  'Compare brokers',
                                    'modalTarget'       =>  '#hc_modal_compare_health_insurance',
                                    'svg'               =>  'icon-purple-chevron',
                                    'htmlButton'        =>  true
                                ])
                            </div>
                            <div class="btn-wrapper">
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-blue w-100',
                                    'buttonText'        =>  'Read our guide',
                                    'svg'               =>  'icon-white-chevron',
                                    'hrefValue'         =>  '/blog/1'
                                ])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ad-block-footer bg-navy d-flex d-xxl-none">
                <span class="toggle-ad d-flex align-items-center justify-content-between w-100">
                    <span class="font-14 lh-18px col-white closed-text">Find out more</span>
                    <span class="font-14 lh-18px col-white open-text">Close</span>
                    @svg('chevron-up')
                </span>
                </div>
            </div>
        </div>
        {{--   Self pay for pre-existing --}}
        <div class="ad-col">
            <div class="ad-block rounded ad-block-insurance">
                <div class="ad-block-header d-flex align-items-center">
                    <div class="ad-block-header-text">
                        <p class="ad-block-header-title mb-0 col-white">Fund Your Treatment and Get Seen Faster</p>
                    </div>
                </div>
                <div class="ad-block-body d-xxl-block">
                    <div
                        class="inner-body p-13 rounded bg-white d-flex flex-column justify-content-center align-items-center h-100">
                        <div class="btn-area d-flex flex-column mx-auto">
                            <div class="btn-wrapper mb-2">
                                @include('components.basic.modalbutton', [
                                    'classTitle'        =>  'btn btn-outline w-100',
                                    'buttonText'        =>  'Compare brokers',
                                    'modalTarget'       =>  '#hc_modal_fund_treatment',
                                    'svg'               =>  'icon-purple-chevron',
                                    'htmlButton'        =>  true
                                ])
                            </div>
                            <div class="btn-wrapper">
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-blue w-100',
                                    'buttonText'        =>  'Read our guide',
                                    'svg'               =>  'icon-white-chevron',
                                    'hrefValue'         =>  '/blog/1'
                                ])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ad-block-footer bg-navy d-flex d-xxl-none">
                <span class="toggle-ad d-flex align-items-center justify-content-between w-100">
                    <span class="font-14 lh-18px col-white closed-text">Find out more</span>
                    <span class="font-14 lh-18px col-white open-text">Close</span>
                    @svg('chevron-up')
                </span>
                </div>
            </div>
        </div>
        {{--   Travel insurance for pre-existing --}}
        <div class="ad-col">
            <div class="ad-block rounded ad-block-insurance">
                <div class="ad-block-header d-flex align-items-center">
                    <div class="ad-block-header-text">
                        <p class="ad-block-header-title mb-0 col-white">Compare Travel Insurance
                            for Pre-Existing Conditions</p>
                    </div>
                </div>
                <div class="ad-block-body d-xxl-block">
                    <div
                        class="inner-body p-13 rounded bg-white d-flex flex-column justify-content-center align-items-center h-100">
                        <div class="btn-area d-flex flex-column mx-auto">
                            <div class="btn-wrapper mb-2">
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 w-100',
                                    'buttonText'        =>  'Compare online',
                                    'svg'               =>  'icon-white-chevron',
                                    'htmlButton'        =>  true
                                ])
                            </div>
                            <div class="btn-wrapper mb-2">
                                @include('components.basic.modalbutton', [
                                    'classTitle'        =>  'btn btn-outline w-100',
                                    'buttonText'        =>  'Compare brokers',
                                    'modalTarget'       =>  '#hc_modal_compare_travel_insurance',
                                    'svg'               =>  'icon-purple-chevron',
                                    'htmlButton'        =>  true
                                ])
                            </div>
                            <div class="btn-wrapper">
                                @include('components.basic.button', [
                                    'classTitle'        =>  'btn btn-enquire btn-blue w-100',
                                    'buttonText'        =>  'Read our guide',
                                    'svg'               =>  'icon-white-chevron',
                                    'hrefValue'         =>  '/blog/1'
                                ])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ad-block-footer bg-navy d-flex d-xxl-none">
                <span class="toggle-ad d-flex align-items-center justify-content-between w-100">
                    <span class="font-14 lh-18px col-white closed-text">Find out more</span>
                    <span class="font-14 lh-18px col-white open-text">Close</span>
                    @svg('chevron-up')
                </span>
                </div>
            </div>
        </div>
    </div>
</div>


