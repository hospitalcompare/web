@extends('layout.app')

@section('title', 'About Us')

@section('description', 'Discover Hospital Compare; a unique comparison website dedicated to helping you find the right hospital for your treatment by exercising your legal rights.')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'about-us-page hc-content')

@section('content')
    @include('pages.pagesections.flatbanner')
    <section class="about-us-intro overflow-hidden">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-6">
                    <h1>Feel <span class="col-brand-primary-1">Better</span> Knowing Your Legal Right to Choose
                    </h1>
                    <p class="col-grey p-secondary mb-35">Hospital Compare is a unique comparison website that empowers you to make the best choice of hospital for your treatment by exercising your legal rights.
                    </p>
                    <div class="btn-area mb-5">
                        @include('components.basic.button', [
                            'classTitle'        => 'btn btn-squared btn-brand-primary-1 font-18',
                            'buttonText'        => 'Find the right hospital',
                            'hrefValue'         => '/results-page',
                            ''
                        ])
                        @include('components.basic.button', [
                            'classTitle'        => 'btn btn-link',
                            'buttonText'        => 'Read our FAQs →',
                            'hrefValue'         => '/faqs',
                            'svg'               => 'chevron-right'
                        ])
                    </div>
{{--                    @include('components.basic.testimonial', [--}}
{{--                        'single'    => true,--}}
{{--                        'stars'     => 4.5--}}
{{--                    ])--}}
                </div>
                <div class="col-lg-6 about-hero-cont">
                    <div class="about-img-top"></div>
                    <div class="about-img-bottom"></div>
                    <img class="about-pattern-top-left" src="images/icons/about-top-left.svg" alt="dots">
                    <img class="about-pattern-right" src="images/icons/about-right.svg" alt="dots">
                    <img class="about-pattern-bottom" src="images/icons/about-bottom.svg" alt="dots">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h3 class="text-center">We know many people  aren’t aware of  their legal rights when it comes to their healthcare…
                        legal rights that could help them or a loved one receive treatment faster or be treated at a higher quality hospital.</h3>
                    <p class="col-grey p-secondary text-center">It’s a fact that waiting times and quality of care across  hospitals in England
                        vary greatly, with millions of people patiently waiting for treatment to start (as at December 2019 more than 600,000 people had been waiting longer than the NHS’ 18 week target).<br>
                        By knowing and acting upon their legal rights, many patients could shorten their waiting times and be treated quicker.
                    </p>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <div class="feature-box col-inner text-center bg-greylight p-4 SofiaPro-Medium font-14">
                        <p class="lh-16 SofiaPro-SemiBold">You have the legal right to choose where you have your NHS treatment*</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box col-inner text-center bg-greylight p-4 SofiaPro-Medium font-14">
                        <p class="lh-16 SofiaPro-SemiBold"> If you’ve already waited 18 weeks for that treatment, you have the legal right to select a different hospital*</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box col-inner text-center bg-greylight p-4 SofiaPro-Medium font-14">
                        <p class="lh-16 SofiaPro-SemiBold">You may choose to have your NHS-funded treatment at a private hospital*</p>
                    </div>
                </div>

                <div class="col-5 offset-5 my-3">
                    <div class="swirl svg-wrapper animated mb-4" data-animation="draw">
                        @svg('about-us-line')
                    </div>
                </div>
            </div>
            <div class="row understanding-choices">
                <div class="col-12">
                    <h2 class="text-center mb-5">Understand your available choices</h2>
                </div>
                <div class="col-md-3">
                    <div class="col-inner text-center">
                        <div class="hc-icon-wrapper mb-3">
                            <img src="/images/icons/waiting-times.svg" alt="Clock icon">
                        </div>
                        <p class="col-grey p-secondary">Seek treatment sooner, by comparing waiting times at different hospitals</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-inner text-center">
                        <div class="hc-icon-wrapper mb-3">
                            <img src="/images/icons/quality.svg" alt="Stars icon">
                        </div>
                        <p class="col-grey p-secondary">Select the best quality hospital, by comparing hospital quality rankings</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-inner text-center">
                        <div class="hc-icon-wrapper mb-3">
{{--                            @svg('icon-understanding-choices-3')--}}
                            <img src="/images/icons/paid-for.svg" alt="Medical cross icon">
                        </div>
                        <p class="col-grey p-secondary">Choose a private hospital paid for by the NHS or paid by yourself, or by your insurer, if that is your preference</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-inner text-center">
                        <div class="hc-icon-wrapper mb-3">
                            <img src="/images/icons/self-pay.svg" alt="Icon of price tag">
                        </div>
                        <p class="col-grey p-secondary">Access self-pay offers from time to time, provided by certain hospitals, to receive your treatment more quickly and more cost effectively, if you or your insurer wish to pay</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-impartial">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="image-wrapper mb-5">
                        <img class="about-img" src="images/about-3.jpg" alt="People in a meetin talking">
                        <img class="about-dots d-none d-lg-block" src="images/about-dots.svg" alt="People in a meetin talking">
                        <img class="about-circle d-none d-lg-block" src="images/about-circle.svg" alt="People in a meetin talking">
                    </div>
                    <h2>Impartiality: NHS vs Private</h2>
                    <p class="col-grey p-secondary">By using our unique, impartial system, you can search and compare healthcare providers across
                        the country completely free of charge, and make enquiries with a number of hospitals, before selecting the one that’s best suited to your needs.</p>
                    <p class="col-grey p-secondary">If your treatment is covered by NHS funding, select a hospital, make an enquiry through our site and then communicate
                        your decision to your GP. If you’re paying for your treatment privately then your enquiry will be the start of the process to arrange an initial appointment.</p>
                    <p class="col-grey p-secondary mb-5"> If you’re searching for treatment covered by your health insurance provider, then your enquiry will be the start of the
                        process to arrange an initial appointment.</p>
                    @include('components.basic.button', [
                        'buttonText'    => 'Find the right hospital',
                        'classTitle'    => 'btn btn-brand-primary-1 btn-squared',
                        'hrefValue'     => '/results-page'
                    ])
                </div>
            </div>
        </div>
    </section>
    {{--    <section>--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col col-12 hc-content">--}}
    {{--                    <h1 class=" mb-3">About Hospital Compare</h1>--}}
    {{--                    <h2 class=" col-brand-primary-1 font-28">Feel better faster by knowing your legal right to--}}
    {{--                        choose.</h2>--}}
    {{--                </div>--}}
    {{--                <div class="col col-7">--}}
    {{--                    <p>Hospital Compare is the unique healthcare comparison website that empowers you to know rights and--}}
    {{--                        make the best choices for your treatment.</p>--}}
    {{--                    <p>Many people across England aren’t aware of their legal rights when it comes to their healthcare…--}}
    {{--                        legal rights that could in fact help them or their loved feel better faster.</p>--}}
    {{--                    <p>It’s a fact that waiting times and quality of care in hospitals across the country can vary--}}
    {{--                        greatly, with millions of people patiently waiting for treatment (some already longer than the--}}
    {{--                        NHS’ 18 week target).</p>--}}
    {{--                    <p>By knowing and acting upon their legal rights, many patients could slash their waiting times and--}}
    {{--                        be treated quicker.</p>--}}
    {{--                </div>--}}
    {{--                <div class="col col-5">--}}
    {{--                    <div class="image-wrapper">--}}
    {{--                        <img class="w-100" src="{{ asset('/images/video_placeholder.jpg') }}"--}}
    {{--                             alt="People sat round a table having a chin wag ">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    {{--    <section class="bg-greylight">--}}
    {{--        <div class="container">--}}
    {{--            <div class="">--}}
    {{--                <div>--}}
    {{--                    <p class="SofiaPro-SemiBold font-24">For example, did you know:</p>--}}
    {{--                    <ul class="blue-dot">--}}
    {{--                        <li>You have the legal right to choose where you have your NHS treatment?</li>--}}
    {{--                        <li>That if you’ve already been waiting 18 weeks for that treatment, you have the legal right to select a different hospital?</li>--}}
    {{--                        <li>You can even choose to have your NHS-funded elective surgery at a private hospital?</li>--}}
    {{--                        <li>informing you of the Choices available to you in law for your hospital treatment</li>--}}
    {{--                        <li>helping you choose the best hospital in England for your treatment</li>--}}
    {{--                        <li>helping you to understand your available choices to have your hospital treatment performed--}}
    {{--                        </li>--}}
    {{--                    </ul>--}}
    {{--                    <p class="SofiaPro-SemiBold font-24">If the answer to any of those questions is ‘no’, Hospital--}}
    {{--                        Compare can help you. It’s our aim to:</p>--}}
    {{--                    <ul class="blue-dot">--}}
    {{--                        <li>Make you aware of the choices available to you</li>--}}
    {{--                        <li>Help you choose the best hospital in England for your treatment</li>--}}
    {{--                        <li>Help you understand the choices available to you, so your treatment can be performed…</li>--}}
    {{--                        <li>informing you of the Choices available to you in law for your hospital treatment</li>--}}
    {{--                        <li>helping you choose the best hospital in England for your treatment</li>--}}
    {{--                        <li>helping you to understand your available choices to have your hospital treatment performed--}}
    {{--                            <ol class="alpha">--}}
    {{--                                <li>Make you aware of the choices available to you</li>--}}
    {{--                                <li>Help you choose the best hospital in England for your treatment</li>--}}
    {{--                                <li>Help you understand the choices available to you, so your treatment can be performed…</li>--}}
    {{--                                <li>sooner, by comparing waiting times at different hospitals</li>--}}
    {{--                                <li>at the best quality hospital, by comparing hospital quality rankings</li>--}}
    {{--                                <li>at a private hospital paid for by the NHS or paid for you self, or by your insurer,--}}
    {{--                                    if that is your preference--}}
    {{--                                </li>--}}
    {{--                                --}}{{--                                <li>to bring you self- pay offers from time to time, provided by private hospitals, so--}}
    {{--                                --}}{{--                                    you can have your treatment performed quicker and more cost effectively, if you or--}}
    {{--                                --}}{{--                                    your insurer wish to pay--}}
    {{--                                --}}{{--                                </li>--}}
    {{--                            </ol>--}}
    {{--                        </li>--}}
    {{--                        --}}{{--                        <p>We compare hospital performance in England for you to consider. You are not charged for this--}}
    {{--                        --}}{{--                            service.</p>--}}
    {{--                        --}}{{--                        <p>Rest assured, one of our key principles is to provide impartial advice at all times on--}}
    {{--                        --}}{{--                            hospital availability and choice based on the search criteria we provide for you.</p>--}}
    {{--                        --}}{{--                        <p><strong>Private hospitals perform NHS treatments. That means you can choose to have your--}}
    {{--                        --}}{{--                                treatment at a private hospital paid for by the NHS. That is your legal choice (there--}}
    {{--                        --}}{{--                                are exceptions- see--}}
    {{--                        --}}{{--                                <a class="text-link" href="/your-rights">Your rights)</a>. This is at no greater cost to--}}
    {{--                        --}}{{--                                the tax payer.--}}
    {{--                        --}}{{--                            </strong></p>--}}
    {{--                    </ul>--}}
    {{--                    <p>By using our unique, accurate, up-to-date and unbiased database of hospital information in--}}
    {{--                        England, you can search and compare healthcare providers across the country completely free,--}}
    {{--                        before selecting the one that’s best suited to help you.--}}
    {{--                        If you choose an NHS hospital, talk to your GP as soon as possible to get a referral. If--}}
    {{--                        you’re paying for your treatment at a private hospital or are covered by your health--}}
    {{--                        insurance provider, they will contact you in due course.</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <section class="our-background pb-0">
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <h2 class="font-28 text-center">Our Background</h2>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h3 class="text-center">The team at Hospital Compare are passionate supporters of the NHS and the UK healthcare
                        system and believe  the NHS is amongst the very best healthcare providers in the world.
                    </h3>
                    <p class="col-grey p-secondary text-center">Launched in 2020, Hospital Compare is the first consumer-focused hospital
                        comparison website of its kind covering nhs funded treatment, self-pay and insurance treatment, helping users make
                        the best choice of hospital for their treatment. The team have a wealth of collective experience in the healthcare sector.
                    </p>
                    <p class="col-grey p-secondary text-center">To use Hospital Compare, enter your postcode at the top of this page and click ‘Find Hospitals’.</p>
                    <p class="col-grey p-secondary text-center">If you have any questions, you can email us by clicking <a class="btn-link" href="mailto:hello@hospitalcompare.co.uk">here</a>.</p>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-12 col-lg-8 offset-lg-2">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6 mb-4">--}}
{{--                            <div class="hc-icon-wrapper mb-3">--}}
{{--                                <img src="{{asset('/images/icons/comparison-website.svg')}}" alt="Comparison icon">--}}
{{--                            </div>--}}
{{--                            <p class="mb-3 SofiaPro-SemiBold font-16">Comparison Website</p>--}}
{{--                            <p class="col-grey p-secondary">Hospital Compare is the unique healthcare comparison website--}}
{{--                                that empowers you to know rights and make the best choices for your treatment.</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-4">--}}
{{--                            <div class="hc-icon-wrapper mb-3">--}}
{{--                                <img src="{{asset('/images/icons/waiting-times.svg')}}" alt="Clock icon">--}}
{{--                            </div>--}}
{{--                            <p class="mb-3 SofiaPro-SemiBold font-16">Waiting Times</p>--}}
{{--                            <p class="col-grey p-secondary">It’s a fact that waiting times and quality of care in--}}
{{--                                hospitals across the country can vary greatly, with millions of people patiently waiting--}}
{{--                                for treatment (some already longer than the NHS’ 18 week target).</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-4">--}}
{{--                            <div class="hc-icon-wrapper mb-3">--}}
{{--                                <img src="{{asset('/images/icons/legal-rights.svg')}}" alt="Gavel icon">--}}
{{--                            </div>--}}
{{--                            <p class="mb-3 SofiaPro-SemiBold font-16">Legal Rights</p>--}}
{{--                            <p class="col-grey p-secondary">Many people across England aren’t aware of their legal--}}
{{--                                rights when it comes to their healthcare… legal rights that could in fact help them or--}}
{{--                                their loved feel better faster.</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6 mb-4">--}}
{{--                            <div class="hc-icon-wrapper mb-3">--}}
{{--                                <img src="{{asset('/images/icons/faster-treatment-times.svg')}}" alt="Calendar icon">--}}
{{--                            </div>--}}
{{--                            <p class="mb-3 SofiaPro-SemiBold font-16">Faster Treatment Times</p>--}}
{{--                            <p class="col-grey p-secondary">By knowing and acting upon their legal rights, many patients--}}
{{--                                could slash their waiting times and be treated quicker.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
{{--    @include('pages.pagesections.social')--}}
@endsection
