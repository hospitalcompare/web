{{--Special offers tabs in solutions bar --}}

<div class="special-offer-tab rounded {{ $bgColor }}__offer {{ $bgColor ?? '' }}">
    <div class="special-offer-header d-flex align-items-start">
        <div class="offer-text">
            <p class="offer-title mb-0 col-white">{{ $headerText['closed']['title'] }}</p>
        </div>

    </div>
    <div class="special-offer-body d-xl-block">
        <div class="inner-body p-13 rounded bg-white d-flex flex-column justify-content-center align-items-center h-100">
            <div
                class="d-inline-block rounded-pill py-1 px-2 mb-3 {{ $hospitalType == 'private-hospital' ? 'bg-private' : 'bg-nhs' }}">
                <p class="m-0 col-white font-13">{{ $hospitalType == 'private-hospital' ? 'Private Hospital' : 'NHS Hospital' }}</p>
            </div>
            <p class="text-center">{{ $specialOffer['name'] }}</p>
            <div class="btn-area w-100">
                <div class="row btn-web-call">
                    @if($hospitalType == 'private-hospital')
                        <div class="col-12 col-xl-6">
                            @include('components.basic.modalbutton', [
                                'hospitalType'      =>  $hospitalType,
                                'hrefValue'         =>  $url,
                                'telNumber'         =>  $tel,
                                'telNumber2'        =>  $tel2,
                                'hospitalTitle'     =>  $title,
                                'modalTarget'       =>  '#hc_modal_enquire_private',
                                'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 enquiry mr-2 btn-block font-12 rounded-xl-right-0',
                                'target'            =>  '_blank',
                                'buttonText'        =>  'Make enquiry',
                                'id'                =>  'enquire_private_'.$id,
                                'hospitalIds'       =>  $id,
                                'svg'               =>  'circle-check',
                                'svgClass'          =>  ''])
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="row btn-web-call mt-1 mt-xl-0">
                                {{-- Web button - link to website, open in new tab --}}
                                <div class="btn-wrapper col-6">
                                    @include('components.basic.button', [
                                        'hospitalType'      =>  $hospitalType,
                                        'target'            =>  '_blank',
                                        'hrefValue'         =>  $url,
                                        'classTitle'        =>  'btn btn-enquire btn-brand-primary-4 enquiry btn-block font-12 rounded-right rounded-xl-left-0',
                                        'buttonText'        =>  'Web',
                                        'svg'               =>  'icon-web'])
                                </div>
                                {{-- Call button - show right hand side only --}}
                                <div class="btn-wrapper col-6">
                                    @include('components.basic.modalbutton', [
                                        'hospitalType'      =>  $hospitalType,
                                        'hrefValue'         =>  $url,
                                        'telNumber'         =>  $tel,
                                        'telNumber2'        =>  $tel2,
                                        'hospitalTitle'     =>  $title,
                                        'classTitle'        =>  'btn btn-enquire btn-brand-primary-4 enquiry btn-block font-12 rounded-left',
                                        'buttonText'        =>  'Call',
                                        'modalTarget'       =>  '#hc_modal_contacts_private_' . $id,
                                        'id'                =>  'enquire_nhs'.$id,
                                        'hospitalIds'       =>  $id,
                                        'svg'               =>  'icon-phone'])
                                </div>
                            </div>
                        </div>
                    @elseif($hospitalType == 'nhs-hospital')
                        <div class="col-12 col-xl-6">
                            @include('components.basic.modalbutton', [
                                'hospitalType'      =>  $hospitalType,
                                'hrefValue'         =>  $url,
                                'telNumber'         =>  $tel,
                                'telNumber2'        =>  $tel2,
                                'hasEmail'          =>  !empty($email) ? true : false,
                                'hospitalTitle'     =>  $title,
                                'classTitle'        =>  'btn btn-enquire btn-brand-secondary-3 enquiry mr-2 btn-block font-12 rounded-xl-right-0',
                                'buttonText'        =>  'Make enquiry',
                                'modalTarget'       =>  '#hc_modal_contacts_general_' . $id,
                                'id'                =>  'enquire_nhs'.$id,
                                'hospitalIds'       =>  $id,
                                'svg'               =>  'circle-check',
                                'svgClass'          =>  ''])
                        </div>
                        <div class="col-12 col-xl-6 mt-2 mt-xl-0">
                            <div class="row btn-web-call ">
                                {{--                        Web button --}}
                                {{-- Web button - link to website, open in new tab --}}
                                <div class="btn-wrapper col-6">
                                    @include('components.basic.button', [
                                        'hospitalType'      => $hospitalType,
                                        'target'            => '_blank',
                                        'hrefValue'         => $url,
                                        'classTitle'        => 'btn btn-enquire btn-brand-primary-4 enquiry btn-block font-12 rounded-right rounded-xl-left-0',
                                        'buttonText'        => 'Web',
                                        'svg'               => 'icon-web'])
                                </div>
                                {{--                        Call button --}}
                                <div class="btn-wrapper col-6">
                                    @include('components.basic.modalbutton', [
                                        'hospitalType'      => $hospitalType,
                                        'hrefValue'         => $url,
                                        'telNumber'         => $tel,
                                        'telNumber2'        => $tel2,
                                        'hasEmail'          => !empty($email) ? true : false,
                                        'hospitalTitle'     => $title,
                                        'classTitle'        => 'btn  btn-enquire btn-brand-primary-4 enquiry btn-block font-12 rounded-left',
                                        'buttonText'        => 'Call',
                                        'modalTarget'       => '#hc_modal_contacts_general_' . $id,
                                        'id'                => 'enquire_nhs'.$id,
                                        'hospitalIds'       => $id,
                                        'svg'               => 'icon-phone'])
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="special-offer-footer bg-purple d-flex d-xl-none">
        <span class="toggle-special-offer d-flex align-items-center justify-content-between w-100">
            <span class="font-14 lh-18px col-white closed-text">Find out more</span>
            <span class="font-14 lh-18px col-white open-text">Close</span>
            @svg('chevron-up')
        </span>
    </div>
</div>

