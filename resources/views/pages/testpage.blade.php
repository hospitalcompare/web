@extends('layout.app')

@section('title', 'Test Page')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'test-page')

@section('content')
{{--     {{ dd($doctor) }}--}}
    <section>
        @include('pages.pagesections.resultspageform', [
        'displayBlock' => true])
    </section>
{{--    <section class="pt-3">--}}
{{--        <div class="container">--}}
{{--            <h3>Enquiry Form</h3>--}}
{{--            @include('components.modals.modalenquireprivate', [--}}
{{--                       'procedures'    => $data['filters']['procedures'],--}}
{{--                       'title'         => 'Mr',--}}
{{--                       'firstName'     => 'Test',--}}
{{--                       'dob'           => '1980/04/12',--}}
{{--                       'lastName'      => 'Testing',--}}
{{--                       'email'         => 'test@test.com',--}}
{{--                       'phone'         => '07941939374',--}}
{{--                       'postcode'      => 'ch423re',--}}
{{--                       'gdpr'          => true])--}}
{{--        </div>--}}
{{--    </section>--}}
    <div class="section pt-3 pb-5">
        <div class="container">
            <p class="p-5" style="width: 300px; border: 3px solid black">
                When you have performed a search for hospitals on your results page you can click the
                blue “compare” icon
                <a id="1" class="float-right display-inline btn btn-green-outline compare mt-0" target=""
                   href="javascript:void(0);" role="button"><i class=""></i></a>
            </p>
        </div>
    </div>
    <div class="section py-3 ">
        <div class="container-fluid px-0">
            <h2>Solutions bar </h2>
            @include('components.solutionsbar', [
                'position' => '',
                'specialOffers' => $data['special_offers']])
        </div>
    </div>
    <div class="section py-3 ">
        <div class="section py-3">
            <div class="container">
                <h3>Modal - enquire now</h3>
                <div class="modal modal-enquire fade show" id="hc_example_modal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-modal="true"
                     style="display: block; position: static">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close position-absolute" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true" class="text-white bg-black">Close</span>
                            </button>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col col-md-6 p-0">
                                            <div class="col-inner col-inner__left">
                                                <h3 class="modal-title mb-3">Hospital Name</h3>
                                                <div class="d-flex mb-3">
                                                    <div class="image-wrapper mr-3">
                                                        <img class="mr-3" src="images/alder-1.png">
                                                    </div>
                                                    <div class="modal-copy">
                                                        <p>This NHS hospital does not respond to direct enquiries
                                                            regarding NHS funded elective procedures prior to an
                                                            appointment being confirmed.</p>
                                                    </div>

                                                </div>
                                                <div class="btn-area">
                                                    <a href="http://' . $d['url'] . '" target="_blank"
                                                       class="btn btn-icon btn-blue btn-enquire">Visit hospital
                                                        website</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-6 p-0">
                                            <div
                                                class="col-inner col-inner__right h-100 text-center bg-pink">
                                                <h2 class="text-white">Or go back to results</h2>

                                                <div class="text-white modal-copy">
                                                    <p>Click <a class="text-link"
                                                                data-dismiss="modal"
                                                                aria-label="Close">here</a>
                                                        to go back to results</p>
                                                </div>
                                                {{--                                                                <div class="btn-area">--}}
                                                {{--                                                                    <a  data-toggle="modal"--}}
                                                {{--                                                                       data-target="#hc_modal_special"--}}
                                                {{--                                                                      data-content="<h1>' . $specialOfferContent = 'hello' . '</h1>"--}}
                                                {{--                                                                       data-dismiss="modal"--}}
                                                {{--                                                                        class="btn btn-icon btn-special-offer-reverse">Back to results</a>--}}
                                                {{--                                                               </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Dr Stevini</h2>
                @include('components.doctor')
                <h2>Tooltips</h2>
                <br>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top">
                    Tooltip on top
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                        title="Tooltip on right">
                    Tooltip on right
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom"
                        title="Tooltip on bottom">
                    Tooltip on bottom
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left"
                        title="Tooltip on left">
                    Tooltip on left
                </button>
                <hr>
                <h3>Enquire now button</h3>
                @include('components.basic.button', [
                    'classTitle' => 'btn btn-icon btn-enquire-now mr-2',
                    'button' => 'Enquire Now'])
                <h3>Special offer button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-icon btn-special-offer mr-2', 'button' => 'Special Offers'])
                <h3>Special offer button reversed</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-icon btn-special-offer-reverse mr-2', 'button' => 'Special Offers'])
                <h3>Enquiry button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-icon btn-enquire enquiry', 'button' => 'Make an enquiry'])
                <h3>Close button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-close__small btn-teal btn-icon', 'button' => 'Close'])
                <h3>Let's go button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-go btn-icon', 'button' => 'Close'])
                <hr>
                <h2>Popovers</h2>
                <h3>Popover for CQC rating</h3>
                <div class="popover popover-regular fade bs-popover-top show" role="tooltip" id="popover438743" x-placement="top" style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="left col-6 d-flex flex-column justify-content-center align-items-start bg-teal text-white">
                                    <p>Overall</p>
                                    <p><strong>Good</strong></p>
                                </div>
                                <div class="right col-6 pr-0">
                                    <div class="cqc-table">
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Safe</div>
                                            <div class="cqc-rating ml-auto">Good<span class="cqc-colour green"></span></div>
                                        </div>
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Effective</div>
                                            <div class="cqc-rating ml-auto">Good<span class="cqc-colour green"></span></div>
                                        </div>
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Caring</div>
                                            <div class="cqc-rating ml-auto">Good<span class="cqc-colour green"></span></div>
                                        </div>
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Responsive</div>
                                            <div class="cqc-rating ml-auto">Good<span class="cqc-colour green"></span></div>
                                        </div>
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Well-Led</div>
                                            <div class="cqc-rating ml-auto">Good<span class="cqc-colour green"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>Popover top</h3>
                <div class="popover popover-regular fade bs-popover-top show" role="tooltip" id="popover438743" x-placement="top" style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <p><span class="mr-2">Food rating</span>
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                        </p>
                    </div>
                </div>
                <h3>Popover bottom</h3>
                <div class="popover popover-regular fade bs-popover-bottom show" role="tooltip" id="popover438743" x-placement="bottom" style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <p><span class="mr-2">Food rating</span>
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                        </p>
                    </div>
                </div>
                <h3>Popover trigger</h3>
                <a tabindex="0" data-offset="30px, 40px" class="help-link help-link__inline"
                    @include('components.basic.popover', [
                    'size'      => 'large',
                    'placement' => 'top',
                    'trigger'   => 'click',
                    'html'      => 'true',
                    'content'   => '<p class="bold mb-0">
                                        What is NHS funded work?
                                    </p>
                                    <p>
                                        Many private healthcare policies allow you to choose which hospital to have your elective
                                        procedure at. Enter your provider and policy name to find the best hospital for you.
                                    </p>'])>?</a>
                <a href="#" class="btn btn-blue"
                   data-toggle="popover"
                   data-content="Hello, this is a popover"
                   data-placement="bottom"
                   title="Popover title">
                    Popover on click</a>
                <a href="#" class="btn btn-blue"
                   data-toggle="popover"
                   data-content="Hello, this is a popover"
                   data-trigger="hover"
                   title="Popover title">
                    Popover on hover</a>
                <a href="#" class="btn btn-blue"
                   data-toggle="popover"
                   data-content="Hello, this is a popover"
                   data-trigger="hover"
                   data-placement="bottom"
                   title="Popover title">
                    Popover on hover, at the bottom</a>
                <a class="btn btn-blue"
                   data-toggle="popover-large"
                   data-content="Hello, this is a popover"
                   data-trigger="hover"
                   data-placement="bottom"
                   title="Popover title">
                    Large popover</a>
                <br>
                <h3>Popover html</h3>
                <div class="popover fade bs-popover-bottom show" role="tooltip" id="popover438743" x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <h3 class="popover-header">Popover title</h3>
                    <div class="popover-body">Hello, this is a popover</div>
                </div>

                <h3>Popover with link</h3>
                <div class="popover fade bs-popover-top show" role="tooltip" id="popover438743" x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">Hello, this is a popover <a tabindex class="text-link">Click here</a>
                    </div>
                </div>

                <h3>Large popover - top</h3>
                <div class="my-5 popover popover-large fade bs-popover-top show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow arrow-large" style="left: 64px;"></div>
                    <div class="popover-body">Hello, this is a popover <a tabindex class="text-link">Click here</a>
                    </div>
                </div>
                <h3>Large popover - bottom</h3>
                <div class="my-5 popover popover-large fade bs-popover-bottom show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow arrow-large" style="left: 64px;"></div>
                    <div class="popover-body">Hello, this is a popover <a tabindex class="text-link">Click here</a>
                    </div>
                </div>

                <h3>Popover with stars</h3>
                <div class="popover popover-regular fade bs-popover-bottom show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <p><span class="mr-2">Food rating</span>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                        </p>
                    </div>
                </div>

                <h3>Large popover - bottom</h3>
                <div class="mt-5 popover popover-large fade bs-popover-bottom show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="popover-body">
                        <p class="bold mb-0">
                            What is NHS funded work?
                        </p>
                        <p>
                            Many private healthcare policies allow you to choose which hospital to have your elective
                            procedure at. Enter your provider and policy name to find the best hospital for you.
                        </p>
                        <p>
                            <a class="btn btn-close__small btn-teal btn-icon" href="/">Close</a>
                        </p>
                    </div>
                    <div class="arrow arrow-large" style="left: 64px;"></div>
                </div>
                <hr>
                <h3>Modal trigger</h3>
                <div class="btn-area">
                    <button
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#hc_modal"
                        data-content="<h1>Some modal content</h1>">Open modal for @mdo
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hc_modal"
                            data-content="@fat">Open modal for @fat
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hc_modal"
                            data-content="@getbootstrap">Open modal for @getbootstrap
                    </button>

                </div>


                <hr>
                <h1>Special offers slide out</h1>
                @include('components.basic.specialofferslide', ['class' => 'show'])
                <h3>Select styling</h3>
                <h4>Plain select</h4>
                <select class="" id="" name="sort_by">

                    <option name="Distance from Postcode ascending" id="sort_by_0" value="0">
                        Distance from Postcode ascending
                    </option>
                    <option name="Distance from Postcode descending" id="sort_by_1" value="1">
                        Distance from Postcode descending
                    </option>
                    <option name="Waiting time ascending" id="sort_by_2" value="2">
                        Waiting time ascending
                    </option>
                    <option name="Waiting time descending" id="sort_by_3" value="3">
                        Waiting time descending
                    </option>
                    <option name="User Rating ascending" id="sort_by_4" value="4">
                        User Rating ascending
                    </option>
                    <option name="User Rating descending" id="sort_by_5" value="5">
                        User Rating descending
                    </option>
                </select>
                <h4>Styled select</h4>
                <div class="select-parent  ">
                    <label class="_select-box sortLabel" for="">
                        Sort by:
                    </label>
                    <select class="results-page-select" id="" name="sort_by">

                        <option name="Distance from Postcode ascending" id="sort_by_0" value="0">
                            Distance from Postcode ascending
                        </option>
                        <option name="Distance from Postcode descending" id="sort_by_1" value="1">
                            Distance from Postcode descending
                        </option>
                        <option name="Waiting time ascending" id="sort_by_2" value="2">
                            Waiting time ascending
                        </option>
                        <option name="Waiting time descending" id="sort_by_3" value="3">
                            Waiting time descending
                        </option>
                        <option name="User Rating ascending" id="sort_by_4" value="4">
                            User Rating ascending
                        </option>
                        <option name="User Rating descending" id="sort_by_5" value="5">
                            User Rating descending
                        </option>
                    </select>
                    <svg class="svg-inline--fa fa-chevron-down fa-w-14 black-chevron" aria-hidden="true"
                         focusable="false" data-prefix="fas" data-icon="chevron-down" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                              d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                    </svg><!-- <i class="fas fa-chevron-down black-chevron"></i> -->
                </div>
                <hr>

                {{--                @include('components.modals.modalenquirenhs')--}}
            </div>
        </div>
@endsection
