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
                        id="name_{{$id}}"
                    @endif
                >
                    {{$title}}
                </p>
                <p class="sortItemLocation">{{$location}}</p>
                <a class='findLink' href="">{{$findLink}}</a>
            </div>
        </div>
        <div class="sortCatSection2">
            <div class="sortCatSection2Child"
                 @if(!empty($id))
                    id="waiting_time_{{$id}}"
                @endif
            >
                {{$waitTime}}
            </div>
            <div class="sortCatSection2Child"
                @if(!empty($id))
                    id="user_rating_{{$id}}"
                @endif
            >
                {{$stars}}
            </div>
            <div class="sortCatSection2Child"
                 @if(!empty($id))
                     id="op_cancelled_{{$id}}"
                @endif
            >
                {{$opCancelled}}
            </div>
            <div class="sortCatSection2Child"
                 @if(!empty($id))
                     id="quality_rating_{{$id}}"
                @endif
            >
                {{$qualityRating}}
            </div>
            <div class="sortCatSection2Child"
                 @if(!empty($id))
                    id="ff_rating_{{$id}}"
                @endif
            >
                {{$FFRating}}
            </div>
            <div class="sortCatSection2Child"
                @if(!empty($id))
                    id="nhs_funded_{{$id}}"
                @endif
            >
                {{$NHSFunded}}
            </div>
        </div>
        <div class="sortCatSection3">
            @include('components.basic.button', ['classTitle' => 'blueOval blockDisplay enquiry', 'button' => 'Make an enquiry'])
            @include('components.basic.button', ['classTitle' => 'greenOval blockDisplay compare', 'button' => 'Compare', 'icon' => 'far fa-heart', 'id' => $id])
        </div>
    </div>
</section>
