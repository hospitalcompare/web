@extends('layout.app')

@section('title', 'Homepage')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('content')
    <div class="bannerParent">
        <section class="banner">
            <div class="bannerData">
                <div class="homePostCodeParent">
                    <div class="box fullLeft">
                        <p>Find the best hospital for your elective surgery</p><br>
                        <form class="formElem" method="get" action="/results_page">

                            <div class="formChild fullLeft">
                                @include('components.basic.selectbox', ['selectClass'=> 'big', 'options' => $data['procedures'], 'chevronFAClassName' => 'fa-chevron-down aquaChevron', 'placeholder'=>'Choose your procedure', 'name'=>'procedure_id'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'Procedures list', 'lightBoxClass' => 'lightboxAdjust'])
                            </div>

                            <div class="formChild fullLeft">
                                @include('components.basic.textbox', ['placeholder' => 'Enter your postcode', 'className' => 'postcode-text-box big', 'value' => '', 'name' => 'postcode', 'id' => 'input_postcode'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'textBox1', 'lightBoxClass' => 'lightboxAdjust'])
                                <div class="postcode-autocomplete-cont">
                                    <div class="ajax-box"></div>
                                </div>
                            </div>

                            <div class="formChild fullLeft">
                                 @include('components.basic.selectbox', ['selectClass'=> 'big', 'options' => [['id'=>50, 'name'=>'Up to 50 miles'], ['id'=>20, 'name'=>'Up to 20 miles'], ['id'=>10, 'name'=>'Less than 10 miles']], 'selectClassName'=> 'lessWideSelect', 'placeholder' => 'How far would you like to travel?', 'chevronFAClassName' => 'fa-chevron-down aquaChevron', 'name'=>'radius'])
                                 @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'select2', 'className' => '', 'lightBoxClass' => 'lightboxAdjust'])
                            </div>

                            <div class="formChild fullLeft">
                                @include('components.basic.selectbox', ['selectClass'=> 'big', 'options' => [['id'=>1, 'name'=>'Provider Name']], 'selectClassName'=> 'lessWideSelect', 'placeholder' => 'Do you have private healtchare insurance?', 'chevronFAClassName' => 'fa-chevron-down aquaChevron', 'name'=>'insurance_id'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'select2', 'className' => '', 'lightBoxClass' => 'lightboxAdjust'])
                            </div>

                            @include('components.basic.submit', ['classTitle' => 'greenOval', 'button' => 'Find hospitals'])

                            <p class='browseButton'><a  href="{{url('/results_page')}}">Browse all hospitals</a></p>

                        </form>
                    </div>
                </div>
                <div class="homePromo">
                    <p>The quality of care in England varies greatly between hospitals. You have the legal right to choose where to have your elective surgery*. It can be at: </p>
                    <ul class="promoList">
                        <li><i class="fas fa-check"></i> An NHS hospital of your choice</li>
                        <li><i class="fas fa-check"></i> A private hospital funded by NHS</li>
                        <li><i class="fas fa-check"></i> A private hospital paid by you</li>
                        <li><i class="fas fa-check"></i> A private hospital paid by your insurance provider</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <div class="howSectionParent">
        @include('components.howsection', ['howsections' => [
        ['iconImg'=> 'images/003-doctor.png', 'title'=>'Standard procedure at an NHS Hospital', 'description' => 'You have the legal right to choose which NHS hospital to have your NHS procedure at.' ],
        ['iconImg'=> 'images/003-doctor.png', 'title'=>'NHS Funded in a private hospital', 'description' => 'You have the legal right to have an NHS funded procedure at a private hospital of your choice'],
        ['iconImg'=> 'images/003-doctor.png', 'title'=>'Private Healthcare Insurance', 'description' => 'Many private healthcare insurance policies allow you to choose a hospital for your procedure'],
        ['iconImg'=> 'images/003-doctor.png', 'title'=>'Self Pay at a Private Hospital', 'description' => 'If time is a critical factor for you then a good option may be to self-pay and have your procedure done immediately' ] ],
        'sectionTitle' => 'Your Healthcare Options' ])
    </div>

    <div class="whyChooseParent">
        <div class="whyChooseContent">

            <section class="whyChoose">
                <div class="chooseText">
                    <h1 class="pageTitle">Why use Hospital Compare?</h1>
                    <p>Hospital Compare helps you make the best possible choice when it comes to choosing a suitable hospital for your elective procedure.</p>
                    <p>64% of people in the UK are not aware that they could have the option of an NHS funded operation in a private hospital. We are here to help you understand your rights and make the right choice.</p>
                    <p>Whether you are searching for the best NHS hospital or the best private hospital, Hospital Compare is the only place that provides an accurate, up-to-date and unbiased assessment of all hospitals in the UK.</p>
                </div>
                <div class="chooseVideo">
                    <div class="videoParent">
                        <video  poster="{{ url('images/video_placeholder.png') }}">
                            {{--                        <source src="movie.mp4" type="video/mp4">--}}
                            {{--                        <source src="movie.ogg" type="video/ogg">--}}
                            Your browser does not support the video tag.
                        </video>
                        <div class="playerButton"></div>
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

    @include('components.healthchoice', ['choosehealthbanner' => '', 'buttonName' => 'Choose your health', 'classTitle' => 'blueOval' ] )

    <div class="blogSectionParent">
        <h1 class="pageTitle">Making the right choice</h1>
        <div class="blogContent">
            @include('components.blogs', ['blogs' =>
            [
                ['iconImg'=> 'images/Layer_16.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/1')],
                ['iconImg'=> 'images/Layer_17.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/2')],
                ['iconImg'=> 'images/Layer_18.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/3')]
            ], 'classTitle'=> '', 'buttonTitle' => 'Read more', 'buttonClass' => 'hospBtn blueOval' ])
        </div>
    </div>
@endsection