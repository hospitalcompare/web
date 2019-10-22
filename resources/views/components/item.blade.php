<div class="result-item">
    <div class="result-item-inner container">
        <div class="result-item-section-1">
            <div class="result-item-item hospital-image">
                <img alt="Image of {{ $title }}" src="{{ $itemImg }}">
                <div
                    class="{{$NHSClass}} py-1 px-2 rounded-pill m-1 {{ $NHSClass == 'private-hospital' ? 'bg-darkpink' : 'bg-teal' }}">
                    <p class="m-0">{{$fundedText}}</p></div>
                @includeWhen(!empty($specialOffers), 'components.basic.specialofferslide', ['class' => 'default'])
                {{--                    <span class="btn btn-green-plus btn-block toggle-special-offer"></span>--}}
                <span class="d-none" id="item_hospital_url_{{$id}}">{{$d['url']}}</span>
            </div>
            <div class="result-item-item hospital-details w-100">
                <p class="sort-item-title SofiaPro-Medium" id="item_name_{{$id}}">
                    {{$title}}
                </p>
                <p class="sort-item-location">{{$location}}, {{ trim($town, ', ') }}</p>
                @include('components.basic.modalbutton', [
                    'hrefValue'         => '#',
                    'classTitle'        => 'find-link',
                    'button'            => 'Find on map',
                    'modalTarget'       => '#hc_modal_map',
                    'latitude'          => $latitude,
                    'longitude'         => $longitude,
                    'address'           => '<strong>' . $title . '</strong>' . '<br>' . $location . '<br>' . trim($town, ', ') . '<br>' . $county . '<br>' . $postcode,
                    'image'             => 'images/alder-1.png'
                ])
                {{--                TODO: reintroduce consultant button when we have this data --}}
                {{--                @if(!empty($specialOffers))--}}
                {{--                    <div class="btn-area" style="margin-top: 10px">--}}
                {{--                        @include('components.basic.button', ['classTitle' => 'btn btn-xs btn-teal btn-icon btn-consultant btn-plus', 'button' => 'Consultants'])--}}
                {{--                    </div>--}}
                {{--                @endif--}}
            </div>
        </div>
        <div class="result-item-section-2">
            {{-- CQC rating  --}}
            <div class="result-item-section-2__child">
                <p @include('components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => '
                        <ul class="nhs-ratings mb-0">
                        <li>Safe: '                             . '<span><strong>' . (!empty($d['rating']['safe']) ? $d['rating']['safe'] : 'No Data').'</span></strong></li>
                        <li>Effective: '                        . '<span><strong>' . (!empty($d['rating']['effective']) ? $d['rating']['effective'] : 'No Data').'</span></strong></li>
                        <li>Caring:     '                       . '<span><strong>' . (!empty($d['rating']['caring']) ? $d['rating']['caring'] : 'No Data').'</span></strong></li>
                        <li>Responsive: '                       . '<span><strong>' . (!empty($d['rating']['responsive']) ? $d['rating']['responsive'] : 'No Data').'</span></strong></li>
                        <li>Well Led:   '                       . '<span><strong>' . (!empty($d['rating']['well_led']) ? $d['rating']['well_led'] : 'No Data').'</span></strong></li>
                        </ul>' ])>
                    {!! !empty($qualityRating) ? $qualityRating : "No data" !!}
                </p>

                <span class="d-none" id="item_quality_rating_{{$id}}">{!! $qualityRating !!}</span>
            </div>
            {{-- Waiting time --}}
            <div class="result-item-section-2__child flex-column">
                <p @includeWhen(empty($waitTime), 'components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => 'Currently no data available for this hospital'])>
                    {!! !empty($waitTime) ? $waitTime : "No data" !!}
                </p>
                @if($NHSClass == 'private-hospital')
                    <span>
                        Click for<br>
                        @include('components.basic.modalbutton', [
                                'hrefValue'         => $url,
                                'hospitalTitle'     => $title,
                                'modalTarget'       => '#hc_modal_enquire_private',
                                'classTitle'        => 'text-link enquire-times',
                                'target'            => 'blank',
                                'modalText'         => 'Information for waiting time enquiry',
                                'button'            => 'waiting time enquiry'])
                    </span>
                @endif
                <span class="d-none" id="item_waiting_time_{{$id}}">{{str_replace("<br>", " ", $waitTime)}}</span>
            </div>
            {{-- End waiting time --}}
            <div class="result-item-section-2__child">
                <p @include('components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => !empty($d['placeRating']) ? '
                        <ul class="nhs-user-ratings mb-0">
                        <li>Cleanliness: '                            . '<span><strong>'  . number_format((float)$d['placeRating']['cleanliness'], 1).'%</span></strong></li>
                        <li>Food & Hydration: '                       . '<span><strong>' . number_format((float)$d['placeRating']['food_hydration'], 1).'%</span></strong></li>
                        <li>Privacy, Dignity & Wellbeing:     '       . '<span><strong>' . number_format((float)$d['placeRating']['privacy_dignity_wellbeing'], 1).'%</span></strong></li>
                        <li>Condition, Appearance & Maintainance: '   . '<span><strong>' . number_format((float)$d['placeRating']['condition_appearance_maintenance'], 1).'%</span></strong></li>
                        <li>Dementia Domain:            '             . '<span><strong>' . number_format((float)$d['placeRating']['dementia'], 1).'%</span></strong></li>
                        <li>Disability Domain:        '               . '<span><strong>' . number_format((float)$d['placeRating']['disability'], 1).'%</span></strong></li>
                        </ul>' : 'Currently no data available<br>for this hospital'])>
                    {!! html_entity_decode($stars) !!}
                </p>
                <span class="d-none" id="item_user_rating_{{$id}}">{!! $userRating !!}</span>
            </div>
            {{-- % operations cancelled --}}
            <div class="result-item-section-2__child">
                <p
                    @include('components.basic.popover', [
                    'trigger' => 'hover',
                    'html'    => 'true',
                    'content' => !empty($opCancelled) ? 'National average<br> is 3.35%' : 'Currently no data available<br>for this hospital'])>
                    {!! !empty($opCancelled) ? $opCancelled : "No data" !!}
                </p>
                <span class="d-none" id="item_op_cancelled_{{$id}}">{!! $opCancelled !!}</span>
            </div>
            {{-- Friends and family --}}
            <div class="result-item-section-2__child">
                <p class="m-0"
                    @include('components.basic.popover', [
                        'placement' => 'bottom',
                        'trigger' => 'hover',
                        'html' => 'true',
                        'content' => !empty($FFRating) ? 'National average<br>is 98.85%' : 'Currently no data available<br>for this hospital'])>
                    {!! !empty($FFRating) ? $FFRating : "No data" !!}
                </p>
                <span class="d-none" id="item_ff_rating_{{$id}}">{!! $FFRating !!}</span>
            </div>
            {{-- NHS funded work  --}}
            <div class="result-item-section-2__child">
                <p>
                    {!! ($NHSClass == 'nhs-hospital') || ($NHSClass == 'private-hospital') && !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? "<img src='images/icons/tick-green.svg' alt='Tick icon'>" : "<img src='images/icons/dash-black.svg' alt='Dash icon'>" !!}
                </p>
                <span class="d-none" id="item_nhs_funded_{{$id}}">{!! $NHSFunded !!}</span>
            </div>
            <div class="result-item-section-2__child flex-column">
                <p>
                    {!! !empty($privateSelfPay) ? "<img src='images/icons/tick-green.svg' alt='Tick icon'>" : "<img src='images/icons/dash-black.svg' alt='Dash icon'>"  !!}
                </p>
                @if($NHSClass == 'private-hospital')
                    <span>
                        Click for<br>
                        @include('components.basic.modalbutton', [
                                'hrefValue'         => $url,
                                'hospitalTitle'     => $title,
                                'modalTarget'       => '#hc_modal_enquire_private',
                                'classTitle'        => 'text-link enquire-prices',
                                'target'            => 'blank',
                                'modalText'         => 'This is the text about prices',
                                'button'            => 'prices'])
                    </span>
                @endif
                <span class="d-none" id="item_nhs_private_pay_{{$id}}">{!! $privateSelfPay !!}</span>
            </div>
        </div>
        <div class="result-item-section-3">
            <div class="btn-area"
                 @if(!empty($specialOffers) ) style="padding-bottom: 10px" @endif>
                <span class="d-none" id="item_hospital_type_class_{{$id}}">{!! $NHSClass !!}</span>
                @if($NHSClass == 'private-hospital')
                    @include('components.basic.modalbutton', [
                    'hospitalType'      => $NHSClass,
                    'hrefValue'         => $url,
                    'hospitalTitle'     => $title,
                    'modalTarget'       => '#hc_modal_enquire_private',
                    'classTitle'        => 'btn btn-icon btn-enquire btn-blue enquiry mr-2 btn-block',
                    'target'            => 'blank',
                    'button'            => $btnText,
                    'id'                => 'enquire_'.$id])
                @elseif($NHSClass == 'nhs-hospital')
                    @include('components.basic.modalbutton', [
                    'hospitalType'      => $NHSClass,
                    'hrefValue'         => $url,
                    'hospitalTitle'     => $title,
                    'hospitalUrl'       => $d['url'],
                    'classTitle'        => 'btn btn-icon btn-blue btn-enquire enquiry mr-2 btn-block',
                    'button'            => $btnText,
                    'modalTarget'       => '#hc_modal_enquire_nhs',
                    'id'                => 'enquire_'.$id])
                @endif
                @if(!empty($specialOffers))
                    @include('components.basic.button', [
                    'classTitle'        => 'toggle-special-offer btn btn-block btn-icon btn-pink btn-special-offer btn-plus',
                    'button'            => 'Special Offers'])
                @endif
                @include('components.basic.button', [
                    'classTitle' => 'btn btn-green-outline compare btn-block',
                    'button' => 'Compare',
                    'icon' => 'far fa-heart',
                    'id' => $id])
            </div>
        </div>
    </div>
</div>
