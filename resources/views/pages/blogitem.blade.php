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
                <div class="col-8">
                    <div class="jumbotron rounded mb-0 p-0 position-relative overflow-hidden d-flex"
                         style="background-image: url('../{{$data['blog']['image']}}')">
                        <span class="rounded-pill d-inline-block m-3 p-2 pl-4 position-absolute col-white"
                              style="background-color: {{ $data['blog']['category']['colour'] }}">
                            {!! file_get_contents(asset($data['blog']['category']['icon'])) !!}
{{--                            <span class="position-absolute blog-item-category-icon-wrap d-inline-block"></span>--}}
                            {{ $data['blog']['category']['name'] }}
                        </span>
{{--                        @include('components.basic.button', [--}}
{{--                            'hrefValue'     => '/',--}}
{{--                            'classTitle'    => 'btn btn-m btn-turq btn-blog-back',--}}
{{--                            'buttonText'    => $data['blog']['category']['name'],--}}
{{--                            'svg'           => substr($data['blog']['category']['icon'], 3, 0) //Remove the .svg extension--}}

{{--                        ])--}}
                    </div>
                    <div class="blog-item-details d-flex justify-content-start align-items-center mb-3">
                        <div class="mr-2">
                            <img src="{{ asset('/images/icons/clock-regular.svg') }}" alt="Clock icon">
                        </div>
                        <span class="time-to-read mr-3">{{$data['blog']['time_to_read']}}min</span>
                        <div class="mr-2">
                            <img src="{{ asset('/images/icons/clock-regular.svg') }}" alt="Calendar icon">
                        </div>
                        <span class="date SofiaPro-Bold">{{ date('d.m.Y', strtotime($data['blog']['created_at'])) }}</span>
                    </div>
                    <div class="blog-title font-36 SofiaPro-Bold my-3">{!! $data['blog']['title'] !!}</div>
                    <div class="font-24 SofiaPro-SemiBold mt-3 mb-4"></div>
                    <div class="blog-content mb-4">
                        {!! $data['blog']['description'] !!}
                    </div>
                    <div class="sharing-is-caring">
                        <div class="font-24 SofiaPro-SemiBold mb-4">Share this article</div>
                        <ul class="sharing-icons d-block">
                            <li class="d-inline-block"><a
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                    target="_blank" title="Share to Facebook">
                                    {!! file_get_contents('./images/icons/social/facebook.svg') !!}
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a target="_blank" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class=""
                                   data-show-count="false" title="Share to twitter">
                                    {!! file_get_contents('./images/icons/social/twitter.svg') !!}
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a target="_blank"
                                   href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->full()) }}&title={{ $data['blog']['title'] }}"
                                   title="Share to LinkedIn">
                                    {!! file_get_contents('./images/icons/social/linkedin.svg') !!}
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://www.hospitalcompare.co.uk"
                                   title="Share by Email">
                                    {!! file_get_contents('./images/icons/social/mail.svg') !!}
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="author d-flex bg-greylight p-30">
                        <div class="">
                            <div class="image-wrapper mr-4">
                                <img class="w-100 content" src="../{{$data['blog']['author']['image']}}" alt="Image of {{ $data['blog']['author'] }}" >
                            </div>
                        </div>
                        <div class="">
                            <p class="author-name">{{$data['blog']['author']['name']}}</p>
                            <p class="author-description">{{$data['blog']['author']['description']}}</p>
                        </div>

                    </div>
                </div>
                <div class="col-4">
                    @if(!empty($data['latestBlogs']))
                        @foreach($data['latestBlogs'] as $latestBlog)
                            <div class="latest-blog mb-4">
                                <div class="latest-blog-image overflow-hidden">
                                    <img src="../{{$latestBlog['image']}}" alt="" class="content">
                                </div>
                                <div class="latest-blog-content p-3">
                                    <div class="latest-blog-title mb-3">{{$latestBlog['title']}}</div>
                                    <div class="latest-blog-description">{!! substr($latestBlog['description'], 0, 100) !!}</div>
                                    <a class="btn-plain position-static stretched-link" href="/blog/{{ $latestBlog['id'] }}">Continue reading</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
