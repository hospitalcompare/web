<div class="compare-hospitals-bar {{ !empty($position) && $position == 'static' ? 'position-static' : ''  }}">
    <div class="compare-hospitals-header d-flex justify-content-between">
        <div class="container position-relative d-flex align-items-end h-100">
            @include('components.doctor')
            <div class="compare-button-title d-flex align-items-center h-100 mr-auto">
{{--                @svg('compare-heart', 'compare-heart')--}}
                <svg class="compare-heart" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                    <g id="Group_263" data-name="Group 263" transform="translate(-1399 -574)">
                        <g id="Group_133" data-name="Group 133" transform="translate(1399 574)">
                            <g id="Rounded_Rectangle_1_copy_8" data-name="Rounded Rectangle 1 copy 8" fill="rgba(27,112,243,0)" stroke="#fff" stroke-linejoin="round" stroke-width="2">
                                <rect width="30" height="30" rx="15" stroke="none"/>
                                <rect x="1" y="1" width="28" height="28" rx="14" fill="none"/>
                            </g>
                        </g>
                        <g id="wishlist" transform="translate(1406.314 582.388)">
                            <g id="Group_132" data-name="Group 132">
                                <path id="Path_80" data-name="Path 80" d="M11.735,0A4.056,4.056,0,0,0,8.4,1.827a6.3,6.3,0,0,0-.448.713,6.039,6.039,0,0,0-.433-.71A3.972,3.972,0,0,0,4.2,0,4.321,4.321,0,0,0,0,4.56C0,7.374,2.266,9.3,5.7,12.227c.616.526,1.254,1.071,1.933,1.662A.463.463,0,0,0,7.938,14a.469.469,0,0,0,.308-.115c.722-.632,1.4-1.2,2.051-1.762,3.2-2.708,5.64-4.719,5.64-7.567A4.321,4.321,0,0,0,11.735,0ZM9.693,11.421c-.563.479-1.142.971-1.756,1.5-.57-.495-1.111-.956-1.634-1.4C3.013,8.716.928,6.942.928,4.56A3.4,3.4,0,0,1,4.2.928,3.049,3.049,0,0,1,6.739,2.35a5.465,5.465,0,0,1,.75,1.51.466.466,0,0,0,.9.006C8.4,3.838,9.276.928,11.735.928A3.4,3.4,0,0,1,15.01,4.56C15.01,6.914,12.89,8.706,9.693,11.421Z" fill="#fff"/>
                            </g>
                        </g>
                    </g>
                </svg>
                <p>Hospital Shortlist&nbsp;(<span id="compare_number">0</span>)<span class="compare-arrow ml-3"></span>
                </p>
            </div>
            <ul class="solutions-menu align-items-end d-flex mb-0">
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
                        'hospitalType' => 'private'
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
                       'hospitalType' => 'private'
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
        </div>
    </div>
    <div class="compare-hospitals-content">
        <div class="container">
            <div id="compare_hospitals_grid" class="row">
                <div class="col-3">
                    <div class="col-inner h-100">
                        <div class=""></div>
                        <div class=""></div>
                        <div class="cell">Average Waiting Time</div>
                        <div class="cell">NHS Choices User Rating</div>
                        <div class="cell">% Operations cancelled</div>
                        <div class="cell">Care Quality Rating</div>
                        <div class="cell">Friends & Family Rating</div>
                        <div class="cell">NHS Funded</div>
                        <div class="cell">NHS Private Pay</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
