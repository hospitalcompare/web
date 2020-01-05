<!--{{--Template for corporate video modal --}}-->
<!---->
<div class="modal modal-tour fade {{ !empty($displayBlock) ? 'd-block show' : '' }}"
     style="{{ !empty($displayBlock) ? 'opacity: 1' : '' }}"
     id="hc_modal_tour"
     tabindex="-1"
     role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            <div class="modal-header px-0 pt-0 d-flex justify-content-between">
                <div id="slide_number" class="col-turq"><span class="d-inline-block">1</span>&nbsp;of 9</div>
                <span>Help Guide Steps</span>
                <button type="button" class="btn-plain" data-dismiss="modal" aria-label="Close">
                    @svg('times-black')
                </button>

            </div>
            <div class="carousel-wrapper position-relative">
                <!-- Slide number indicator -->
                <div id="carousel_tour" class="carousel slide" data-ride="carousel" data-interval="false">
                    <!--Slides-->
                    <div class="carousel-inner position-relative" role="listbox">
{{--                        <div class="image-wrapper position-absolute ml-1">--}}
{{--                            <img class="" src="{{ asset('/images/dr-stevini.svg') }}" alt="Dr Stevini Illustration">--}}
{{--                        </div>--}}
                        <div class="carousel-item active">
                            <div class="carousel-item-inner">
                                <img class="d-block h-100 w-100 content"
                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item-copy bg-greylight ">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item-inner">
                                <img class="d-block h-100 w-100 content"
                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item-copy bg-greylight position-relative">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item-inner">
                                <img class="d-block h-100 w-100 content"
                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item-copy bg-greylight position-relative">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item-inner">
                                <img class="d-block h-100 w-100 content"
                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item-copy bg-greylight position-relative">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item-inner">
                                <img class="d-block h-100 w-100 content"
                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item-copy bg-greylight position-relative">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.
                            </div>
                        </div>
                    </div>
                    <!--/.Slides-->
                    <div class="carousel-controls position-absolute">
                        <!--Controls-->
                        <a class="carousel-control-prev carousel-control btn btn-tour-control prev" href="#carousel_tour" role="button"
                           data-slide="prev">
                            @svg('chevron-left')
                            Previous Step
                            {{--                    <span class="carousel-control-prev-icon" aria-hidden="true">Previous Step</span>--}}
                        </a>
{{--                        <ol class="carousel-indicators mb-0 mx-4">--}}
{{--                            <li data-target="#carousel_tour" data-slide-to="0" class="active"></li>--}}
{{--                            <li data-target="#carousel_tour" data-slide-to="1" class=""></li>--}}
{{--                            <li data-target="#carousel_tour" data-slide-to="2" class=""></li>--}}
{{--                            <li data-target="#carousel_tour" data-slide-to="3" class=""></li>--}}
{{--                            <li data-target="#carousel_tour" data-slide-to="4" class=""></li>--}}
{{--                        </ol>--}}
                        <a class="carousel-control-next carousel-control btn btn-tour-control next" href="#carousel_tour" role="button"
                           data-slide="next">Next Step
                            @svg('chevron-right')
                            {{--                    <span class="carousel-control-next-icon" aria-hidden="true">Next Step</span>--}}
                            {{--                    <span class="sr-only">Next</span>--}}
                        </a>
                        <!--/.Controls-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
