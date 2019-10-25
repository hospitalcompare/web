@extends('layout.app')

@section('title', $id)

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'blog-item-page')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col hc-content">
                    <div class="jumbotron rounded mb-0" style="background-image: url('../images/placeholder.jpg')">

                    </div>
                    <div class="blog-title font-36 SofiaPro-SemiBold my-3">Lemon drops gummi bears bear claw jujubes
                        tart cupcake tart
                        caramels bonbon
                    </div>
                    <hr class="bg-teal">
                    <div class="font-24 SofiaPro-Medium mt-3 mb-4">
                        <span class="d-inline-block col-teal">Date:&nbsp;</span>25th Oct 2019
                        <span class="ml-5 d-inline-block col-teal">Category:&nbsp;</span>Category name
                    </div>
                    <div class="blog-content mb-4">
                        <p class="font-28 SofiaPro-Medium">Tootsie roll toffee lemon drops jelly tart chocolate cake
                            sweet. Croissant jujubes cake sweet
                            cake sweet brownie. Jelly ice cream bonbon.</p>
                        <p>Gingerbread tiramisu cake cake halvah. Bonbon soufflé toffee gummies biscuit. Macaroon
                            chocolate cake toffee lemon drops sesame snaps lollipop. Marshmallow ice cream candy canes
                            pudding jujubes danish. Marzipan tart dragée chocolate bar halvah pudding. Tart marshmallow
                            gummi bears jelly-o gingerbread jelly beans. Gummi bears toffee croissant cheesecake halvah
                            soufflé. Marshmallow pastry chocolate.</p>
                        <p>Liquorice tootsie roll toffee jelly-o marzipan fruitcake liquorice. Sesame snaps brownie
                            apple pie macaroon. Candy sweet cupcake. Chupa chups cake gummies halvah jujubes. Gummies
                            carrot cake jujubes chocolate cake. Pudding gummi bears cupcake candy. Macaroon fruitcake
                            sugar plum. Candy canes cheesecake cookie croissant sesame snaps oat cake. Wafer sesame
                            snaps sesame snaps. Macaroon cookie icing muffin powder candy topping biscuit.</p>
                        <p>Donut macaroon cheesecake. Liquorice halvah cookie cake tootsie roll apple pie caramels
                            liquorice toffee. Caramels cupcake jujubes pudding jelly beans ice cream. Soufflé oat cake
                            tootsie roll chocolate bar. Ice cream tootsie roll cotton candy cookie. Chocolate cake
                            macaroon gummies. Croissant cotton candy cheesecake cake tootsie roll liquorice dessert bear
                            claw. Cake croissant lemon drops wafer jelly-o lemon drops.</p>
                        <p>Sweet roll oat cake chocolate lemon drops liquorice tart pie macaroon danish. Cake liquorice
                            candy. Tart pudding lollipop brownie macaroon. Chocolate topping tiramisu jelly-o. Candy
                            canes muffin bonbon. Cheesecake ice cream dragée icing sweet dragée bonbon.</p>
                    </div>
                    <div class="sharing-is-caring">
                        <span class="col-teal font-24 SofiaPro-Medium">Share:&nbsp;</span>
                        <ul class="d-inline-block sharing-icons">
                            <li class="d-inline-block"><a
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                    target="_blank" title="share to Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="d-inline-block">
                                <a target="_blank" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class=""
                                   data-show-count="false" title="Share to twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->full()) }}&title={{urlencode($id) }}" title="Share to LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://www.hospitalcompare.co.uk"
                                                          title="Share by Email"><i class="fas fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection
