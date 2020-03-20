@if(!empty($data['special_offers']))
    <ul class="solutions-menu mb-0 row flex-nowrap align-items-end">
        @foreach($specialOffers as $key => $specialOffer )
            <li class="col">
                @include('components.basic.specialoffertab', [
                    'bgColor' => 'pink',
                    'headerText' => [
                        'open' => [
                            'title' => 'Your Nearest Outstanding NHS Hospital',
                            'subtitle' => !empty($specialOffer['radius']) ? round($specialOffer['radius'], 1) . ' miles away' : ''
                        ],
                        'closed' => [
                            'title' => 'Your Nearest Outstanding NHS Hospital',
                            'subtitle' => ((empty($data['outstanding']) ?
                                'at '.$specialOffer['rating']['latest_rating'].' hospital ' :
                                 'in '.number_format((float)$specialOffer['waiting_time'][0]['perc_waiting_weeks'], 1).' Weeks '). (!empty($specialOffer['radius']) ? round($specialOffer['radius'], 1) . ' miles away' : ''))
                        ]
                    ],
                    'bulletPoints' => [
                        number_format((float)$specialOffer['waiting_time'][0]['perc_waiting_weeks'], 1).' Weeks ',
                        $specialOffer['rating']['latest_rating'] . ' CQC Rating',
                        (!empty($specialOffer['rating']['avg_user_rating'])) ? $specialOffer['rating']['avg_user_rating'] . ' star NHS Choices user rating' : null
                    ],
                    'offerPrice'        => null,
                    'hospitalType'      => $specialOffer['hospital_type']['name'] == 'Independent' ? 'private-hospital' : 'nhs-hospital',
                    'title'             => $specialOffer['name'],
                    'url'               => $specialOffer['url'],
                    'url2'              => $specialOffer['nhs_private_url'],
                    'id'                => $specialOffer['id'],
                    'tel'               => $specialOffer['phone_number'],
                    'tel2'              => $specialOffer['phone_number_2'],
                ])
            </li>
        @endforeach
    </ul>
@endif


{{-- Insurance tabs --}}
<ul class="solutions-menu mb-0 row flex-nowrap align-items-end">
    <li class="col">
        <div class="special-offer-tab rounded insurance__offer">
            <div class="special-offer-header d-flex align-items-center">
                <div class="offer-text">
                    <p class="offer-title mb-0 col-white">Compare Health Insurance
                        for Pre-Existing Conditions</p>
                </div>
            </div>
            <div class="special-offer-body d-block d-xl-block">
                <div
                    class="inner-body p-13 rounded bg-white d-flex flex-column justify-content-center align-items-center h-100">
                    <div class="btn-area d-flex flex-column mx-auto">
                        <div class="btn-wrapper mb-2">
                            @include('components.basic.modalbutton', [
                                'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 w-100',
                                'buttonText'        =>  'Compare online',
                                'modalTarget'       =>  '#hc_modal_compare_online',
                                'svg'               =>  'icon-white-chevron',
                                'htmlButton'        =>  true
                            ])
                        </div>
                        <div class="btn-wrapper mb-2">
                            @include('components.basic.modalbutton', [
                                'classTitle'        =>  'btn btn-outline w-100',
                                'buttonText'        =>  'Compare brokers',
                                'modalTarget'       =>  '#hc_modal_compare_online',
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
            <div class="special-offer-footer bg-navy d-flex d-xl-none">
                <span class="toggle-special-offer d-flex align-items-center justify-content-between w-100">
                    <span class="font-14 lh-18px col-white closed-text">Find out more</span>
                    <span class="font-14 lh-18px col-white open-text">Close</span>
                    @svg('chevron-up')
                </span>
            </div>
        </div>
    </li>
</ul>
