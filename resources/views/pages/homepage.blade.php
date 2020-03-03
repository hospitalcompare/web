@extends('layout.app')

@section('title', 'Homepage')

@section('description', 'Search Hospital Compare and find the shortest waiting times and highest quality hospitals in England for your treatment now.')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1, user-scalable=no')

@section('body-class', 'home-page')

@section('content')

    @include('pages.pagesections.banner')

    <section class="how-section__parent">
        @include('components.howsection', [
            'section'           => true,
            'hideButton'        => false,
            'sectionTitle'      => 'How to Use Hospital Compare',
            'howsections'       => [
            [
                'iconImg'       => 'search-and-compare',
                'step'          => 'One',
                'title'         => 'Search & compare:',
                'color'         => 'violet',
                'description'   => '<p>Search from over 750 hospitals in England and find the right hospital for your treatment.</p>'],
            [
                'iconImg'       => 'make-enquiry',
                'step'          => 'Two',
                'title'         => 'Make enquiry:',
                'color'         => 'pink',
                'description'   => '<p>Use Hospital Compare to make an enquiry at one or more hospitals, without obligation.</p>'],
            [
                'iconImg'       => 'request-a-referral',
                'step'          => 'Three',
                'title'         => 'Book Appointment:',
                'color'         => 'blue',
                'description'   => '<p>For self-pay or insurance, book your appointment directly. For NHS treatment, make enquiries then inform your GP of your choice to book an appointment (you will need a GP referral).</p>'
            ]
        ]
    ])
    </section>

    <section class="why-use-parent">
        <div class="why-use-content">
            <div class="why-use container">
                <div class="row">
                    <div class="why-use-text col col-12 col-md-6">
                        <h2 class="section-title">Why use Hospital Compare?</h2>
                        <p class="p-intro">Hospital Compare helps you make the right choice when looking for the best hospital for your treatment.
                        </p>
                        <p class="col-grey">Many people in England aren’t aware they have a choice as to where to have their NHS-funded treatment. This choice includes both NHS and private hospitals. We’re here to help you understand your rights and make the best decision.</p>
                        <p class="col-grey">Whether you’re searching for the shortest waiting times or a hospital with the highest quality ratings, Hospital Compare provides free, unbiased, accurate and up-to-date information on over 750 NHS and private hospitals across England.</p>
                    </div>
                    <div class="why-use-video col col-12 col-md-6">
                        <img class="w-100" src="{{ url('/images/home-1.jpg') }}" alt="Doctor and patient in consultation">
{{--                        <div class="video-wrapper">--}}
{{--                            <video muted class="content" poster="{{ url('images/home-1.jpg') }}">--}}
{{--                                <source src="{{ asset('video/For_Wes.mp4') }}" type="video/mp4">--}}
{{--                                <source src="movie.ogg" type="video/ogg">--}}
{{--                                Your browser does not support the video tag.--}}
{{--                            </video>--}}
                            {{--                            <div class="player-button toggle"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    @include('pages.pagesections.testimonials')--}}
    @if(!empty($data['faqs']))
        <section class="faqs-section bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">Frequently asked questions</h2>
                        <p class="col-grey lh-16 font-18">Still have a few things you'd like to clear up? We've put together the
                            following simple answers to questions frequently thought, but rarely asked, about finding
                            the right hospital for your treament.</p>
                        <div class="hc-faqs-accordion pt-3" id="_faqs_accordion">
                            @foreach($data['faqs'] as $key => $faq)
                                <div class="card p-30">
                                    <div class="card-header mb-3 rounded-0 p-0 bg-white border-0" id="heading{{$key}}">
                                        <p class="mb-0 font-16 SofiaPro-Medium">
                                            {!! $faq->question !!}
                                        </p>
                                    </div>

                                    <div id="collapse{{$key}}" class="collapse" aria-labelledby="heading{{$key}}"
                                         data-parent="#faqs_accordion">
                                        <div class="card-body pr-0 pb-0">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>{{-- Accordion --}}
                        <div class="btn-area text-center text-lg-left">
                            @include('components.basic.button', [
                                'buttonText'    => 'View all FAQs',
                                'classTitle'    => 'btn btn-brand-primary-1 btn-squared mt-4 font-18',
                                'hrefValue'     => '/faqs'
                            ])
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
