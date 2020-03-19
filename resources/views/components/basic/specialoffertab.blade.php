{{--Special offers tabs in solutions bar --}}

<div class="special-offer-tab rounded {{ $bgColor }}__offer {{ $bgColor ?? '' }}">
    <div class="special-offer-header d-flex align-items-center">
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

    </div>
    <div class="special-offer-body">
        <div class="inner-body rounded bg-white d-flex flex-column justify-content-center align-items-center h-100">
{{--            <div>--}}
{{--                <ul class="bullets">--}}
{{--                    @foreach($bulletPoints as $bulletPoint)--}}
{{--                        @if(!empty($bulletPoint))--}}
{{--                            <li>{{ $bulletPoint }}</li>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            @if(!empty($offerPrice))--}}
{{--                <div class="offer-price mb-4">--}}
{{--                    Total cost <strong>£{{ $offerPrice }}</strong>--}}
{{--                </div>--}}
{{--            @endif--}}
            <div class="btn-area text-right">
                @includeWhen($hospitalType == 'private-hospital' ,'components.basic.modalbutton', [
                    'id'                => '1',
                    'hospitalType'      => $hospitalType,
                    'hospitalTitle'     => $headerText['open']['title'],
                    'modalTarget'       => '#hc_modal_enquire_private',
                    'classTitle'        => 'btn btn-icon btn-enquire btn-brand-secondary-3 enquiry font-12 pr-2',
                    'target'            => '_blank',
                    'buttonText'        => 'Make an enquiry',
                    'hospitalIds'       => $hospitalId,
                    'svg'               => 'circle-check'
                    ])
                @includeWhen($hospitalType == 'nhs-hospital' ,'components.basic.modalbutton', [
                    'hospitalType'      => $hospitalType,
                    'hospitalTitle'     => $headerText['open']['title'],
                    'hrefValue'         => $hospitalUrl,
                    'modalTarget'       => '#hc_modal_contacts_general',
                    'classTitle'        => 'btn btn-icon btn-enquire btn-brand-secondary-3 enquiry font-12 pr-2',
                    'target'            => '_blank',
                    'buttonText'        => 'Make an enquiry',
                    'hospitalIds'       => $hospitalId
                    ])
            </div>
        </div>
    </div>
    <div class="special-offer-footer bg-brand-primary-1 p-13">
        <span class="toggle-special-offer d-flex align-items-center justify-content-between">
            <span>Find out more</span>
            @svg('chevron-up')
        </span>
    </div>
</div>
