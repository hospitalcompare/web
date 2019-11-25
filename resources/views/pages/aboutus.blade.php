@extends('layout.app')

@section('title', 'About Us')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'about-us-page hc-content')

@section('content')
    @include('pages.pagesections.banner', [
    'layout'    => 'row',
    'hideText'  => 'true'
])
    <section>
        <div class="container">
            <div class="row">
                <div class="col col-12 hc-content">
                    <h1 class="SofiaPro-SemiBold mb-3">About Hospital Compare</h1>
                    <p class="SofiaPro-SemiBold col-turq font-28">Feel better faster by knowing your legal right to
                        choose.</p>
                </div>
                <div class="col col-7">
                    <p>Hospital Compare is the unique healthcare comparison website that empowers you to know rights and
                        make the best choices for your treatment.</p>
                    <p>Many people across England aren’t aware of their legal rights when it comes to their healthcare…
                        legal rights that could in fact help them or their loved feel better faster.</p>
                    <p>It’s a fact that waiting times and quality of care in hospitals across the country can vary
                        greatly, with millions of people patiently waiting for treatment (some already longer than the
                        NHS’ 18 week target).</p>
                    <p>By knowing and acting upon their legal rights, many patients could slash their waiting times and
                        be treated quicker.</p>
                </div>
                <div class="col col-5">
                    <div class="image-wrapper">
                        <img class="w-100" src="{{ asset('/images/video_placeholder.jpg') }}"
                             alt="People sat round a table having a chin wag ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-greylight">
        <div class="container">
            <div class="">
                <div>
                    <ul class="blue-dot">
                        <li>informing you of the Choices available to you in law for your hospital treatment</li>
                        <li>helping you choose the best hospital in England for your treatment</li>
                        <li>helping you to understand your available choices to have your hospital treatment performed
                            <ol class="alpha">
                                <li>sooner, by comparing waiting times at different hospitals</li>
                                <li>at the best quality hospital, by comparing hospital quality rankings</li>
                                <li>at a private hospital paid for by the NHS or paid for you self, or by your insurer,
                                    if that is your preference
                                </li>
                                <li>to bring you self- pay offers from time to time, provided by private hospitals, so
                                    you can have your treatment performed quicker and more cost effectively, if you or
                                    your insurer wish to pay
                                </li>
                            </ol>
                        </li>
                        <p>We compare hospital performance in England for you to consider. You are not charged for this
                            service.</p>
                        <p>Rest assured, one of our key principles is to provide impartial advice at all times on
                            hospital availability and choice based on the search criteria we provide for you.</p>
                        <p><strong>Private hospitals perform NHS treatments. That means you can choose to have your
                                treatment at a private hospital paid for by the NHS. That is your legal choice (there
                                are exceptions- see
                                <a class="text-link" href="/your-rights">Your rights)</a>. This is at no greater cost to
                                the tax payer.
                            </strong></p>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <p class="SofiaPro-SemiBold col-turq font-28">Background</p>
                </div>
                <div class="col col-7">
                    <p>Hospital Compare is the unique healthcare comparison website that empowers you to know rights and
                        make the best choices for your treatment.</p>
                    <p>Many people across England aren’t aware of their legal rights when it comes to their healthcare…
                        legal rights that could in fact help them or their loved feel better faster.</p>
                    <p>It’s a fact that waiting times and quality of care in hospitals across the country can vary
                        greatly, with millions of people patiently waiting for treatment (some already longer than the
                        NHS’ 18 week target).</p>
                    <p>By knowing and acting upon their legal rights, many patients could slash their waiting times and
                        be treated quicker.</p>
                </div>
                <div class="col col-5">
                    <div class="image-wrapper">
                        <img class="w-100" src="{{ asset('/images/video_placeholder.jpg') }}"
                             alt="People sat round a table having a chin wag ">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
