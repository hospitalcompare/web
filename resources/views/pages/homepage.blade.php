@extends('layout.app')

@section('title', 'Homepage')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'home-page')

@section('content')
    <div class="bannerParent">
        <section class="banner">
            <div class="bannerData">
                <div class="homePostCodeParent">
                    <div class="box fullLeft">
                        <p>Find the best hospital for your elective surgery</p><br>
                        <form class="formElem" method="get" action="/results_page">

                            <div class="formChild fullLeft">
                                @include('components.basic.selectbox', ['selectClass'=> 'big', 'options' => $data['procedures'], 'chevronFAClassName' => 'fa-chevron-down aquaChevron', 'placeholder'=>'Choose your procedure (if known)', 'name'=> 'procedure_id'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'Procedures list', 'lightBoxClass' => 'lightboxAdjust'])
                            </div>

                            <div class="formChild fullLeft">
                                @include('components.basic.textbox', ['placeholder' => 'Enter postcode', 'className' => 'postcode-text-box big', 'value' => '', 'name' => 'postcode', 'id' => 'input_postcode'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'textBox1', 'lightBoxClass' => 'lightboxAdjust'])
                                <div class="postcode-autocomplete-cont">
                                    <div class="ajax-box"></div>
                                </div>
                            </div>

                            <div class="formChild fullLeft d-flex">
                                @include('components.basic.selectbox', ['showLabel' => true, 'selectClass'=> '', 'options' => [['id'=>50, 'name'=>'Up to 50 miles'], ['id'=>20, 'name'=>'Up to 20 miles'], ['id'=>10, 'name'=>'Less than 10 miles']], 'selectClassName'=> 'd-flex select_half-width', 'placeholder' => 'How far would you like to travel?', 'chevronFAClassName' => '', 'name'=>'radius'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'select2', 'className' => '', 'lightBoxClass' => 'lightboxAdjust'])
                            </div>

                            <div class="formChild fullLeft d-none">
                                @include('components.basic.selectbox', ['showLabel' => true, 'selectClass'=> '', 'options' => [['id'=>1, 'name'=>'Provider Name']], 'selectClassName'=> 'd-flex select_half-width', 'placeholder' => 'Do you have private healthcare insurance?', 'chevronFAClassName' => '', 'name'=>'insurance_id'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'select2', 'className' => '', 'lightBoxClass' => 'lightboxAdjust'])
                            </div>

                            @include('components.basic.submit', ['classTitle' => 'btn btn-m btn-grad btn-teal', 'button' => 'Find Hospitals'])

                            <p class='browseButton'><a href="{{url('/results_page')}}">Browse all hospitals</a></p>

                        </form>
                    </div>
                </div>
                <div class="homePromo">
                    <p>The quality of care in England varies greatly between hospitals. You have the legal right to
                        choose where to have your elective surgery*. It can be at: </p>
                    <ul class="promoList">
                        <li>An NHS hospital of your choice</li>
                        <li>A private hospital funded by NHS</li>
                        <li>A private hospital paid by you</li>
                        <li>A private hospital paid by your insurance provider</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <div class="whyChooseParent">
        <div class="whyChooseContent">

            <section class="whyChoose">
                <div class="chooseText">
                    <h1 class="pageTitle">Why use Hospital Compare?</h1>
                    <p>Hospital Compare helps you make the best possible choice when it comes to choosing a suitable
                        hospital for your elective procedure.</p>
                    <p>64% of people in the UK are not aware that they could have the option of an NHS funded operation
                        in a private hospital. We are here to help you understand your rights and make the right
                        choice.</p>
                    <p>Whether you are searching for the best NHS hospital or the best private hospital, Hospital
                        Compare is the only place that provides an accurate, up-to-date and unbiased assessment of all
                        hospitals in the UK.</p>
                </div>
                <div class="chooseVideo">
                    <div class="videoParent">
                        <video muted class="content" poster="{{ url('images/video_placeholder.png') }}" >
                            <source src="{{ asset('video/For_Wes.mp4') }}" type="video/mp4">
{{--                            <source src="movie.ogg" type="video/ogg">--}}
{{--                            Your browser does not support the video tag.--}}
                        </video>
                        <div class="playerButton toggle"></div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="howSectionParent">
        @include('components.howsection', ['howsections' => [
        ['iconImg'=> 'images/003-doctor.png', 'numeral'=> '1.', 'title'=>'Get your referral from the GP or have a surgery in mind', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis' ],
        ['iconImg'=> 'images/001-search-1.png', 'numeral'=> '2.', 'title'=>'Search by postcode or speciality', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis'],
        ['iconImg'=> 'images/Layer_536.png', 'numeral'=> '3.', 'title'=>'Find the best hospital for you', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis'],
        ['iconImg'=> 'images/Layer_537.png', 'numeral'=> '4.', 'title'=>'Book your operation', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet sem ut magna ornare ullam corper a sed nisi. Maecenas vitae lectus efficitur, scelerisque justo nec, hendrerit dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis' ] ],
        'sectionTitle' => 'How does it work?' ])
    </div>

    @include('components.healthchoice', ['choosehealthbanner' => '', 'buttonName' => 'Choose your health', 'classTitle' => 'btn btn-icon btn-arrow-right mx-auto' ] )

    <div class="blogSectionParent">
        <h1 class="pageTitle">Making the right choice</h1>
        <div class="blogContent">
            @include('components.blogs', ['blogs' =>
            [
                ['iconImg'=> 'images/Layer_16.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/1')],
                ['iconImg'=> 'images/Layer_17.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/2')],
                ['iconImg'=> 'images/Layer_18.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/3')]
            ], 'classTitle'=> '', 'buttonTitle' => 'Read more', 'buttonClass' => 'btn btn-block btn-read-more' ])
        </div>
    </div>
@endsection
