<div class="compare-hospitals-bar {{ !empty($position) && $position == 'static' ? 'position-static' : ''  }}">
    <div class="compare-hospitals-header d-flex justify-content-between">
        <div class="container position-relative d-flex justify-content-between align-items-end h-100">

            {{--            @include('components.doctor', ['delay' => 0])--}}
            @if(!empty($data['special_offers']))
                <ul class="solutions-menu align-items-end d-none d-md-flex mb-0 ml-auto mr-3">
                    @foreach($specialOffers as $key => $specialOffer )
                        <li class="d-block h-100 {{ $loop->index != 0 ? 'ml-4' : '' }}">
                            @include('components.basic.specialoffertab', [
                                'bgColor' => $loop->index == 0 ? 'blue' : 'pink',
                                'headerText' => [
                                    'open' => [
                                        'title' => $specialOffer['name'],
                                        'subtitle' => !empty($specialOffer['radius']) ? round($specialOffer['radius'], 1) . ' miles away' : ''
                                    ],
                                    'closed' => [
                                        'title' => 'NHS funded operation',
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
                                'offerPrice' => null,
                                'hospitalType' => $specialOffer['hospital_type']['name'] == 'Independent' ? 'private-hospital' : 'nhs-hospital',
                                'hospitalUrl' => $specialOffer['url']
                            ])
                        </li>
                    @endforeach
                    {{--            <li class="d-block ml-3">--}}
                    {{--                <a href="" class="btn btn-icon btn-special-tab">Special Offers</a>--}}
                    {{--            </li>--}}
                    {{--                    <li><a href="">Virtual GP</a></li>--}}
                    {{--                    <li><a href="">Operation Funding</a></li>--}}
                    {{--                    <li><a href="">Insurance Guide</a></li>--}}
                    {{--                    <li><a href="">Medical Negligence</a></li>--}}
                </ul>
            @endif
            <div class="compare-button-title d-flex align-items-center h-100 px-4">
                {{--                @svg('compare-heart', 'compare-heart')--}}
                <svg id="compare_heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                    {{--                    <path id="outer-circle" d="M15 0c8.3 0 15 6.7 15 15s-6.7 15-15 15S0 23.3 0 15 6.7 0 15 0z"/>--}}
                    <path id="outer-circle" fill="transparent" stroke-width="2" stroke="#fff"
                          d="M15 1c7.7 0 14 6.3 14 14s-6.3 14-14 14S1 22.7 1 15 7.3 1 15 1z"/>
                    <g>
                        <path id="wishlist" fill="transparent"
                              d="M18.8 8c-1.3 0-2.6.7-3.3 1.8-.2.2-.3.5-.4.7-.1-.2-.3-.5-.4-.7-.7-1.1-2-1.8-3.3-1.8-2.6.1-4.4 2-4.4 4.4v.1c0 2.8 2.3 4.7 5.7 7.7.6.6 1.3 1.1 1.9 1.7.1.1.3.1.4.1.1 0 .2 0 .3-.1l2.1-1.8c3.2-2.7 5.6-4.7 5.6-7.6.1-2.4-1.7-4.4-4.1-4.6l-.1.1z"/>
                    </g>
                </svg>
                <p class="font-26">Compare&nbsp;(<span id="compare_number">0</span>)<span class="compare-arrow ml-3"></span>
                </p>
            </div>
        </div>
    </div>
    <div class="compare-hospitals-content">
        <div class="container">
            <span class="d-none" id="compare_hospital_ids"></span>
            <div id="compare_hospitals_grid" class="row">
                <div class="col-2">
                    <div class="col-inner h-100">
                        <div class="col-header">
                            <p class="SofiaPro-SemiBold">You are comparing:</p>
                            <p><span id="nhs-hospital-count">0</span>&nbsp;NHS hospital(s) &</p>
                            <p><span id="private-hospital-count">0</span>&nbsp;Private hospital(s)
                            <form id="multiple_enquiries_form">
{{--                                <input class="d-none" type="number" name="procedure_id" value="{{ !empty(Request::input('procedure_id')) ? Request::input('procedure_id') : '' }}">--}}
                                <input id="multiple_enquiries_hospital_ids" class="d--none" type="text" name="hospital_id" value="">
                                <input class="d-none" type="text" name="title" value="Mr">
                                <input class="d-none" type="text" name="first_name" value="Hello">
                                <input class="d-none" type="text" name="last_name" value="Hello">
                                <input class="d-none" type="email" name="email" value="hello@mello.yello">
                                <input class="d-none" type="email" name="confirm_email" value="hello@mello.yello">
                                <input class="d-none" type="text" name="phone_number" value="01234567891">
                                <input class="d-none" type="text" name="postcode" value="ch23ae">
                                <input class="d-none" type="checkbox" value="on">
                                <input class="d-none" type="text" name="additional_information" value="Some info">
                                @include('components.basic.button', [
                                    'htmlButton'        => true,
                                    'buttonText'        => 'Make an enquiry to all your chosen hospitals',
                                    'classTitle'        => 'btn btn-squared btn-blue btn-enquiry font-14',
                                    'id'                => 'multiple_enquiries_button',
                                    'svg'               => 'circle-check'
                                ])

                            </form>
                        </div>
                        <div class=""></div>
                        <div class="cell">Hospital Type</div>
                        <div class="cell">Average Waiting Time</div>
                        <div class="cell">NHS User Rating</div>
                        <div class="cell">% Operations cancelled</div>
                        <div class="cell">Care Quality Rating</div>
                        <div class="cell">Friends & Family Rating</div>
                        <div class="cell">NHS Funded Work</div>
                        <div class="cell">Private Self Pay</div>
                        <div class="cell column-break SofiaPro-SemiBold">Care Quality Rating</div>
                        <div class="cell">Safe</div>
                        <div class="cell">Effective</div>
                        <div class="cell">Caring</div>
                        <div class="cell">Responsive</div>
                        <div class="cell">Well led</div>
                        <div class="cell column-break SofiaPro-SemiBold">NHS User Rating</div>
                        <div class="cell">Cleanliness</div>
                        <div class="cell">Food & Hygiene</div>
                        <div class="cell">Privacy, Dignity & Wellbeing</div>
                        <div class="cell">Dementia Domain</div>
                        <div class="cell">Disability Domain</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
