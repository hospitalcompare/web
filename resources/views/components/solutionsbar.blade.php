<div class="compare-hospitals-bar compare-hospitals-bar_desktop {{ !empty($position) && $position == 'static' ? 'position-static' : ''  }}">
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
                                'offerPrice'    => null,
                                'hospitalType'  => $specialOffer['hospital_type']['name'] == 'Independent' ? 'private-hospital' : 'nhs-hospital',
                                'hospitalUrl'   => $specialOffer['url'],
                                'hospitalId'    => $specialOffer['id']
                            ])
                        </li>
                    @endforeach
                </ul>
            @endif
            <div id="compare_button_title" class="compare-button-title d-flex align-items-center h-100">
                @svg('compare-heart', 'compare-heart')
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
                                @include('components.basic.modalbutton', [
                                    'htmlButton'        => true,
                                    'buttonText'        => 'Email private hospitals',
                                    'classTitle'        => 'btn btn-squared btn-blue btn-enquire-all font-14',
                                    'id'                => 'multiple_enquiries_button',
                                    'svg'               => 'circle-check',
                                    'svgClass'          => 'circle-check',
                                    'modalTarget'       => '#hc_modal_enquire_private',
                                    'disabled'          => true,
                                    'hospitalTitle'     => 'your selected hospitals',
                                    'hospitalIds'       => ''
                                ])
                            </div>
                        </div>
                        <div class=""></div>
                        <div class="cell">
                            <span class="position-relative">Hospital Type&nbsp&nbsp;
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
                                                     NHS or Private Hospital
                                                 </span>
                                                 '])
                                >@svg('icon-more-info')</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Average Waiting Time&nbsp;&nbsp;
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
                                                        Our waiting time data is based on NHS data, specifically the number of weeks that 92 out or 100 people wait for their treatment to start.
                                                    </span>'])
                                >@svg('icon-more-info')</span>
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
                                >@svg('icon-more-info')</span>
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
                                >@svg('icon-more-info')</span>
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
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                        You are protected from abuse and avoidable harm.
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                    Your care, treatment and support achieves good outcomes, helps you to maintain quality of life and is based on the best available evidence.
                                                </span>'])>@svg('icon-more-info')</span>
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
                                                         Staff involve and treat you with compassion, kindness, dignity and respect.
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                        Services are organised so that they meet your needs.
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                        The leadership,management & governance of the organisation make sure; it\'s providing high-quality care based around your needs, encourages learning and innovation, and promotes an open and fair culture.
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                        Rates the cleanliness of all items and areas commonly found in healthcare premises.
                                                    </span>'])>@svg('icon-more-info')</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Food & Hydration&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Rates the location’s catering; choice, 24hr availability, mealtimes & access to menus.
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                        Questions relating to patient bed and changing privacy, waiting areas and access to recreational space.
                                                    </span>'])>@svg('icon-more-info')</span>
                            </span>
                        </div>
                        <div class="cell">
                            <span class="position-relative">Condition, Appearance & Maintenance&nbsp;&nbsp;
                                <span tabindex="0"
                                      class="help-link"
                                    @include('components.basic.popover', [
                                    'placement' => 'top',
                                    'trigger'   => 'hover',
                                    'html'      => 'true',
                                    'size'      => 'comparison',
                                    'content'   => '<span>
                                                        Considers appearance of general environment including; décor, condition of fixtures & fittings, tidiness, signage, lighting.
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                        Considers flooring, décor and signage and aspects such as availability of handrails and appropriate seating.
                                                    </span>'])>@svg('icon-more-info')</span>
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
                                                        Considers access issues, including; wheelchair, mobility (e.g. handrails), signage, hearing loops and catering.
                                                    </span>'])>@svg('icon-more-info')</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col col-10 mt-0 border-right-0">
                    <div class="row" id="compare_hospitals_grid">
                        <!-- Items added here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
