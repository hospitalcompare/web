<div class="how-section">
    @if(!empty($sectionTitle))
        <h2 class="section-title text-center mb-40">{{ $sectionTitle }}</h2>
    @endif
    <div id="how_carousel" class="carousel container carousel-mobile" data-ride="carousel" data-interval="3000">
        <div class="row carousel-inner w-auto">
            @if(!empty($howsections))
                @foreach($howsections as $howsection)
                    <div
                        class="how-section__child col-md-6 col-lg-3 mb-5 carousel-item pt-1 {{ $loop->index == 0 ? 'active' : '' }}">
                        <div class="col-inner shadow h-100 d-flex flex-column">
                            <div class="icon"
                                 style="background-image: url('images/icons/{{ $howsection['iconImg'] }}.svg')">
                            </div>
                            @if(!empty($howsection['step']))
                                <div
                                    class="icon-step text-uppercase text-white rounded-pill d-inline-block mx-auto py-1 px-3 mb-3 {{ !empty($howsection['color']) ? 'bg-' . $howsection['color'] : '' }}">
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
                            <p class="mt-auto mb-0"
                                @include('components.basic.popover', [
                                'html'      => true,
                                'content'   => 'This is the content',
                                'trigger'   => 'hover'
                            ])>More info <span
                                    class="help-link help-link__inline help-link__inline-red">@svg('question')</span>
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div> <!-- inner -->
        <a class="left carousel-control" href="#how_carousel" role="button" data-slide="prev"><span
                class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#how_carousel" role="button" data-slide="next"><span
                class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>

    </div>
{{--    @if( empty($hideButton) )--}}
{{--        <div class="btn-area text-center">--}}
{{--            @include('components.basic.button', [--}}
{{--                'hrefValue'     => '/your-rights',--}}
{{--                'classTitle'    => 'btn btn-squared btn-turq font-18',--}}
{{--                'buttonText'        => 'Your Rights'--}}

{{--            ])--}}
{{--        </div>--}}
{{--    @endif--}}
</div>
