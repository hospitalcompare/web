@extends('layout.app')

@section('title', 'Frequently Asked Questions')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'faqs-page')

@section('content')
    <section class="banner">
        <div class="container container-980 text-center position-relative">
            <h1 class="mb-0">How can we <span class="col-turq">help</span>?</h1>
            <h2 class="page-subtitle">Type a keyword into the search bar below and scroll down for all questions</h2>
            <div class="input-wrapper position-relative">
                {!! file_get_contents(asset('/images/icons/search-icon.svg')) !!}
                @include('components.basic.input', [
                    'type'        => 'search',
                    'results'     => '5',
                    'id'          => 'faq_search_input',
                    'className'   => 'w-100',
                    'placeholder' => 'Search',
                    'value'       => '',
                    'name'        => 'search'
                ])
            </div>
        </div>
    </section>
    <section class="bg-greylight pt-5">
        <div class="container">
            <div class="accordion" id="faqs_accordion">
                @if(!empty($data['faqs']))
                    @foreach($data['faqs'] as $faq)
                        <div class="card">
                            {!! $faq->question !!}
                            {!! $faq->answer !!}
                        </div>
                    @endforeach
                @endif
            </div>{{-- Accordion --}}
        </div>
    </section>

@endsection
