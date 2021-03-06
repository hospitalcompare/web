@extends('layout.app')

@section('title', $slug)

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1, user-scalable=no')

@section('body-class', $slug . '-page')

@section('content')

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>The {{ $slug }} page is under construction!</h1>
                </div>
            </div>
        </div>
    </main>

@endsection
