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
                {{--                <svg id="compare_heart" xmlns="http://www.w3.org/2000/svg" width="30" height="30">--}}
                {{--                    <g data-name="Group 263">--}}
                {{--                        <g data-name="Group 133">--}}
                {{--                            <g data-name="Rounded Rectangle 1 copy 8"--}}
                {{--                               fill="rgba(27,112,243,0)"--}}
                {{--                               stroke="#fff"--}}
                {{--                               stroke-linejoin="round"--}}
                {{--                               stroke-width="2">--}}
                {{--                                <rect width="30" height="30" rx="15" stroke="none"/>--}}
                {{--                                <rect id="outer-circle" x="1" y="1" width="28" height="28" rx="14" fill="none"/>--}}
                {{--                            </g>--}}
                {{--                        </g>--}}
                {{--                        <g data-name="Group 132" class="solutions-compare-heart">--}}
                {{--                            <path id="wishlist" data-name="Path 80"--}}
                {{--                                  d="M19.049 8.388a4.056 4.056 0 0 0-3.335 1.827 6.3 6.3 0 0 0-.448.713 6.039 6.039 0 0 0-.433-.71 3.972 3.972 0 0 0-3.319-1.83 4.321 4.321 0 0 0-4.2 4.56c0 2.814 2.266 4.74 5.7 7.667a263.55 263.55 0 0 1 1.933 1.662.463.463 0 0 0 .305.111.469.469 0 0 0 .308-.115c.722-.632 1.4-1.2 2.051-1.762 3.2-2.708 5.64-4.719 5.64-7.567a4.321 4.321 0 0 0-4.202-4.556zm-2.042 11.421c-.563.479-1.142.971-1.756 1.5-.57-.495-1.111-.956-1.634-1.4-3.29-2.805-5.375-4.579-5.375-6.961a3.4 3.4 0 0 1 3.272-3.632 3.049 3.049 0 0 1 2.539 1.422 5.465 5.465 0 0 1 .75 1.51.466.466 0 0 0 .9.006c.011-.028.887-2.938 3.346-2.938a3.4 3.4 0 0 1 3.275 3.632c0 2.354-2.12 4.146-5.317 6.861z"--}}
                {{--                                  fill="#fff"/>--}}
                {{--                        </g>--}}
                {{--                    </g>--}}
                {{--                </svg>--}}
                <p class="font-26">Compare&nbsp;(<span id="compare_number">0</span>)<span class="compare-arrow ml-3">
{{--                <p>Comparison&nbsp;(<span id="compare_number">0</span>)<span class="compare-arrow ml-3">--}}
{{--                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"--}}
{{--                             y="0px"--}}
{{--                             width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929"--}}
{{--                             style="enable-background:new 0 0 284.929 284.929;"--}}
{{--                             xml:space="preserve">--}}
{{--                            <g>--}}
{{--                                <path fill="#fff" d="M282.082,195.285L149.028,62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,195.285--}}
{{--                                    C0.95,197.191,0,199.378,0,201.853c0,2.474,0.953,4.664,2.856,6.566l14.272,14.271c1.903,1.903,4.093,2.854,6.567,2.854--}}
{{--                                    c2.474,0,4.664-0.951,6.567-2.854l112.204-112.202l112.208,112.209c1.902,1.903,4.093,2.848,6.563,2.848--}}
{{--                                    c2.478,0,4.668-0.951,6.57-2.848l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.566--}}
{{--                                    C284.929,199.378,283.984,197.188,282.082,195.285z"/>--}}
{{--                            </g>--}}
{{--                        </svg>--}}
                    </span>
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
                            <p><span id="private-hospital-count">0</span>&nbsp;Private hospital(s)</p>
                            @include('components.basic.button', [
                                'buttonText'        => 'Make an enquiry to all your chosen hospitals',
                                'classTitle'        => 'btn btn-squared btn-blue btn-enquiry font-14',
                                'id'                => 'multiple_enquiries_button',
                                'svg'               => 'circle-check'
                            ])
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
