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
                        @include('components.blogloop', [
                            'blogs' => $data['blogs'],
                            'buttonClass'       => 'btn btn-block btn-read-more text-center',
                            'buttonTitle'       => 'Read more'
                            ])
                    </div>
                    <div class="pagination-wrap">
                        @if(!empty($data['blogs']))
                            {{ $data['blogs']->links('components.basic.pagination') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
