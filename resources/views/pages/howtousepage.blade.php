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
                        <h2 class=" mb-4">NHS funded in a private hospital</h2>
                        <p class="mb-3 p-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque
                            eveniet ipsa laboriosam
                            distinctio eius, et, hic minima omnis recusandae reiciendis rem tempore veritatis vitae
                            voluptates? Ea, odio!
                        </p>
                        <p class="mb-4 col-grey p-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                            cumque nesciunt, officia repellat
                            repellendus tempora veniam voluptatem. Alias architecto assumenda autem blanditiis commodi,
                            deleniti dolore inventore laudantium, magnam magni neque nostrum perferendis praesentium
                            quam, quisquam quod reiciendis rem sint suscipit tenetur. A, deleniti excepturi id ipsa
                            labore non pariatur tempore.</p>
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
                        <h2 class="mb-4">Standard procedure at an NHS Hospital</h2>
                        <p class="mb-3 p-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque
                            eveniet ipsa laboriosam
                            necessitatibus qui ut veniam! Cum, inventore ipsa magnam omnis possimus reprehenderit saepe
                            voluptates? Ea, odio!
                        </p>
                        <p class="mb-4 col-grey p-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                            cumque nesciunt, officia repellat
                            repellendus tempora veniam voluptatem. Alias architecto assumenda autem blanditiis commodi,
                            deleniti dolore inventore laudantium, magnam magni neque nostrum perferendis praesentium
                            quam, quisquam quod reiciendis rem sint suscipit tenetur. A, deleniti excepturi id ipsa
                            labore non pariatur tempore.</p>
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
                        <h2 class="mb-4">Private healthcare insurance</h2>
                        <p class="mb-4 p-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque
                            eveniet ipsa laboriosam
                            distinctio eius, et, hic minima omnis recusandae reiciendis rem tempore veritatis vitae
                            voluptates? Ea, odio!
                        </p>
                        <p class="mb-4 col-grey p-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                            cumque nesciunt, officia repellat
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
                        <h2 class="mb-4">Self-pay at a private hospital</h2>
                        <p class="mb-3 p-intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque
                            eveniet ipsa laboriosam
                            voluptas voluptatum. Consectetur, eius impedit! Alias aperiam, architecto autem cupiditate
                            distinctio eius, et, hic minima omnis recusandae reiciendis rem tempore veritatis vitae
                            voluptates? Ea, odio!
                        </p>
                        <p class="mb-4 col-grey p-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                            cumque nesciunt, officia repellat
                            repellendus tempora veniam voluptatem. Alias architecto assumenda autem blanditiis commodi,
                            deleniti dolore inventore laudantium, magnam magni neque nostrum perferendis praesentium
                            quam, quisquam quod reiciendis rem sint suscipit tenetur. A, deleniti excepturi id ipsa
                            labore non pariatur tempore.</p>
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
