<div class="how-section container">
    <div class="row">
        <h2 class="section-title col-12">{{$sectionTitle}}</h2>
        @if(!empty($howsections))
            @foreach($howsections as $howsection)
                <div class="how-section__child col-12 col-md-3">
                    {{--                    @if(!empty($howsection['numeral']))--}}
                    {{--                        <div class="numeral">{{$howsection['numeral']}}</div>--}}
                    {{--                    @endif--}}
                    <div class="icon">
                        <img src="{{ asset($howsection['iconImg']) }}">
                    </div>
                    <p class="icon-title">
                        {{ $howsection['title'] }}
                    </p>
                    <p class="icon-description">
                        {!! $howsection['description'] !!}
                    </p>
                </div>
            @endforeach
        @endif
    </div>
</div>
