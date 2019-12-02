@extends('layout.app')

@section('title', 'Homepage')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'home-page')

@section('content')

    @include('pages.pagesections.banner')

    <section class="how-section__parent">
        @include('components.howsection', [
            'hideButton'    => false,
            'sectionTitle' => 'How does it work?',
            'howsections' => [
            [
                'iconImg'       => 'doctor',
                'step'          => 'One',
                'title'         => 'Your rights to choose:',
                'color'         => 'turq',
                'description'   => '
                            <ul class="tick-list">
                                <li>if NHS funded treatment</li>
                                <li>if self-pay</li>
                                <li>if covered by a health insurance policy</li>
                            </ul>'
            ],
            [
                'iconImg'       => 'search',
                'step'          => 'Two',
                'title'         => 'Search & compare:',
                'color'         => 'violet',
                'description'   => '<p>Use this site to search and compare both NHS and private (self-pay) hospitals across England. You can also search and compare by your health insurance policy.</p>'],
            [
                'iconImg'       => 'hospital-compare',
                'step'          => 'Three',
                'title'         => 'Make enquiry:',
                'color'         => 'pink',
                'description'   => '<p>Contact your chosen hospital(s) and ask any questions before deciding the one that’s right for you.</p>'],
            [
                'iconImg'       => 'confirm',
                'step'          => 'Four',
                'title'         => 'Request a referral:',
                'color'         => 'blue',
                'description'   => '<p>Request a referral from your GP if you selected an NHS hospital, or wait for your chosen private hospital to contact you about your appointment.</p>'
            ]
        ]
    ])
    </section>

    <section class="why-use-parent">
        <div class="why-use-content">
            <div class="why-use container">
                <div class="row">
                    <div class="why-use-text col col-12 col-md-6">
                        <h2 class="section-title">Why use Hospital Compare?</h2>
                        <p>Hospital Compare helps you make the best possible choice when it comes to choosing a suitable
                            hospital for your treatment.</p>
                        <p>Many people in the UK are not aware that they could have the option of an NHS funded
                            operation
                            in a private hospital. We are here to help you understand your rights and make the right
                            choice.</p>
                        <p>Whether you are searching for the best NHS hospital or the best private hospital, Hospital
                            Compare is the best place that provides an accurate, up-to-date and unbiased assessment of
                            all
                            hospitals in the UK.</p>
                    </div>
                    <div class="why-use-video col col-12 col-md-6">
                        <div class="video-wrapper">
                            <video muted class="content" poster="{{ url('images/video_placeholder.jpg') }}">
                                <source src="{{ asset('video/For_Wes.mp4') }}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            {{--                            <div class="player-button toggle"></div>--}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
