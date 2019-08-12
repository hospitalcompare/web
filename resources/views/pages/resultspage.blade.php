@extends('layout.app')

@section('title', 'Page Test')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'results-page')

@section('content')

    <form class="formElem">
        <div class="filterParent">
            <section class="filter">
                <div class="postProx">
                    <div class="postProxChild">
                        @include('components.basic.textbox', ['placeholder' => 'Enter your postcode', 'inputClassName' => 'inputClass', 'value' => !empty(Request::input('postcode')) ? Request::input('postcode') : '' , 'name' => 'postcode', 'id' => 'input_postcode'])
                    </div>
                    <div class="postProxChild">
                        @include('components.basic.range', ['label' => 'Within radius of:', 'min' => 10, 'max' => 300, 'value' => !empty(Request::input('radius')) ? Request::input('radius') : '', 'name' => 'radius', 'step' => 10])
                    </div>
                </div>
                <div class="selectProx">
                    <div class="filter-section">
                        <div class="postProxChild">
                            @include('components.basic.selectbox', ['showLabel' => true, 'options' => $data['filters']['procedures'], 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'selectClass' => 'searchPageSelect', 'placeholder'=>'Surgery Type', 'name'=>'procedure_id', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'surgery type...', 'className' => 'helpPosition1'])
                        </div>
                        <div class="postProxChild">
                            {{--                            @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'selectClass' => 'searchPageSelect', 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'placeholder' => 'Waiting time', 'resultsLabel' => 'resultsLabel'])--}}
                            @include('components.basic.selectbox', ['showLabel' => true, 'options' => $data['filters']['waitingTimes'], 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'selectClass' => 'searchPageSelect', 'placeholder'=>'Waiting time', 'name'=>'waiting_time', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'waiting time...', 'className' => 'helpPosition2'])
                        </div>
                        <div class="postProxChild">
                            {{--                            @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'selectClass' => 'searchPageSelect', 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'placeholder' => 'NHS choices user rating', 'resultsLabel' => 'resultsLabel'])--}}
                            @include('components.basic.selectbox', ['showLabel' => true, 'options' => $data['filters']['userRatings'], 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'selectClass' => 'searchPageSelect', 'placeholder'=>'NHS Choices User Rating', 'name'=>'user_rating', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'NHS choices...', 'className' => 'helpPosition3'])
                        </div>
                        <div class="postProxChild">
                            @include('components.basic.selectbox', ['showLabel' => true, 'options' => $data['filters']['qualityRatings'], 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'selectClass' => 'searchPageSelect', 'placeholder'=>'Care Quality Rating', 'name'=>'quality_rating', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'Care quality...', 'className' => 'helpPosition4'])
                        </div>
                        <div class="postProxChild">
                            @include('components.basic.selectbox', ['showLabel' => true, 'options' => $data['filters']['hospitalTypes'], 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'selectClass' => 'searchPageSelect', 'placeholder'=>'NHS Private/NHS Funded', 'name'=>'hospital_type', 'resultsLabel' => 'resultsLabel'])
                            @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'NHS private...', 'className' => 'helpPosition5'])
                        </div>
                    </div>
                    <div class="submit-section">
                        <div class="postProxChild">
                            @include('components.basic.submit', ['classTitle' => 'btn btn-grad btn-teal btn-s d-block', 'button' => 'Update Results'])
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="sortParent">
            <section class="sort">
                <section class="sortBar">
                    <div class="showSection">
                        Showing {{count($data['hospitals'])}} out of {{$data['hospitals']->total()}} provider(s)
                    </div>
                    <div class="sortSection">
                        @include('components.basic.helplink', [ 'helpParentPositionRelative' => true, 'helpChar'=> '?', 'helpText' => 'Choose a category to sort the list...', 'className' => ''])
                        @include('components.basic.selectbox', ['showLabel' => true, 'options' => $data['sortBy'], 'chevronFAClassName' => 'fa-chevron-down blackChevron', 'selectClass' => 'searchPageSelect', 'placeholder'=>'Sort by:', 'name'=>'sort_by', 'resultsLabel' => 'sortLabel'])
                    </div>
                </section>
            </section>
        </div>
    </form>

    <div class="sortCategoriesParent">
        <section class="sortCategoriesHeader">
            <div class="sortCatSection1"></div>
            <nav class="sortCatSection2">
                <ul class="sortCatMenu">
                    <li><a href="">Waiting time<br>(NHS Funded)</a></li>
                    <li><a href="">NHS Choices User Rating</a></li>
                    <li><a href="">% Operations<br>Cancelled</a></li>
                    <li><a href="">Care Quality<br>Rating</a></li>
                    <li><a href="">Friends &<br>Family Rating</a></li>
                    <li>
                        <a data-offset="0 30px" @include('components.basic.popover', [
                            'size'      => 'large',
                            'placement' => 'top',
                            'trigger'   => 'click',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                What is NHS funded work?
                                            </p>
                                            <p>
                                                Many private healthcare policies allow you to choose which hospital to have your elective
                                                procedure at. Enter your provider and policy name to find the best hospital for you.
                                            </p>
                                            <p>
                                                <a class="btn btn-close btn-teal btn-icon btn-consultant" href="/">Close</a>
                                            </p>'])
                        >NHS<br>Funded Work</a></li>
                </ul>
            </nav>
            <div class="sortCatSection3 pt-2"></div>
        </section>
    </div>

    <div class="sortCategoriesResults">
        @if(!empty($data['hospitals']))
            @foreach($data['hospitals'] as $d)
                @include('components.item', [
                    'id'                => $d['id'],
                    'itemImg'           => 'images/alder-1.png',
                    'title'             => $d['name'],
                    'location'          => (!empty($d['address']['address_1']) ? $d['address']['address_1']: '').(!empty($d['radius']) ? ', '.$d['radius']. ' miles from location': ''),
                    'findLink'          => 'Find on map',
                    'waitTime'          => !empty($d['waitingTime'][0]['avg_waiting_weeks']) ? $d['waitingTime'][0]['avg_waiting_weeks'].' Weeks' : 'N/A',
                    'stars'             => !empty($d['rating']['avg_user_rating']) ? \App\Helpers\starRating($d['rating']['avg_user_rating']) : 'N/A',
                    'opCancelled'       => !empty($d['cancelledOp']['perc_cancelled_ops'])? $d['cancelledOp']['perc_cancelled_ops'].'%': 'N/A',
                    'qualityRating'     => !empty($d['rating']['latest_rating']) ? $d['rating']['latest_rating'] : 'N/A',
                    'FFRating'          => !empty($d['rating']['provider_rating']) ? $d['rating']['provider_rating'] : 'N/A',
                    'NHSFunded'         => ($d['hospital_type_id'] == 2 && !empty($d['waitingTime'])) ? "<img src='../images/icons/tick-green.svg' alt='Tick icon'>" : "<img src='../images/icons/dash-black.svg' alt='Dash icon'>",
                    'specialOffers'     => $d['special_offers'],
                    'btnText'           => !empty($d['special_offers']) ? 'NHS Funded Enquiry' : 'Make an enquiry',
                    'NHSClass'          => $d['hospital_type_id'] == 1 ? 'NHSHospital' : 'privateHospital',
                    'fundedText'        => $d['hospital_type_id'] == 1 ? 'NHS Hospital': 'Private Hospital',
                    'url'               => 'https://' . $d['url'],
                    'modalContent'      => '<button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="text-white bg-black">Close</span>
                                            </button>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col col-md-6 p-0">
                                                            <div class="col-inner col-inner__left">
                                                                <h3 class="modal-title mb-3">' . $d['name'] . '</h3>
                                                                <div class="d-flex mb-3">
                                                                    <div class="image-wrapper mr-3">
                                                                        <img class="mr-3" src="images/alder-1.png">
                                                                    </div>
                                                                    <p class="modal-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                                        aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                                        reprehenderit in.</p>

                                                                </div>
                                                                <div class="btn-area">
                                                                    <a href="http://' . $d['url'] . '" target="_blank" class="btn btn-icon btn-enquire">Make an enquiry</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col col-md-6 p-0">
                                                            <div
                                                                class="col-inner col-inner__right h-100 text-center bg-pink">
                                                                <h2 class="text-white">Or go back to results</h2>

                                                                <p class="text-white modal-copy">Lorem ipsum dolor sit amet, consectetur
                                                                    adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                                    ea
                                                                    commodo consequat. Duis aute irure dolor in reprehenderit in.</p>
                                                                <div class="btn-area">
                                                                    <div class="btn btn-icon btn-special-offer">Special Offers</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>'
                    ])
            @endforeach
        @endif
    </div>

    <div class="pagination">
        @if(!empty($data['hospitals']))
            {{
                $data['hospitals']->appends([
                    'postcode'          => Request::input('postcode'),
                    'radius'            => Request::input('radius'),
                    'procedure_id'      => Request::input('procedure_id'),
                    'waiting_time'      => Request::input('waiting_time'),
                    'user_rating'       => Request::input('user_rating'),
                    'quality_rating'    => Request::input('quality_rating'),
                    'hospital_type'     => Request::input('hospital_type'),
                    'sort_by'           => Request::input('sort_by')
                ])->links()
            }}
        @endif
    </div>

@endsection
