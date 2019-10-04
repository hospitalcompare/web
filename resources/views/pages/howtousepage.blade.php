@extends('layout.app')

@section('title', 'How To Use')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'how-to-use-page')

@section('content')

    <section class="how-section__parent">
        @include('components.howsection', [
        'sectionTitle' => 'How does it work?',
        'howsections' => [
            [
                'iconImg'=> 'doctor',
                'title'=>'Step One',
                'description' => '
                    <p>Make sure you understand:</p>
                    <ul>
                        <li>your rights to choose:
                            <ul class="blue-dot">
                                <li>if NHS funded treatment
                            <a tabindex="0" data-offset="30px, 40px" class="help-link help-link__inline" data-toggle="popover-large" data-content="
                                 <p>
                                    You can choose which NHS hospital to perform your elective procedure. Paid for by the NHS. Anywhere in England.
                                 </p>
                                 <p><strong>OR</strong></p>
                                 <p> you can choose which private hospital to perform your elective procedure. Paid for by the NHS, at no extra cost to the taxpayer than an NHS hospital. Anywhere in England. See <a
                                    class=&quot;text-link&quot; href=&quot;/your-rights&quot;>Your Rights</a> for exceptions.
                                 </p>
                                 <p>
                                     <a class=&quot;btn btn-close btn-close__small btn-teal btn-icon&quot; >Close</a>
                                 </p>" data-trigger="focus" data-placement="top" data-delay="{ &quot;show&quot;: 100, &quot;hide&quot;: 100 }" data-html="true" data-original-title="" title="">?</a>
                                </li>
                                <li>
                                   if self-pay
                            <a tabindex="0" data-offset="30, 40px" class="help-link help-link__inline" data-toggle="popover-large" data-content="<p>
                                                    You can choose a private hospital to perform your elective procedure. Paid for by you. Anywhere in England.
                                                 </p>

                                                 <p>
                                                     <a  class=&quot;btn btn-close btn-close__small btn-teal btn-icon&quot; >Close</a>
                                                 </p>" data-trigger="focus" data-placement="top" data-delay="{ &quot;show&quot;: 100, &quot;hide&quot;: 100 }" data-html="true" data-original-title="" title="">?</a>
                                </li>
                                <li>
                                    if covered by a health insurance policy
                            <a tabindex="0" data-offset="30, 40px" class="help-link help-link__inline" data-toggle="popover-large" data-content="
                                                 <p>
                                                    You can choose which private hospital to perform your elective procedure, if covered by your healthcare insurance policy.
                                                 </p>
                                                 <p>
                                                     <a  class=&quot;btn btn-close btn-close__small btn-teal btn-icon&quot; >Close</a>
                                                 </p>" data-trigger="focus" data-placement="top" data-delay="{ &quot;show&quot;: 100, &quot;hide&quot;: 100 }" data-html="true" data-original-title="" title="">?</a>
                                </li>
                            </ul>

                        </li>
                        <li>that you don’t have to select your hospital during the GP appointment, but can easily do so at a later date, having made whatever enquires you wish to make.</li>
                    </ul>
                ' ],
            [
                'iconImg'=> 'search',
                'title'=>'Step Two',
                'description' => '<p>Use the Hospital Compare search criteria to shortlist one or more hospitals to make further enquiries of. Please note NHS hospitals typically do not respond to direct enquiries regarding NHS funded elective procedures prior to an appointment being confirmed.</p>'],
            [
                'iconImg'=> 'hospital-compare',
                'title'=>'Step Three',
                'description' => '<p>Make the enquires and then make your selection as to which hospital to have your treatment at.</p>'],
            [
                'iconImg'=> 'confirm',
                'title'=>'Step Four',
                'description' => '<p>Call your GP surgery (if NHS funded), chosen hospital (if self-pay) or health insurance provider (if covered by a health insurance policy) to book your first appointment.</p>' ] ] ])
    </section>

@endsection
