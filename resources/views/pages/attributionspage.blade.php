@extends('layout.app')

@section('title', 'Attributions')

@section('description', 'Learn about the attributions that apply to Hospital Compare website users.')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1, user-scalable=no')

@section('body-class', 'attributions-page')

@section('content')

<section class="py-5" style="min-height: 50vh">
    <div class="container">
        <div class="row">
            <div class="col hc-content">
                <h1>Attribution Notices</h1>
                <p>Information displayed on the Hospital Compare Limited website contains information from NHS Digital, NHS and the CQC, licensed in each case under the current version of the Open Government Licence.
                    <a class="text-link" target="_blank" href="http://www.nationalarchives.gov.uk/doc/open-government-licence">http://www.nationalarchives.gov.uk/doc/open-government-licence</a></p>
            </div>
        </div>
    </div>
</section>
@endsection
