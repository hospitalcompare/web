@extends('layout.app')
@section('title', $data['blog']['title'])

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'blog-item-page')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col hc-content">

                    <div class="jumbotron rounded mb-0 p-0 position-relative overflow-hidden d-flex" style="background-image: url('../{{$data['blog']['image']}}')">
{{--                        <div class="svg-wrapper w-100 mt-auto position-relative">--}}
{{--                            <svg class="content" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1742 216"--}}
{{--                                 style="enable-background:new 0 0 1742 216;"--}}
{{--                                 xml:space="preserve">--}}
{{--                                <path class="path" fill="transparent" stroke="#fff" stroke-width="6px" d="M1728.9,130.1c-16.5-9.2-35.2-13.5-53.6-17.6c-29.3-6.6-60.5-13-88.6-2.7c-40.4,14.8-64.1,60.4-105.3,72.9--}}
{{--                                c-15.5,4.7-31.8,4.1-47.7,2.6c-6.9-0.6-10.8-0.4-16.6-4.4c-5.9-4-11.3-8.7-16.2-13.9c-16.6-17.9-30.3-41-34.7-65.3--}}
{{--                                c-3.6-19.9-1.6-42.4,12.2-57.3c5.6-6,13.4-10.6,21.6-9.8c7.6,0.7,13.9,5.9,19.2,11.3c10.4,10.8,13.6,24.2,18.9,38.3--}}
{{--                                c1.8,4.9,3.3,10.1,2.3,15.2c-1,5.1-4.3,9.7-9.5,9.6c-4.3-0.1-9-3.3-10.6-7.3c-1.6-3.9-1.5-8.4-1-12.6c1.8-15.2,13.7-30.2,24.3-41.2--}}
{{--                                c2.5-2.6,5.3-5.1,8.7-6.3c5.8-2.1,12.6-0.2,17.5,3.7c4.8,3.9,8,9.6,10.2,15.4c10.1,26,3.6,56.5-12.2,79.5--}}
{{--                                c-12.9,18.9-31,35.6-53.3,42.3c-23.1,6.9-50.6,0.4-70.3-13.1c-16.9-11.6-25.5-32.6-42.6-43.8c-16.7-11-38.6-10.7-57.9-5.5--}}
{{--                                c-105.4,28.2-229.7,57.5-338.2,26c-76.5-22.2-145.1-74.8-224.7-77.1c-84.7-2.5-160.2,52.7-243.6,67.7--}}
{{--                                c-76.8,13.8-155.7-7.2-228.4-35.7c-32-12.6-63.7-26.7-97.3-34.1s-70-7.7-101.1,6.9"></path>--}}
{{--                            </svg>--}}

{{--                        </div>--}}
                        @include('components.basic.button', [
                            'hrefValue'     => '/blogs',
                            'classTitle'    => 'btn btn-m btn-grad btn-teal btn-blog-back',
                            'button'        => 'Back to Blogs',
                            'svg'           => 'chevron-left'

                        ])
                    </div>
                    <div class="blog-title font-36 SofiaPro-Bold my-3">{!! $data['blog']['title'] !!}</div>
                    <hr class="bg-teal">
                    <div class="font-24 SofiaPro-SemiBold mt-3 mb-4">
                        <span class="d-inline-block col-teal">Date:&nbsp;</span>{{date('dS F Y', strtotime($data['blog']['created_at']))}}
{{--                        <span class="ml-5 d-inline-block col-teal">Category:&nbsp;</span>Category name--}}
                    </div>
                    <div class="blog-content mb-4">
                        {!! $data['blog']['description'] !!}
                    </div>
                    <div class="sharing-is-caring">
                        <span class="col-teal font-24 SofiaPro-SemiBold">Share:&nbsp;</span>
                        <ul class="d-inline-block sharing-icons">
                            <li class="d-inline-block"><a
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                    target="_blank" title="Share to Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="d-inline-block">
                                <a target="_blank" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class=""
                                   data-show-count="false" title="Share to twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a target="_blank"
                                   href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->full()) }}&title={{ $data['blog']['title'] }}"
                                   title="Share to LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://www.hospitalcompare.co.uk"
                                   title="Share by Email"><i class="fas fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
