{{--Special offers tabs in solutions bar --}}

<div class="special-offer-tab {{ $bgColor ?? '' }} ml-3">
    <div class="special-offer-header d-flex justify-content-between align-items-center">
        <div class="image-wrapper">
            <img class="content" width="55" height="50" alt="Image of The Christie Main Site" src="{{ asset('../images/alder-1.png') }}">
            <div class="nhs-hospital label"><p>NHS Hospital</p></div>
        </div>
        <div class="offer-text ml-4">
            <div class="closed-text">
                <p class="offer-title mb-0"><strong>NHS funded operation</strong></p>
                <p class="offer-subtitle mb-0">At a private hospital of your choice</p>
            </div>
            <div class="open-text">
                <p class="hospital-name mb-0"><strong>Spire Murrayfield</strong></p>
                <p class="distance mb-0">35.3 miles away</p>
            </div>
        </div>
        <span class="fa fa-chevron-up toggle-special-offer"></span>
    </div>
    <div class="special-offer-body">
        <div class="bullets mb-4">
            <ul>
                <li>2 weeks</li>
                <li>Outstanding</li>
                <li>5 star user rating</li>
            </ul>
        </div>
        <div class="btn-area text-right">
            <a class="btn btn-icon btn-enquire-now">Enquire Now</a>
        </div>
    </div>
</div>
