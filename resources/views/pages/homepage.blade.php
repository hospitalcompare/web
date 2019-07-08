@extends('layout.app')

@section('title', 'Page Test')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

{{--creates path for CSS file --}}
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush


{{--creates path for JS file --}}
@push('main')
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endpush

@push('jquery')
    <script src="{{ asset('js/library/jquery-3.4.1.min.js') }}"></script>

@endpush

@push('font-awesome')
    <script src="{{ asset('js/library/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/d4b841dc1e.js') }}"></script>
@endpush

@push('banner')
   <section class="banner">
        <div class="bannerData">
            <div class="homePostCodeParent">
                <div class="homePostCodeBox">
                    <p>Find the best hospital for your
                        elective surgery</p>

                    @component('components.basic.selectbox')

                            Choose your procedure:

                        @slot('selectboxOption1')
                            surgery
                        @endslot
                            @slot('selectboxOption2')
                                Orthopedics
                            @endslot
                    @endcomponent
                    @component('components.basic.textbox')
                        @slot('textbox')
                            Enter your postcode
                        @endslot
                    @endcomponent
                    @component('components.basic.selectbox')
                        Up to 50 miles
                        @slot('selectboxOption1')
                            Up to 20 miles
                        @endslot
                        @slot('selectboxOption2')
                            Less than 20 miles
                        @endslot
                    @endcomponent

                    @component('components.basic.button')
                        @slot('button')
                            Find hospitals
                        @endslot
                    @endcomponent
                </div>
            </div>
            <div class="homePromo">
                <p>The quality of care in England varies greatly
                    between hospitals. You have the legal right to choose
                    where to have your elective surgery*. It can be at:</p>
                <ul class="promoList">
                    <li><i class="fas fa-check"></i> An NHS hospital of your choice</li>
                    <li><i class="fas fa-check"></i> A private hospital funded by NHS</li>
                    <li><i class="fas fa-check"></i> A private hospital paid by you or
                        your insurance provider</li>
                </ul>
            </div>
        </div>
   </section>
@endpush

@push('whychoose')
    @component('components.basic.whysection')

        Why use Hospital Compare?

        @slot('choiceText')
            Hospital Compare helps you make the best possible choice when it comes to choosing a suitable hospital for your elective procedure. <br>

            64% of people in the UK are not aware that they could have the option of an NHS funded operation in a private hospital. We are here to help you understand your rights and make the right choice. <br>

            Whether you are searching for the best NHS hospital or the best private hospital, Hospital Compare is the only place that provides an accurate, up-to-date and unbiased assessment of all hospitals in the UK.
        @endslot
        @slot('choiceVideo')
            <video controls>

            </video>
        @endslot
    @endcomponent
@endpush

@push('howSection')
    @component('components.basic.howsection')

        How does it work?

        @slot('firstIcon')
            <img src="{{ asset('images/003-doctor.png') }}">
        @endslot
        @slot('firstIconTitle')
            Get your referral from the GP
                or have a surgery in mind
        @endslot
        @slot('firstIconBio')
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
        @endslot
        @slot('secondIcon')
            <img src="{{ asset('images/001-search-1.png') }}">
        @endslot
        @slot('secondIconTitle')
            Search by postcode
            or speciality
        @endslot
        @slot('secondIconBio')
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
        @endslot

        @slot('thirdIcon')
            <img src="{{ asset('images/Layer_536.png') }}">
        @endslot
        @slot('thirdIconTitle')
            Find the best hospital
            for you
        @endslot
        @slot('thirdIconBio')
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
        @endslot
        @slot('fourthIcon')
            <img src="{{ asset('images/Layer_537.png') }}">
        @endslot
        @slot('fourthIconTitle')
            Book your
            operation
        @endslot
        @slot('fourthIconBio')
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
        @endslot
    @endcomponent
@endpush

@push('choosehealth')
    @component('components.basic.choosehealth')



        @slot('choosehealthbanner')
            test
        @endslot

    @endcomponent
@endpush









