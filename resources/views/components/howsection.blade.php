<div class="how-section">
    <div class="container">
        @if(!empty($sectionTitle))
            @if(empty($section))
                <h1 class="section-title text-center">{{ $sectionTitle }}</h1>
            @else
                <h2 class="section-title text-center">{{ $sectionTitle }}</h2>
            @endif
        @endif
        <p class="col-grey lh-16 font-18 text-center mb-25">You have the legal right to have your free NHS treatment at an NHS or private hospital of your choice. Use Hospital Compare to make this choice, or to select the best hospital paid for by you or your insurance. </p>
    </div>
    <div id="how_carousel" class="carousel container carousel-mobile" data-ride="carousel">
        <div class="row carousel-inner w-auto">
            @if(!empty($howsections))
                @foreach($howsections as $howsection)
                    <div
                        class="how-section__child col-lg-4 mb-30 carousel-item pt-1 {{ $loop->index == 0 ? 'active' : '' }}">
                        <div class="col-inner shadow h-100 d-flex flex-column">
                            <div class="how-icon"
                                 style="background-image: url('images/icons/{{ $howsection['iconImg'] }}.svg')">
                            </div>
                            @if(!empty($howsection['step']))
                                <div class="wrapper">
                                    <div
                                        class="how-icon-step text-uppercase text-white rounded-pill d-inline-block mx-auto px-3 mb-3 {{ !empty($howsection['color']) ? 'bg-' . $howsection['color'] : '' }}">
                                        STEP {{ $howsection['step'] }}
                                    </div>
                                </div>
                            @endif
                            @if(!empty($howsection['title']))
                                <div class="how-icon-title col-{{ $howsection['color'] }}">
                                    {{ $howsection['title'] }}
                                </div>
                            @endif
                            @if(!empty($howsection['description']))
                                <div class="how-icon-description">
                                    {!! $howsection['description'] !!}
                                </div>
                            @endif
{{--                            <p class="mt-auto mb-0 d-flex justify-content-center"--}}
{{--                                @include('components.basic.popover', [--}}
{{--                                'html'      => true,--}}
{{--                                'content'   => 'This is the content',--}}
{{--                                'trigger'   => 'hover'--}}
{{--                            ])>More info <span--}}
{{--                                    class="help-link help-link__inline help-link__inline-red">@svg('icon-more-info')</span>--}}
{{--                            </p>--}}
                            @unless(!empty($hideLinks))
                                <p class="mt-auto mb-0 w-100">For more information click <a class="btn-link" href="/how-to-use">here</a></p>
                            @endunless
                        </div>
                    </div>
                @endforeach
                    <ol class="carousel-indicators d-lg-none">
                        <li data-target="#how_carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#how_carousel" data-slide-to="1"></li>
                        <li data-target="#how_carousel" data-slide-to="2"></li>
                    </ol>
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
{{--                'classTitle'    => 'btn btn-squared btn-brand-primary-1 font-18',--}}
{{--                'buttonText'        => 'Your Rights'--}}

{{--            ])--}}
{{--        </div>--}}
{{--    @endif--}}
</div>
