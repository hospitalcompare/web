<div id="hc_modal_mobile_special_offer_tab" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog m-0 d-flex flex-column justify-content-end h-100" role="document">
        <div class="modal-content position-relative result-item-mobile">
            <div class="item-tags position-absolute d-flex">
                <div class="{{ $specialOffer['hospital_type_id'] === 1 ? 'bg-violet private-hospital' : 'bg-blue nhs-hospital' }} hospital-type pp-2 bg-blue position-relative d-inline-block">
                    <p class="px-3 m-0 font-12">{{ $specialOffer['hospital_type_id'] === 1 ? 'Private' : 'NHS' }}</p>
                </div>
            </div>
            <span class="position-absolute"></span>
            <div class="modal-header flex-column align-items-center">
                <h5 class="special-offer-title font-18 text-center w-100 mb-2">Lowest Waiting time</h5>
                <p class="mb-2 SofiaPro-SemiBold font-16">{{ $specialOffer['name'] }}</p>
                <p class="col-grey mb-1"> {{ !empty($d['radius']) ? $d['radius'] . ' miles away' : '' }}</p>
            </div>
{{--            <div class="img-wrap w-100">--}}
{{--                <img class="w-100"--}}
{{--                     src="images/alder-1.jpg"--}}
{{--                     alt="Image of {{ $specialOffer['name'] }}">--}}
{{--            </div>--}}
            <div class="modal-body p-3">
                <div class="special-offers_mobile">
                    <div class="">
{{--                        <div class="">--}}
{{--                            <p class="special-offer-copy font-16 SofiaPro-Medium">Get your Knee operation done in under 2 weeks on our--}}
{{--                                self-pay--}}
{{--                                programme for £8,999 (reduced from £10,500).</p>--}}
{{--                        </div>--}}
                        <div>
                            <ul class="mr-0 mb-3 font-16 SofiaPro-Medium">
                                <li class="pink-tick">2 weeks</li>
                                <li class="pink-tick">Outstanding</li>
                                <li class="pink-tick">5 star user rating</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-cta m-0 p-3">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-squared btn-squared_slim w-100 btn-black text-center"
                                data-dismiss="modal">Close
                        </button>
                    </div>
                    <div class="col-6">
                        @include('components.basic.modalbutton', [
                                    'hospitalType'      => $specialOffer['hospital_type_id'],
                                    'hrefValue'         => $specialOffer['url'],
                                    'hospitalTitle'     => $specialOffer['name'],
                                    'modalTarget'       => '#hc_modal_mobile_enquire_private',
                                    'classTitle'        => 'btn-nested-enquire btn btn-squared btn-enquire btn-squared_slim btn-blue text-center enquiry btn-enquiry font-12 w-100 d-flex justify-content-center align-items-center flex-row-reverse px-3',
                                    'svg'               => 'circle-check',
                                    'target'            => 'blank',
                                    'buttonText'        => 'Make enquiry',
                                    'hospitalIds'       => $specialOffer['id'],
                                    'id'                => 'enquire_' . $specialOffer['id']])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{--@if(!empty($data['special_offers']))--}}
{{--    <ul class="solutions-menu align-items-end d-md-flex mb-0 ml-auto w-50">--}}
{{--        @foreach($specialOffers as $key => $specialOffer )--}}
{{--            @if($loop->first)--}}
{{--                <li class="d-block h-100">--}}
{{--                    @include('components.basic.specialoffertab', [--}}
{{--                        'bgColor' => 'pink',--}}
{{--                        'headerText' => [--}}
{{--                            'open' => [--}}
{{--                                'title' => $specialOffer['name'],--}}
{{--                                'subtitle' => !empty($specialOffer['radius']) ? round($specialOffer['radius'], 1) . ' miles away' : ''--}}
{{--                            ],--}}
{{--                            'closed' => [--}}
{{--                                'title' => 'NHS funded operation',--}}
{{--                                'subtitle' => ((empty($data['outstanding']) ?--}}
{{--                                    'at '.$specialOffer['rating']['latest_rating'].' hospital ' :--}}
{{--                                     'in '.number_format((float)$specialOffer['waiting_time'][0]['perc_waiting_weeks'], 1).' Weeks '). (!empty($specialOffer['radius']) ? round($specialOffer['radius'], 1) . ' miles away' : ''))--}}
{{--                            ]--}}
{{--                        ],--}}
{{--                        'bulletPoints' => [--}}
{{--                            number_format((float)$specialOffer['waiting_time'][0]['perc_waiting_weeks'], 1).' Weeks ',--}}
{{--                            $specialOffer['rating']['latest_rating'] . ' CQC Rating',--}}
{{--                            (!empty($specialOffer['rating']['avg_user_rating'])) ? $specialOffer['rating']['avg_user_rating'] . ' star NHS Choices user rating' : null--}}
{{--                        ],--}}
{{--                        'offerPrice'    => null,--}}
{{--                        'hospitalType'  => $specialOffer['hospital_type']['name'] == 'Independent' ? 'private-hospital' : 'nhs-hospital',--}}
{{--                        'hospitalUrl'   => $specialOffer['url'],--}}
{{--                        'hospitalId'    => $specialOffer['id']--}}
{{--                    ])--}}
{{--                </li>--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--@endif--}}
