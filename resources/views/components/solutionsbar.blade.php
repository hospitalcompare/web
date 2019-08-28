<div class="compare-hospitals-bar {{ !empty($position) && $position == 'static' ? 'position-static' : ''  }}">
    <div class="compare-hospitals-header d-flex justify-content-between align-items-end">
        @include('components.doctor')
        <div class="compare-button-title d-flex h-100 align-items-center">
            <p>Hospital Shortlist&nbsp;(<span id="compare_number">0</span>)<span class="compare-arrow ml-3"></span></p>
        </div>
        <ul class="solutions-menu d-flex m-0">
            <li class="d-block">
                <div href="" class="special-offer-tab">
                    <div class="header d-flex justify-content-between">
                        <div class="image-wrapper">
                            <img class="content" width="67" height="62" alt="Image of The Christie Main Site" src="{{ asset('../images/alder-1.png') }}">
                            <div class="NHSHospital"><p>NHS Hospital</p></div>
                        </div>
                        <div class="text ml-4">
                            <p class="hospital-name mb-0"><strong>Spire Murrayfield</strong></p>
                            <p class="distance mb-0">35.3 miles away</p>
                        </div>
                    </div>
                    <div class="body">
                        <div class="bullets">
                            <ul>
                                <li>2 weeks</li>
                                <li>Outstanding</li>
                                <li>5 star user rating</li>
                            </ul>
                        </div>
                        <div class="btn-area">
                            <a class="btn btn-icon btn-go">Enquire Now</a>
                        </div>
                    </div>
                </div>
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
