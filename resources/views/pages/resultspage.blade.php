@extends('layout.app')

@section('title', 'Results Page')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'results-page')

@section('content')
    @include('pages.pagesections.resultspageform')

    <div id="sort_categories_parent" class="sort-categories-parent">
        <div class="sort-categories-header container">
            <div class="sort-categories-section-1"></div>
            <nav class="sort-categories-section-2">
                <ul class="sort-categories-menu">
                    <li>
                        <p tabindex="0" data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'size'      => 'large',
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                Care Quality Rating
                                            </p>
                                            <p>
                                                The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.
                                            </p>'])>Care Quality<br>Rating</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-care-quality-rating {{Request::input('sort_by') == 10 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'size'      => 'large',
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                Waiting Time (NHS Funded)
                                            </p>
                                            <p>
                                                Our waiting time data is based on NHS data, specifically the number of weeks that 92 out or 100 people wait for their treatment to start.
                                            </p>'])>Waiting time <br>(NHS Funded)</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-waiting-time {{Request::input('sort_by') == 4 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'size'      => 'large',
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                NHS Choices User Rating
                                            </p>
                                            <p>
                                                Five star rating system based on feedback provided by users of the NHS, five stars being the best. Information is not available on some hospitals.
                                            </p>'])>NHS Choices <br> User Rating&nbsp;<br></p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-user-rating {{Request::input('sort_by') == 6 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'size'      => 'large',
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                % of Operations Cancelled
                                            </p>
                                            <p>
                                                The percentage of operations cancelled during the last reporting period. Data only available for NHS hospitals at this time.
                                            </p>'])>% Operations<br>Cancelled</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-op-cancelled {{Request::input('sort_by') == 8 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'size'      => 'large',
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                Friends & Family Rating
                                            </p>
                                            <p>
                                                The percentage of people who would recommend this hospital to family and friends.
                                            </p>'])>Friends &<br>Family Rating</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-ff-rating {{Request::input('sort_by') == 12 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'size'      => 'large',
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                NHS Funded Work
                                            </p>
                                            <p>
                                                This hospital provides treatments funded by the NHS. Remember you can have an NHS treatment at most private hospitals.
                                            </p>'])>NHS<br>Funded Work</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-nhs-funded {{Request::input('sort_by') == 14 ? 'desc':'asc' }}"></span>
                    </li>
                    <li>
                        <p tabindex="0" data-offset="30px, 40px"
                            @include('components.basic.popover', [
                            'size'      => 'large',
                            'placement' => 'top',
                            'trigger'   => 'hover',
                            'html'      => 'true',
                            'content'   => '<p class="bold mb-0">
                                                Private Self Pay
                                            </p>
                                            <p>
                                                Indicates whether a hospital location provides Private, Self Pay services. In many instances, your local NHS hospital will also offer private treatment.
                                            </p>'])>Private<br>Self Pay</p>
                        <span title="Sort by this column"
                              class="sort-arrow sort-self-pay {{Request::input('sort_by') == 16 ? 'desc':'asc' }}"></span>
                    </li>
                </ul>
            </nav>
            <div class="sort-categories-section-3 p-0">
                <ul class="sort-categories-menu p-0 h-100">
                    <li class="align-items-end justify-content-end">
                        <p class="text-center  m-0">
                            Compare
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="sortCategoriesResults">
        @if(!empty($data['hospitals']))
            @foreach($data['hospitals'] as $d)
                @include('components.item', [
                    'id'                => $d['id'],
                    'itemImg'           => 'images/alder-1.png',
                    'title'             => $d['name'],
                    'location'          => (!empty($d['address']['address_1']) ? trim($d['address']['address_1']) : '') . (!empty($d['radius']) ? ', '.number_format($d['radius'], 1 ). ' miles from postcode': ''),
                    'town'              => (!empty($d['address']['city']) ? ', ' . $d['address']['city'] : ''),
                    'county'             => (!empty($d['address']['county']) ? $d['address']['county'] : ''),
                    'postcode'          => (!empty($d['address']['postcode']) ? $d['address']['postcode'] : ''),
                    'latitude'          => $d['address']['latitude'],
                    'longitude'         => $d['address']['longitude'],
                    'findLink'          => 'Find on map',
                    'waitTime'          => !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? number_format((float)$d['waitingTime'][0]['perc_waiting_weeks'], 1).'<br>Weeks' : 0,
                    'userRating'        => !empty($d['rating']['avg_user_rating']) ? $d['rating']['avg_user_rating'] : 0,
                    'stars'             => !empty($d['rating']['avg_user_rating']) ? \App\Helpers\Utils::getHtmlStars($d['rating']['avg_user_rating']) : "<a class='btn-link'>No data</a>",
                    'opCancelled'       => !empty($d['cancelledOp']['perc_cancelled_ops'])? number_format((float)$d['cancelledOp']['perc_cancelled_ops'], 1).'%': 0,
                    'qualityRating'     => !empty($d['rating']['latest_rating']) ? $d['rating']['latest_rating'] : 0,
                    'FFRating'          => !empty($d['rating']['friends_family_rating']) ? number_format((float)$d['rating']['friends_family_rating'], 1).'%' : 0,
                    'NHSFunded'         => ($d['hospitalType']['name'] === 'NHS' || ($d['hospitalType']['name'] === 'Independent' && !empty($d['waitingTime'][0]['perc_waiting_weeks']))) ? 1 : 0,
                    'privateSelfPay'    => $d['hospitalType']['name'] === 'Independent' ? 1 : 0,
                    'specialOffers'     => $d['special_offers'],
                    'btnText'           => 'Make an enquiry',
                    'NHSClass'          => $d['hospitalType']['name'] == 'NHS' ? 'nhs-hospital' : 'private-hospital',
                    'fundedText'        => ($d['hospitalType']['name'] == 'NHS') ? 'NHS Hospital': 'Private Hospital',
                    'url'               => $d['url']])
            @endforeach
        @endif
    </div>

    <div class="pagination-wrap">
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

    {{--  Compare bar  --}}
    {{--    @include('components.compare')--}}
    {{-- New comparebar - solutions bar --}}
    @include('components.solutionsbar')
    {{--  Modal for 'make an enquiry'  --}}
    @include('components.modals.modalenquirenhs')
    {{--  Modal for special offers  --}}
    @include('components.modals.modalspecial')
    {{--  Modal for special offers  --}}
    @include('components.modals.modalenquireprivate', [
        'procedures' => $data['filters']['procedures']])
    {{--  Maps modal  --}}
    @include('components.modals.modalmaps')


@endsection
