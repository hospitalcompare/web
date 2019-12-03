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
                <h1>Latest <span class="col-turq">healtchare</span> news</h1>
                <h3>Informative, impartial and helpful information <br>
                    surrounding the healthcare industy.</h3>

                <div class="filters row">
                    <div class="text text-left col-2">Filter articles</div>
                    <div class="categories col-10">
                        @if(!empty($data['categories']))
                            <div class="row">
                                <div class="offset-2"></div>
                                @foreach($data['categories'] as $cat)
                                    <a href="/blogs/category/{{$cat->id}}" class="btn category text-right col-2" style="color: {{ (empty($data['categoryId']) ? $cat->colour : (($data['categoryId'] == $cat->id) ? $cat->colour : 'grey'))}}">{{$cat->name}}</a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col hc-content">
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
