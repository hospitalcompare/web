@extends('layout.app')

@section('title', 'Homepage')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'file-not-found bg-teal')

@section('content')

<section class="d-flex justify-content-center align-items-center w-100 bg-turq" style="height: 100vh">
    <div class="p-5 w-100 text-center">
        <a href="/"><img class="w-100 mb-3" src="{{ asset('/images/logo-desktop.svg') }}" style="max-width: 500px"></a>
        <h1 class="text-white">404 error | Sorry, page not found</h1>
        <a class="btn btn-blue mr-md-2 mb-2 mb-md-0" href="/">Back to homepage</a>
        <a class="btn btn-blue mb-2 mb-md-0" href="/results-page">Back to searchpage</a>
    </div>
</section>

@endsection
