{{-- stored in same folder --}}
@extends('app')

@section('title', 'Page Title')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('header')
    @parent

    <p>This is appended to the master header section.</p>
@endsection

@section('header')
    <p>This is my body content.</p>
@endsection

