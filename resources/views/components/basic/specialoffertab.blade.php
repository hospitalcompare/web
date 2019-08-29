{{--Special offers tabs in solutions bar --}}

<div class="special-offer-tab {{ $bgColor ?? '' }} ml-3">
    <div class="special-offer-header d-flex justify-content-between align-items-center">
        <div class="image-wrapper">
            <img class="content" width="55" height="50" alt="Image of The Christie Main Site" src="{{ asset('../images/alder-1.png') }}">
            <div class="nhs-hospital label"><p>NHS Hospital</p></div>
        </div>
        <div class="offer-text ml-4">
            <div class="closed-text">
                <p class="offer-title mb-0"><strong>{{ $headerText['closed']['title'] }}</strong></p>
                <p class="offer-subtitle mb-0">{{ $headerText['closed']['subtitle'] }}</p>
            </div>
            <div class="open-text">
                <p class="hospital-name mb-0"><strong>{{ $headerText['open']['title'] }}</strong></p>
                <p class="distance mb-0">{{ $headerText['open']['subtitle'] }}</p>
            </div>
        </div>
        <span class="fa fa-chevron-up toggle-special-offer"></span>
    </div>
    <div class="special-offer-body">
        <div class="bullets mb-4">
            <ul>
                @foreach($bulletPoints as $bulletPoint)
                    <li>{{ $bulletPoint }}</li>
                @endforeach
            </ul>
        </div>
        <div class="btn-area text-right">
            <a class="btn btn-icon btn-enquire-now">Enquire Now</a>
        </div>
    </div>
</div>
