<h2 class="section-title">{{$sectionTitle}}</h2>
<div class="how-section">
    @if(!empty($howsections))
        @foreach($howsections as $howsection)
            <div class="how-section__child">
                @if(!empty($howsection['numeral']))
                    <div class="numeral">{{$howsection['numeral']}}</div>
                @endif

                <div class="icon">
                    <img src="{{ asset($howsection['iconImg']) }}">
                </div>
                <p class="icon-title">
                    {{$howsection['title']}}
                </p>
                <p class="icon-description">
                    {{$howsection['description']}}
                </p>
            </div>
        @endforeach
    @endif
</div>
