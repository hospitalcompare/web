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
        'sectionTitle' => 'How does it work?',
        'howsections' => [
            [
                'iconImg'=> 'doctor',
                'title'=>'Step One',
                'description' => '
                    <p>Understand your right to have an NHS-funded elective treatment at a private hospital of your choice. You do not need to choose a hospital during your GP appointment.</p>
{{--                    <ul>--}}
{{--                        <li>your rights to choose:--}}
{{--                            <ul class="blue-dot">--}}
{{--                                <li>if NHS funded treatment--}}
{{--                            <a tabindex="0" data-trigger="hover" class="help-link help-link__inline" data-toggle="popover" data-content="--}}
{{--                                 <p>--}}
{{--                                    You can choose which NHS hospital to perform your treatment. Paid for by the NHS. Anywhere in England.--}}
{{--                                 </p>--}}
{{--                                 <p><strong>OR</strong></p>--}}
{{--                                 <p> you can choose which private hospital to perform your treatment. Paid for by the NHS, at no extra cost to the taxpayer than an NHS hospital. Anywhere in England. See <a--}}
{{--                                    class=&quot;text-link&quot; href=&quot;/your-rights&quot;>Your Rights</a> for exceptions.--}}
{{--                                 </p>" data-trigger="hover" data-placement="top" data-delay="{ &quot;show&quot;: 100, &quot;hide&quot;: 100 }" data-html="true" data-original-title="" title="">' . file_get_contents(asset('/images/icons/question.svg')) . '</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                   if self-pay--}}
{{--                            <a tabindex="0" data-trigger="hover" class="help-link help-link__inline" data-toggle="popover" data-content="<p>--}}
{{--                                                    You can choose a private hospital to perform your treatment. Paid for by you. Anywhere in England.--}}
{{--                                                 </p>" data-trigger="focus" data-placement="top" data-delay="{ &quot;show&quot;: 100, &quot;hide&quot;: 100 }" data-html="true" data-original-title="" title="">' . file_get_contents(asset('/images/icons/question.svg')) . '</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    if covered by a health insurance policy--}}
{{--                            <a tabindex="0" data-trigger="hover" class="help-link help-link__inline" data-toggle="popover" data-content="--}}
{{--                                                 <p>--}}
{{--                                                    You can choose which private hospital to perform your treatment, if covered by your healthcare insurance policy.--}}
{{--                                                 </p>" data-trigger="focus" data-placement="top" data-delay="{ &quot;show&quot;: 100, &quot;hide&quot;: 100 }" data-html="true" data-original-title="" title="">' . file_get_contents(asset('/images/icons/question.svg')) . '</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{----}}
{{--                        </li>--}}
{{--                        <li>that you don’t have to select your hospital during the GP appointment, but can easily do so at a later date, having made whatever enquires you wish to make.</li>--}}
{{--                    </ul>--}}
                ' ],
            [
                'iconImg'=> 'search',
                'title'=>'Step Two',
                'description' => '<p>Use this site to search and compare both NHS and private hospitals across England.</p>'],
            [
                'iconImg'=> 'hospital-compare',
                'title'=>'Step Three',
                'description' => '<p>Contact your chosen hospital(s) and ask any questions before deciding the one that’s right for you.</p>'],
            [
                'iconImg'=> 'confirm',
                'title'=>'Step Four',
                'description' => '<p>Request a referral from your GP if you selected an NHS hospital, or wait for your chosen private hospital to contact you about your appointment.</p>' ] ] ])
    </section>

    <section class="why-use-parent">
        <div class="why-use-content">
            <div class="why-use container">
                <div class="row">
                    <div class="why-use-text col col-12 col-md-6">
                        <h2 class="section-title">Why use Hospital Compare?</h2>
                        <p>Hospital Compare helps you make the best possible choice when it comes to choosing a suitable
                            hospital for your treatment.</p>
                        <p>Many people in the UK are not aware that they could have the option of an NHS funded operation
                            in a private hospital. We are here to help you understand your rights and make the right
                            choice.</p>
                        <p>Whether you are searching for the best NHS hospital or the best private hospital, Hospital
                            Compare is the best place that provides an accurate, up-to-date and unbiased assessment of all
                            hospitals in the UK.</p>
                    </div>
                    <div class="why-use-video col col-12 col-md-6">
                        <div class="video-wrapper">
                            <video muted class="content" poster="{{ url('images/video_placeholder.png') }}">
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
