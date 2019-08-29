@extends('layout.app')

@section('title', 'Homepage')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'home-page')

@section('content')
    <section class="banner-parent">
        <div class="banner">
            <div class="container">
                <div class="banner-data">
                    <div class="home-postcode-parent">
                        <div class="box full-left">
                            <p>Find the best hospital for your elective surgery</p><br>
                            <form class="form-element" method="get" action="/results-page">

                                <div class="form-child full-left">
                                    @include('components.basic.select', [
                                        'selectPicker' => 'true',
                                        'selectClass'=> 'big selectpicker',
                                        'options' => $data['procedures'],
                                        'chevronFAClassName' => 'fa-chevron-down aquaChevron',
                                        'placeholder'=>'Choose your procedure (if known)',
                                        'name'=> 'procedure_id'])
                                    <a tabindex="0" data-offset="30px, 40px"
                                       class="help-link"
                                        @include('components.basic.popover', [
                                        'dismissible'   => true,
                                        'placement'      => 'top',
                                        'size'           => 'large',
                                        'html'           => 'true',
                                        'trigger'        => 'focus',
                                        'content'        => '<p class="bold mb-0">
                                                         Choose your procedure
                                                     </p>
                                                     <p>
                                                         Please choose the procedure if you know it
                                                     </p>
                                                     <p>
                                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                     </p>'])
                                    >?</a>
                                </div>

                                <div class="form-child full-left">
                                    @include('components.basic.input', ['placeholder' => 'Enter postcode', 'className' => 'postcode-text-box big', 'value' => '', 'name' => 'postcode', 'id' => 'input_postcode'])
                                    <a tabindex="0" data-offset="30px, 40px"
                                       class="help-link"
                                        @include('components.basic.popover', [
                                        'dismissible'   => true,
                                        'placement'      => 'top',
                                        'size'           => 'large',
                                        'html'           => 'true',
                                        'trigger'        => 'focus',
                                        'content'        => '<p class="bold mb-0">
                                                         Postcode
                                                     </p>
                                                     <p>
                                                         Please enter your postcode for a refined search
                                                     </p>
                                                     <p>
                                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                     </p>'])
                                    >?</a>
                                    <div class="postcode-autocomplete-cont">
                                        <div class="ajax-box"></div>
                                    </div>
                                </div>

                            <div class="form-child full-left d-flex">
                                @include('components.basic.select', [
                                    'showLabel' => true, 'selectClass'=> 'distance-dropdown',
                                    'options' => \App\Helpers\Utils::radius,
                                     'selectClassName'=> 'd-flex select_half-width', 'placeholder' => 'How far would you like to travel?', 'chevronFAClassName' => '', 'name'=>'radius'])
                                <a tabindex="0" data-offset="30px, 40px"
                                   class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'size'           => 'large',
                                    'html'           => 'true',
                                    'trigger'        => 'focus',
                                    'content'        => '<p class="bold mb-0">
                                                     Distance
                                                 </p>
                                                 <p>
                                                     Please enter your distance. This is based on the postcode provided
                                                 </p>
                                                 <p>
                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                 </p>'])
                                >?</a>
                            </div>

                                <div class="form-child full-left d-none">
                                    @include('components.basic.select', ['showLabel' => true, 'selectClass'=> '', 'options' => [['id'=>1, 'name'=>'Provider Name']], 'selectClassName'=> 'd-flex select_half-width', 'placeholder' => 'Do you have private healthcare insurance?', 'chevronFAClassName' => '', 'name'=>'insurance_id'])
                                    @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'select2', 'className' => '', 'lightBoxClass' => 'lightboxAdjust'])
                                </div>

                                @include('components.basic.submit', ['classTitle' => 'btn btn-m btn-grad btn-teal', 'button' => 'Find Hospitals'])

                                <p class='browseButton'><a href="{{url('/results-page')}}">Browse all hospitals</a></p>

                            </form>
                        </div>
                    </div>
                    <div class="homePromo">
                        <p>The quality of care in England varies greatly between hospitals. You have the legal right to
                            choose where to have your elective surgery*. It can be at: </p>
                        <ul class="promoList">
                            <li>An NHS hospital of your choice NHS<br>Funded Work
                                <a tabindex="0" data-offset="30px, 40px"
                                   class="help-link help-link__inline"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'size'           => 'large',
                                    'html'           => 'true',
                                    'trigger'        => 'focus',
                                    'content'        => '<p class="bold mb-0">
                                                     What is NHS funded work?
                                                 </p>
                                                 <p>
                                                     Many private healthcare policies allow you to choose which hospital to have your elective
                                                     procedure at. Enter your provider and policy name to find the best hospital for you.
                                                 </p>
                                                 <p>
                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                 </p>'])
                                >?</a>
                            </li>
                            <li>A private hospital funded by NHS <a tabindex="0" data-offset="30, 40px"
                                                                    class="help-link help-link__inline"
                                    @include('components.basic.popover', [
                                             'dismissible'   => true,
                                             'placement'      => 'top',
                                             'size'           => 'large',
                                             'html'           => 'true',
                                             'trigger'        => 'focus',
                                             'content'        => '<p class="bold mb-0">
                                                     What is NHS funded work?
                                                 </p>
                                                 <p>
                                                     Many private healthcare policies allow you to choose which hospital to have your elective
                                                     procedure at. Enter your provider and policy name to find the best hospital for you.
                                                 </p>
                                                 <p>
                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                 </p>'])
                                >?</a></li>
                            <li>A private hospital paid by you <a tabindex="0" data-offset="30, 40px"
                                                                  class="help-link help-link__inline"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'size'           => 'large',
                                    'html'           => 'true',
                                    'trigger'        => 'focus',
                                    'content'        => '<p class="bold mb-0">
                                                     What is NHS funded work?
                                                 </p>
                                                 <p>
                                                     Many private healthcare policies allow you to choose which hospital to have your elective
                                                     procedure at. Enter your provider and policy name to find the best hospital for you.
                                                 </p>
                                                 <p>
                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                 </p>'])
                                >?</a></li>
                            <li>A private hospital paid by your insurance provider <a tabindex="0" data-offset="30, 40px"
                                                                                      class="help-link help-link__inline"
                                    @include('components.basic.popover', [
                                        'dismissible'   => true,
                                        'placement'      => 'top',
                                        'size'           => 'large',
                                        'html'           => 'true',
                                        'trigger'        => 'focus',
                                        'content'        => '<p class="bold mb-0">
                                                     What is NHS funded work?
                                                 </p>
                                                 <p>
                                                     Many private healthcare policies allow you to choose which hospital to have your elective
                                                     procedure at. Enter your provider and policy name to find the best hospital for you.
                                                 </p>
                                                 <p>
                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                 </p>'])
                                >?</a></li>
                        </ul>
                        <p>
                            <small>
                                *your legal right to choose may be restricted in some circumstances. For more information see <a
                                    class="text-link"
                                    href="/your-rights">Your Rights</a>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    <div class="how-section__parent">--}}
    {{--        @include('components.how-section', ['howsections' => [--}}
    {{--        ['iconImg'=> 'images/003-doctor.png', 'title'=>'Standard procedure at an NHS Hospital', 'description' => 'You have the legal right to choose which NHS hospital to have your NHS procedure at.' ],--}}
    {{--        ['iconImg'=> 'images/003-doctor.png', 'title'=>'NHS Funded in a private hospital', 'description' => 'You have the legal right to have an NHS funded procedure at a private hospital of your choice'],--}}
    {{--        ['iconImg'=> 'images/003-doctor.png', 'title'=>'Private Healthcare Insurance', 'description' => 'Many private healthcare insurance policies allow you to choose a hospital for your procedure'],--}}
    {{--        ['iconImg'=> 'images/003-doctor.png', 'title'=>'Self Pay at a Private Hospital', 'description' => 'If time is a critical factor for you then a good option may be to self-pay and have your procedure done immediately' ] ],--}}
    {{--        'sectionTitle' => 'Your Healthcare Options' ])--}}
    {{--    </div>--}}

    <section class="why-use-parent">
        <div class="why-use-content">

            <div class="why-use container">
                <div class="why-use-text">
                    <h1 class="section-title">Why use Hospital Compare?</h1>
                    <p>Hospital Compare helps you make the best possible choice when it comes to choosing a suitable
                        hospital for your elective procedure.</p>
                    <p>64% of people in the UK are not aware that they could have the option of an NHS funded operation
                        in a private hospital. We are here to help you understand your rights and make the right
                        choice.</p>
                    <p>Whether you are searching for the best NHS hospital or the best private hospital, Hospital
                        Compare is the only place that provides an accurate, up-to-date and unbiased assessment of all
                        hospitals in the UK.</p>
                </div>
                <div class="why-use-video">
                    <div class="video-wrapper">
                        <video muted class="content" poster="{{ url('images/video_placeholder.png') }}">
                            <source src="{{ asset('video/For_Wes.mp4') }}" type="video/mp4">
                            {{--                            <source src="movie.ogg" type="video/ogg">--}}
                            {{--                            Your browser does not support the video tag.--}}
                        </video>
{{--                        <div class="playerButton toggle"></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-section__parent">
        @include('components.howsection', [
        'sectionTitle' => 'How does it work?',
        'howsections' => [
            ['iconImg'=> 'images/003-doctor.png',
            'numeral'=> '',
            'title'=>'Step One',
            'description' => 'Make sure you understand:
                - your rights to choose (if NHS funded treatment, self-pay or if covered by a health insurance policy)<br>
                - that you don’t have to select your hospital during the GP appointment, but can easily do so at a later date, having made whatever enquires you wish to make.
                Include click here’s for the various points.
                ' ],
            ['iconImg'=> 'images/001-search-1.png',
            'numeral'=> '',
            'title'=>'Step Two',
            'description' => 'Use the Hospital Compare search criteria to shortlist one or more hospitals to make further enquiries of (Possibly insert note here about NHS hospitals enquiry procedures).'],
            ['iconImg'=> 'images/Layer_536.png',
            'numeral'=> '',
            'title'=>'Step Three',
            'description' => 'Make the enquires and then make your selection as to which hospital to have your treatment at.'],
            ['iconImg'=> 'images/Layer_537.png',
            'numeral'=> '',
            'title'=>'Step Four',
            'description' => 'Call your GP surgery and book your first appointment slot via their E-referral system.
The four steps will be across the page and then presumably we will have a fifth button to press to start searching, return to the top part of the homepage?
' ] ] ])
    </section>

    <section class="choose-health-parent">
        @include('components.healthchoice', [
            'choosehealthbanner' => '',
            'buttonName' => 'Choose your health',
            'classTitle' => 'btn btn-icon btn-arrow-right mx-auto' ] )

    </section>

{{--    <div class="blogSectionParent">--}}
{{--        <h1 class="pageTitle">Making the right choice</h1>--}}
{{--        <div class="blogContent">--}}
{{--            @include('components.blogs', ['blogs' =>--}}
{{--            [--}}
{{--                ['iconImg'=> 'images/Layer_16.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/1')],--}}
{{--                ['iconImg'=> 'images/Layer_17.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/2')],--}}
{{--                ['iconImg'=> 'images/Layer_18.png' , 'title'=>'Blog', 'description' => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.', 'url' => url('/blog/3')]--}}
{{--            ], 'classTitle'=> '', 'buttonTitle' => 'Read more', 'buttonClass' => 'btn btn-block btn-read-more' ])--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
