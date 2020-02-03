{{--{{ dd($data['hospitals']) }}--}}

@extends('layout.app')

@section('title', 'Results Page')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'results-page results-page-desktop')

@section('content')
    @include('pages.pagesections.resultspageform', ['displayBlock' => false])
    <div class="results mt-3 mt-lg-0">
        @if(!empty($data['hospitals']))
            @foreach($data['hospitals'] as $d)
                @include('components.item', [
                    'id'                    => $d['id'],
                    'itemImg'               => \File::exists("images/hospitals/{$d['location_id']}_thumb.jpg") ? "images/hospitals/{$d['location_id']}_thumb.jpg" : "images/hospitals/hospital-placeholder.jpg",
                    'title'                 => !empty($d['display_name'])? $d['display_name'] : $d['name'],
                    'location'              => (!empty($d['radius'])) ? number_format($d['radius'], 1 ) . ' miles from postcode' : '',
                    'town'                  => (!empty($d['address']['city']) ? ', ' . $d['address']['city'] : ''),
                    'county'                => (!empty($d['address']['county']) ? $d['address']['county'] : ''),
                    'postcode'              => (!empty($d['address']['postcode']) ? $d['address']['postcode'] : ''),
                    'latitude'              => $d['address']['latitude'],
                    'longitude'             => $d['address']['longitude'],
                    'findLink'              => 'Find on map',
                    'waitTime'              => !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? number_format((float)$d['waitingTime'][0]['perc_waiting_weeks'], 1) : 0,
                    'waitingTimeRanking'    => !empty($d['waitingTime'][0]['perc_waiting_weeks']) ? \App\Helpers\Utils::getRankingPosition($data['waitingTimeRankings'], $d['id']).' of '.$data['hospitals']->total() : '-',
                    'outpatient'            => !empty($d['waitingTime'][0]['outpatient_perc_95']) ? number_format((float)$d['waitingTime'][0]['outpatient_perc_95'], 1) : '-',
                    'outpatientRank'        => !empty($d['waitingTime'][0]['outpatient_perc_95']) ? \App\Helpers\Utils::getRankingPosition($data['outpatientRankings'], $d['id']).' of '.$data['hospitals']->total() : '-',
                    'inpatient'             => !empty($d['waitingTime'][0]['inpatient_perc_95']) ? number_format((float)$d['waitingTime'][0]['inpatient_perc_95'], 1) : '-',
                    'inpatientRank'         => !empty($d['waitingTime'][0]['inpatient_perc_95']) ? \App\Helpers\Utils::getRankingPosition($data['inpatientRankings'], $d['id']).' of '.$data['hospitals']->total() : '-',
                    'diagnosticRank'        => !empty($d['waitingTime'][0]['diagnostics_perc_6']) ? \App\Helpers\Utils::getRankingPosition($data['diagnosticRankings'], $d['id']).' of '.$data['hospitals']->total() : '-',
                    'diagnostic'            => !empty($d['waitingTime'][0]['diagnostics_perc_6']) ? $d['waitingTime'][0]['diagnostics_perc_6'].'%' : '-',
                    'userRating'            => !empty($d['rating']['avg_user_rating']) ? $d['rating']['avg_user_rating'] : 0,
                    'stars'                 => !empty($d['rating']['avg_user_rating']) ? \App\Helpers\Utils::getHtmlStars($d['rating']['avg_user_rating']) : "No data",
                    'opCancelled'           => !empty($d['cancelledOp']['perc_cancelled_ops'])? number_format((float)$d['cancelledOp']['perc_cancelled_ops'], 1).'%': 0,
                    'qualityRating'         => !empty($d['rating']['latest_rating']) ? $d['rating']['latest_rating'] : 0,
                    'FFRating'              => !empty($d['rating']['friends_family_rating']) ? number_format((float)$d['rating']['friends_family_rating'], 1).'%' : 0,
                    'NHSFunded'             => ($d['hospitalType']['name'] === 'NHS' || ($d['hospitalType']['name'] === 'Independent' && !empty($d['waitingTime'][0]['perc_waiting_weeks']))) ? 1 : 0,
                    'privateSelfPay'        => $d['hospitalType']['name'] === 'Independent' ? 1 : 0,
                    'specialOffers'         => $d['special_offers'],
                    'btnText'               => 'Make an enquiry',
                    'NHSClass'              => $d['hospitalType']['name'] == 'NHS' ? 'nhs-hospital' : 'private-hospital',
                    'fundedText'            => ($d['hospitalType']['name'] == 'NHS') ? 'NHS Hospital': 'Private Hospital',
                    'url'                   => $d['url'],
                    'tel'                   => $d['tel_number'],
                    'safe'                  => $d['rating']['safe'],
                    'safeIcon'              => \App\Helpers\Utils::getDiscOrStar($d['rating']['safe']),
                    'effective'             => $d['rating']['effective'],
                    'effectiveIcon'         => \App\Helpers\Utils::getDiscOrStar($d['rating']['effective']),
                    'caring'                => $d['rating']['caring'],
                    'caringIcon'            => \App\Helpers\Utils::getDiscOrStar($d['rating']['caring']),
                    'responsive'            => $d['rating']['responsive'],
                    'responsiveIcon'        => \App\Helpers\Utils::getDiscOrStar($d['rating']['responsive']),
                    'well_led'              => $d['rating']['well_led'],
                    'wellLedIcon'           => \App\Helpers\Utils::getDiscOrStar($d['rating']['well_led']),
                    'procedures'            => $data['filters']['procedures'],
                    'locationSpecialism'    => $d['location_specialism'],
                    'popoverDelay'          => 2000
                   ])
            @endforeach
            @if($data['hospitals']->total() < 10)
                <div class="container my-5 py-5">
{{--                    <img class="w-100" src="{{ asset('/images/tweakfilters.jpg') }}" alt="Image showing how to get more results">--}}
                    <h2 class="col-brand-primary-1 w-50 text-center mx-auto SofiaPro-Bold h-100 py-5 my-5">If you wish to receive more results then<br>
                        use the filters to broaden your search criteria</h2>
                </div>
            @endif
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
                ])->links('components.basic.pagination')
            }}
        @endif
    </div>

    @include('components.solutionsbar', [
        'specialOffers' => $data['special_offers']
        ])
    @include('components.modals.modalenquiregeneral')
    @include('components.modals.modalenquireprivate', [
        'procedures' => $data['filters']['procedures']])
    {{--  Maps modal  --}}



@endsection
