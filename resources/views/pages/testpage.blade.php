@extends('layout.app')

@section('title', 'Page Test')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'test-page')

@section('content')
    <main>
        <div class="section py-3">
            <div class="container">
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
                <h3>Special offer button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-icon btn-special-offer mr-2', 'button' => 'Special Offers'])
                @include('components.basic.button', ['classTitle' => 'btn btn-icon btn-enquire enquiry', 'button' => 'Make an enquiry'])
                <hr>
                <h3>Popovers</h3>
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
                    <div class="popover-body">Hello, this is a popover <a class="" href="/">Click here</a></div>
                </div>

                <h3>Large popover</h3>
                <div class="popover popover-large fade bs-popover-top show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow arrow-large" style="left: 64px;"></div>
                    <div class="popover-body">Hello, this is a popover <a class="" href="/">Click here</a></div>
                </div>

                <h3>Popover with stars</h3>
                <div class="popover fade bs-popover-bottom show" role="tooltip" id="popover438743" x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <p><span class="mr-2">Food rating</span>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                        </p>
                        <p><span class="mr-2">Food rating</span>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                        </p>
                        <p><span class="mr-2">Food rating</span>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                            <img src='../images/icons/star.svg' alt='Whole Star'>
                        </p>
                    </div>
                </div>

                <h3>Large popover</h3>
                <div class="popover popover-large fade bs-popover-bottom show" role="tooltip" id="popover438743"
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
                            <a class="btn btn-teal btn-icon btn-consultant" href="/">Close</a>
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

                <h1>Modal - enquiry now</h1>
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
                                                <h3 class="modal-title mb-3">
                                                    NHS Hospital name
                                                </h3>
                                                <div class="d-flex mb-3">
                                                    <div class="image-wrapper mr-3">
                                                        <img class="mr-3" src="images/alder-1.png">
                                                    </div>
                                                    <p class="modal-copy">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim
                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                        ut
                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in.</p>

                                                </div>
                                                <div class="btn-area">
                                                    <div class="btn btn-icon btn-enquire">Make an enquiry</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-6 p-0">
                                            <div
                                                class="col-inner col-inner__right h-100 text-center bg-pink">
                                                <h2 class="text-white">Or go back to results</h2>

                                                <p class="text-white modal-copy">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                    ea
                                                    commodo consequat. Duis aute irure dolor in reprehenderit in.</p>
                                                <div class="btn-area">
                                                    <div class="btn btn-icon btn-special-offer">Special Offers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h1>Modal - special offers</h1>
                <div class="modal modal-special fade show" id="hc_example_modal" tabindex="-1" role="dialog"
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
                                        <div class="col col-md-3 p-0">
                                            <div class="col-inner">

                                                <div class="d-flex mb-3">
                                                    <div class="image-wrapper mr-3">
                                                        <img class="mr-3 mb-3" src="images/alder-1.png">
                                                        <img class="mr-3" src="images/bupa.png">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-9 p-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h3 class="text-uppercase">Special Offer</h3>
                                                </div>
                                                <div class="col-8">
                                                    <p>Get your Knee operation done in under 2 weeks on our self-pay
                                                        programme for £8,999 (reduced from £10,500).</p>
                                                </div>
                                                <div class="col-4">
                                                    <ul>
                                                        <li>2 weeks</li>
                                                        <li>Outstanding</li>
                                                        <li>5 star user rating</li>
                                                    </ul>
                                                </div>
                                                <div class="col-12">
                                                    <a class="btn btn-enquire btn-icon">Make an enquiry</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

@endsection
