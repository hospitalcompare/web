@extends('layout.app')

@section('title', 'Page Test')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

{{--creates path for CSS file --}}
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush


{{--creates path for JS file --}}
@push('main')
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endpush

@push('button')
    <script type="text/javascript" src="{{ asset('js/button.js') }}"></script>
@endpush

@push('jquery')
    <script src="{{ asset('js/library/jquery-3.4.1.min.js') }}"></script>

@endpush

@push('font-awesome')
    <script src="{{ asset('js/library/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/d4b841dc1e.js') }}"></script>
@endpush


@section('content')
    <div class="bannerParent">
        <section class="banner">

            <div class="bannerData">
                <div class="homePostCodeParent">
                    <div class="box">

                        <p>Find the best hospital for your
                            elective surgery</p>
                        <form class="formElem">
                            <div class="formSelectChild">
                                @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'chevronFAClassName' => 'fa-chevron-down aquaChevron'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'select1'])
                            </div>
                            <div class="formTextChild">
                                @include('components.basic.textbox', ['placeholder' => 'Enter your postcode'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'textBox1'])
                            </div>
                            <div class="formSelectChild">
                                 @include('components.basic.selectbox', ['options' => [['id'=>' lessWideSelect', 'name'=>'Up to 50 miles'], ['id'=>2, 'name'=>'Up to 20 miles'], ['id'=>1, 'name'=>'Less than 20 miles']], 'selectClassName'=> 'lessWideSelect', 'placeholder' => 'How far would you like to travel?:', 'chevronFAClassName' => 'fa-chevron-down aquaChevron adjustPosition1'])
                                 @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'select2', 'className' => 'adjustHelpLink'])

                            </div>
                            @include('components.basic.button', ['classTitle' => 'greenOval blockDisplay', 'button' => 'Find hospitals'])

{{--                            @include('components.basic.submitButton', ['button' => 'Find hospitals'])--}}

                            <p class='browseButton'><a  href="">Browse all hospitals</a></p>

                        </form>
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
    </div>
    @include('components.whysection', ['title' => 'Why use Hospital Compare?', 'description' => 'Hospital Compare helps you make the best possible choice when it comes to choosing a suitable hospital for your elective procedure.

        64% of people in the UK are not aware that they could have the option of an NHS funded operation in a private hospital. We are here to help you understand your rights and make the right choice.

        Whether you are searching for the best NHS hospital or the best private hospital, Hospital Compare is the only place that provides an accurate, up-to-date and unbiased assessment of all hospitals in the UK.', 'videoPoster' => 'images/video_placeholder.png'])

    <div class="howSectionParent">
        @include('components.howsection', ['howsections' => [['iconImg'=> 'images/003-doctor.png', 'numeral'=> '1', 'title'=>'Get your referral from the GP
            or have a surgery in mind', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis' ], ['iconImg'=> 'images/001-search-1.png', 'numeral'=> '2', 'title'=>'Search by postcode
            or speciality', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis'], ['iconImg'=> 'images/Layer_536.png', 'numeral'=> '3', 'title'=>'Find the best hospital
            for you', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis'], ['iconImg'=> 'images/Layer_537.png', 'numeral'=> '4', 'title'=>'Book your
            operation', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis' ] ], 'sectionTitle' => 'How does it work' ])
    </div>
    @include('components.healthchoice', ['choosehealthbanner' => '', 'buttonName' => 'Choose your health', 'classTitle' => 'blueOval' ] )
    <div class="blogSectionParent">


        <h1 class="pageTitle">Making the right choice</h1>
        <div class="blogContent">
            @include('components.blogs', ['blogs' => [['iconImg'=> 'images/Layer_16.png' , 'title'=>'blog', 'description' => 'blah blah blah' ], ['iconImg'=> 'images/Layer_17.png' , 'title'=>'blog', 'description' => 'blah blah blah'], ['iconImg'=> 'images/Layer_18.png' , 'title'=>'blog', 'description' => 'blah blah blah']], 'classTitle'=> 'blueOval', 'buttonTitle' => 'Read more' ])
        </div>
    </div>
@endsection


















