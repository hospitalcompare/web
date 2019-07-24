<h1 class="pageTitle">{{$sectionTitle}}</h1>
<div class="howSection">
    @if(!empty($howsections))
        @foreach($howsections as $howsection)
            <div class="chooseContent">
                <div class="numeral">{{$howsection['numeral']}}</div>
                <div class="icon">
                    <img src="{{ asset($howsection['iconImg']) }}">
                </div>
                <p class="iconTitle">
                    {{$howsection['title']}}
                </p>
                <p class="iconDescription">
                    {{$howsection['description']}}
                </p>
            </div>
        @endforeach
    @endif
</div>
