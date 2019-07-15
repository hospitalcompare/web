
    <section class="sortCategories">
        <div class="sortCatSection1">
            <div class="sortCatItem">
                <img src="{{ $itemImg }}">
                <div class="{{$NHSClass}}"><p>{{$fundedText}}</p></div>
            </div>
            <div class="sortCatItem">
                <p class="sortItemTitle">{{$title}}</p>
                <p class="sortItemLocation">{{$location}}</p>
                <a class='findLink' href="">{{$findLink}}</a>
            </div>
        </div>
        <div class="sortCatSection2">
            <div class="sortCatSection2Child">
                {{$waitTime}}
            </div>
            <div class="sortCatSection2Child">
                {{$stars}}
            </div>
            <div class="sortCatSection2Child">
                {{$opCancelled}}
            </div>
            <div class="sortCatSection2Child">
                {{$qualityRating}}
            </div>
            <div class="sortCatSection2Child">
                {{$FFRating}}
            </div>
            <div class="sortCatSection2Child">
                {{$NHSFunded}}
            </div>
        </div>
        <div class="sortCatSection3"></div>
    </section>
