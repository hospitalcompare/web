<div class="compare-hospitals-bar {{ !empty($position) && $position == 'static' ? 'position-static' : ''  }}">
    <div class="compare-hospitals-header d-flex justify-content-between">
        <div class="container position-relative d-flex align-items-end h-100">
            @include('components.doctor')
            <ul class="solutions-menu align-items-end d-flex mb-0 ml-auto mr-3">
                <li class="d-block">
                    @include('components.basic.specialoffertab', [
                        'headerText' => [
                            'open' => [
                                'title' => 'BMI - On The Green',
                                'subtitle' => '27 miles away'
                            ],
                            'closed' => [
                                'title' => 'NHS funded operation',
                                'subtitle' => 'at Outstanding hospital 27 miles away'
                            ]
                        ],
                        'bulletPoints' => [
                            'Outstanding CQC rating',
                            '5 star NHS choices rating',
                            '14 wks NHS funded waiting time'],
                        'offerPrice' => '6999',
                        'hospitalType' => 'nhs-hospital',
                        'hospitalUrl' => 'www.northumbria.nhs.uk'
                    ])
                </li>
                <li class="d-block">
                    @include('components.basic.specialoffertab', [
                       'bgColor' => 'pink',
                       'headerText' => [
                           'open' => [
                               'title' => 'Spire - The Place',
                               'subtitle' => '29 miles away'
                           ],
                           'closed' => [
                               'title' => 'Operation done in 2 weeks',
                               'subtitle' => 'Outstanding hospital 29 miles away'
                           ]
                       ],
                       'bulletPoints' => [
                           'Operation done in 2 wks',
                           'Outstanding CQC rating',
                           '5 star NHS choices rating'],
                       'offerPrice' => '8499',
                       'hospitalType' => 'private-hospital',
                       'hospitalUrl' => 'www.northumbria.nhs.uk'
                   ])
                </li>
                {{--            <li class="d-block ml-3">--}}
                {{--                <a href="" class="btn btn-icon btn-special-tab">Special Offers</a>--}}
                {{--            </li>--}}
                {{--                    <li><a href="">Virtual GP</a></li>--}}
                {{--                    <li><a href="">Operation Funding</a></li>--}}
                {{--                    <li><a href="">Insurance Guide</a></li>--}}
                {{--                    <li><a href="">Medical Negligence</a></li>--}}
            </ul>
            <div class="compare-button-title d-flex align-items-center h-100">
                {{--                @svg('compare-heart', 'compare-heart')--}}
                <svg id="compare_heart" xmlns="http://www.w3.org/2000/svg" width="30" height="30">
                    <g data-name="Group 263">
                        <g data-name="Group 133">
                            <g data-name="Rounded Rectangle 1 copy 8"
                               fill="rgba(27,112,243,0)"
                               stroke="#fff"
                               stroke-linejoin="round"
                               stroke-width="2">
                                <rect width="30" height="30" rx="15" stroke="none"/>
                                <rect id="outer-circle" x="1" y="1" width="28" height="28" rx="14" fill="none"/>
                            </g>
                        </g>
                        <g data-name="Group 132">
                            <path id="wishlist" data-name="Path 80"
                                  d="M19.049 8.388a4.056 4.056 0 0 0-3.335 1.827 6.3 6.3 0 0 0-.448.713 6.039 6.039 0 0 0-.433-.71 3.972 3.972 0 0 0-3.319-1.83 4.321 4.321 0 0 0-4.2 4.56c0 2.814 2.266 4.74 5.7 7.667a263.55 263.55 0 0 1 1.933 1.662.463.463 0 0 0 .305.111.469.469 0 0 0 .308-.115c.722-.632 1.4-1.2 2.051-1.762 3.2-2.708 5.64-4.719 5.64-7.567a4.321 4.321 0 0 0-4.202-4.556zm-2.042 11.421c-.563.479-1.142.971-1.756 1.5-.57-.495-1.111-.956-1.634-1.4-3.29-2.805-5.375-4.579-5.375-6.961a3.4 3.4 0 0 1 3.272-3.632 3.049 3.049 0 0 1 2.539 1.422 5.465 5.465 0 0 1 .75 1.51.466.466 0 0 0 .9.006c.011-.028.887-2.938 3.346-2.938a3.4 3.4 0 0 1 3.275 3.632c0 2.354-2.12 4.146-5.317 6.861z"
                                  fill="#fff"/>
                        </g>
                    </g>
                </svg>
                <p>Comparison&nbsp;(<span id="compare_number">0</span>)<span class="compare-arrow ml-3"></span>
                </p>
            </div>
        </div>
    </div>
    <div class="compare-hospitals-content">
        <div class="container">
            <div id="compare_hospitals_grid" class="row">
                <div class="col-2">
                    <div class="col-inner h-100">
                        <div class=""></div>
                        <div class=""></div>
                        <div class="cell">Average Waiting Time</div>
                        <div class="cell">NHS User Rating</div>
                        <div class="cell">% Operations cancelled</div>
                        <div class="cell">Care Quality Rating</div>
                        <div class="cell">Friends & Family Rating</div>
                        <div class="cell">NHS Funded Work</div>
                        <div class="cell">Private Self Pay</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
