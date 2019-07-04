@extends('layout.app')

@section('title', 'Page Test')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

{{--creates path for CSS file --}}
@push('styles')
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
@endpush

{{--creates path for JS file --}}
@push('main')
    <script type="text/javascript" src="{{ asset('js/test.js') }}"></script>
@endpush

@push('jquery')
    <script src="{{ asset('js/library/jquery-3.4.1.min.js') }}"></script>

@endpush








