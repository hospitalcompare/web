@extends('layout.app')

@section('title', 'About Us')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'about-us-page')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col hc-content">
                <h1>About Hospital Compare</h1>
                <p>Hospital Compare is an independent private company whose purpose and mission is to empower you by:</p>
                <ul>
                    <li>informing you of the Choices available to you in law for your hospital treatment</li>
                    <li>helping you choose the best hospital in England for your treatment</li>
                    <li>helping you to understand your available choices to have your hospital treatment performed
                        <ul>
                            <li>sooner, by comparing waiting times at different hospitals</li>
                            <li>at the best quality hospital, by comparing hospital quality rankings</li>
                            <li>at a private hospital paid for by the NHS or paid for you self, or by your insurer, if that is your preference
                            </li>
                            <li>to bring you self- pay offers from time to time, provided by private hospitals, so  you can have your treatment performed quicker and more cost effectively, if you or your insurer wish to pay</li>
                        </ul>
                    </li>
                    <p>We compare hospital performance in England for you to consider. You are not charged for this service.</p>
                    <p>Rest assured, one of our key principles is to provide impartial advice at all times on hospital availability and choice based on the search criteria we provide for you.</p>
                    <p><strong>Private hospitals perform NHS treatments. That means you can choose to have your treatment at a private hospital paid for by the NHS. That is your legal choice (there are exceptions- see
                            <a class="text-link" href="/your-rights">Your rights)</a>. This is at no greater cost to the tax payer.
                        </strong></p>
                </ul>
            </div>
        </div>
    </div>

@endsection
