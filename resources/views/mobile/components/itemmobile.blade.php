<div class="result-item result-item-mobile col-12 col-md-6 mb-3" id="result-item_{{ $id }}">
    <div class="result-item-inner overflow-hidden position-relative shadow p-3 pt-5 h-100 d-flex flex-column rounded">
        <div class="item-tags position-absolute d-flex">
            <div
                class="{{$NHSClass}} hospital-type pp-2 {{ $NHSClass == 'private-hospital' ? 'bg-private' : 'bg-nhs' }} position-relative d-inline-block">
                <p class="px-3 m-0 font-12 text-uppercase">{{ $fundedText }}</p>
            </div>
        </div>
        @include('components.basic.button', [
            'classTitle'        => 'btn btn-compare btn-compare-mobile compare font-12 shadow-none position-absolute mt-2 mr-3',
            'htmlButton'        => true,
            'buttonText'        => 'Add to compare',
            'hospitalType'      => $NHSClass,
            'svg'               => 'heart-solid',
            'id'                => $id])
        <div class="result-item-mobile-section-1 w-100 mb-3">
            <div class="hospital-details w-100 position-relative text-center">
                <p class="sort-item-title SofiaPro-Medium text-center" id="item_name_{{$id}}">
                    {{$title}}
                </p>
                @if(!empty($locationSpecialism))
                    <p class="sort-item-specialism font-12 mb-1 text-center col-grey">
                        Specialism:&nbsp;<span>{{ $locationSpecialism }}</span></p>
                @endif
                @if(!empty($d['radius']))
                    <p class="sort-item-location text-center col-grey font-12 d-inline-block mb-0 mr-3"><span>@svg('icon-map', 'map-icon')</span>{{$location}} {{-- trim($town, ', ') --}}
                    </p>
                @endif
            <!-- More info button -->
                @include('components.basic.button', [
                   'classTitle'        => 'btn btn-more-info text-center font-12 p-0 shadow-none',
                   'buttonText'        => 'More info +',
                   'htmlButton'        => true,
                   'icon'              => '',
                   'id'                => 'more_info_' . $id,
                   'dataId'            => $id,
                   'dataTarget'        => '#corporate_content_hospital_' . $id
                ])
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
                <p class="d-flex col-{{ str_slug($qualityRating) }}">
                    {!! !empty($qualityRating) ? $qualityRating : "No data" !!}
                </p>
            </div>
            {{-- Waiting time --}}
            <div class="result-item-section-2__child">
                <p>Waiting Time NHS (Funded)</p>
                <p class="d-flex col-greylight">
                    {!! !empty($waitTime) ? $waitTime.'&nbsp;Weeks' : "No data" !!}
                </p>
            </div>
            {{-- End waiting time --}}
            {{-- NHS user rating --}}
            <div class="result-item-section-2__child">
                <p>NHS User Rating</p>
                <p class="d-flex col-greylight">
                    {!! html_entity_decode($stars) !!}
                </p>
            </div>
            {{-- end NHS user rating --}}
            {{-- % operations cancelled --}}
            <div class="result-item-section-2__child">
                <p>% Operations Cancelled</p>
                <p class="d-flex col-greylight">
                    {!! !empty($opCancelled) ? $opCancelled : "No data" !!}
                </p>
            </div>
            {{-- Friends and family --}}
            <div class="result-item-section-2__child">
                <p>Friends & Family Rating</p>
                <p class="m-0 d-flex col-greylight">
                    {!! !empty($FFRating) ? $FFRating : "No data" !!}
                </p>
            </div>
            {{-- NHS funded work  --}}
            <div class="result-item-section-2__child">
                <p>NHS Funded Work</p>
                <p>
                    {!! $NHSClass == 'nhs-hospital' || ($NHSClass == 'private-hospital' && !empty($d['waitingTime'][0]['perc_waiting_weeks'])) ? "<img class='dash-or-tick' src='images/icons/tick-green.svg' alt='Tick icon'>" : "<img class='dash-or-tick' src='images/icons/dash-black.svg' alt='Dash icon'>" !!}
                </p>
            </div>
            {{-- Click for self pay --}}
            <div class="result-item-section-2__child justify-content-between align-items-center mb-3">
                <p>Private Self Pay</p>
                @if(!empty($privateSelfPay))
                    <p><img class="dash-or-tick" src='images/icons/tick-green.svg' alt='Tick icon'></p>
                @else
                    <p><img class="dash-or-tick" src='images/icons/dash-black.svg' alt='Dash icon'></p>
                @endif
            </div>
{{--            TODO: reinstate special offers when we have them--}}
            {{-- Special offers --}}
{{--            @if(!empty($specialOffers))--}}
{{--                <div class="result-item-section-2__child d-flex justify-content-end mb-3">--}}
{{--                    <div class="button-wrapper">--}}
{{--                        @include('components.basic.modalbutton', [--}}
{{--                            'classTitle'        => 'toggle-ad btn btn-icon btn-link btn-special-offer btn-special-offer_mobile col-pink rounded-0 d-flex align-items-center justify-content-end flex-row-reverse py-0 pr-0 ml-auto',--}}
{{--                            'htmlButton'        => true,--}}
{{--                            'modalTarget'       => '#hc_modal_mobile_special_offer_' . $id,--}}
{{--                            'id'                => 'special_' . $id,--}}
{{--                            'buttonText'        => 'Special Offers',--}}
{{--                            'svg'               => 'special-pink'])--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
        </div>
        <div class="result-item-mobile-section-3 w-100 mt-auto">
            <div class="row">

                <!-- Enquiry buttons -->
                @if($NHSClass == 'private-hospital')
                    <div class="button-wrapper col-6">
                        @include('components.basic.modalbutton', [
                            'htmlButton'        => 'true',
                            'hospitalType'      => $NHSClass,
                            'hrefValue'         => $url,
                            'hospitalTitle'     => $title,
                            'modalTarget'       => '#hc_modal_enquire_private',
                            'classTitle'        => 'btn btn-icon btn-squared btn-squared_slim btn-enquire_mobile enquiry font-12 w-100 text-center d-flex justify-content-center align-items-center flex-row-reverse px-0',
                            'target'            => '_blank',
                            'buttonText'        => $btnText,
                            'id'                => 'enquire_private_'.$id,
                            'hospitalIds'       => $id,
                            'svg'               => 'circle-check'
                        ])
                    </div>
                    <div class="col-6">
                        <div class="row btn-web-call">
                            {{-- Web button - link to website, open in new tab --}}
                            <div class="btn-wrapper col-6 ">
                                @include('components.basic.button', [
                                    'hospitalType'      => $NHSClass,
                                    'target'            => '_blank',
                                    'hrefValue'         => $url,
                                    'classTitle'        => 'btn btn-squared btn-squared_slim btn-enquire_mobile btn-brand-primary-4 font-12 w-100 d-flex justify-content-center align-items-center flex-row-reverse px-0',
                                    'buttonText'        => 'Web',
                                    'svg'               => 'icon-web',
                                    'svgClass'          => 'position-static'])
                            </div>
                            {{-- Call button - show right hand side only --}}
                            <div class="btn-wrapper col-6">
                                @include('components.basic.modalbutton', [
                                    'hospitalType'      => $NHSClass,
                                    'hrefValue'         => $url,
                                    'telNumber'         => $tel,
                                    'telNumber2'        => $tel2,
                                    'hospitalTitle'     => $title,
                                    'classTitle'        => 'btn btn-squared btn-squared_slim btn-enquire_mobile btn-brand-primary-4 font-12 w-100 d-flex justify-content-center align-items-center flex-row-reverse px-0',
                                    'buttonText'        => 'Call',
                                    'modalTarget'       => '#hc_modal_contacts_private_' . $id,
                                    'id'                => 'enquire_nhs'.$id,
                                    'hospitalIds'       => $id,
                                    'image'             => $itemImg,
                                    'svg'               => 'icon-phone',
                                    'svgClass'          => 'position-static'])
                            </div>
                        </div>
                    </div>
                @elseif($NHSClass == 'nhs-hospital')
                    <div class="button-wrapper col-6">
                        @include('components.basic.modalbutton', [
                            'hospitalType'      => $NHSClass,
                            'hrefValue'         => $url,
                            'hospitalTitle'     => $title,
                            'hasEmail'          => !empty($email) ? true : false,
                            'classTitle'        => 'btn btn-enquire_mobile btn-squared btn-squared_slim enquiry font-12 w-100 text-center d-flex justify-content-center flex-row-reverse',
                            'buttonText'        => $btnText,
                            'modalTarget'       => '#hc_modal_contacts_general_' . $id,
                            'id'                => 'enquire_nhs'.$id,
                            'hospitalIds'       => $id,
                            'svg'               => 'circle-check'
                            ])
                    </div>
                    <div class="col-6">
                        <div class="row btn-web-call">
                            {{--                        Web button --}}
                            {{-- Web button - link to website, open in new tab --}}
                            <div class="btn-wrapper col-6 ">
                                @include('components.basic.button', [
                                    'hospitalType'      => $NHSClass,
                                    'target'            => '_blank',
                                    'hrefValue'         => $url,
                                    'classTitle'        => 'btn btn-squared btn-squared_slim btn-enquire_mobile btn-brand-primary-4 font-12 w-100 d-flex justify-content-center align-items-center flex-row-reverse px-0',
                                    'buttonText'        => 'Web',
                                    'svg'               => 'icon-web'])
                            </div>
                            {{--                        Call button --}}
                            <div class="btn-wrapper col-6">
                                @include('components.basic.modalbutton', [
                                    'hospitalType'      => $NHSClass,
                                    'hrefValue'         => $url,
                                    'telNumber'         => $tel,
                                    'telNumber2'        => $tel2,
                                    'hasEmail'          => !empty($email) ? true : false,
                                    'hospitalTitle'     => $title,
                                    'classTitle'        => 'btn btn-squared btn-squared_slim btn-enquire_mobile btn-brand-primary-4 font-12 w-100 d-flex justify-content-center align-items-center flex-row-reverse px-0',
                                    'buttonText'        => 'Call',
                                    'modalTarget'       => '#hc_modal_contacts_general_' . $id,
                                    'id'                => 'enquire_nhs'.$id,
                                    'hospitalIds'       => $id,
                                    'image'             => $itemImg,
                                    'svg'               => 'icon-phone'])
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
    {{-- Modal for special offer --}}
    @include('components.modals.modalcontactsprivate')
    @include('components.modals.modalcontactsgeneral')
    @if(!empty($specialOffers))
        @includeWhen(!empty($specialOffers), 'mobile.components.modals.modalmobilespecialoffer', [
            'class' => 'default'])
    @endif
</div>
