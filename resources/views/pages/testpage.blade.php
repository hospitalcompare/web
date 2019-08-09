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

            </div>
        </div>
    </main>

@endsection
