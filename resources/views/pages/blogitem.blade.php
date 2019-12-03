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

                    <div class="row">
                        <div class="col-8">
                            <div class="jumbotron rounded mb-0 p-0 position-relative overflow-hidden d-flex"
                                 style="background-image: url('../{{$data['blog']['image']}}')">
                                @include('components.basic.button', [
                                    'hrefValue'     => '/',
                                    'classTitle'    => 'btn btn-m btn-grad btn-turq btn-blog-back',
                                    'buttonText'        => $data['blog']['category']['name'],
                                    'svg'           => substr($data['blog']['category']['icon'], 3, 0) //Remove the .svg extension

                                ])
                            </div>
                            <div>
                                <span class="time-to-read">{{$data['blog']['time_to_read']}}min</span>
                                <span class="date">{{date('d.m.Y', strtotime($data['blog']['created_at']))}}</span>
                            </div>
                            <div class="blog-title font-36 SofiaPro-Bold my-3">{!! $data['blog']['title'] !!}</div>
                            <div class="font-24 SofiaPro-SemiBold mt-3 mb-4"></div>
                            <div class="blog-content mb-4">
                                {!! $data['blog']['description'] !!}
                            </div>
                            <div class="d-flex align-items-center sharing-is-caring">
                                <div class="col-turq font-24 SofiaPro-SemiBold">Share:&nbsp;</div>
                                <ul class="sharing-icons mb-0">
                                    <li class="d-inline-block"><a
                                            href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                            target="_blank" title="Share to Facebook">
                                            {!! file_get_contents(asset('/images/icons/social/facebook.svg')) !!}
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a target="_blank" href="https://twitter.com/share?ref_src=twsrc%5Etfw" class=""
                                           data-show-count="false" title="Share to twitter">
                                            {!! file_get_contents(asset('/images/icons/social/twitter.svg')) !!}
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a target="_blank"
                                           href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->full()) }}&title={{ $data['blog']['title'] }}"
                                           title="Share to LinkedIn">
                                            {!! file_get_contents(asset('/images/icons/social/linkedin.svg')) !!}
                                        </a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site https://www.hospitalcompare.co.uk"
                                           title="Share by Email">
                                            {!! file_get_contents(asset('/images/icons/social/mail.svg')) !!}
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="author row">
                                <div class="col-4">
                                    <img src="../{{$data['blog']['author']['image']}}" alt="" class="src">
                                </div>
                                <div class="col-8">
                                    <p class="author-name">{{$data['blog']['author']['name']}}</p>
                                    <p class="author-description">{{$data['blog']['author']['description']}}</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-4">
                            @if(!empty($data['latestBlogs']))
                                @foreach($data['latestBlogs'] as $latestBlog)
                                    <div class="latest-blog">
                                        <div class="latest-blog-image"><img src="../{{$latestBlog['image']}}" alt="" class="src"></div>
                                        <div class="latest-blog-title">{{$latestBlog['title']}}</div>
                                        <div class="latest-blog-title">{!! substr($latestBlog['description'], 0, 100) !!}</div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
