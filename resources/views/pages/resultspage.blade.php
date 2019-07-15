@extends('layout.app')

@section('title', 'Page Test')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

{{--creates path for CSS file --}}
@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush


{{--creates path for JS file --}}
@push('main')
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
@endpush

@push('button')
    <script type="text/javascript" src="{{ asset('js/button.js') }}"></script>
@endpush

@push('jquery')
    <script src="{{ asset('js/library/jquery-3.4.1.min.js') }}"></script>

@endpush

@push('font-awesome')
    <script src="{{ asset('js/library/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/d4b841dc1e.js') }}"></script>
@endpush

@section('content')

    <div class="filterParent">
            <section class="filter">
                <form class="formElem">
                    <div class="postProx">
                        <div class="postProxChild">
                            @include('components.basic.textbox', ['placeholder' => 'Enter your postcode', 'inputClassName' => 'inputClass'])

                        </div>
                        <div class="postProxChild">
                            <div class="rangeParent">
                                @include('components.basic.range', ['label' => 'Within radius of', '' => ''])


                            </div>
                        </div>
                    </div>
                    <div class="selectProx">
                        <div class="postProxChild">
                            @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'selectClass' => 'searchPageSelect', 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'placeholder' => 'Surgery Type', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'surgery type...', 'className' => 'helpPosition1'])
                        </div>
                        <div class="postProxChild">
                            @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'selectClass' => 'searchPageSelect', 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'placeholder' => 'Waiting time', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'waiting time...', 'className' => 'helpPosition2'])
                        </div>
                        <div class="postProxChild">
                            @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'selectClass' => 'searchPageSelect', 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'placeholder' => 'NHS choices user rating', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'NHS choices...', 'className' => 'helpPosition3'])
                        </div>
                        <div class="postProxChild">
                            @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'selectClass' => 'searchPageSelect', 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'placeholder' => 'Care quality rating', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'Care quality...', 'className' => 'helpPosition4'])
                        </div>
                        <div class="postProxChild">
                            @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'selectClass' => 'searchPageSelect', 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'placeholder' => 'NHS private/NHS funded', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'NHS private...', 'className' => 'helpPosition5'])
                        </div>
                        <div class="postProxChild">
                            @include('components.basic.button', ['classTitle' => 'greenOval blockDisplay', 'button' => 'Update results'])

                        </div>
                    </div>
                </form>
            </section>
    </div>
    <div class="sortParent">
        <section class="sort">
            <section class="sortBar">
                    <div class="showSection">
                        Showing ? out of ? provider(s)
                    </div>
                <div class="sortSection">
                    @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Distance from postcode'], ['id'=>2, 'name'=>'Distance from postcode']], 'selectClass' => 'sortBy', 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'placeholder' => 'Sort by:', 'resultsLabel' => 'sortLabel'])

                </div>
            </section>
        </section>
        <section class="sortCategories">

        </section>
    </div>

@endsection