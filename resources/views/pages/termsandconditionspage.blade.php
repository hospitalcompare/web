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
                    {{--                    <ul>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                        <li><a href=""></a></li>--}}
                    {{--                    </ul>--}}

                    <div class="accordion" id="terms_accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Who we are and how to contact us
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#terms_accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#terms_accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#terms_accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

@endsection
