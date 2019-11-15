<div class="how-section container {{ !empty($containerFluid) ?? ($containerFluid) ? 'container-980' : '' }}">
    @if(!empty($sectionTitle))
        <h2 class="section-title">{{ $sectionTitle }}</h2>
    @endif
    <div class="row">
        @if(!empty($howsections))
            @foreach($howsections as $howsection)
                <div class="how-section__child  col-md-3">
                    <div class="col-inner h-100 d-flex flex-column">
                        <div class="icon" style="background-image: url('images/icons/{{ $howsection['iconImg'] }}.svg')">
{{--                            {!! file_get_contents(asset('images/icons/' . $howsection['iconImg'] . '.svg')) !!}--}}
                        </div>
                        @if(!empty($howsection['title']))
                        <div class="icon-title">
                            {{ $howsection['title'] }}
                        </div>
                        @endif
                        @if(!empty($howsection['description']))
                        <div class="icon-description">
                            {!! $howsection['description'] !!}
                        </div>
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
        @if( empty($hideButton) )
        <div class="col-12">
            <div class="btn-area text-center">
                @include('components.basic.button', [
                    'hrefValue'     => '/results-page',
                    'classTitle'    => 'btn btn-m btn-grad btn-turq',
                    'buttonText'        => 'Find Hospitals'

                ])
            </div>
        </div>
        @endif
    </div>{{-- end of row --}}
</div>
