<div class="how-section">
    <div class="container">
        @if(!empty($sectionTitle))
            <h2 class="section-title text-center mb-40">{{ $sectionTitle }}</h2>
        @endif
        <p class="col-grey lh-16 font-18">You have the legal right to have your free NHS treatment at an NHS or private hospital of your choice. Use Hospital Compare to make this choice, or to select the best hospital paid for by you or your insurance. </p>
    </div>
    <div id="how_carousel" class="carousel container carousel-mobile" data-ride="carousel" data-interval="3000">
        <div class="row carousel-inner w-auto">
            @if(!empty($howsections))
                @foreach($howsections as $howsection)
                    <div
                        class="how-section__child col-md-6 col-lg-4 mb-5 carousel-item pt-1 {{ $loop->index == 0 ? 'active' : '' }}">
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
{{--                'classTitle'    => 'btn btn-squared btn-brand-1 font-18',--}}
{{--                'buttonText'        => 'Your Rights'--}}

{{--            ])--}}
{{--        </div>--}}
{{--    @endif--}}
</div>
