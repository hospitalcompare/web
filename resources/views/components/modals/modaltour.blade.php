<!--{{--Template for corporate video modal --}}-->
<!---->
<div class="modal modal-tour fade {{ !empty($displayBlock) ? 'd-block show' : '' }}"
     style="{{ !empty($displayBlock) ? 'opacity: 1' : '' }}"
     id="hc_modal_tour"
     tabindex="-1"
     role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between border-bottom">
                <div id="slide_number" class="col-brand-primary-1 font-20"><span class="d-inline-block">1</span>&nbsp;of 9</div>
                <span class="col-grey font-16">Help Guide Steps</span>
                <button type="button" class="btn-plain" data-dismiss="modal" aria-label="Close">
                    @svg('times-black')
                </button>

            </div>
            <div class="modal-body p-3 position-relative">
                <div class="carousel-wrapper position-relative">
                    <!-- Slide number indicator -->
                    <div id="carousel_tour" class="carousel slide _carousel-fade" data-ride="carousel"
                         data-interval="false">
                        <!--Slides-->

                        <!--/.Slides-->
                        <div class="carousel-inner position-relative" role="listbox">
                            {{--One--}}
                            <div class="carousel-item active">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-28 SofiaPro-Medium">How to Use the
                                                Filters</h5>
                                            <p class="col-grey p-secondary">Following your initial search, tap
                                                the cyan ‘Filter Results’ button
                                                near the top of your screen to
                                                reveal further options to hone
                                                your results by categories like
                                                waiting times. Once you’ve
                                                made your changes, click the
                                                blue ‘Update Results’ button and
                                                your choices will be reflected in
                                                your search results.</p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-1.jpg')">
{{--                                                <img class="d-block h-100 w-100 content"--}}

{{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            Two --}}
                            <div class="carousel-item">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-18 SofiaPro-Medium">How to Use the
                                                Sort Function
                                                Rating Arrows</h5>
                                            <p class="col-grey p-secondary">You can sort your data by
                                                clicking the downward-facing
                                                arrows in the white bar above
                                                your search results. This means
                                                you can sort your data by
                                                specific columns, for example
                                                prioritising your results by
                                                shortest waiting time.</p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-2.jpg')">
                                                {{--                                                <img class="d-block h-100 w-100 content"--}}

                                                {{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            Three --}}
                            <div class="carousel-item">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-18 SofiaPro-Medium">How to Use Tooltips to Get More Information</h5>
                                            <p class="col-grey p-secondary">Throughout Hospital Compare, you can get more information about specific
                                                subjects from our tailored tooltips. The tooltips provide more detail
                                                and context on information within your search results. You can access
                                                them by hovering over headings and information with your mouse cursor.
                                            </p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-3.jpg')">
                                                {{--                                                <img class="d-block h-100 w-100 content"--}}

                                                {{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            Four --}}
                            <div class="carousel-item">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-18 SofiaPro-Medium">How to Compare Results and Add to a Shortlist</h5>
                                            <p class="col-grey p-secondary">After generating your search results, you can compare specific hospitals
                                                (up to five) by clicking the ‘Add to Compare’ buttons at the end of each
                                                result row. Once you’ve selected the hospitals you’re interested in,
                                                click the cyan ‘Compare’ button in the bottom right to view your choices
                                                in detail.
                                            </p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-4.jpg')">
                                                {{--                                                <img class="d-block h-100 w-100 content"--}}

                                                {{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            Five --}}
                            <div class="carousel-item">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-18 SofiaPro-Medium">What is the Solutions Bar?</h5>
                                            <p class="col-grey p-secondary">You’ll find the solutions bar located below your search results. Based on
                                                the criteria you searched for, the blue box highlights an outstanding
                                                hospital with the lowest waiting time, whilst the pink box highlights
                                                special offers you may be interested in.
                                            </p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-5.jpg')">
                                                {{--                                                <img class="d-block h-100 w-100 content"--}}

                                                {{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            Six --}}
                            <div class="carousel-item">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-18 SofiaPro-Medium">How to Make an Enquiry
                                            </h5>
                                            <p class="col-grey p-secondary">After generating and comparing your search results, you can make
                                                enquiries to private hospitals by clicking the blue ‘Make an Enquiry’
                                                button at the end of each result line. You will then be asked to
                                                complete a short form which will be sent to them once finalised.</p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-6.jpg')">
                                                {{--                                                <img class="d-block h-100 w-100 content"--}}

                                                {{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                             Seven --}}
                            <div class="carousel-item">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-18 SofiaPro-Medium">Learn More About Your Rights</h5>
                                            <p class="col-grey p-secondary">You can learn more about your legal rights by clicking the ‘Your Rights’
                                                button in the main website menu at the top of your screen.</p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-7.jpg')">
                                                {{--                                                <img class="d-block h-100 w-100 content"--}}

                                                {{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            Eight --}}
                            <div class="carousel-item">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-18 SofiaPro-Medium">Learn More Through Our Blog</h5>
                                            <p class="col-grey p-secondary">From articles focusing on your rights to current events, waiting times to
                                                quality, our regularly-updated blog plays host to a range of unique and
                                                informative articles. Click the ‘Blog’ button in the main menu to
                                                access.</p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-8.jpg')">
                                                {{--                                                <img class="d-block h-100 w-100 content"--}}

                                                {{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            Nine--}}
                            <div class="carousel-item">
                                <div class="carousel-item-inner">
                                    <div class="row">
                                        <div class="carousel-item-copy col-4">
                                            <h5 class="font-18 SofiaPro-Medium">Got a Specific Question?</h5>
                                            <p class="col-grey p-secondary">Our FAQ is the perfect place to start when you have a burning question. You’ll find answers to many queries covering everything from your rights, to choosing a consultant, booking an appointment at a hospital to the sources of our data.
                                                If you can’t find an answer to your question, you can email us directly by clicking here.
                                            </p>
                                        </div>
                                        <div class="carousel-item-image col-8">
                                            <div class="image-wrapper" style="background-image: url('/images/help/help-9.jpg')">
                                                {{--                                                <img class="d-block h-100 w-100 content"--}}

                                                {{--                                                     src="{{ asset('/images/tour-screenshot-1.jpg') }}" alt="First slide">--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Controls-->
                <div class="carousel-controls position-absolute w-100">
                    <div class="container-fluid">
                        <div class="row w-100">
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-6">
                                        <a class="carousel-control-prev carousel-control btn btn-squared btn-squared_slim btn-black btn-tour-control prev"
                                           href="#carousel_tour" role="button"
                                           data-slide="prev">
                                            Previous
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a class="carousel-control-next carousel-control btn btn-squared btn-squared_slim btn-brand-primary-1 col-white btn-tour-control next"
                                           href="#carousel_tour" role="button"
                                           data-slide="next">Next
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Controls-->
            </div>
        </div>
    </div>
</div>
