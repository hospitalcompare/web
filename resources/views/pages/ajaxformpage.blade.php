@extends('layout.app')

@section('title', 'Test Page')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'test-page')

@section('content')
    <section>
        <div class="container">
            <h3>Enquiry Form</h3>
            @include('components.modals.modalenquireprivate', [
                'procedures'    => $data['procedures'],
                'title'         => 'Mr',
                'firstName'     => 'Test',
                'dob'           => '1980/04/12',
                'lastName'      => 'Testing',
                'email'         => 'test@test.com',
                'phone'         => '012345678901',
                'postcode'      => 'ch423re',
                'gdpr'          => true])
        </div>
    </section>
@endsection
