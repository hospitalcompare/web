@extends('layout.app')

@section('title', 'How To Use')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'how-to-use-page')

@section('content')
    @include('pages.pagesections.flatbanner')
    <section class="how-section__parent">
        @include('components.howsection', [
            'hideButton'    => false,
            'sectionTitle' => 'How to use Hospital Compare',
            'howsections' => [
            [
                'iconImg'       => 'how-does-it-work-step-1',
                'step'          => 'One',
                'title'         => 'Your rights to choose:',
                'color'         => 'turq',
                'description'   => '
                            <ul class="">
                                <li class="green-tick text-center">if NHS funded treatment</li>
                                <li class="green-tick text-center">if self-pay</li>
                                <li class="green-tick text-center">if covered by a health insurance policy</li>
                            </ul>'
            ],
            [
                'iconImg'       => 'how-does-it-work-step-2',
                'step'          => 'Two',
                'title'         => 'Search & compare:',
                'color'         => 'violet',
                'description'   => '<p>Use this site to search and compare both NHS and private (self-pay) hospitals across England. You can also search and compare by your health insurance policy.</p>'],
            [
                'iconImg'       => 'how-does-it-work-step-3',
                'step'          => 'Three',
                'title'         => 'Make enquiry:',
                'color'         => 'pink',
                'description'   => '<p>Contact your chosen hospital(s) and ask any questions before deciding the one that’s right for you.</p>'],
            [
                'iconImg'       => 'how-does-it-work-step-4',
                'step'          => 'Four',
                'title'         => 'Request a referral:',
                'color'         => 'blue',
                'description'   => '<p>Request a referral from your GP if you selected an NHS hospital, or wait for your chosen private hospital to contact you about your appointment.</p>'
            ]
        ]
    ])
    </section>
    <section class="how-section__extra bg-greylight">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6 mb-25">
                    <div class="image-wrapper">
                        <img src="{{ asset('/images/video_placeholder.jpg') }}"
                             alt="People around a desk chatting with laptops">
                    </div>
                </div>
                <div class="col col-12 col-md-6">
                    <div>
                        <h2 class="SofiaPro-Medium mb-4">NHS funded in a private hospital</h2>
                        <p class="mb-3 p-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque eveniet ipsa laboriosam
                            distinctio eius, et, hic minima omnis recusandae reiciendis rem tempore veritatis vitae
                            voluptates? Ea, odio!
                        </p>
                        <p class="mb-4 col-grey p-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque nesciunt, officia repellat
                            repellendus tempora veniam voluptatem. Alias architecto assumenda autem blanditiis commodi,
                            deleniti dolore inventore laudantium, magnam magni neque nostrum perferendis praesentium
                            quam, quisquam quod reiciendis rem sint suscipit tenetur. A, deleniti excepturi id ipsa
                            labore non pariatur tempore.</p>
                        <div class="btn-area">
                            @include('components.basic.button', [
                            'classTitle'        => 'btn btn-squared btn-squared_slim btn-turq font-18',
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
            <div class="row flex-lg-row-reverse">
                <div class="col col-12 col-lg-6 mb-25">
                    <div class="image-wrapper">
                        <img src="{{ asset('/images/video_placeholder.jpg') }}"
                             alt="People around a desk chatting with laptops">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div>
                        <h2 class="mb-4">Standard procedure at an NHS Hospital</h2>
                        <p class="mb-3 p-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque eveniet ipsa laboriosam
                            necessitatibus qui ut veniam! Cum, inventore ipsa magnam omnis possimus reprehenderit saepe
                            voluptates? Ea, odio!
                        </p>
                        <p class="mb-3 p-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque nesciunt, officia repellat
                            repellendus tempora veniam voluptatem. Alias architecto assumenda autem blanditiis commodi,
                            deleniti dolore inventore laudantium, magnam magni neque nostrum perferendis praesentium
                            quam, quisquam quod reiciendis rem sint suscipit tenetur. A, deleniti excepturi id ipsa
                            labore non pariatur tempore.</p>
                        <div class="btn-area">
                            @include('components.basic.button', [
                            'classTitle'       => 'btn btn-turq btn-squared btn-squared_slim font-18',
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
            <div class="row">
                <div class="col col-12 col-lg-6 mb-25">
                    <div class="image-wrapper">
                        <img src="{{ asset('/images/video_placeholder.jpg') }}"
                             alt="People around a desk chatting with laptops">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div>
                        <h2 class="mb-4">Private healthcare insurance</h2>
                        <p class="mb-4 p-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque eveniet ipsa laboriosam
                            distinctio eius, et, hic minima omnis recusandae reiciendis rem tempore veritatis vitae
                            voluptates? Ea, odio!
                        </p>
                        <p class="mb-4 p-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque nesciunt, officia repellat
                            repellendus tempora veniam voluptatem. Alias architecto assumenda autem blanditiis commodi,
                            deleniti dolore inventore laudantium, magnam magni neque nostrum perferendis praesentium
                            quam, quisquam quod reiciendis rem sint suscipit tenetur. A, deleniti excepturi id ipsa
                            labore non pariatur tempore.</p>
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
                                'labelClass'            => 'col-turq font-20 SofiaPro-Medium mr-3 w-100 w-lg-50',
                                'showLabel'             => true,
                                'name'                  => 'policy_id',
                                'selectId'              => 'how_to_use_policies',
                                'placeholder'           => 'Select your insurance provider:&nbsp;'])
                            @include('components.basic.button', [
                                'classTitle'            => 'btn btn-turq btn-squared btn-squared_slim font-18',
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
            <div class="row flex-lg-row-reverse">
                <div class="col col-12 col-lg-6 mb-25">
                    <div class="image-wrapper">
                        <img src="{{ asset('/images/video_placeholder.jpg') }}"
                             alt="People around a desk chatting with laptops">
                    </div>
                </div>
                <div class="col col-12 col-lg-6">
                    <div>
                        <h2 class="mb-4">Self-pay at a private hospital</h2>
                        <p class="mb-3 p-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque eveniet ipsa laboriosam
                            voluptas voluptatum. Consectetur, eius impedit! Alias aperiam, architecto autem cupiditate
                            distinctio eius, et, hic minima omnis recusandae reiciendis rem tempore veritatis vitae
                            voluptates? Ea, odio!
                        </p>
                        <p class="mb-4 p-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque nesciunt, officia repellat
                            repellendus tempora veniam voluptatem. Alias architecto assumenda autem blanditiis commodi,
                            deleniti dolore inventore laudantium, magnam magni neque nostrum perferendis praesentium
                            quam, quisquam quod reiciendis rem sint suscipit tenetur. A, deleniti excepturi id ipsa
                            labore non pariatur tempore.</p>
                        <div class="btn-area">
                            @include('components.basic.button', [
                            'classTitle'        => 'btn btn-turq btn-squared btn-squared_slim font-18',
                            'buttonText'        => 'Self-pay at a private hospital',
                            'hrefValue'         => '/results-page?hospital_type=1'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
