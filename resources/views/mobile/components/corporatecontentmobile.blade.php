{{-- Corporate content area --}}
<div class="corporate-content w-100" id="corporate_content_hospital_{{$id}}">
    <div class="corporate-content-inner d-flex">
        <div class="corporate-content-section-1"></div>
        <div class="corporate-content-section-2 position-relative w-100">
{{--        @include('components.basic.button', [--}}
{{--            'buttonText'        => 'Close Info',--}}
{{--            'classTitle'        => 'btn btn-cc-close btn-squared btn-squared_slim',--}}
{{--            'svg'               => 'times',--}}
{{--            'dataTarget'        => '#corporate_content_hospital_' . $id,--}}
{{--            'style'             => 'right: 0; top: 9px',--}}
{{--            'id'                => 'close_cc_' . $id])--}}
        <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="nav-tabs_{{ $id }}" role="tablist">
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active " id="stats-tab_{{ $id }}" data-toggle="tab"--}}
{{--                       href="#stats_{{ $id }}"--}}
{{--                       role="tab" aria-controls="stats" aria-selected="false">Stats</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " id="profile-tab_{{ $id }}" data-toggle="tab"--}}
{{--                       href="#profile_{{ $id }}"--}}
{{--                       role="tab" aria-controls="profile" aria-selected="false">Profile</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link map-tab active"
                       id="map-tab_{{ $id }}"
                       data-toggle="tab"
                       data-map-target="#gmap_{{ $id }}"
                       href="#map_{{ $id }}"
                       role="tab"
                       aria-controls="home"
                       aria-selected="true">Map</a>
                </li>
{{--                <li class="nav-item d-none">--}}
{{--                    <a class="nav-link" id="treatments-tab_{{ $id }}" data-toggle="tab"--}}
{{--                       href="#treatments_{{ $id }}" role="tab" aria-controls="home"--}}
{{--                       aria-selected="true">Treatments</a>--}}
{{--                </li>--}}
            </ul>

            <!-- Tab panes -->
            <div class="tab-content row">
{{--                <div class="tab-pane active col-12" id="stats_{{ $id }}" role="tabpanel"--}}
{{--                     aria-labelledby="stats-tab">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="hc-accordion p-0" id="hospital_stats">--}}
{{--                                @if(!empty($qualityRating))--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-header" id="headingOne_{{ $id }}">--}}
{{--                                            <h2 class="mb-0">--}}
{{--                                                <button class=" btn btn-link collapsed" type="button"--}}
{{--                                                        data-toggle="collapse" data-target="#collapseOne_{{ $id }}"--}}
{{--                                                        aria-expanded="true" aria-controls="collapseOne_{{ $id }}">--}}
{{--                                                    <p class="rating-name">Care Quality Rating</p>--}}
{{--                                                    <p class="rating-value pt-0">{{ $qualityRating }}</p>--}}
{{--                                                </button>--}}
{{--                                            </h2>--}}

{{--                                        </div>--}}
{{--                                        <div id="collapseOne_{{ $id }}" class="collapse" aria-labelledby="headingOne"--}}
{{--                                             data-parent="#hospital_stats">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <div class="container-fluid p-0">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div--}}
{{--                                                            class="col-12 p-2 cqc-left d-flex flex-column justify-content-center align-items-start bg-{{ str_slug($qualityRating) }} text-white rounded">--}}
{{--                                                            <p class="mb-0 text-white">Overall</p>--}}
{{--                                                            <p class="mb-0 text-white text-left">--}}
{{--                                                                <strong>{{ $qualityRating }}</strong></p>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-12 cqc-right">--}}
{{--                                                            <div class="cqc-table">--}}
{{--                                                                <div class="cqc-row d-flex justify-content-between">--}}
{{--                                                                    <div class="cqc-category">Safe</div>--}}
{{--                                                                    <div class="cqc-rating ml-auto">--}}
{{--                                                                        <strong>{{ $safe }}</strong>--}}
{{--                                                                        {!! $safeIcon !!}--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="cqc-row d-flex justify-content-between">--}}
{{--                                                                    <div class="cqc-category">Effective</div>--}}
{{--                                                                    <div class="cqc-rating ml-auto">--}}
{{--                                                                        <strong>{{ $effective }}</strong>--}}
{{--                                                                        {!! $effectiveIcon !!}--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="cqc-row d-flex justify-content-between">--}}
{{--                                                                    <div class="cqc-category">Caring</div>--}}
{{--                                                                    <div class="cqc-rating ml-auto">--}}
{{--                                                                        <strong>{{ $caring }}</strong>--}}
{{--                                                                        {!! $caringIcon !!}--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="cqc-row d-flex justify-content-between">--}}
{{--                                                                    <div class="cqc-category">Responsive</div>--}}
{{--                                                                    <div class="cqc-rating ml-auto">--}}
{{--                                                                        <strong>{{ $responsive }}</strong>--}}
{{--                                                                        {!! $responsiveIcon !!}--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="cqc-row d-flex justify-content-between">--}}
{{--                                                                    <div class="cqc-category">Well Led</div>--}}
{{--                                                                    <div class="cqc-rating ml-auto">--}}
{{--                                                                        <strong>{{ $well_led }}</strong>--}}
{{--                                                                        {!! $wellLedIcon !!}--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                                @if(!empty($waitTime))--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-header" id="headingTwo_{{ $id }}">--}}
{{--                                            <h2 class="mb-0">--}}
{{--                                                <button class="btn btn-link collapsed" type="button"--}}
{{--                                                        data-toggle="collapse"--}}
{{--                                                        data-target="#collapseTwo_{{ $id }}" aria-expanded="false"--}}
{{--                                                        aria-controls="collapseTwo_{{ $id }}">--}}
{{--                                                    <p class="rating-name">Waiting Time</p>--}}
{{--                                                    <p class="rating-value pt-0">{{ $waitTime }} Weeks</p>--}}

{{--                                                </button>--}}
{{--                                            </h2>--}}
{{--                                        </div>--}}
{{--                                        <div id="collapseTwo_{{ $id }}" class="collapse" aria-labelledby="headingTwo_{{ $id }}"--}}
{{--                                             data-parent="#hospital_stats">--}}
{{--                                            <div class="card-body">--}}
{{--                                                <div>--}}
{{--                                                    <div class="d-table w-100">--}}
{{--                                                        <div class="d-table-row">--}}
{{--                                                            <div class="d-table-cell"></div>--}}
{{--                                                            <div class="d-table-cell SofiaPro-Medium">Weeks</div>--}}
{{--                                                            <div class="d-table-cell SofiaPro-Medium">Ranking</div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="d-table-row">--}}
{{--                                                            <div class="d-table-cell">Current Waiting Time</div>--}}
{{--                                                            <div class="d-table-cell">{{$waitTime}}</div>--}}
{{--                                                            <div class="d-table-cell">{{$waitingTimeRanking}}</div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="d-table-row">--}}
{{--                                                            <div class="d-table-cell SofiaPro-SemiBold">Waiting Times--}}
{{--                                                                for Treated Patients--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-table-cell"></div>--}}
{{--                                                            <div class="d-table-cell"></div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="d-table-row">--}}
{{--                                                            <div class="d-table-cell">Outpatients Treated</div>--}}
{{--                                                            <div class="d-table-cell">{{$outpatient}}</div>--}}
{{--                                                            <div class="d-table-cell">{{$outpatientRank}}</div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="d-table-row">--}}
{{--                                                            <div class="d-table-cell">Inpatients Treated</div>--}}
{{--                                                            <div class="d-table-cell">{{$inpatient}}</div>--}}
{{--                                                            <div class="d-table-cell">{{$inpatientRank}}</div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="d-table-row">--}}
{{--                                                            <div class="d-table-cell">Diagnostics - % waiting 6+ weeks--}}
{{--                                                            </div>--}}
{{--                                                            <div class="d-table-cell">{{$diagnostic}}</div>--}}
{{--                                                            <div class="d-table-cell">{{$diagnosticRank}}</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <small>NB - Diagnostics is a % of current waiting list waiting 6+--}}
{{--                                                        weeks (national target is 1%)</small>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header" id="headingThree_{{ $id }}">--}}
{{--                                        <h2 class="mb-0">--}}
{{--                                            <button class="btn btn-link collapsed" type="button"--}}
{{--                                                    data-toggle="collapse"--}}
{{--                                                    data-target="#collapseThree_{{ $id }}" aria-expanded="false"--}}
{{--                                                    aria-controls="collapseThree_{{ $id }}">--}}
{{--                                                <p class="rating-name">NHS User Rating</p>--}}
{{--                                                <p class="rating-value">{!! html_entity_decode($stars) !!}</p>--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseThree_{{ $id }}" class="collapse" aria-labelledby="headingThree_{{ $id }}"--}}
{{--                                         data-parent="#hospital_stats">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <ul class="nhs-user-ratings mb-0">--}}
{{--                                                <li>Cleanliness:&nbsp;<span><strong>{{number_format((float)$d['placeRating']['cleanliness'], 1)}}%</span></strong>--}}
{{--                                                </li>--}}
{{--                                                <li>Food & Hydration:&nbsp;<span><strong>{{number_format((float)$d['placeRating']['food_hydration'], 1)}}%</span></strong>--}}
{{--                                                </li>--}}
{{--                                                <li>Privacy, Dignity & Wellbeing:&nbsp;<span><strong>{{number_format((float)$d['placeRating']['privacy_dignity_wellbeing'], 1)}}%</span></strong>--}}
{{--                                                </li>--}}
{{--                                                <li>Condition, Appearance & Maintainance:&nbsp;<span><strong>{{number_format((float)$d['placeRating']['condition_appearance_maintenance'], 1)}}%</span></strong>--}}
{{--                                                </li>--}}
{{--                                                <li>Dementia Domain:&nbsp;<span><strong>{{number_format((float)$d['placeRating']['dementia'], 1)}}%</span></strong>--}}
{{--                                                </li>--}}
{{--                                                <li>Disability Domain:&nbsp;<span><strong>{{number_format((float)$d['placeRating']['disability'], 1)}}%</span></strong>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header" id="headingFour_{{ $id }}">--}}
{{--                                        <h2 class="mb-0">--}}
{{--                                            <button class="btn btn-link collapsed" type="button"--}}
{{--                                                    data-toggle="collapse"--}}
{{--                                                    data-target="#collapseFour_{{ $id }}" aria-expanded="false"--}}
{{--                                                    aria-controls="collapseFour_{{ $id }}">--}}
{{--                                                <p class="rating-name">Operations Cancelled</p>--}}
{{--                                                <p class="rating-value">{{ $opCancelled ?? 'No data'}}</p>--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseFour_{{ $id }}" class="collapse" aria-labelledby="headingFour_{{ $id }}"--}}
{{--                                         data-parent="#hospital_stats">--}}
{{--                                        <div class="card-body">--}}
{{--                                            @if(!empty($opCancelled))--}}
{{--                                                <p>National average is 3.5%</p>--}}
{{--                                            @else--}}
{{--                                                <p>No data for this hospital</p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header" id="headingFive_{{ $id }}">--}}
{{--                                        <h2 class="mb-0">--}}
{{--                                            <button class="btn btn-link collapsed" type="button"--}}
{{--                                                    data-toggle="collapse"--}}
{{--                                                    data-target="#collapseFive_{{ $id }}" aria-expanded="false"--}}
{{--                                                    aria-controls="collapseFive_{{ $id }}">--}}
{{--                                                <p class="rating-name">Friends and Family Rating</p>--}}
{{--                                                <p class="rating-value">{{ $FFRating ?? 'No data'}}</p>--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseFive_{{ $id }}" class="collapse" aria-labelledby="headingFive_{{ $id }}"--}}
{{--                                         data-parent="#hospital_stats">--}}
{{--                                        <div class="card-body">--}}
{{--                                            @if(!empty($FFRating))--}}
{{--                                                <p>National average is 98.855%</p>--}}
{{--                                            @else--}}
{{--                                                <p>No data for this hospital</p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header" id="headingSix_{{ $id }}">--}}
{{--                                        <h2 class="mb-0">--}}
{{--                                            <button class="btn btn-link collapsed" type="button"--}}
{{--                                                    data-toggle="collapse"--}}
{{--                                                    data-target="#collapseSix_{{ $id }}" aria-expanded="false"--}}
{{--                                                    aria-controls="collapseSix_{{ $id }}">--}}
{{--                                                <p class="rating-name">NHS Funded Work</p>--}}
{{--                                                <p class="rating-value">--}}
{{--                                                    {!! ($NHSClass == 'nhs-hospital') || ($NHSClass == 'private-hospital') && !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? "<img src='images/icons/tick-green.svg' alt='Tick icon'>" : "<img src='images/icons/dash-black.svg' alt='Dash icon'>" !!}--}}
{{--                                                </p>--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}
{{--                                    <div id="collapseSix_{{ $id }}" class="collapse" aria-labelledby="headingSix_{{ $id }}"--}}
{{--                                         data-parent="#hospital_stats">--}}
{{--                                        <div class="card-body">--}}
{{--                                            @if(!empty($FFRating))--}}
{{--                                                <p>National average is 98.855%</p>--}}
{{--                                            @else--}}
{{--                                                <p>No data for this hospital</p>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane col-12" id="profile_{{ $id }}" role="tabpanel"--}}
{{--                     aria-labelledby="profile-tab">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12 mb-3">--}}
{{--                            <div class="carousel-wrapper position-relative">--}}
{{--                                <div id="carousel-thumb_{{ $id }}"--}}
{{--                                     class="carousel slide carousel-slide carousel-thumbnails" data-ride="carousel"--}}
{{--                                     data-interval="false">--}}
{{--                                    <!--Slides-->--}}
{{--                                    <div class="carousel-inner" role="listbox">--}}
{{--                                        <div class="carousel-item active"--}}
{{--                                             style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
{{--                                            --}}{{--                                                <img class="d-block h-100 content"--}}
{{--                                            --}}{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                            --}}{{--                                                     alt="First slide">--}}
{{--                                        </div>--}}
{{--                                        <div class="carousel-item"--}}
{{--                                             style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
{{--                                            --}}{{--                                                <img class="d-block h-100 content"--}}
{{--                                            --}}{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                            --}}{{--                                                     alt="First slide">--}}
{{--                                        </div>--}}
{{--                                        <div class="carousel-item"--}}
{{--                                             style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
{{--                                            --}}{{--                                                <img class="d-block h-100 content"--}}
{{--                                            --}}{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                            --}}{{--                                                     alt="First slide">--}}
{{--                                        </div>--}}
{{--                                        <div class="carousel-item"--}}
{{--                                             style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">--}}
{{--                                            --}}{{--                                                <img class="d-block h-100 content"--}}
{{--                                            --}}{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                            --}}{{--                                                     alt="First slide">--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <!--/.Slides-->--}}
{{--                                    <!--Controls-->--}}
{{--                                    <a class="carousel-control-prev" href="#carousel-thumb_{{ $id }}" role="button"--}}
{{--                                       data-slide="prev">--}}
{{--       <span class="carousel-control-prev-icon"--}}
{{--             aria-hidden="true">@svg('chevron-left')</span>--}}
{{--                                        <span class="sr-only">Previous</span>--}}
{{--                                    </a>--}}
{{--                                    <a class="carousel-control-next" href="#carousel-thumb_{{ $id }}" role="button"--}}
{{--                                       data-slide="next">--}}
{{--                                    <span class="carousel-control-next-icon"--}}
{{--                                          aria-hidden="true">@svg('chevron-right')</span>--}}
{{--                                        <span class="sr-only">Next</span>--}}
{{--                                    </a>--}}

{{--                                </div><!--/.Carousel Wrapper-->--}}
{{--                                <!--/.Controls-->--}}
{{--                                --}}{{--                                    <ol class="_carousel-indicators indicators row">--}}
{{--                                --}}{{--                                        <li data-target="#carousel-thumb" data-slide-to="0" class="active col-3">--}}
{{--                                --}}{{--                                            <div class="col-inner">--}}
{{--                                --}}{{--                                                <img class="d-block h-100"--}}
{{--                                --}}{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                --}}{{--                                                     alt="Thumbnail image for first slide">--}}
{{--                                --}}{{--                                            </div>--}}
{{--                                --}}{{--                                        </li>--}}
{{--                                --}}{{--                                        <li data-target="#carousel-thumb" data-slide-to="1" class="col-3">--}}
{{--                                --}}{{--                                            <div class="col-inner">--}}
{{--                                --}}{{--                                                <img class="d-block h-100"--}}
{{--                                --}}{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                --}}{{--                                                     alt="Thumbnail image for seconf slide">--}}
{{--                                --}}{{--                                            </div>--}}
{{--                                --}}{{--                                        </li>--}}
{{--                                --}}{{--                                        <li data-target="#carousel-thumb" data-slide-to="2" class="col-3">--}}
{{--                                --}}{{--                                            <div class="col-inner">--}}
{{--                                --}}{{--                                                <img class="d-block h-100"--}}
{{--                                --}}{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                --}}{{--                                                     alt="Thumbnail image for third slide">--}}
{{--                                --}}{{--                                            </div>--}}
{{--                                --}}{{--                                        </li>--}}
{{--                                --}}{{--                                        <li data-target="#carousel-thumb" data-slide-to="3" class="col-3">--}}
{{--                                --}}{{--                                            <div class="col-inner">--}}
{{--                                --}}{{--                                                <img class="d-block h-100"--}}
{{--                                --}}{{--                                                     src="/images/alder-1.jpg"--}}
{{--                                --}}{{--                                                     alt="Thumbnail image for fourth slide">--}}
{{--                                --}}{{--                                            </div>--}}
{{--                                --}}{{--                                        </li>--}}
{{--                                --}}{{--                                    </ol>--}}
{{--                                --}}{{--                                    @include('components.basic.modalbutton', [--}}
{{--                                --}}{{--                                        'classTitle'        => 'stretched-link',--}}
{{--                                --}}{{--                                        'id'                => 'modal_trigger_' . $id,--}}
{{--                                --}}{{--                                        'modalTarget'       => '#hc_modal_carousel_'. $id,--}}
{{--                                --}}{{--                                        'buttonText'        => '',--}}
{{--                                --}}{{--                                        ])--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="profile-intro">--}}
{{--                                <p class="">Situated in London, this hospital provides private--}}
{{--                                    patients with outstanding medical--}}
{{--                                    services. Both self paying and private medically insured patients will be--}}
{{--                                    treated--}}
{{--                                    using--}}
{{--                                    the latest techniques in a modern and calming hospital. With a team of expert--}}
{{--                                    specialists patients can get treatment for a range of hip, knee, spinal and foot--}}
{{--                                    and--}}
{{--                                    ankle conditions.</p>--}}
{{--                                <p class="">Our hospitals are equipped with state of the art facilities and are--}}
{{--                                    focused on providing--}}
{{--                                    high quality healthcare. Each hospital boasts of having the latest equipment,--}}
{{--                                    available--}}
{{--                                    facilities include:</p>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12">--}}
{{--                                    <p class=" SofiaPro-SemiBold">First list</p>--}}
{{--                                    <ul class="blue-dot blue-dot_small">--}}
{{--                                        <li>First thing</li>--}}
{{--                                        <li>Second thing</li>--}}
{{--                                        <li>Third thing</li>--}}
{{--                                        <li>Fourth thing</li>--}}
{{--                                        <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing--}}
{{--                                            Fifth--}}
{{--                                            thing--}}
{{--                                            Fifth thing--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <p class=" SofiaPro-SemiBold">Second list</p>--}}
{{--                                    <ul class="blue-dot blue-dot_small">--}}
{{--                                        <li>First thing</li>--}}
{{--                                        <li>Second thing</li>--}}
{{--                                        <li>Third thing</li>--}}
{{--                                        <li>Fourth thing</li>--}}
{{--                                        <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing--}}
{{--                                            Fifth--}}
{{--                                            thing--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="tab-pane active col-12"
                     id="map_{{ $id }}"
                     role="tabpanel"
                     aria-labelledby="map-tab">
                    <div class="row">
                        <div class="corporate-content-details d-flex col-12 mb-3">
                            <div class="address">
                                {!! $town !!},&nbsp;{{ $postcode }}
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="gmap_{{ $id }}"
                                 class="map-container"
                                 style="height: 400px"
                                 data-longitude="{{ $longitude }}"
                                 data-latitude="{{ $latitude }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane col-6 d-none" id="treatments_{{ $id }}" role="tabpanel"
                     aria-labelledby="treatments-tab">
                    <p class=" SofiaPro-SemiBold">Our hospitals are equipped with state of the art
                        facilities and are focused on providing
                        high quality healthcare. Each hospital boasts of having the latest equipment, available
                        facilities include:</p>
                    <form action="" class="mb-3">
                        <div class="bg-turq rounded p-4">
                            <div class="form-child full-left d-flex">
                                @include('components.basic.select', [
                                   'showLabel'             => true,
                                   'selectClass'           => 'distance-dropdown',
                                   'options'               => $procedures,
                                   'labelClass'            => 'text-white font-18 pr-3 SofiaPro-Medium',
                                   'selectParentClass'       => 'd-md-flex select_half-width w-100',
                                   'placeholder'           => 'Check to see if your treatment is available at this hospital',
                                   'name'                  =>'radius'])
                                {{--                                <a tabindex="0" data-offset="30px 40px"--}}
                                {{--                                   class="help-link"--}}
                                {{--                                    @include('components.basic.popover', [--}}
                                {{--                                    'dismissible'   => true,--}}
                                {{--                                    'placement'      => 'top',--}}
                                {{--                                    'size'           => 'large',--}}
                                {{--                                    'html'           => 'true',--}}
                                {{--                                    'trigger'        => 'focus',--}}
                                {{--                                    'content'        => '<p class="bold mb-0">--}}
                                {{--                                                     Distance--}}
                                {{--                                                 </p>--}}
                                {{--                                                 <p>--}}
                                {{--                                                     Select how far you would be willing to travel for your treatment.--}}
                                {{--                                                 </p>--}}
                                {{--                                                 <p>--}}
                                {{--                                                     <a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a>--}}
                                {{--                                                 </p>'])--}}
                                {{--                                >' . file_get_contents(asset('/images/icons/question.svg')) . '</a>--}}
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <p class=" SofiaPro-SemiBold">Intro text for column area</p>
                        </div>
                        <div class="col-6">
                            <ul class="blue-dot blue-dot_small">
                                <li>First thing</li>
                                <li>Second thing</li>
                                <li>Third thing</li>
                                <li>Fourth thing</li>
                                <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth
                                    thing
                                    Fifth thing
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="blue-dot blue-dot_small">
                                <li>First thing</li>
                                <li>Second thing</li>
                                <li>Third thing</li>
                                <li>Fourth thing</li>
                                <li>Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth thing Fifth
                                    thing
                                    Fifth thing
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="media-pane col-6 d-none">
                    <div class="row">
                        <div class="col-5">
                            <!--Carousel Wrapper-->
                            <div class="carousel-wrapper position-relative">
                                <div id="carousel-thumb_{{ $id }}"
                                     class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel"
                                     data-interval="false">
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"
                                             style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">
                                            {{--                                                <img class="d-block h-100 content"--}}
                                            {{--                                                     src="/images/alder-1.jpg"--}}
                                            {{--                                                     alt="First slide">--}}
                                        </div>
                                        <div class="carousel-item"
                                             style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">
                                            {{--                                                <img class="d-block h-100 content"--}}
                                            {{--                                                     src="/images/alder-1.jpg"--}}
                                            {{--                                                     alt="First slide">--}}
                                        </div>
                                        <div class="carousel-item"
                                             style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">
                                            {{--                                                <img class="d-block h-100 content"--}}
                                            {{--                                                     src="/images/alder-1.jpg"--}}
                                            {{--                                                     alt="First slide">--}}
                                        </div>
                                        <div class="carousel-item"
                                             style="background-image: url('{{ asset('/images/alder-1.jpg') }}')">
                                            {{--                                                <img class="d-block h-100 content"--}}
                                            {{--                                                     src="/images/alder-1.jpg"--}}
                                            {{--                                                     alt="First slide">--}}
                                        </div>

                                    </div>
                                    <!--/.Slides-->
                                    <!--Controls-->
                                    <a class="carousel-control-prev" href="#carousel-thumb_{{ $id }}" role="button"
                                       data-slide="prev">
       <span class="carousel-control-prev-icon"
             aria-hidden="true">@svg('chevron-left')</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-thumb_{{ $id }}" role="button"
                                       data-slide="next">
                                    <span class="carousel-control-next-icon"
                                          aria-hidden="true">@svg('chevron-right')</span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div><!--/.Carousel Wrapper-->
                                <!--/.Controls-->
                                <ol class="_carousel-indicators indicators row">
                                    <li data-target="#carousel-thumb" data-slide-to="0" class="active col-3">
                                        <div class="col-inner">
                                            <img class="d-block h-100"
                                                 src="/images/alder-1.jpg"
                                                 alt="Thumbnail image for first slide">
                                        </div>
                                    </li>
                                    <li data-target="#carousel-thumb" data-slide-to="1" class="col-3">
                                        <div class="col-inner">
                                            <img class="d-block h-100"
                                                 src="/images/alder-1.jpg"
                                                 alt="Thumbnail image for seconf slide">
                                        </div>
                                    </li>
                                    <li data-target="#carousel-thumb" data-slide-to="2" class="col-3">
                                        <div class="col-inner">
                                            <img class="d-block h-100"
                                                 src="/images/alder-1.jpg"
                                                 alt="Thumbnail image for third slide">
                                        </div>
                                    </li>
                                    <li data-target="#carousel-thumb" data-slide-to="3" class="col-3">
                                        <div class="col-inner">
                                            <img class="d-block h-100"
                                                 src="/images/alder-1.jpg"
                                                 alt="Thumbnail image for fourth slide">
                                        </div>
                                    </li>
                                </ol>
                                {{--                                    @include('components.basic.modalbutton', [--}}
                                {{--                                        'classTitle'        => 'stretched-link',--}}
                                {{--                                        'id'                => 'modal_trigger_' . $id,--}}
                                {{--                                        'modalTarget'       => '#hc_modal_carousel_'. $id,--}}
                                {{--                                        'buttonText'        => '',--}}
                                {{--                                        ])--}}
                            </div>
                        </div>
                        @if(!empty($specialOffers))
                            <div class="col-7">
                                {{--                                    <div class="col-5">--}}
                                {{--                                        <div class="video-wrapper position-relative">--}}
                                {{--                                            <video class="content w-100" poster="{{ url('images/video_placeholder.jpg') }}">--}}
                                {{--                                                <source src="{{ asset('/video/For_Wes.mp4') }}" type="video/mp4">--}}
                                {{--                                                <source src="movie.ogg" type="video/ogg">--}}
                                {{--                                                Your browser does not support the video tag.--}}
                                {{--                                            </video>--}}
                                {{--                                            <div class="player-button toggle">{!! file_get_contents(asset('/images/icons/youtube.svg')) !!}</div>--}}
                                {{--                                            @include('components.basic.modalbutton', [--}}
                                {{--                                               'videoUrl'          => '/video/For_Wes.mp4',--}}
                                {{--                                               'modalTarget'       => '#hc_modal_video',--}}
                                {{--                                               'classTitle'        => 'stretched-link',--}}
                                {{--                                               'target'            => 'blank',--}}
                                {{--                                               'buttonText'            => '',--}}
                                {{--                                               'id'                => 'enquire_'.$id])--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="video-caption  font-14">Video title here</div>--}}
                                {{--                                    </div>--}}

                                <div class="special-offers-tab bg-blue-grad rounded d-flex flex-column">
                                    <p class="special-offer-title text-white font-22 SofiaPro-SemiBold">Special
                                        Offer</p>
                                    <ul class="bullets">
                                        @foreach($bulletPoints as $bulletPoint)
                                            @if(!empty($bulletPoint))
                                                <li class="text-white">{{ $bulletPoint }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <div class="btn-area w-100 text-right">
                                        @include('components.basic.modalbutton', [
                                           'hospitalType'      => $NHSClass,
                                           'hrefValue'         => $url,
                                           'hospitalTitle'     => $title,
                                           'modalTarget'       => '#hc_modal_enquire_private',
                                           'classTitle'        => 'btn btn-icon btn-enquire-now enquiry mt-auto ml-auto',
                                           'target'            => 'blank',
                                           'buttonText'        => 'Enquire now',
                                           'hospitalIds'       => $id,
                                           'id'                => 'enquire_special_'.$id])
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{--            <div class="corporate-content-section-3"></div>--}}
    </div>
</div>{{-- End of corporate content area  --}}
{{--@include('components.modals.modalCarousel', [--}}
{{--    'id' => $id,--}}
{{--    'carouselContent'   => '        <div class="carousel-wrapper position-relative">--}}
{{--                                        <div id="carousel-thumb_modal_' . $id .'"--}}
{{--                                             class="carousel slide carousel-slide carousel-thumbnails" data-ride="carousel" data-interval="false">--}}
{{--                                            <!--Slides-->--}}
{{--                                            <div class="carousel-inner" role="listbox">--}}
{{--                                                <div class="carousel-item active" style="background-image: url(\'/images/alder-1.jpg\')"></div>--}}
{{--                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>--}}
{{--                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>--}}
{{--                                                <div class="carousel-item" style="background-image: url(\'/images/alder-1.jpg\')"></div>--}}
{{--                                            </div>--}}
{{--                                            <!--/.Slides-->--}}
{{--                                            <!--Controls-->--}}
{{--                                            <a class="carousel-control-prev carousel-control" href="#carousel-thumb_modal_'. $id .'" role="button"--}}
{{--                                               data-slide="prev">--}}
{{--                                                <span class="carousel-control-prev-icon" aria-hidden="true">' . file_get_contents(asset('/images/icons/carousel-left.svg')) . '</span>--}}
{{--                                            </a>--}}
{{--                                            <a class="carousel-control-next carousel-control" href="#carousel-thumb_modal_'. $id .'" role="button"--}}
{{--                                               data-slide="next">--}}
{{--                                                <span class="carousel-control-next-icon" aria-hidden="true">' . file_get_contents(asset('/images/icons/carousel-right.svg')) . ' </span>--}}
{{--                                                <span class="sr-only">Next</span>--}}
{{--                                            </a>--}}

{{--                                        </div>--}}
{{--                                        <!--/.Controls-->--}}
{{--                                        <ol class="_carousel-indicators indicators row mb-0">--}}
{{--                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="0" class="active col-3">--}}
{{--                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">--}}
{{--                                                    <img class="d-block h-100"--}}
{{--                                                         src="/images/alder-1.jpg"--}}
{{--                                                         alt="Thumbnail image for first slide">--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="1" class="col-3">--}}
{{--                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="2" class="col-3">--}}
{{--                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li data-target="#carousel-thumb_modal_'. $id .'" data-slide-to="3" class="col-3">--}}
{{--                                                <div class="col-inner" style="background-image: url(\'/images/alder-1.jpg\')">--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ol>--}}
{{--                                    </div><!--/.Carousel Wrapper-->--}}
{{--                                    '])--}}
