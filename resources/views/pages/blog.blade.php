@extends('layout.app')

@section('title', 'Blog')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'blog-page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col hc-content">
                <h1>Latest blogs</h1>
                <div class="blog-section-parent">
                    <div class="blog-content row">
                        @include('components.blogs', [
                        'blogs' => [
                                        [
                                            'iconImg'       => 'images/Layer_16.png' ,
                                            'category'      => 'Category',
                                            'date'          => '25th Oct 2019',
                                            'title'         => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.',
                                            'id'            =>  1
                                        ],
                                        [
                                            'iconImg'       => 'images/Layer_17.png',
                                            'category'      => 'Category',
                                            'date'          => '25th Oct 2019',
                                            'title'         => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.',
                                            'id'            =>  2
                                        ],
                                        [
                                            'iconImg'       => 'images/Layer_18.png' ,
                                            'category'      => 'Category',
                                            'date'          => '25th Oct 2019',
                                            'title'         => 'Lorem ipsum dolor sit amet elit. In sit amet sem ut magna ornare.',
                                            'id'            =>  3
                                        ],
                                    ],
                                    'buttonClass'       => 'btn btn-block btn-read-more text-center',
                                    'buttonTitle'       => 'Read more'])
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
