@extends('layout.app')

@section('title', 'How To Use')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'how-to-use-page')

@section('content')
    @include('pages.pagesections.banner', [
        'layout'    => 'row',
        'hideText'  => 'true'

    ])
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

@endsection
