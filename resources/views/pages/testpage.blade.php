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
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                Tooltip on top
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                Tooltip on right
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                Tooltip on bottom
            </button>
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                Tooltip on left
            </button>
            <h3>Special offer button</h3>
            <a href="" class="btn btn-pink btn-icon btn-special-offer">Special offers</a>
            @include('components.basic.button', ['classTitle' => 'btn btn-pink btn-icon btn-special-offer', 'button' => 'Special Offers'])

        </div>
    </div>
</main>

@endsection
