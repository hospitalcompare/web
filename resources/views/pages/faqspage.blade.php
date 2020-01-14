@extends('layout.app')

@section('title', 'Frequently Asked Questions')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'faqs-page')

@section('content')
    <section class="banner">
        <div class="container container-980 text-center position-relative">
            <h1 class="mb-3">How can we <span class="col-brand-1">help</span>?</h1>
            <h2 class="page-subtitle col-grey">Want to find out more about Hospital Compare or your rights? Our FAQs may be able to help! Search for specific keywords or browse a full list of questions below.</h2>
            <div class="input-wrapper position-relative">
                @svg('icon-search')
                @include('components.basic.input', [
                    'type'              => 'search',
                    'results'           => '5',
                    'id'                => 'faq_search_input',
                    'inputClassName'    => 'w-100',
                    'placeholder'       => 'Search',
                    'value'             => '',
                    'name'              => 'search'
                ])
            </div>
        </div>
    </section>
    <section class="bg-greylight pt-5 section-space">
        <div class="container">
            <div class="accordion" id="faqs_accordion">
                @if(!empty($data['faqs']))
                    @foreach($data['faqs'] as $key => $faq)
                        <div class="card">
                            <div class="card-header" id="heading{{$key}}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse"
                                            data-target="#collapse{{$key}}" aria-expanded="false"
                                            aria-controls="collapse{{$key}}">
                                        {!! $faq->question !!}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}" data-parent="#faqs_accordion">
                                <div class="card-body">
                                    <p>
                                        {!! $faq->answer !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>{{-- Accordion --}}
        </div>
    </section>

@endsection
