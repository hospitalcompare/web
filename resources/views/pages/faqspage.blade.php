@extends('layout.app')

@section('title', 'Frequently Asked Questions')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'faqs-page')

@section('content')
    <section>
        <div class="container container-980 text-center">
            <h1 class="mb-0">How can we help?</h1>
            <h2 class="page-subtitle">Type your query into the search bar below and scroll down for all questions</h2>
        </div>
    </section>
    <section>
        <div class="container container-980">
            <div class="input-wrapper position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" class="position-absolute v-c">
                    <path d="M14.99 3.91c6.109 0 11.079 4.97 11.079 11.08 0 6.109-4.97 11.079-11.08 11.079-6.109 0-11.079-4.97-11.079-11.08C3.91 8.88 8.88 3.91 14.99 3.91zm20.308 29.906l-8.836-9.19a14.941 14.941 0 0 0 3.517-9.636C29.979 6.724 23.254 0 14.989 0S0 6.724 0 14.99c0 8.265 6.725 14.99 14.99 14.99 3.103 0 6.06-.937 8.588-2.713l8.903 9.26c.372.386.873.6 1.41.6a1.957 1.957 0 0 0 1.409-3.31z"/>
                </svg>
                @include('components.basic.input', [
                'type'        => 'search',
                'results'     => '5',
                'className'   => 'faq-search-input w-100',
                'placeholder' => 'Search',
                'value'       => '',
                'name'        => 'q'
                ])
            </div>
        </div>
    </section>
    <section class="how-section__parent">
        @include('components.howsection', [
            'hideButton'        => true,
            'containerFluid'    => true,
            'howsections'       => [
                [
                    'iconImg'=> 'doctor',
                    'title'=>'Category One',
                ],
                [
                    'iconImg'=> 'search',
                    'title'=>'Category Two'
                ],
                [
                    'iconImg'=> 'hospital-compare',
                    'title'=>'Category Three'
                ],
                [
                    'iconImg'=> 'confirm',
                    'title'=>'Category Four'
                ]
             ]
         ])
    </section>

    <section>
        <div class="container container-980">
            <div class="row">
                <div class="col hc-content">
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
                </div>{{-- hc-content --}}
            </div>
        </div>

    </section>

@endsection
