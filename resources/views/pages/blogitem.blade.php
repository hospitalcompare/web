@extends('layout.app')

@section('title', $data['blog']['title'])

@section('description', !empty($data['blog']['metatags']) ? substr(strip_tags($data['blog']['metatags']), 1 , 160) : '')

@section('keywords', 'this is the meta keywords')

@section('featuredImage', '/' . $data['blog']['image'])

@section('mobile', 'width=device-width, initial-scale=1, user-scalable=no')

@section('body-class', 'blog-item-page')

{{--{{ dd($data['blog']['author']['image']) }}--}}

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 {{!empty($data['latestBlogs']) ? 'col-lg-8' : 'col-lg-12'}} blog-main">
                    <div class="jumbotron rounded p-0 position-relative overflow-hidden d-flex"
                         style="background-image: url('../{{$data['blog']['image']}}')">
                        <span class="blog-item-category rounded-pill d-inline-block position-absolute col-white"
                              style="background-color: {{ $data['blog']['category']['colour'] }}">
                            @svg($data['blog']['category']['icon'])
                            {{ $data['blog']['category']['name'] }}
                        </span>
                    </div>
                    <div class="blog-item-details d-flex justify-content-start align-items-center mb-2">
                        <div class="mr-2">
                            <img src="{{ asset('/images/icons/icon-clock.svg') }}" alt="Clock icon">
                        </div>
                        <span class="time-to-read mr-3">{{$data['blog']['time_to_read']}}min</span>
                        <div class="mr-2">
                            <img src="{{ asset('/images/icons/icon-calendar.svg') }}" alt="Calendar icon">
                        </div>
                        <span class="date">{{ date('d.m.Y', strtotime($data['blog']['created_at'])) }}</span>
                    </div>
                    <div class="blog-title font-36 mb-5">{!! $data['blog']['title'] !!}</div>
                    <div class="font-24 SofiaPro-SemiBold mt-3 mb-4"></div>
                    <div class="blog-content mb-4">
                        {!! $data['blog']['description'] !!}
                    </div>
                    <div class="sharing-is-caring py-75">
                        <div class="font-18 mb-4">Share this article</div>
                        <ul class="sharing-icons d-block">
                            <li class="d-inline-block"><a
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                    target="_blank" title="Share to Facebook">
                                    @svg('facebook')
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a target="_blank" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class=""
                                   data-show-count="false" title="Share to twitter">
                                    @svg('twitter')
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a target="_blank"
                                   href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->full()) }}&title={{ $data['blog']['title'] }}"
                                   title="Share to LinkedIn">
                                    @svg('linkedin')
                                </a>
                            </li>
                            <li class="d-inline-block">
                                <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://www.hospitalcompare.co.uk"
                                   title="Share by Email">
                                    @svg('mail')
                                </a>
                            </li>
                        </ul>
                    </div>

{{--                    <div class="author d-flex bg-greylight p-30">--}}
{{--                        <div class="">--}}
{{--                            <div class="image-wrapper mr-4">--}}
{{--                                <img class="w-100 content" src="../{{$data['blog']['author']['image']}}" alt="Image of {{ $data['blog']['author']['name'] }}" >--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="">--}}
{{--                            <p class="author-name font-18">{{ $data['blog']['author']['name']}}</p>--}}
{{--                            <p class="author-description col-grey lh-16 mb-0">{{$data['blog']['author']['description']}}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                @if(!empty($data['latestBlogs']))
                    <div class="col-12 col-lg-4 blog-aside">
                        @foreach($data['latestBlogs'] as $latestBlog)
                            <div class="latest-blog d-flex mb-4 position-relative">
                                <div class="latest-blog-image-wrapper w-25">
                                    <div class="latest-blog-image rounded overflow-hidden">
                                        <img src="../{{$latestBlog['image']}}" alt="Image from {{ $latestBlog['title'] }} blog post" class="content">
                                    </div>
                                </div>
                                <div class="latest-blog-content px-3 pb-3 w-75">
                                    <div class="latest-blog-title lh-16 mb-15">{{$latestBlog['title']}}</div>
                                    <div class="latest-blog-description">
                                        {!! substr($latestBlog['description'], 0, 100) !!}
                                    </div>
                                    <a class="btn-plain position-static stretched-link col-brand-primary-1" href="/blog/{{ $latestBlog['id'] }}">Continue reading →</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
