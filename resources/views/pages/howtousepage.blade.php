@extends('layout.app')

@section('title', 'How To Use')

@section('description', 'Discover the three simple steps to having your treatment faster or at better quality hospital locally, regionally or nationally across England.')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'how-to-use-page')

@section('content')
    @include('pages.pagesections.flatbanner')
    <section class="how-section__parent">
        @include('components.howsection', [
            'hideButton'        => false,
            'sectionTitle'      => 'How to Use Hospital Compare',
            'hideLinks'         => true,
            'howsections'       => [
            [
                'iconImg'       => 'search-and-compare',
                'step'          => 'One',
                'title'         => 'Search & compare:',
                'color'         => 'violet',
                'description'   => '<p>Search from over 750 hospitals in England and find the right hospital for your treatment.</p>'],
            [
                'iconImg'       => 'make-enquiry',
                'step'          => 'Two',
                'title'         => 'Make enquiry:',
                'color'         => 'pink',
                'description'   => '<p>Use Hospital Compare to make an enquiry at one or more hospitals, without obligation.</p>'],
            [
                'iconImg'       => 'request-a-referral',
                'step'          => 'Three',
                'title'         => 'Book Appointment:',
                'color'         => 'blue',
                'description'   => '<p>For self-pay or insurance, book your appointment directly. For NHS treatment, make enquiries then inform your GP of your choice to book an appointment (you will need a GP referral).</p>'
            ]
        ]
    ])
    </section>
    <section class="how-section__extra bg-greylight">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col col-12 col-md-6 mb-25">
                    <div class="image-wrapper">
                        <img src="{{ asset('/images/how-to-use-1.jpg') }}"
                             alt="People around a desk chatting with laptops">
                    </div>
                </div>
                <div class="col col-12 col-md-6">
                    <div>
                        <h2 class="section-title">NHS Funded Treatment</h2>
                        <p class="p-intro mb-3">Initial Referral</p>
                        <p class="mb-3 p-secondary col-grey"> Please note that if you wish to be seen at a hospital for
                            NHS funded
                            treatment, you need to speak with your GP in order to be referred. You can use Hospital
                            Compare to identify the most appropriate hospital prior to your GP confirming your referral.
                        </p>
                        <p class="p-intro mb-4">The NHS 18 Weeks Referral To Treatment Rule</p>
                        <p class="mb-3 p-secondary col-grey">You have the right to start your consultant-led treatment
                            within 18 weeks of referral or
                            request an offer of alternative providers that can start their treatment sooner. The NHS
                            must take all reasonable steps to meet patients’ requests. For more information, click
                            here.</p>
                        <p class="p-intro mb-3">Already Waiting For More Than 12 Weeks?</p>
                        <p class="p-secondary mb-4">If you’ve been referred and have already waited 12 weeks (three
                            months) or longer for your treatment to begin (not your first appointment to be set), we
                            recommend the following steps:</p>
                        <div class="btn-area">
                            @include('components.basic.button', [
                            'classTitle'        => 'btn btn-squared btn-squared_slim btn-brand-primary-1 font-18',
                            'buttonText'        => 'View NHS funded private hospitals',
                            'hrefValue'         => '/results-page/?hospital_type=1'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-section__extra">
        <div class="container">
            <div class="row ">
                <div class="col col-12 col-lg-6 mb-25">
                    <div class="image-wrapper">
                        <img src="{{ asset('/images/how-to-use-2.jpg') }}"
                             alt="People around a desk chatting with laptops">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div>
                        <h2 class="section-title">If You’ve Waited 12 Weeks or More Since Being Referred</h2>
                        <p class="mb-3 p-intro">Whilst you have no specific rights under the NHS
                            constitution having waited only 12 weeks for treatment, it may be worth using Hospital
                            Compare to check how likely it is that the healthcare provider that you have been referred
                            to will achieve the 18-week referral-to-treatment target.</p>
                        <p class="mb-4 col-grey p-secondary">You may also wish to compare other important metrics such
                            as quality rating in order to consider your alternatives should you ultimately not be
                            treated within 18 weeks.
                        </p>
                        <div class="btn-area">
                            @include('components.basic.button', [
                            'classTitle'       => 'btn btn-brand-primary-1 btn-squared btn-squared_slim font-18',
                            'hrefValue'        => '/results-page?hospital_type=2',
                            'buttonText'       => 'View all NHS hospitals'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-section__extra bg-greylight">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col col-12 col-lg-6 mb-25">
                    <div class="image-wrapper">
                        <img src="{{ asset('/images/how-to-use-3.jpg') }}"
                             alt="People around a desk chatting with laptops">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div>
                        <h2 class="section-title">If You’ve Waited 18 Weeks or More Since Being Referred</h2>
                        <p class="mb-4 p-intro">You have the right to choose an alternative healthcare provider and the
                            NHS should help you do this. Initially you should speak to the hospital you’ve been referred
                            to, but if they’re unwilling to help, speak with your GP and ask them to intervene. Ask your
                            GP to transfer your existing referral elsewhere (this can include private providers, still
                            paid for by the NHS)
                        </p>
                        <form id="how_to_use_filter_policies" action="/results-page" class="w-100">
                            @include('components.basic.select', [
                                'selectPicker'          => 'true',
                                'options'               => $data['filters']['policies'],
                                'suboptionClass'        => 'policies',
                                'group'                 => true,
                                'groupName'             => 'policies',
                                'svg'                   => 'chevron-down',
                                'selectParentClass'       => 'd-lg-flex align-items-center mb-4',
                                'selectClass'           => 'select-picker',
                                'labelClass'            => 'col-brand-primary-1 font-18 SofiaPro-Regular mr-3 mb-lg-0 w-100 w-lg-50',
                                'showLabel'             => true,
                                'name'                  => 'policy_id',
                                'selectId'              => 'how_to_use_policies',
                                'placeholder'           => 'Select your insurance provider:&nbsp;'])
                            @include('components.basic.button', [
                                'classTitle'            => 'btn btn-brand-primary-1 btn-squared btn-squared_slim font-18',
                                'buttonText'            => 'View all private hospitals covered on your policy',
                                'htmlButton'            => true])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-section__extra">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-lg-6 mb-25">
                    <div class="image-wrapper">
                        <img src="{{ asset('/images/video_placeholder.jpg') }}"
                             alt="People around a desk chatting with laptops">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div>
                        <h2 class="section-title">If You’ve Waited 26 Weeks or More Since Being Referred</h2>
                        <p class="mb-3 p-intro"> The NHS should automatically make alternative arrangements on your
                            behalf. The 2019/2020 NHS Operating Plan states that every patient waiting 6 months or
                            longer should be contacted and offered the option of care at an alternative provider, if
                            they haven’t done this already, use Hospital Compare to review alternative hospitals and
                            inform your current NHS provider of your preferred choice.
                        </p>
                        <div class="btn-area">
                            @include('components.basic.button', [
                            'classTitle'        => 'btn btn-brand-primary-1 btn-squared btn-squared_slim font-18',
                            'buttonText'        => 'Self-pay at a private hospital',
                            'hrefValue'         => '/results-page?hospital_type=1'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
