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
                    <h2 class="SofiaPro-SemiBold col-turq font-28">Feel better faster by knowing your legal right to
                        choose.</h2>
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
                    <p class="SofiaPro-SemiBold font-24">For example, did you know:</p>
                    <ul class="blue-dot">
                        <li>You have the legal right to choose where you have your NHS treatment?</li>
                        <li>That if you’ve already been waiting 18 weeks for that treatment, you have the legal right to select a different hospital?</li>
                        <li>You can even choose to have your NHS-funded elective surgery at a private hospital?</li>
{{--                        <li>informing you of the Choices available to you in law for your hospital treatment</li>--}}
{{--                        <li>helping you choose the best hospital in England for your treatment</li>--}}
{{--                        <li>helping you to understand your available choices to have your hospital treatment performed--}}
{{--                        </li>--}}
                    </ul>
                    <p class="SofiaPro-SemiBold font-24">If the answer to any of those questions is ‘no’, Hospital
                        Compare can help you. It’s our aim to:</p>
                    <ul class="blue-dot">
                        <li>Make you aware of the choices available to you</li>
                        <li>Help you choose the best hospital in England for your treatment</li>
                        <li>Help you understand the choices available to you, so your treatment can be performed…</li>
{{--                        <li>informing you of the Choices available to you in law for your hospital treatment</li>--}}
{{--                        <li>helping you choose the best hospital in England for your treatment</li>--}}
{{--                        <li>helping you to understand your available choices to have your hospital treatment performed--}}
                            <ol class="alpha">
                                <li>Make you aware of the choices available to you</li>
                                <li>Help you choose the best hospital in England for your treatment</li>
                                <li>Help you understand the choices available to you, so your treatment can be performed…</li>
{{--                                <li>sooner, by comparing waiting times at different hospitals</li>--}}
{{--                                <li>at the best quality hospital, by comparing hospital quality rankings</li>--}}
{{--                                <li>at a private hospital paid for by the NHS or paid for you self, or by your insurer,--}}
{{--                                    if that is your preference--}}
{{--                                </li>--}}
                                {{--                                <li>to bring you self- pay offers from time to time, provided by private hospitals, so--}}
                                {{--                                    you can have your treatment performed quicker and more cost effectively, if you or--}}
                                {{--                                    your insurer wish to pay--}}
                                {{--                                </li>--}}
                            </ol>
                        </li>
                        {{--                        <p>We compare hospital performance in England for you to consider. You are not charged for this--}}
                        {{--                            service.</p>--}}
                        {{--                        <p>Rest assured, one of our key principles is to provide impartial advice at all times on--}}
                        {{--                            hospital availability and choice based on the search criteria we provide for you.</p>--}}
                        {{--                        <p><strong>Private hospitals perform NHS treatments. That means you can choose to have your--}}
                        {{--                                treatment at a private hospital paid for by the NHS. That is your legal choice (there--}}
                        {{--                                are exceptions- see--}}
                        {{--                                <a class="text-link" href="/your-rights">Your rights)</a>. This is at no greater cost to--}}
                        {{--                                the tax payer.--}}
                        {{--                            </strong></p>--}}
                    </ul>
                    <p>By using our unique, accurate, up-to-date and unbiased database of hospital information in
                        England, you can search and compare healthcare providers across the country completely free,
                        before selecting the one that’s best suited to help you.
                        If you choose an NHS hospital, talk to your GP as soon as possible to get a referral. If
                        you’re paying for your treatment at a private hospital or are covered by your health
                        insurance provider, they will contact you in due course.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <h2 class="SofiaPro-SemiBold col-turq font-28">Background</h2>
                </div>
                <div class="col col-7">
                    <p>
                        Launched in 2020, Hospital Compare is the first consumer-focused hospital comparison website of
                        its kind and the brainchild of a team with more than 50 years collective experience in the
                        healthcare sector.
                    </p>
                    <p>
                        The team are passionate supporters and proponents of the NHS and the UK healthcare system as a
                        whole. We’re proud believers of its ideology and chose to launch Hospital Compare to support and
                        reinforce those core beliefs.
                        To find out more about your rights, tap <a class="text-link" href="/your-rights">here</a>.
                    </p>
                    <p>
                        To use Hospital Compare now, complete the form at the top of this page now.
                    </p>
                    <p>
                        If you have any questions, please contact us by emailing us at: <a class=""
                                                                                           href="mailto:info@hospitalcompare.co.uk">info@hospitalcompare.co.uk</a>
                    </p>
                    {{--                    <p>Hospital Compare is the unique healthcare comparison website that empowers you to know rights and--}}
                    {{--                        make the best choices for your treatment.</p>--}}
                    {{--                    <p>Many people across England aren’t aware of their legal rights when it comes to their healthcare…--}}
                    {{--                        legal rights that could in fact help them or their loved feel better faster.</p>--}}
                    {{--                    <p>It’s a fact that waiting times and quality of care in hospitals across the country can vary--}}
                    {{--                        greatly, with millions of people patiently waiting for treatment (some already longer than the--}}
                    {{--                        NHS’ 18 week target).</p>--}}
                    {{--                    <p>By knowing and acting upon their legal rights, many patients could slash their waiting times and--}}
                    {{--                        be treated quicker.</p>--}}
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
