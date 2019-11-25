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
            <div class="compare-button-title d-flex align-items-center h-100">
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
                <p class="font-26">Compare&nbsp;(<span id="compare_number">0</span>)<span
                        class="compare-arrow ml-3"></span>
                </p>
            </div>
        </div>
    </div>
    <div class="compare-hospitals-content">
        <div class="container">
            <div class="row">
                <div class="col col-2" id="no_items_added">
                    <div class="col-inner pr-3">
                        <div class="col-header_small">
                            <p class="font-16 SofiaPro-SemiBold pb-4 grey-border-bottom">You haven’t added any
                                hospitals to compare yet. </p>
                            <p>Click the the&nbsp;<img width="14" height="12" src="/images/icons/heart.svg"
                                                       alt="Heart icon">&nbsp;next to the hospital to add the chosen
                                hospital into the comparison dashboard.</p>
                        </div>
                    </div>
                </div>
                <div id="compare_hospitals_headings" class="col col-2 d-none">
                    <div class="col-inner h-100">
                        <div class="col-header pr-3">
                            <p class="SofiaPro-SemiBold mb-1">You are comparing:</p>
                            <p class="mb-3"><span id="nhs-hospital-count">0</span>&nbsp;NHS hospital(s) &<br><span id="private-hospital-count">0</span>&nbsp;Private hospital(s)</p>
                            <div class="form-wrapper pt-3 grey-border-top">
                                <form id="multiple_enquiries_form">
                                    {{--                                <input class="d-none" type="number" name="procedure_id" value="{{ !empty(Request::input('procedure_id')) ? Request::input('procedure_id') : '' }}">--}}
                                    <input id="multiple_enquiries_hospital_ids" class="d-none" type="text"
                                           name="hospital_id" value="">
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
                                        'buttonText'        => 'Make an enquiry<br>to all your chosen<br> hospitals',
                                        'classTitle'        => 'btn btn-squared btn-blue btn-grad btn-enquiry font-14',
                                        'id'                => 'multiple_enquiries_button',
                                        'svg'               => 'circle-check',
                                        'disabled'          => true
                                    ])
                                </form>
                            </div>
                        </div>
                        <div class=""></div>
                        <div class="cell">
                            <span class="position-relative">Hospital Type&nbsp&nbsp;
                                <span tabindex="0" _data-offset="30px, 40px" data-offset="0 5px"
                                  class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'html'           => 'true',
                                    'size'           => 'comparison',
                                    'trigger'        => 'hover',
                                    'content'        => '
                                                 <span>
                                                     NHS or Private Hospital
                                                 </span>
                                                 '])
                                >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Average Waiting Time&nbsp;&nbsp;
                                <span tabindex="0" _data-offset="30px, 40px" data-offset="0 5px"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'html'           => 'true',
                                    'size'           => 'comparison',
                                    'trigger'        => 'hover',
                                    'content'        => '
                                                    <span>
                                                        Our waiting time data is based on NHS data, specifically the number of weeks that 92 out or 100 people wait for their treatment to start.
                                                    </span>'])
                                >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">NHS User Rating&nbsp;&nbsp;
                                <span tabindex="0" data-offset="0 5px"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'html'           => 'true',
                                    'size'           => 'comparison',
                                    'trigger'        => 'hover',
                                    'content'        => '
                                                 <span>
                                                     The average waiting time for procedures at this hospital
                                                 </span>
                                                 '])
                                >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">% Operations cancelled&nbsp;&nbsp;
                                <span tabindex="0" data-offset="0 5px"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'html'           => 'true',
                                    'size'           => 'comparison',
                                    'trigger'        => 'hover',
                                    'content'        => '
                                                 <span>
                                                    The percentage of operations cancelled during the last reporting period. Data only available for NHS hospitals at this time.
                                                 </span>'])
                                >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Care Quality Rating&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Friends & Family Rating&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        The percentage of people who would recommend this hospital to family and friends.
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">NHS Funded Work&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        This hospital provides treatments funded by the NHS. Remember you can have an NHS treatment at most private hospitals.
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Private Self Pay&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Indicates whether a hospital location provides Private, Self Pay services. In many instances, your local NHS hospital will also offer private treatment.
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell column-break SofiaPro-SemiBold">Care Quality Rating</div>
                        <div class="cell">
                            <span class="position-relative">Safe&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Effective&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                @include('components.basic.popover', [
                                'placement' => 'top',
                                'trigger'   => 'hover',
                                'html'      => 'true',
                                'size'      => 'comparison',
                                'content'   => '<span>
                                                    Info here
                                                </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Caring&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Responsive&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Well Led&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell column-break SofiaPro-SemiBold">NHS User Rating</div>
                        <div class="cell">
                            <span class="position-relative">Cleanliness&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Food & Hygiene&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Privacy, Dignity & Wellbeing&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Dementia Domain&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Disability Domain&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Info here
                                                    </span>'])>{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col col-10 mt-0 border-right-0">
                    <div class="row" id="compare_hospitals_grid">
                        <!-- Items added here -->
                    </div>
                </div>
                {{--                <div class="col-2">--}}
                {{--                    <div class="col-inner">--}}
                {{--                        <div class="col-header">--}}
                {{--                            <p>Further selected Hospital--}}
                {{--                                will appear here.</p>--}}
                {{--                            <p> Add more hospitals to your--}}
                {{--                                Shortlist by clicking the&nbsp;{!! file_get_contents(asset('/images/icons/heart.svg')) !!}--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</div>
