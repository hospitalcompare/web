{{-- Corporate content area --}}
<div class="corporate-content w-100" id="corporate_content_hospital_{{$id}}">
    <div class="corporate-content-inner d-flex">
        <div class="corporate-content-section-1"></div>
        <div class="corporate-content-section-2 position-relative w-100">
        <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="nav-tabs_{{ $id }}" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="stats-tab_{{ $id }}" data-toggle="tab"
                       href="#stats_{{ $id }}"
                       role="tab" aria-controls="stats" aria-selected="false">Stats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="consultants-tab_{{ $id }}" data-toggle="tab"
                       href="#consultants_{{ $id }}"
                       role="tab" aria-controls="stats" aria-selected="false">Consultants</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       id="map-tab_{{ $id }}"
                       data-toggle="tab"
                       data-map-target="#gmap_{{ $id }}"
                       href="#map_{{ $id }}"
                       role="tab"
                       aria-controls="home"
                       aria-selected="true">Map</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content row">
                <div class="tab-pane col-12" id="stats_{{ $id }}" role="tabpanel"
                     aria-labelledby="stats-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="hc-accordion p-0" id="hospital_stats">
                                @if(!empty($qualityRating))
                                    <div class="card rounded-0">
                                        <div class="card-header" id="headingOne_{{ $id }}">
                                            <h2 class="mb-0">
                                                <button class=" btn btn-link collapsed rounded-0" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne_{{ $id }}"
                                                        aria-expanded="true" aria-controls="collapseOne_{{ $id }}">
                                                    <p class="rating-name">Care Quality Rating</p>
                                                    <p class="rating-value pt-0">{{ $qualityRating }}</p>
                                                </button>
                                            </h2>

                                        </div>
                                        <div id="collapseOne_{{ $id }}" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#hospital_stats">
                                            <div class="card-body">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-12 cqc-left">
                                                            <div class="col-inner p-2  d-flex flex-column justify-content-center align-items-start bg-{{ str_slug($qualityRating) }} text-white rounded">
                                                                <p class="mb-0 text-white">Overall</p>
                                                                <p class="mb-0 text-white text-left">
                                                                    <strong>{{ $qualityRating }}</strong></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 cqc-right">
                                                            <div class="cqc-table">
                                                                <div class="cqc-row d-flex justify-content-between">
                                                                    <div class="cqc-category">Safe</div>
                                                                    <div class="cqc-rating ml-auto">
                                                                        <strong>{{ $safe }}</strong>
                                                                        {!! $safeIcon !!}
                                                                    </div>
                                                                </div>
                                                                <div class="cqc-row d-flex justify-content-between">
                                                                    <div class="cqc-category">Effective</div>
                                                                    <div class="cqc-rating ml-auto">
                                                                        <strong>{{ $effective }}</strong>
                                                                        {!! $effectiveIcon !!}
                                                                    </div>
                                                                </div>
                                                                <div class="cqc-row d-flex justify-content-between">
                                                                    <div class="cqc-category">Caring</div>
                                                                    <div class="cqc-rating ml-auto">
                                                                        <strong>{{ $caring }}</strong>
                                                                        {!! $caringIcon !!}
                                                                    </div>
                                                                </div>
                                                                <div class="cqc-row d-flex justify-content-between">
                                                                    <div class="cqc-category">Responsive</div>
                                                                    <div class="cqc-rating ml-auto">
                                                                        <strong>{{ $responsive }}</strong>
                                                                        {!! $responsiveIcon !!}
                                                                    </div>
                                                                </div>
                                                                <div class="cqc-row d-flex justify-content-between">
                                                                    <div class="cqc-category">Well Led</div>
                                                                    <div class="cqc-rating ml-auto">
                                                                        <strong>{{ $well_led }}</strong>
                                                                        {!! $wellLedIcon !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(!empty($waitTime))
                                    <div class="card rounded-0">
                                        <div class="card-header" id="headingTwo_{{ $id }}">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed rounded-0" type="button"
                                                        data-toggle="collapse"
                                                        data-target="#collapseTwo_{{ $id }}" aria-expanded="false"
                                                        aria-controls="collapseTwo_{{ $id }}">
                                                    <p class="rating-name">Waiting Time</p>
                                                    <p class="rating-value pt-0">{{ $waitTime }} Weeks</p>

                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo_{{ $id }}" class="collapse" aria-labelledby="headingTwo_{{ $id }}"
                                             data-parent="#hospital_stats">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-table w-100 text-left">
                                                        <div class="d-table-row">
                                                            <div class="d-table-cell"></div>
                                                            <div class="d-table-cell SofiaPro-Medium">Weeks</div>
                                                            <div class="d-table-cell SofiaPro-Medium">Ranking</div>
                                                        </div>
                                                        <div class="d-table-row">
                                                            <div class="d-table-cell">Current Waiting Time</div>
                                                            <div class="d-table-cell">{{$waitTime}}</div>
                                                            <div class="d-table-cell">{{$waitingTimeRanking}}</div>
                                                        </div>
                                                        <div class="d-table-row">
                                                            <div class="d-table-cell SofiaPro-SemiBold">Waiting Times
                                                                for Treated Patients
                                                            </div>
                                                            <div class="d-table-cell"></div>
                                                            <div class="d-table-cell"></div>
                                                        </div>
                                                        <div class="d-table-row">
                                                            <div class="d-table-cell">Outpatients Treated</div>
                                                            <div class="d-table-cell">{{$outpatient}}</div>
                                                            <div class="d-table-cell">{{$outpatientRank}}</div>
                                                        </div>
                                                        <div class="d-table-row">
                                                            <div class="d-table-cell">Inpatients Treated</div>
                                                            <div class="d-table-cell">{{$inpatient}}</div>
                                                            <div class="d-table-cell">{{$inpatientRank}}</div>
                                                        </div>
                                                        <div class="d-table-row">
                                                            <div class="d-table-cell">Diagnostics - % waiting 6+ weeks
                                                            </div>
                                                            <div class="d-table-cell">{{$diagnostic}}</div>
                                                            <div class="d-table-cell">{{$diagnosticRank}}</div>
                                                        </div>
                                                    </div>
                                                    <small class="text-left">NB - Diagnostics is a % of current waiting list waiting 6+
                                                        weeks (national target is 1%)</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="card rounded-0">
                                    <div class="card-header" id="headingThree_{{ $id }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed rounded-0" type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseThree_{{ $id }}" aria-expanded="false"
                                                    aria-controls="collapseThree_{{ $id }}">
                                                <p class="rating-name">NHS User Rating</p>
                                                <p class="rating-value">{!! html_entity_decode($stars) !!}</p>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree_{{ $id }}" class="collapse" aria-labelledby="headingThree_{{ $id }}"
                                         data-parent="#hospital_stats">
                                        <div class="card-body">
                                            <ul class="nhs-user-ratings mb-0">
                                                <li>Cleanliness:&nbsp;<span><strong>{{!empty($d['placeRating']['cleanliness']) ? number_format((float)$d['placeRating']['cleanliness'], 1) : ''}}%</span></strong>
                                                </li>
                                                <li>Food & Hydration:&nbsp;<span><strong>{{!empty($d['placeRating']['food_hydration']) ? number_format((float)$d['placeRating']['food_hydration'], 1) : ''}}%</span></strong>
                                                </li>
                                                <li>Privacy, Dignity & Wellbeing:&nbsp;<span><strong>{{!empty($d['placeRating']['privacy_dignity_wellbeing']) ? number_format((float)$d['placeRating']['privacy_dignity_wellbeing'], 1) : ''}}%</span></strong>
                                                </li>
                                                <li>Condition, Appearance & Maintainance:&nbsp;<span><strong>{{!empty($d['placeRating']['condition_appearance_maintenance']) ? number_format((float)$d['placeRating']['condition_appearance_maintenance'], 1) : ''}}%</span></strong>
                                                </li>
                                                <li>Dementia Domain:&nbsp;<span><strong>{{!empty($d['placeRating']['dementia']) ? number_format((float)$d['placeRating']['dementia'], 1) : ''}}%</span></strong>
                                                </li>
                                                <li>Disability Domain:&nbsp;<span><strong>{{!empty($d['placeRating']['disability']) ? number_format((float)$d['placeRating']['disability'], 1) : ''}}%</span></strong>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header" id="headingFour_{{ $id }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed rounded-0" type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFour_{{ $id }}" aria-expanded="false"
                                                    aria-controls="collapseFour_{{ $id }}">
                                                <p class="rating-name">Operations Cancelled</p>
                                                <p class="rating-value">{{ $opCancelled ?? 'No data'}}</p>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour_{{ $id }}" class="collapse" aria-labelledby="headingFour_{{ $id }}"
                                         data-parent="#hospital_stats">
                                        <div class="card-body">
                                            @if(!empty($opCancelled))
                                                <p>National average is 1.58%</p>
                                            @else
                                                <p>No data for this hospital</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header" id="headingFive_{{ $id }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed rounded-0" type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFive_{{ $id }}" aria-expanded="false"
                                                    aria-controls="collapseFive_{{ $id }}">
                                                <p class="rating-name">Friends and Family Rating</p>
                                                <p class="rating-value">{{ $FFRating ?? 'No data'}}</p>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive_{{ $id }}" class="collapse" aria-labelledby="headingFive_{{ $id }}"
                                         data-parent="#hospital_stats">
                                        <div class="card-body">
                                            @if(!empty($FFRating))
                                                <p>National average is 94.01%</p>
                                            @else
                                                <p>No data for this hospital</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header" id="headingSix_{{ $id }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link no-arrow rounded-0" type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSix_{{ $id }}" aria-expanded="false"
                                                    aria-controls="collapseSix_{{ $id }}">
                                                <p class="rating-name">NHS Funded Work</p>
                                                <p class="rating-value">
                                                    {!! ($NHSClass == 'nhs-hospital') || ($NHSClass == 'private-hospital') && !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? "<img src='images/icons/tick-green.svg' alt='Tick icon'>" : "<img src='images/icons/dash-black.svg' alt='Dash icon'>" !!}
                                                </p>
                                            </button>
                                        </h2>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header" id="headingSeven_{{ $id }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link no-arrow rounded-0" type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSeven_{{ $id }}" aria-expanded="false"
                                                    aria-controls="collapseSeven_{{ $id }}">
                                                <p class="rating-name">Private Self Pay</p>
                                                <p class="rating-value">
                                                    @if(!empty($privateSelfPay))
                                                        <img class="dash-or-tick" src='images/icons/tick-green.svg' alt='Tick icon'>
                                                    @else
                                                        <img class="dash-or-tick" src='images/icons/dash-black.svg' alt='Dash icon'>
                                                    @endif
                                                </p>
                                            </button>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane active col-12" id="consultants_{{ $id }}" role="tabpanel"
                     aria-labelledby="consultants-tab">
                    <div class="row">
                        <div class="col-12">
                            <div class="hc-accordion p-0" id="consultant_list">
                                <div class="card rounded-0">
                                    <div class="card-header" id="headingTwo_{{ $id }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed rounded-0" type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseTwo_{{ $id }}" aria-expanded="false"
                                                    aria-controls="collapseTwo_{{ $id }}">
                                                <div class="rating-name">Edward Wood</div>
                                                <div class="rating-value pt-0 d-flex">Orthopaedic Surgeon<span class="procedure-count ml-3">75</span>&nbsp;procedures</div>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo_{{ $id }}" class="collapse" aria-labelledby="headingTwo_{{ $id }}"
                                         data-parent="#hospital_stats">
                                        <div class="card-body">
                                            <div>
                                                <div class="d-table w-100 text-left">
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">GMC Code</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">4342931</div>
                                                    </div>
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">Licensed</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">@svg('tick-blue', 'blue-tick-inline') Valid</div>
                                                    </div>
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">Years Registered</div>
                                                        <div class="d-table-cell px-0 col-grey text-right"><span class="years-registered">23</span>&nbsp;years</div>
                                                    </div>
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">Procedures</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">Laparoscopic hernia repair,
                                                            Haemorrhoid treatment, Gallbladder
                                                            and gallstone removal, Bowel surgery,
                                                            Rectal prolapse surgery</div>
                                                    </div>
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">Also Practicing At</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">St Helens Hospital<br />
                                                            Warrington & Halton Hospital</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card rounded-0">
                                    <div class="card-header" id="headingTwo_{{ $id }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed rounded-0" type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseTwo_{{ $id }}" aria-expanded="false"
                                                    aria-controls="collapseTwo_{{ $id }}">
                                                <p class="rating-name">Ali Addas</p>
                                                <p class="rating-value pt-0">Trauma and Orthopaedics 244444 procedures</p>

                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo_{{ $id }}" class="collapse" aria-labelledby="headingTwo_{{ $id }}"
                                         data-parent="#hospital_stats">
                                        <div class="card-body">
                                            <div>
                                                <div class="d-table w-100 text-left">
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">GMC Code</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">65465465</div>
                                                    </div>
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">Licensed</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">@svg('tick-blue', 'blue-tick-inline') Valid</div>
                                                    </div>
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">Years Registered</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">10 years</div>
                                                    </div>
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">Procedures</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">Laparoscopic hernia repair,
                                                            Haemorrhoid treatment, Gallbladder
                                                            and gallstone removal, Bowel surgery,
                                                            Rectal prolapse surgery</div>
                                                    </div>
                                                    <div class="d-table-row">
                                                        <div class="d-table-cell px-0 col-grey w-50">Also Practicing At</div>
                                                        <div class="d-table-cell px-0 col-grey text-right">St Helens Hospital<br />
                                                            Warrington & Halton Hospital</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane col-12"
                     id="map_{{ $id }}"
                     role="tabpanel"
                     aria-labelledby="map-tab">
                    <div class="row">
                        <div class="corporate-content-details d-flex col-12 mb-3">
                            <div class="address">
                                {!! !empty($d['address']['city']) ? $d['address']['city'] : $d['address']['county'] !!},&nbsp;{{ $postcode }}
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
            </div>
            <div class="container-fluid">
            </div>
        </div>
        {{--            <div class="corporate-content-section-3"></div>--}}
    </div>
</div>{{-- End of corporate content area  --}}
