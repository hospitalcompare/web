@extends('layout.app')

@section('title', 'Test Page')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'test-page')

@section('content')
    <main>
        <div class="container">
            @include('components.basic.alertdanger')
        </div>
        <section>
            <div class="container">
                <h3>Enquiry Form</h3>
                @include('components.modals.modalenquireprivate', [
                    'procedures' => $data['procedures'] ])
            </div>
        </section>
    </main>

@endsection
