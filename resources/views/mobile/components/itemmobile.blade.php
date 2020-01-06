<div class="result-item result-item-mobile col-12 col-md-6 mb-3" id="result-item_{{ $id }}">
    <div class="result-item-inner position-relative shadow p-3 pt-5 h-100 d-flex flex-column">
        <div class="item-tags position-absolute d-flex">
            <div
                class="{{$NHSClass}} hospital-type pp-2 {{ $NHSClass == 'private-hospital' ? 'bg-violet' : 'bg-blue' }} position-relative d-inline-block">
                <p class="px-3 m-0 font-12 text-uppercase">{{ $fundedText }}</p>
            </div>
        </div>
        @include('components.basic.button', [
            'classTitle'        => 'btn btn-compare compare font-12 shadow-none position-absolute mt-2 mr-2',
            'htmlButton'        => true,
            'buttonText'        => 'Add to compare',
            'hospitalType'      => $NHSClass,
            'svg'               => 'heart-solid',
            'id'                => $id])
        <div class="result-item-mobile-section-1 w-100 mb-3">
            <div class="hospital-details w-100 position-relative">
                <p class="sort-item-title SofiaPro-SemiBold" id="item_name_{{$id}}">
                    {{$title}}
                </p>
                @if(!empty($locationSpecialism))
                    <p class="sort-item-specialism col-turq mb-1">
                        <strong>Specialism:&nbsp;</strong><span>{{ $locationSpecialism }}</span></p>
                @endif
                <p class="sort-item-location">{{$location}} {{-- trim($town, ', ') --}}</p>
                <!-- Corporate content area -->
                @include('mobile.components.corporatecontentmobile', [
                    'procedures'        => $procedures,
                    'bulletPoints'      => ['Shortest waiting time', 'Outstanding CQC rating', '5 Star NHS Rating'],
                    'latitude'          => $latitude,
                    'longitude'         => $longitude,
                    'address'           => '<strong>' . $title . '</strong>' . '<br>' . $location . '<br>' . trim($town, ', ') . '<br>' . $county . '<br>' . $postcode,
                    'hospitalTitle'     => $title
                ])
            </div>
        </div>
        <div class="result-item-mobile-section-2 w-100">
            {{-- CQC rating  --}}
            <div class="result-item-section-2__child">
                <p>Care Quality Rating</p>
                <p class="d-flex SofiaPro-Medium" @includeWhen(empty($qualityRating), 'components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'click',
                        'html' => 'true',
                        'content' => 'Currently no data available for this hospital'])
                    @includeWhen(!empty($qualityRating), 'components.basic.popover', [
                         'placement'     => 'bottom',
                         'size'          => 'cqc',
                         'trigger'       => 'click',
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
                    {!! !empty($qualityRating) ? $qualityRating : "No data" !!}
                </p>
            </div>
            {{-- Waiting time --}}
            <div class="result-item-section-2__child">
                <p>Waiting Time NHS (Funded)</p>
                <p class=" d-flex  SofiaPro-Medium"
                    @includeWhen(empty($waitTime), 'components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'click',
                        'html' => 'true',
                        'content' => 'Currently no data available for this hospital'])
                    @includeWhen(!empty($waitTime), 'components.basic.popover', [
                        'placement'         => 'bottom',
                        'trigger'           => 'click',
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
                                        <div class="d-table-cell">Current Waiting Time</div>
                                        <div class="d-table-cell">'.$waitTime.'</div>
                                        <div class="d-table-cell">'.$waitingTimeRanking.'</div>
                                    </div>
                                    <div class="d-table-row">
                                        <div class="d-table-cell SofiaPro-SemiBold">Waiting Times for Treated Patients</div>
                                        <div class="d-table-cell"></div>
                                        <div class="d-table-cell"></div>
                                    </div>
                                    <div class="d-table-row">
                                        <div class="d-table-cell">Outpatients Treated</div>
                                        <div class="d-table-cell">'.$outpatient.'</div>
                                        <div class="d-table-cell">'.$outpatientRank.'</div>
                                    </div>
                                    <div class="d-table-row">
                                        <div class="d-table-cell">Inpatients Treated</div>
                                        <div class="d-table-cell">'.$inpatient.'</div>
                                        <div class="d-table-cell">'.$inpatientRank.'</div>
                                    </div>
                                    <div class="d-table-row">
                                        <div class="d-table-cell">Diagnostics - % waiting 6+ weeks</div>
                                        <div class="d-table-cell">'.$diagnostic.'</div>
                                        <div class="d-table-cell">'.$diagnosticRank.'</div>
                                    </div>
                                </div>
                                <small>NB - Diagnostics is a % of current waiting list waiting 6+ weeks (national target is 1%)</small>
                            </div>'
                        ])>
                    {!! !empty($waitTime) ? $waitTime.'&nbsp;Weeks' : "No data" !!}
                </p>
            </div>
            {{-- End waiting time --}}

            {{-- end NHS user rating --}}
            {{-- % operations cancelled --}}
            <div class="result-item-section-2__child">
                <p>% Operations Cancelled</p>
                <p class=" d-flex  SofiaPro-Medium"
                    @include('components.basic.popover', [
                    'trigger' => 'click',
                    'html'    => 'true',
                    'content' => !empty($opCancelled) ? 'National average<br> is 3.35%' : 'Currently no data available<br>for this hospital'])>
                    {!! !empty($opCancelled) ? $opCancelled : "No data" !!}
                </p>
            </div>
            {{-- Friends and family --}}
            <div class="result-item-section-2__child">
                <p>Friends & Family Rating</p>
                <p class="m-0  d-flex  SofiaPro-Medium"
                    @include('components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'click',
                        'html' => 'true',
                        'content' => !empty($FFRating) ? 'National average<br>is 98.85%' : 'Currently no data available<br>for this hospital'])>
                    {!! !empty($FFRating) ? $FFRating : "No data" !!}
                </p>
            </div>
            {{-- NHS user rating --}}
            <div class="result-item-section-2__child mb-2">
                <p>NHS User Rating</p>
                <p class="d-flex SofiaPro-Medium"
                    @include('components.basic.popover', [
                        'placement'         => 'bottom',
                        'trigger'           => 'click',
                        'html'              => 'true',
                        'content'           => !empty($d['placeRating']) ? '
                        <ul class="nhs-user-ratings mb-0">
                            <li>Cleanliness:&nbsp;'                            . '<span><strong>'  . number_format((float)$d['placeRating']['cleanliness'], 1).'%</span></strong></li>
                            <li>Food & Hydration:&nbsp;'                       . '<span><strong>' . number_format((float)$d['placeRating']['food_hydration'], 1).'%</span></strong></li>
                            <li>Privacy, Dignity & Wellbeing:&nbsp;'       . '<span><strong>' . number_format((float)$d['placeRating']['privacy_dignity_wellbeing'], 1).'%</span></strong></li>
                            <li>Condition, Appearance & Maintainance:&nbsp;'   . '<span><strong>' . number_format((float)$d['placeRating']['condition_appearance_maintenance'], 1).'%</span></strong></li>
                            <li>Dementia Domain:&nbsp;            '             . '<span><strong>' . number_format((float)$d['placeRating']['dementia'], 1).'%</span></strong></li>
                            <li>Disability Domain:&nbsp;        '               . '<span><strong>' . number_format((float)$d['placeRating']['disability'], 1).'%</span></strong></li>
                        </ul>' : 'Currently no data available<br>for this hospital'])>
                    {!! html_entity_decode($stars) !!}
                </p>
            </div>
            {{-- Click for self pay --}}
            <div class="result-item-section-2__child justify-content-between align-items-center">
                @if(!empty($privateSelfPay))
                    @if($NHSClass == 'private-hospital')
                        @include('components.basic.modalbutton', [
                                'hrefValue'         => $url,
                                'hospitalTitle'     => $title,
                                'modalTarget'       => '#hc_modal_mobile_enquire_private',
                                'classTitle'        => 'btn btn-link enquire-prices mr-auto p-0 w-50',
                                'target'            => 'blank',
                                'modalText'         => 'This is the text about prices',
                                'hospitalIds'       => $id,
                                'buttonText'        => 'Click for self pay prices'])
                        {{--                    @else--}}
                        {{--                        <p><img src='images/icons/dash-black.svg' alt='Dash icon'></p>--}}
                    @endif
                    {{--                @else--}}
                    {{--                    <p><img src='images/icons/dash-black.svg' alt='Dash icon'></p>--}}
                @endif
                @if(!empty($specialOffers))
                    @include('components.basic.modalbutton', [
                        'classTitle'        => 'toggle-special-offer btn btn-icon btn-link btn-special-offer btn-special-offer_mobile pl-5 col-pink rounded-0 w-50',
                        'htmlButton'        => true,
                        'modalTarget'       => '#hc_modal_mobile_special_offer_' . $id,
                        'id'                => 'special_' . $id,
                        'buttonText'        => 'Special Offers',
                        'svg'               => 'special-pink'])
                @endif
            </div>
        </div>
        <div class="result-item-mobile-section-3 w-100 mt-auto">
            <div class="row">
                <!-- More info button -->
                <div class="button-wrapper col-6">
                    @include('components.basic.button', [
                       'classTitle'        => 'btn btn-squared btn-squared_slim btn-turq _btn-cc-close btn-more-info w-100 text-center font-12',
                       'buttonText'        => 'More info',
                       'htmlButton'        => true,
                       'icon'              => '',
                       'id'                => 'more_info_' . $id,
                       'dataTarget'        => '#corporate_content_hospital_' . $id
                    ])
                </div>
                <!-- Enquiry buttons -->
                @if($NHSClass == 'private-hospital')
                    <div class="button-wrapper col-6">
                        @include('components.basic.modalbutton', [
                            'hospitalType'      => $NHSClass,
                            'hrefValue'         => $url,
                            'hospitalTitle'     => $title,
                            'modalTarget'       => '#hc_modal_mobile_enquire_private',
                            'classTitle'        => 'btn btn-squared btn-enquire btn-squared_slim btn-blue text-center enquiry btn-enquiry font-12 w-100 text-center d-flex justify-content-center align-items-center flex-row-reverse px-3',
                            'target'            => 'blank',
                            'buttonText'        => $btnText,
                            'id'                => 'enquire_private_'.$id,
                            'hospitalIds'       => $id,
                            'svg'               => 'circle-check'
                        ])
                    </div>
                @elseif($NHSClass == 'nhs-hospital')
                    <div class="button-wrapper col-6">
                        @include('components.basic.modalbutton', [
                            'hospitalType'      => $NHSClass,
                            'hrefValue'         => $url,
                            'hospitalTitle'     => $title,
                            'hospitalUrl'       => $d['url'],
                            'classTitle'        => 'btn btn-blue btn-enquire btn-squared btn-squared_slim enquiry btn-enquiry font-12 w-100 text-center d-flex justify-content-center flex-row-reverse px-3',
                            'buttonText'        => $btnText,
                            'modalTarget'       => '#hc_modal_enquire_nhs',
                            'id'                => 'enquire_nhs'.$id,
                            'hospitalIds'       => $id,
                            'svg'               => 'circle-check'
                            ])
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{-- Modal for special offer --}}
    @if(!empty($specialOffers))
        @includeWhen(!empty($specialOffers), 'mobile.components.modals.modalmobilespecialoffer', [
            'class' => 'default'])
    @endif
</div>
