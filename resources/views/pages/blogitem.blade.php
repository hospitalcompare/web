@extends('layout.app')

@section('title', $id)

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'blog-item-page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col hc-content">
                <h1>Blog item {{ $id }}</h1>
            </div>
        </div>
    </div>

@endsection
