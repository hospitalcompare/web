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
                <br>
                <h3>Popover html</h3>
                <div class="popover fade bs-popover-bottom show" role="tooltip" id="popover438743" x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <h3 class="popover-header">Popover title</h3>
                    <div class="popover-body">Hello, this is a popover</div>
                </div>
                <h3>Popover with link</h3>
                <div class="popover fade bs-popover-bottom show" role="tooltip" id="popover438743" x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <h3 class="popover-header">Popover title</h3>
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
                    <div class="arrow" style="left: 64px;"></div>
                </div>

            </div>
        </div>
    </main>

@endsection
