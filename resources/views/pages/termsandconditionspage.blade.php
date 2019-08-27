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
                            'title' => 'Card-title2',
                            'content' => '<a class="btn-link" href="/">Test link 2</a>'
                        ]
                    ]])


                </div>
            </div>
        </div>

    </section>

@endsection
