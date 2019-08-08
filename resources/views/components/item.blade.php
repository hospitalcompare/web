<section class="sortCategories">
    <div class="sortCategoriesInner">
        <div class="sortCatSection1">
            <div class="sortCatItem">
                <img src="{{ $itemImg }}">
                <div class="{{$NHSClass}}"><p>{{$fundedText}}</p></div>
            </div>
            <div class="sortCatItem">
                <p class="sortItemTitle"
                    @if(!empty($id))
                        id="item_name_{{$id}}"
                    @endif
                >
                    {{$title}}
                </p>
                <p class="sortItemLocation">{{$location}}</p>
                <a class='findLink' href="">{{$findLink}}</a>
                @if(!empty($specialOffers))
                    <div class="btn-area" style="margin-top: 10px">
                        @include('components.basic.button', ['classTitle' => 'btn btn-xs btn-teal btn-icon btn-consultant btn-plus', 'button' => 'Consultants'])
                    </div>
                @endif
            </div>
        </div>
        <div class="sortCatSection2">
            <div class="sortCatSection2Child"
                 @if(!empty($id))
                    id="item_waiting_time_{{$id}}"
                @endif
            >
                {{$waitTime}}
            </div>
            <div class="sortCatSection2Child"
                @if(!empty($id))
                    id="item_user_rating_{{$id}}"
                @endif
            >
                {{$stars}}
            </div>
            <div class="sortCatSection2Child"
                 @if(!empty($id))
                     id="item_op_cancelled_{{$id}}"
                @endif
            >
                {{$opCancelled}}
            </div>
            <div class="sortCatSection2Child"
                 @if(!empty($id))
                     id="item_quality_rating_{{$id}}"
                @endif
            >
                {{$qualityRating}}
            </div>
            <div class="sortCatSection2Child"
                 @if(!empty($id))
                    id="item_ff_rating_{{$id}}"
                @endif
            >
                {{$FFRating}}
            </div>
            <div class="sortCatSection2Child"
                @if(!empty($id))
                    id="item_nhs_funded_{{$id}}"
                @endif
            >
                {{$NHSFunded}}
            </div>
        </div>
        <div class="sortCatSection3 d-flex flex-column justify-content-center">
            <div class="btn-area btn-area-upper d-flex align-items-center justify-content-between" @if(!empty($specialOffers) ) style="padding-bottom: 10px" @endif>
{{--                {!! $text = !empty($specialOffers) ? 'NHS Funded Enquiry' : 'Make an enquiry' !!}--}}
                @include('components.basic.button', ['hrefValue' => $url, 'classTitle' => 'btn btn-icon btn-enquire enquiry mr-2 btn-block', 'button' => $btnText])
                @include('components.basic.button', ['classTitle' => 'btn btn-green-outline compare btn-block mt-0', 'button' => '', 'icon' => '', 'id' => $id])
            </div>
            @if(!empty($specialOffers))
                <div class="btn-area btn-area-lower">
                    @include('components.basic.button', ['classTitle' => 'enquiry btn btn-block btn-icon btn-special-offer btn-plus', 'button' => 'Special Offers'])
                </div>
            @endif
        </div>
    </div>
</section>
