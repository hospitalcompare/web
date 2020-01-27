<div class="result-item mb-3 mb-lg-0" id="result-item_{{ $id }}">
    <div class="container">
        <div class="result-item-inner">
            <div class="result-item-section-1">
                <div class="hospital-image" style="background-image: url('{{$itemImg}}');">
                    {{--                    <img class="content h-100" width="134" height="123" alt="Image of {{ $title }}" src="{{ $itemImg }}">--}}
                    <div
                        class="{{$NHSClass}} py-1 px-2 {{ $NHSClass == 'private-hospital' ? 'bg-private' : 'bg-nhs' }}">
                        <p class="m-0">{{$fundedText}}</p></div>
                </div>
                <div class="hospital-details w-100 position-relative">
                    <p class="sort-item-title SofiaPro-SemiBold" id="item_name_{{$id}}">
                        {{$title}}
                    </p>
                    @if(!empty($locationSpecialism))
                        <p class="sort-item-specialism col-brand-primary-1 mb-1">
                            <strong>Specialism:&nbsp;</strong><span>{{ $locationSpecialism }}</span></p>
                    @endif
                    <p class="sort-item-location">{{$location}}</p>
                    @include('components.basic.button', [
                        'classTitle'        => 'btn btn-icon btn-more-info position-absolute font-12',
                        'buttonText'        => '<span>Map</span>',
                        'htmlButton'        => true,
                        'icon'              => '',
                        'id'                => 'more_info_' . $id,
                        'svg'               => 'plus-solid',
                        'dataTarget'        => '#corporate_content_hospital_' . $id,
                        'dataId'           => $id
                     ])
                </div>
            </div>
            <div class="result-item-section-2">
                {{-- CQC rating  --}}
                <div class="result-item-section-2__child">
                    <div class="h-50 d-flex flex-column justify-content-center SofiaPro-Medium" @includeWhen(empty($qualityRating), 'components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => 'Currently no data available for this hospital'])
                        @includeWhen(!empty($qualityRating), 'components.basic.popover', [
                             'placement'     => 'bottom',
                             'size'          => 'cqc',
                             'trigger'       => 'hover',
                             'html'          => 'true',
                             'content'       => '<div class="container-fluid">
                                 <div class="row">
                                     <div class="cqc-left col-4 d-flex flex-column justify-content-center align-items-start bg-' . str_slug($qualityRating). ' text-white border">
                                         <p class="mb-0 text-white">Overall</p>
                                         <p class="mb-0 text-white text-left"><strong>' . $qualityRating . '</strong></p>
                                     </div>
                                     <div class="cqc-right col-8 pr-0">
                                         <div class="cqc-table">
                                             <div class="cqc-row d-flex justify-content-between">
                                                 <div class="cqc-category">Safe</div>
                                                 <div class="cqc-rating ml-auto"><strong>' . $safe . '</strong>'
                                                    . $safeIcon .
                                                 '</div>
                                             </div>
                                             <div class="cqc-row d-flex justify-content-between">
                                                 <div class="cqc-category">Effective</div>
                                                 <div class="cqc-rating ml-auto"><strong>' . $effective . '</strong>'
                                                    . $effectiveIcon .
                                                 '</div>
                                             </div>
                                             <div class="cqc-row d-flex justify-content-between">
                                                 <div class="cqc-category">Caring</div>
                                                 <div class="cqc-rating ml-auto"><strong>' . $caring . '</strong>'
                                                    . $caringIcon .
                                                 '</div>
                                             </div>
                                             <div class="cqc-row d-flex justify-content-between">
                                                 <div class="cqc-category">Responsive</div>
                                                 <div class="cqc-rating ml-auto"><strong>' . $responsive . '</strong>'
                                                    . $responsiveIcon .
                                                 '</div>
                                             </div>
                                             <div class="cqc-row d-flex justify-content-between">
                                                 <div class="cqc-category">Well Led</div>
                                                 <div class="cqc-rating ml-auto"><strong>' . $well_led . '</strong>'
                                                    . $wellLedIcon .
                                                 '</div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>'])>
                        <p class="stat-label d-block w-100 d-lg-none">Care Quality Rating</p>
                        <p class="col-{{ str_slug($qualityRating) }}">{!! !empty($qualityRating) ? $qualityRating : "No data" !!}</p>
                    </div>
                </div>
                {{-- Waiting time --}}
                <div class="result-item-section-2__child">
                    <div class="h-50 d-flex flex-column justify-content-center SofiaPro-Medium"
                        @includeWhen(empty($waitTime), 'components.basic.popover', [
                            'placement' => 'bottom',
                            'trigger' => 'hover',
                            'html' => 'true',
                            'content' => 'Currently no data available for this hospital'])
                        @includeWhen(!empty($waitTime), 'components.basic.popover', [
                            'placement'         => 'bottom',
                            'trigger'           => 'hover',
                            'html'              => 'true',
                            'content'           =>
                                '<div>
                                    <div class="d-table w-100">
                                        <div class="d-table-row">
                                            <div class="d-table-cell"></div>
                                            <div class="d-table-cell SofiaPro-Medium">Weeks</div>
                                            <div class="d-table-cell SofiaPro-Medium">Ranking</div>
                                        </div>
                                        <div class="d-table-row">
                                            <div class="d-table-cell text-left">Current Waiting Time</div>
                                            <div class="d-table-cell">'.$waitTime.'</div>
                                            <div class="d-table-cell">'.$waitingTimeRanking.'</div>
                                        </div>
                                        <div class="d-table-row">
                                            <div class="d-table-cell SofiaPro-SemiBold text-left">Waiting Times for Treated Patients</div>
                                            <div class="d-table-cell"></div>
                                            <div class="d-table-cell"></div>
                                        </div>
                                        <div class="d-table-row">
                                            <div class="d-table-cell text-left">Outpatients Treated</div>
                                            <div class="d-table-cell">'.$outpatient.'</div>
                                            <div class="d-table-cell">'.$outpatientRank.'</div>
                                        </div>
                                        <div class="d-table-row">
                                            <div class="d-table-cell text-left">Inpatients Treated</div>
                                            <div class="d-table-cell">'.$inpatient.'</div>
                                            <div class="d-table-cell">'.$inpatientRank.'</div>
                                        </div>
                                        <div class="d-table-row">
                                            <div class="d-table-cell text-left">Diagnostics - % waiting 6+ weeks</div>
                                            <div class="d-table-cell">'.$diagnostic.'</div>
                                            <div class="d-table-cell">'.$diagnosticRank.'</div>
                                        </div>
                                    </div>
                                    <small>NB - Diagnostics is a % of current waiting list waiting 6+ weeks (national target is 1%)</small>
                                </div>'
                            ])>
                        <p class="stat-label d-block w-100 d-lg-none">Waiting Time</p>
                        <p>{!! !empty($waitTime) ? $waitTime.'<span class="d-inline d-lg-none">&nbsp;</span><br class="d-none d-lg-inline">Weeks' : "No data" !!}</p>
                    </div>
                </div>
                {{-- End waiting time --}}
                {{-- NHS user rating --}}
                <div class="result-item-section-2__child">
                    <div class="h-50 d-flex flex-column align-items-center justify-content-center SofiaPro-Medium"
                        @include('components.basic.popover', [
                            'placement'         => 'bottom',
                            'trigger'           => 'hover',
                            'html'              => 'true',
                            'content'           => !empty($d['placeRating']) ? '
                            <ul class="nhs-user-ratings mb-0">
                                <li>Cleanliness:&nbsp;'                             . '<span><strong>' . number_format((float)$d['placeRating']['cleanliness'], 1).'%</span></strong></li>
                                <li>Food & Hydration:&nbsp;'                        . '<span><strong>' . number_format((float)$d['placeRating']['food_hydration'], 1).'%</span></strong></li>
                                <li>Privacy, Dignity & Wellbeing:&nbsp;'            . '<span><strong>' . number_format((float)$d['placeRating']['privacy_dignity_wellbeing'], 1).'%</span></strong></li>
                                <li>Condition, Appearance & Maintainance:&nbsp;'    . '<span><strong>' . number_format((float)$d['placeRating']['condition_appearance_maintenance'], 1).'%</span></strong></li>
                                <li>Dementia Domain:&nbsp;            '             . '<span><strong>' . number_format((float)$d['placeRating']['dementia'], 1).'%</span></strong></li>
                                <li>Disability Domain:&nbsp;        '               . '<span><strong>' . number_format((float)$d['placeRating']['disability'], 1).'%</span></strong></li>
                            </ul>' : 'Currently no data available<br>for this hospital'])>
                        <p class="stat-label d-block w-100 d-lg-none">NHS User Rating</p>
                        <span class="d-flex">{!! html_entity_decode($stars) !!}</span>
                    </div>
                </div>
                {{-- end NHS user rating --}}
                {{-- % operations cancelled --}}
                <div class="result-item-section-2__child">
                    <div class="h-50 d-flex flex-column justify-content-center SofiaPro-Medium"
                        @include('components.basic.popover', [
                        'trigger' => 'hover',
                        'html'    => 'true',
                        'content' => !empty($opCancelled) ? 'National average<br> is 3.35%' : 'Currently no data available<br>for this hospital'])>
                        <p class="stat-label d-block w-100 d-lg-none">Operations Cancelled</p>
                        {!! !empty($opCancelled) ? $opCancelled : "No data" !!}
                    </div>
                </div>
                {{-- Friends and family --}}
                <div class="result-item-section-2__child">
                    <div class="m-0 h-50 d-flex flex-column justify-content-center SofiaPro-Medium"
                        @include('components.basic.popover', [
                            'placement' => 'bottom',
                            'trigger' => 'hover',
                            'html' => 'true',
                            'content' => !empty($FFRating) ? 'National average<br>is 98.85%' : 'Currently no data available<br>for this hospital'])>
                        <p class="stat-label d-block w-100 d-lg-none">Friends & Family Rating</p>
                        {!! !empty($FFRating) ? $FFRating : "No data" !!}
                    </div>
                </div>
                {{-- NHS funded work  --}}
                <div class="result-item-section-2__child">
                    <div class="d-flex flex-column justify-content-center">
                        <p class="stat-label d-block w-100 d-lg-none">Friends & Family Rating</p>
                        <p>
                            {!! ($NHSClass == 'nhs-hospital') || ($NHSClass == 'private-hospital') && !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? "<img src='images/icons/tick-green.svg' alt='Tick icon'>" : "<img src='images/icons/dash-black.svg' alt='Dash icon'>" !!}
                        </p>
                    </div>
                </div>
                <div class="result-item-section-2__child">
                    <div class="d-flex flex-column justify-content-center">
                        <p class="stat-label d-block d-md-none">NHS Funded Work</p>
                        @if(!empty($privateSelfPay))
                            @if($NHSClass == 'private-hospital')
                                @include('components.basic.modalbutton', [
                                        'hrefValue'         => $url,
                                        'hospitalTitle'     => $title,
                                        'modalTarget'       => '#hc_modal_enquire_private',
                                        'classTitle'        => 'text-link enquire-prices',
                                        'target'            => 'blank',
                                        'modalText'         => 'This is the text about prices',
                                        'hospitalIds'       => $id,
                                        'image'             => $itemImg,
                                        'buttonText'        => 'Click for<br>prices'])
                            @else
                                <p><img class="dash-or-tick" src='images/icons/dash-black.svg' alt='Dash icon'></p>
                            @endif
                        @else
                            <p><img class="dash-or-tick" src='images/icons/dash-black.svg' alt='Dash icon'></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="result-item-section-3">
                <div class="btn-area">
                    @include('components.basic.button', [
                       'classTitle'        => 'btn btn-squared btn-squared_slim btn-brand-primary-1 btn-more-info h-100 w-100 text-center font-14 p-3 position-relative d-lg-none',
                       'buttonText'        => '<span>Map</span>',
                       'htmlButton'        => true,
                       'icon'              => '',
                       'id'                => 'more_info_' . $id,
                       'dataTarget'        => '#corporate_content_hospital_' . $id,
                       'dataId'            => $id
                    ])
                    @if($NHSClass == 'private-hospital')
                        @include('components.basic.modalbutton', [
                        'hospitalType'      => $NHSClass,
                        'hrefValue'         => $url,
                        'hospitalTitle'     => $title,
                        'modalTarget'       => '#hc_modal_enquire_private',
                        'classTitle'        => 'btn btn-icon btn-enquire enquiry mr-2 btn-block font-12',
                        'target'            => 'blank',
                        'buttonText'        => $btnText,
                        'id'                => 'enquire_private_'.$id,
                        'hospitalIds'       => $id,
                        'image'             => $itemImg,
                        'svg'               => 'circle-check',
                        'svgClass'          => 'd-none d-lg-block'])
                    @elseif($NHSClass == 'nhs-hospital')
                        @include('components.basic.modalbutton', [
                        'hospitalType'      => $NHSClass,
                        'hrefValue'         => $url,
                        'hospitalTitle'     => $title,
                        'hospitalUrl'       => $d['url'],
                        'classTitle'        => 'btn btn-icon btn-enquire enquiry mr-2 btn-block font-12',
                        'buttonText'        => $btnText,
                        'modalTarget'       => '#hc_modal_enquire_nhs',
                        'id'                => 'enquire_nhs'.$id,
                        'hospitalIds'       => $id,
                        'image'             => $itemImg,
                        'svg'               => 'circle-check'])
                    @endif
                    @if(!empty($specialOffers))
                        <div class="position-relative btn-block">
                            @includeWhen(!empty($specialOffers), 'components.basic.specialofferslide', [
                                'class' => 'default'])
                            @include('components.basic.button', [
                                'classTitle'        => 'toggle-special-offer btn btn-block btn-icon btn-pink btn-special-offer btn-plus font-12',
                                'htmlButton'        => true,
                                'id'                => 'special_' . $id,
                                'buttonText'        => 'Special Offers',
                                'svg'               => 'special'])
                        </div>
                    @endif
                    @include('components.basic.button', [
                        'classTitle'        => 'btn btn-compare compare btn-block font-12',
                        'htmlButton'        => true,
                        'buttonText'        => 'Add to compare',
                        'hospitalType'      => $NHSClass,
                        'svg'               => 'heart-solid',
                        'id'                => $id])
                </div>
            </div>
        </div>
    </div>{{-- container --}}
    @include('components.corporatecontent', [
        'procedures'        => $procedures,
        'bulletPoints'      => ['Shortest waiting time', 'Outstanding CQC rating', '5 Star NHS Rating'],
        'latitude'          => $latitude,
        'longitude'         => $longitude,
        'address'           => '<strong>' . $title . '</strong>' . '<br>' . $location . '<br>' . trim($town, ', ') . '<br>' . $county . '<br>' . $postcode,
        'hospitalTitle'     => $title
    ])
</div>
