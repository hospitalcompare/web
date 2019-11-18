{{--Special offers tabs in solutions bar --}}

<div class="special-offer-tab {{ $bgColor }}__offer {{ $bgColor ?? '' }}">
    <div class="special-offer-header d-flex align-items-center">
{{--        <div class="image-wrapper">--}}
{{--            <img class="content" width="55" height="50" alt="Image of The Christie Main Site" src="{{ asset('../images/alder-1.png') }}">--}}
{{--            <div class="{{ $hospitalType == "private" ? 'private-hospital' : 'nhs-hospital' }} label">--}}
{{--                                <p>NHS Hospital</p>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="offer-text">
            <div class="closed-text">
                <p class="offer-title mb-0">{{ $headerText['closed']['title'] }}</p>
                <p class="offer-subtitle mb-0">{{ $headerText['closed']['subtitle'] }}</p>
            </div>
            <div class="open-text">
                <p class="hospital-name mb-0">{{ $headerText['open']['title'] }}</p>
                <p class="distance mb-0">{{ $headerText['open']['subtitle'] }}</p>
            </div>
        </div>
        <span class="toggle-special-offer">
            {!! file_get_contents(asset('images/icons/chevron-up.svg')) !!}
        </span>
    </div>
    <div class="special-offer-body">
        <div class="inner-body d-flex flex-column justify-content-between h-100">
            <div>
                <ul class="bullets">
                    @foreach($bulletPoints as $bulletPoint)
                        @if(!empty($bulletPoint))
                            <li>{{ $bulletPoint }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>

            @if(!empty($offerPrice))
                <div class="offer-price mb-4">
                    Total cost <strong>£{{ $offerPrice }}</strong>
                </div>
            @endif
            <div class="btn-area text-right">
                @includeWhen($hospitalType == 'private-hospital' ,'components.basic.modalbutton', [
                    'id'                => '1',
                    'hospitalType'      => $hospitalType,
                    'hospitalTitle'     => $headerText['open']['title'],
                    'modalTarget'       => '#hc_modal_enquire_private',
                    'classTitle'        => 'btn btn-icon btn-enquire-now enquiry mt-auto',
                    'target'            => 'blank',
                    'buttonText'            => 'Enquire now'
                    ])
                @includeWhen($hospitalType == 'nhs-hospital' ,'components.basic.modalbutton', [
                    'hospitalType'      => $hospitalType,
                    'hospitalTitle'     => $headerText['open']['title'],
                    'hrefValue'         => $hospitalUrl,
                    'modalTarget'       => '#hc_modal_enquire_nhs',
                    'classTitle'        => 'btn btn-icon btn-enquire-now enquiry mt-auto',
                    'target'            => 'blank',
                    'buttonText'            => 'Enquire now',
                    ])
            </div>
        </div>
    </div>
</div>
