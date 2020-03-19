{{--Special offers tabs in solutions bar --}}

<div class="special-offer-tab rounded {{ $bgColor }}__offer {{ $bgColor ?? '' }}">
    <div class="special-offer-header d-flex align-items-center">
        <div class="offer-text">
            <div class="closed-text">
                <p class="offer-title mb-0 col-white">{{ $headerText['closed']['title'] }}</p>
                {{--                <p class="offer-subtitle mb-0">{{ $headerText['closed']['subtitle'] }}</p>--}}
            </div>
        </div>

    </div>
    <div class="special-offer-body d-block d-xl-block">
        <div class="inner-body p-13 rounded bg-white d-flex flex-column justify-content-center align-items-center h-100">
            <div
                class="d-inline-block rounded-pill py-1 px-2 mb-3 {{ $hospitalType == 'private-hospital' ? 'bg-private' : 'bg-nhs' }}">
                <p class="m-0 col-white font-13">{{ $hospitalType == 'private-hospital' ? 'Private Hospital' : 'NHS Hospital' }}</p>
            </div>
            <p class="text-center">{{ $specialOffer['name'] }}</p>
            <div class="btn-area container-fluid">
                <div class="row btn-web-call">
                    <div class="col-12 col-xl-6">
                        @includeWhen($hospitalType == 'private-hospital' ,'components.basic.modalbutton', [
                            'id'                => '1',
                            'hospitalType'      => $hospitalType,
                            'hospitalTitle'     => $specialOffer['display_name'],
                            'modalTarget'       => '#hc_modal_enquire_private',
                            'classTitle'        => 'btn btn-icon btn-block btn-enquire btn-brand-secondary-3 enquiry font-12 pr-2',
                            'target'            => '_blank',
                            'buttonText'        => 'Make enquiry',
                            'hospitalIds'       => $hospitalId,
                            'svg'               => 'circle-check'
                            ])
                        @includeWhen($hospitalType == 'nhs-hospital' ,'components.basic.modalbutton', [
                            'hospitalType'      => $hospitalType,
                            'hospitalTitle'     => $specialOffer['display_name'],
                            'hrefValue'         => $hospitalUrl,
                            'modalTarget'       => '#hc_modal_contacts_general',
                            'classTitle'        => 'btn btn-icon btn-block btn-enquire btn-brand-secondary-3 enquiry font-12 pr-2',
                            'target'            => '_blank',
                            'buttonText'        => 'Make enquiry',
                            'hospitalIds'       => $hospitalId
                        ])
                    </div>
                    <div class="col-12 col-xl-6 mt-1 mt-xl-0">
                        <div class="row btn-web-call">
                            <div class="col-6">
                                <a id="733" style=""
                                   class="btn  btn-enquire btn-brand-primary-4 enquiry btn-block font-12 rounded-right"
                                   target="_blank" href="http://bridgewater.nhs.uk/" role="button"
                                   data-hospital-type="nhs-hospital">
                                    <div>Web</div>
                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.79 21.56">
                                        <defs>
                                            <style>.cls-1 {
                                                    fill: #fff;
                                                }</style>
                                        </defs>
                                        <title>Artboard 52</title>
                                        <g id="Layer_2" data-name="Layer 2">
                                            <path class="cls-1"
                                                  d="M6.89,21.56A6.9,6.9,0,0,1,0,14.67V6.89a6.9,6.9,0,0,1,13.79,0v7.78A6.91,6.91,0,0,1,6.89,21.56ZM6.89.79a6.11,6.11,0,0,0-6.1,6.1v7.78a6.11,6.11,0,1,0,12.21,0V6.89A6.11,6.11,0,0,0,6.89.79Z"></path>
                                            <rect class="cls-1" x="6.03" y="5.11" width="1.73" height="4.05"
                                                  rx="0.2"></rect>
                                        </g>
                                    </svg>
                                </a>
                            </div>

                            <div class="col-6">
                                    <span id="enquire_nhs733" style="display: inline-block; "
                                          class="btn  btn-enquire btn-brand-primary-4 enquiry btn-block font-12 rounded-left"
                                          role="button" data-toggle="modal" data-target="#hc_modal_contacts_general_733"
                                          data-hospital-type="nhs-hospital" data-hospital-tel="01514955000"
                                          data-hospital-url="http://bridgewater.nhs.uk/"
                                          data-hospital-title="Bridgewater CHCFT Widnes ">
<span>Call</span>
                                        <!--?xml version="1.0" encoding="utf-8"?--><svg class=""
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 17.24 17.24"><defs><style>.cls-1 {
                                                        fill: #fff;
                                                    }</style></defs><title>Artboard 53</title><g id="Layer_2"
                                                                                                 data-name="Layer 2"><path
                                                    class="cls-1"
                                                    d="M16.78,13.3,13.3,11a1,1,0,0,0-1.37.22l-1,1.31a.45.45,0,0,1-.56.12l-.19-.11a11.75,11.75,0,0,1-3-2.39,11.68,11.68,0,0,1-2.39-3l-.11-.19a.45.45,0,0,1,.12-.56L6,5.3a1,1,0,0,0,.23-1.36L3.94.45A1,1,0,0,0,2.57.14L1.11,1A2.07,2.07,0,0,0,.18,2.24C-.35,4.15.05,7.46,4.91,12.32c3.87,3.87,6.76,4.92,8.74,4.92A5.16,5.16,0,0,0,15,17.06a2,2,0,0,0,1.21-.94l.88-1.46A1,1,0,0,0,16.78,13.3Zm-.18,1.07-.88,1.46a1.51,1.51,0,0,1-.87.68c-1.77.48-4.86.08-9.53-4.59S.25,4.16.73,2.39a1.53,1.53,0,0,1,.68-.88L2.87.64a.44.44,0,0,1,.59.13l1.27,1.9L5.79,4.26a.45.45,0,0,1-.1.59l-1.31,1a1,1,0,0,0-.26,1.29l.1.19a12.38,12.38,0,0,0,2.49,3.17A12,12,0,0,0,9.89,13l.19.11a1,1,0,0,0,1.29-.27l1-1.31a.44.44,0,0,1,.59-.09l3.49,2.33A.44.44,0,0,1,16.6,14.37Z"></path><path
                                                    class="cls-1"
                                                    d="M9.77,2.87a4.9,4.9,0,0,1,4.88,4.89.28.28,0,0,0,.29.28.27.27,0,0,0,.28-.28A5.45,5.45,0,0,0,9.77,2.3a.29.29,0,0,0-.29.29A.28.28,0,0,0,9.77,2.87Z"></path><path
                                                    class="cls-1"
                                                    d="M9.77,4.6a3.17,3.17,0,0,1,3.16,3.16.29.29,0,0,0,.57,0A3.74,3.74,0,0,0,9.77,4a.29.29,0,0,0,0,.58Z"></path><path
                                                    class="cls-1"
                                                    d="M9.77,6.32A1.43,1.43,0,0,1,11.2,7.76a.29.29,0,0,0,.58,0,2,2,0,0,0-2-2A.28.28,0,0,0,9.48,6,.29.29,0,0,0,9.77,6.32Z"></path></g></svg>
                                        <!-- span -->
                                </span></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="special-offer-footer bg-brand-primary-1 d-flex d-xl-none">
        <span class="toggle-special-offer d-flex align-items-center justify-content-between w-100">
            <span class="font-14 lh-18px col-white">Find out more</span>
            @svg('chevron-up')
        </span>
    </div>
</div>
