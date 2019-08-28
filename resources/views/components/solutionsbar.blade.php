<div class="compare-hospitals-bar {{ !empty($position) && $position == 'static' ? 'position-static' : ''  }}">
    <div class="compare-hospitals-header d-flex justify-content-between align-items-end">
        @include('components.doctor')
        <div class="compare-button-title d-flex h-100 align-items-center ml-5 mr-auto">
            <p>Hospital Shortlist&nbsp;(<span id="compare_number">0</span>)<span class="compare-arrow ml-3"></span></p>
        </div>
        <ul class="solutions-menu d-flex align-items-end m-0">
            <li class="d-block">
                @include('components.basic.specialoffertab')
            </li><li class="d-block">
                @include('components.basic.specialoffertab', [
                'bgColor' => 'pink'
                ])
            </li>
{{--            <li class="d-block ml-3">--}}
{{--                <a href="" class="btn btn-icon btn-special-tab">Special Offers</a>--}}
{{--            </li>--}}
            {{--                    <li><a href="">Virtual GP</a></li>--}}
            {{--                    <li><a href="">Operation Funding</a></li>--}}
            {{--                    <li><a href="">Insurance Guide</a></li>--}}
            {{--                    <li><a href="">Medical Negligence</a></li>--}}
        </ul>

    </div>
    <div class="compare-hospitals-content">
        <div class="container">
            <div id="compare_hospitals_grid" class="row">
                <div class="col-3">
                    <div class="col-inner h-100">
                        <div class=""></div>
                        <div class="cell">Name</div>
                        <div class="cell">Average Waiting Time</div>
                        <div class="cell">NHS Choices User Rating</div>
                        <div class="cell">% Operations cancelled</div>
                        <div class="cell">Care Quality Rating</div>
                        <div class="cell">Friends & Family Rating</div>
                        <div class="cell">NHS Funded</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
