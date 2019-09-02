<div class="how-section container">
    <div class="row">
        <h2 class="section-title col-12">{{$sectionTitle}}</h2>
        @if(!empty($howsections))
            @foreach($howsections as $howsection)
                <div class="how-section__child col-12 col-md-3 hc-content">
                    <div class="icon">
                        {!! file_get_contents(asset('images/icons/' . $howsection['iconImg'] . '.svg')) !!}

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
        <div class="col-12">
            <div class="btn-area text-center">
                @include('components.basic.button', [
                    'classTitle' => 'btn btn-m btn-grad btn-teal',
                    'button'    => 'Find Hospitals'

                ])
            </div>
        </div>
    </div>
</div>
