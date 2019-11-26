{{--{{ dd($data['hospitals']) }}--}}

@extends('layout.app')

@section('title', 'Results Page')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'results-page')

@section('content')
{{--    @if(!empty($data['special_offers']))--}}
{{--        {{ dd($data['special_offers']) }}--}}
{{--        @endif--}}
    @include('pages.pagesections.resultspageform', ['displayBlock' => false])
    <div id="result_item_parent" class="result-item-parent d-none d-lg-flex">
        <div class="result-item-header container">
            <div class="result-item-header-section-1"></div>
            <div class="result-item-header-section-2">
                <ul class="result-item-menu">
                    <li>
                        <p tabindex="0" _data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                Care Quality Rating
                                            </p>
                                            <p>
                                                The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.
                                            </p>'])>Care Quality<br>Rating</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-care-quality-rating {{Request::input('sort_by') == 10 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" _data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                Waiting Time (NHS Funded)
                                            </p>
                                            <p>
                                                Our waiting time data is based on NHS data, specifically the number of weeks that 92 out or 100 people wait for their treatment to start.
                                            </p>'])>Waiting time <br>(NHS Funded)</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-waiting-time {{Request::input('sort_by') == 4 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" _data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                NHS User Rating
                                            </p>
                                            <p>
                                                Five star rating system based on feedback provided by users of the NHS, five stars being the best. Information is not available on some hospitals.
                                            </p>'])>NHS User<br> Rating&nbsp;<br></p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-user-rating {{Request::input('sort_by') == 6 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" _data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                % of Operations Cancelled
                                            </p>
                                            <p>
                                                The percentage of operations cancelled during the last reporting period. Data only available for NHS hospitals at this time.
                                            </p>'])>% Operations<br>Cancelled</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-op-cancelled {{Request::input('sort_by') == 8 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" _data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                Friends & Family Rating
                                            </p>
                                            <p>
                                                The percentage of people who would recommend this hospital to family and friends.
                                            </p>'])>Friends &<br>Family Rating</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-ff-rating {{Request::input('sort_by') == 12 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" _data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                NHS Funded Work
                                            </p>
                                            <p>
                                                This hospital provides treatments funded by the NHS. Remember you can have an NHS treatment at most private hospitals.
                                            </p>'])>NHS<br>Funded Work</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-nhs-funded {{Request::input('sort_by') == 14 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" _data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                Private Self Pay
                                            </p>
                                            <p>
                                                Indicates whether a hospital location provides Private, Self Pay services. In many instances, your local NHS hospital will also offer private treatment.
                                            </p>'])>Private<br>Self Pay</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-self-pay {{Request::input('sort_by') == 16 ? 'desc':'asc' }}"></span>
                    </li>
                </ul>
            </div>
            <div class="result-item-header-section-3 p-0">
                <ul class="result-item-menu p-0 h-100">
                    <li class="align-items-end justify-content-end">
                        <p class="text-center m-0 d-flex flex-column align-items-end">
{{--                            <span class="d-inline-block mb-1">Compare</span>--}}
{{--                            <svg id="" xmlns="http://www.w3.org/2000/svg" width="30" height="30">--}}
{{--                                <g data-name="Group 263">--}}
{{--                                    <g data-name="Group 133">--}}
{{--                                        <g data-name="Rounded Rectangle 1 copy 8" fill="rgba(27,112,243,0)" stroke="#fff" stroke-linejoin="round" stroke-width="2">--}}
{{--                                            <rect width="30" height="30" rx="15" stroke="none"></rect>--}}
{{--                                            <rect id="outer-circle" x="1" y="1" width="28" height="28" rx="14" fill="none"></rect>--}}
{{--                                        </g>--}}
{{--                                    </g>--}}
{{--                                    <g data-name="Group 132">--}}
{{--                                        <path id="wishlist" data-name="Path 80" d="M19.049 8.388a4.056 4.056 0 0 0-3.335 1.827 6.3 6.3 0 0 0-.448.713 6.039 6.039 0 0 0-.433-.71 3.972 3.972 0 0 0-3.319-1.83 4.321 4.321 0 0 0-4.2 4.56c0 2.814 2.266 4.74 5.7 7.667a263.55 263.55 0 0 1 1.933 1.662.463.463 0 0 0 .305.111.469.469 0 0 0 .308-.115c.722-.632 1.4-1.2 2.051-1.762 3.2-2.708 5.64-4.719 5.64-7.567a4.321 4.321 0 0 0-4.202-4.556zm-2.042 11.421c-.563.479-1.142.971-1.756 1.5-.57-.495-1.111-.956-1.634-1.4-3.29-2.805-5.375-4.579-5.375-6.961a3.4 3.4 0 0 1 3.272-3.632 3.049 3.049 0 0 1 2.539 1.422 5.465 5.465 0 0 1 .75 1.51.466.466 0 0 0 .9.006c.011-.028.887-2.938 3.346-2.938a3.4 3.4 0 0 1 3.275 3.632c0 2.354-2.12 4.146-5.317 6.861z" fill="#fff"></path>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                            </svg>--}}
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="results">
        @if(!empty($data['hospitals']))
            @foreach($data['hospitals'] as $d)
                @include('components.item', [
                    'id'                    => $d['id'],
                    'itemImg'               => 'images/alder-1.jpg',
                    'title'                 => !empty($d['display_name'])? $d['display_name'] : $d['name'],
                    'location'              => (!empty($d['radius'])) ? number_format($d['radius'], 1 ) . ' miles from postcode' : '',
                    'town'                  => (!empty($d['address']['city']) ? ', ' . $d['address']['city'] : ''),
                    'county'                => (!empty($d['address']['county']) ? $d['address']['county'] : ''),
                    'postcode'              => (!empty($d['address']['postcode']) ? $d['address']['postcode'] : ''),
                    'latitude'              => $d['address']['latitude'],
                    'longitude'             => $d['address']['longitude'],
                    'findLink'              => 'Find on map',
                    'waitTime'              => !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? number_format((float)$d['waitingTime'][0]['perc_waiting_weeks'], 1) : 0,
                    'waitingTimeRanking'    => !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? \App\Helpers\Utils::getRankingPosition($data['waitingTimeRankings'], $d['id']).' of '.$data['hospitals']->total() : '-',
                    'outpatient'            => !empty($d['waitingTime'][0]['outpatient_perc_95']) ? number_format((float)$d['waitingTime'][0]['outpatient_perc_95'], 1) : '-',
                    'outpatientRank'        => !empty($d['waitingTime'][0]['outpatient_perc_95']) ? \App\Helpers\Utils::getRankingPosition($data['outpatientRankings'], $d['id']).' of '.$data['hospitals']->total() : '-',
                    'inpatient'             => !empty($d['waitingTime'][0]['inpatient_perc_95']) ? number_format((float)$d['waitingTime'][0]['inpatient_perc_95'], 1) : '-',
                    'inpatientRank'         => !empty($d['waitingTime'][0]['inpatient_perc_95']) ? \App\Helpers\Utils::getRankingPosition($data['inpatientRankings'], $d['id']).' of '.$data['hospitals']->total() : '-',
                    'userRating'            => !empty($d['rating']['avg_user_rating']) ? $d['rating']['avg_user_rating'] : 0,
                    'stars'                 => !empty($d['rating']['avg_user_rating']) ? \App\Helpers\Utils::getHtmlStars($d['rating']['avg_user_rating']) : "No data",
                    'opCancelled'           => !empty($d['cancelledOp']['perc_cancelled_ops'])? number_format((float)$d['cancelledOp']['perc_cancelled_ops'], 1).'%': 0,
                    'qualityRating'         => !empty($d['rating']['latest_rating']) ? $d['rating']['latest_rating'] : 0,
                    'FFRating'              => !empty($d['rating']['friends_family_rating']) ? number_format((float)$d['rating']['friends_family_rating'], 1).'%' : 0,
                    'NHSFunded'             => ($d['hospitalType']['name'] === 'NHS' || ($d['hospitalType']['name'] === 'Independent' && !empty($d['waitingTime'][0]['perc_waiting_weeks']))) ? 1 : 0,
                    'privateSelfPay'        => $d['hospitalType']['name'] === 'Independent' ? 1 : 0,
                    'specialOffers'         => $d['special_offers'],
                    'btnText'               => 'Make an enquiry',
                    'NHSClass'              => $d['hospitalType']['name'] == 'NHS' ? 'nhs-hospital' : 'private-hospital',
                    'fundedText'            => ($d['hospitalType']['name'] == 'NHS') ? 'NHS Hospital': 'Private Hospital',
                    'url'                   => $d['url'],
                    'safe'                  => $d['rating']['safe'],
                    'safeIcon'              => \App\Helpers\Utils::getDiscOrStar($d['rating']['safe']),
                    'effective'             => $d['rating']['effective'],
                    'effectiveIcon'         => \App\Helpers\Utils::getDiscOrStar($d['rating']['effective']),
                    'caring'                => $d['rating']['caring'],
                    'caringIcon'            => \App\Helpers\Utils::getDiscOrStar($d['rating']['caring']),
                    'responsive'            => $d['rating']['responsive'],
                    'responsiveIcon'        => \App\Helpers\Utils::getDiscOrStar($d['rating']['responsive']),
                    'well_led'              => $d['rating']['well_led'],
                    'wellLedIcon'           => \App\Helpers\Utils::getDiscOrStar($d['rating']['well_led']),
                    'procedures'            => $data['filters']['procedures'],
                    'locationSpecialism'    => $d['location_specialism'],
                    'popoverDelay'          => 2000
                   ])
            @endforeach
        @endif
    </div>

    <div class="pagination-wrap">
        @if(!empty($data['hospitals']))
            {{
                $data['hospitals']->appends([
                    'postcode'          => Request::input('postcode'),
                    'radius'            => Request::input('radius'),
                    'procedure_id'      => Request::input('procedure_id'),
                    'waiting_time'      => Request::input('waiting_time'),
                    'user_rating'       => Request::input('user_rating'),
                    'quality_rating'    => Request::input('quality_rating'),
                    'hospital_type'     => Request::input('hospital_type'),
                    'sort_by'           => Request::input('sort_by')
                ])->links('components.basic.pagination')
            }}
        @endif
    </div>

    @include('components.solutionsbar', [
        'specialOffers' => $data['special_offers']
        ])
    @include('components.modals.modalenquirenhs')
{{--    @include('components.modals.modalspecial')--}}
    @include('components.modals.modalenquireprivate', [
        'procedures' => $data['filters']['procedures']])
    {{--  Maps modal  --}}
{{--    @include('components.modals.modalmaps')--}}
{{--    @include('components.modals.modalvideo')--}}
    @include('components.modals.modaltour')
{{--    @include('components.doctor')--}}
    @include('components.basic.modalbutton', [
        'classTitle'    => 'btn btn-hanblue btn-grad position-fixed',
        'buttonText'    => 'Help?',
        'modalTarget'   => '#hc_modal_tour',
        'style'         => 'z-index: 1040; bottom: 100px; left: 100px'])


@endsection
