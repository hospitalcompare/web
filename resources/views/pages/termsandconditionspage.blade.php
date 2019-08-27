@extends('layout.app')

@section('title', 'Terms and Conditions')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'terms-and-conditions-page')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col hc-content">
                    <h1>Hospital Compare - Terms of Use</h1>
                    <h3 class="textuppercase">PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY BEFORE USING THIS SITE
                    </h3>
                    <h3>What's in these terms?</h3>
                    <p>These terms tell you the rules for using our website www.hospitalcompare.co.uk <strong>(our
                            site)</strong>.</p>
                    <p>Click on the links below to go straight to more information on each area:
                    </p>

                    @include('components.accordion', [
                    'showLinks' => true,
                    'accordionTitle' => 'terms',
                    'cards' => [
                        [
                            'title' => 'Who we are and how to contact us',
                            'content' => '<p>
                                    www.hospitalcompare.co.uk is a site operated by Hospital Compare Limited ("We").
                                    We
                                    are registered in England and Wales under company number 11514491 and have our
                                    registered office and trading address at Hospital Compare Limited, Liverpool
                                    Science
                                    Park, ICi Building, 131 Mount Pleasant, Liverpool L3 5TF. Our main trading
                                    address
                                    is Our VAT number is 325696672.
                                </p>
                                <p>We are a private limited company.
                                </p>
                                <p>To contact us, please email <a class="btn-link" href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk</a>
                                </p>'
                        ],
                        [
                            'title' => 'What do you do? What don’t you do? Can I trust you?',
                            'content' => '<p>We have created Hospital Compare as a free to use comparison website for all
                    consumers or patients who require hospital treatment and a few other things too.
                    We provide comparison information to consumers on hospitals, whether the
                    hospital is an NHS hospital, a private hospital performing NHS funded work or a
                    private hospital performing paid for private sector work.
                </p>
                <p>We don’t advise you on health, medical, financial or other matters and we don’t
                    provide you with recommendations, but we do provide you with the very best
                    publically available information, clearly and openly so you can make informed
                    “choices” to meet your needs in choosing a hospital based on the performance
                    data we provide and we connect you with those who can advise you.
                </p>
                <p>All the information we provide is compiled from trusted government and other
                    sources principally from the Care Quality Commission <strong>(CQC)</strong>, the
                    body responsible
                    for oversight of all care provider entities, and from the NHS itself and from
                    other reliable data sources. The information and is processed and complied by
                    our experts into readily accessible and clear formats to guide you. We update
                    our information as often as the CQC itself.
                </p>
                <p>Your privacy is of the highest importance us, we never collect information from
                    you which exceeds the minimum necessary for us to provide the services we offer
                    you. Some of the information we collect relates to your location or postcode
                    which you enter on our site so that you can search for relevant information
                    about hospitals and other services close to you. If you make an enquiry to a
                    relevant hospital, they will need some personal information about you. The
                    information you set out on an enquiry form on our site is stored by us and is
                    keep private in accordance with our <a href="/privacy-policy"
                                                           class="btn-link">Privacy Policy</a>. If you
                    provide hospitals or other service providers we connect you with with personal
                    information that information will be governed by their privacy policies, which
                    you should review to be sure you understand how your information is being
                    protected.
                </p>'
                        ],
                        [
                        'title' => 'By using our site you accept these terms',
                        'content' => '
                                    <p>By using our site, you confirm that you accept these terms of use and that you agree to comply with them. This constitutes a contract                                           between us.</p>
                                    <p>If you do not agree to these terms, you must not use our site or services.
                                    </p>
                                    <p>We recommend that you print a copy of these terms for future reference.
                                    </p>
                        '],
                        [
                        'title' => 'There are other terms that may apply to you',
                        'content' => '<p>
                                            These terms of use refer to the following additional terms, which also apply to your use of our site and services:
                                        </p>
                                        <ul>
                                            <li>Our <a href="/privacy-policy" class="btn-link">Privacy Policy</a>. This sets out information confirming how we respect your privacy. If you complete an enquiry form on our site to make an enquiry to a hospital or other service provider that hospital or service provider will have terms and conditions relating to your enquiry and privacy which you should consider.
                                            </li>
                                            <li>Our <a href="/cookie-policy" class="btn-link">Cookie Policy</a>, which sets out information about the cookies on our site.
                                            </li>
                                            <li>If you purchase services or products from any site that is linked to ours that site will have the terms and conditions of that will apply to that purchase. We are not responsible for the terms you agree with hospitals or other service providers
                                            </li>
                                        </ul>']
                    ]])


                </div>
            </div>
        </div>

    </section>

@endsection
