<h1 class="pageTitle">{{$sectionTitle}}</h1>
<div class="howSection">
    @if(!empty($howsections))
        @foreach($howsections as $howsection)
            <div class="chooseContent">
                <div class="numeral">{{$howsection['numeral']}}</div>
                <div class="icon">
                    <img src="{{ asset($howsection['iconImg']) }}">
                </div>
                <div class="iconTitle">
                    {{$howsection['title']}}
                </div>
                <div class="iconDescription">
                    {{$howsection['description']}}
                </div>
            </div>
        @endforeach
    @endif
</div>
