<div class="how-section container {{ !empty($containerFluid) ?? ($containerFluid) ? 'container-980' : '' }}">
    @if(!empty($sectionTitle))
        <h2 class="section-title text-center">{{ $sectionTitle }}</h2>
    @endif
    <div class="row">
        @if(!empty($howsections))
            @foreach($howsections as $howsection)
                <div class="how-section__child col-md-3 mb-5">
                    <div class="col-inner h-100 d-flex flex-column p-4">
                        <div class="icon" style="background-image: url('images/icons/{{ $howsection['iconImg'] }}.svg')">
{{--                            {!! file_get_contents(asset('images/icons/' . $howsection['iconImg'] . '.svg')) !!}--}}
                        </div>
                        @if(!empty($howsection['step']))
                        <div class="icon-step text-uppercase text-white rounded-pill d-inline-block mx-auto py-1 px-3 mb-3 {{ !empty($howsection['color']) ? 'bg-' . $howsection['color'] : '' }}">
                            STEP {{ $howsection['step'] }}
                        </div>
                        @endif
                        @if(!empty($howsection['title']))
                        <div class="icon-title col-{{ $howsection['color'] }}">
                            {{ $howsection['title'] }}
                        </div>
                        @endif
                        @if(!empty($howsection['description']))
                        <div class="icon-description">
                            {!! $howsection['description'] !!}
                        </div>
                        @endif
                        <p class="mt-auto"
                            @include('components.basic.popover', [
                            'html'      => true,
                            'content'   => 'This is the content',
                            'trigger'   => 'hover'
                        ])>More info <span class="help-link help-link__inline">{!! file_get_contents(asset('/images/icons/question.svg')) !!}</span></p>
                    </div>
                </div>
            @endforeach
        @endif
        @if( empty($hideButton) )
        <div class="col-12">
            <div class="btn-area text-center">
                @include('components.basic.button', [
                    'hrefValue'     => '/your-rights',
                    'classTitle'    => 'btn btn-squared btn-grad btn-turq',
                    'buttonText'        => 'Your Rights'

                ])
            </div>
        </div>
        @endif
    </div>{{-- end of row --}}
</div>
