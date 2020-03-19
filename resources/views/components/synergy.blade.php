@if(!empty($data['special_offers']))
    <ul class="solutions-menu align-items-end d-lg-flex mb-0 ml-auto mr-3">
        @foreach($specialOffers as $key => $specialOffer )
            <li class="d-block h-100 {{ $loop->index != 0 ? 'ml-4' : '' }}">
                @include('components.basic.specialoffertab', [
                    'bgColor' => $loop->index == 0 ? 'blue' : 'pink',
                    'headerText' => [
                        'open' => [
                            'title' => $specialOffer['name'],
                            'subtitle' => !empty($specialOffer['radius']) ? round($specialOffer['radius'], 1) . ' miles away' : ''
                        ],
                        'closed' => [
                            'title' => 'NHS funded treatment',
                            'subtitle' => ((empty($data['outstanding']) ?
                                'at '.$specialOffer['rating']['latest_rating'].' hospital ' :
                                 'in '.number_format((float)$specialOffer['waiting_time'][0]['perc_waiting_weeks'], 1).' Weeks '). (!empty($specialOffer['radius']) ? round($specialOffer['radius'], 1) . ' miles away' : ''))
                        ]
                    ],
                    'bulletPoints' => [
                        number_format((float)$specialOffer['waiting_time'][0]['perc_waiting_weeks'], 1).' Weeks ',
                        $specialOffer['rating']['latest_rating'] . ' CQC Rating',
                        (!empty($specialOffer['rating']['avg_user_rating'])) ? $specialOffer['rating']['avg_user_rating'] . ' star NHS Choices user rating' : null
                    ],
                    'offerPrice'    => null,
                    'hospitalType'  => $specialOffer['hospital_type']['name'] == 'Independent' ? 'private-hospital' : 'nhs-hospital',
                    'hospitalUrl'   => $specialOffer['url'],
                    'hospitalId'    => $specialOffer['id']
                ])
            </li>
        @endforeach
    </ul>
@endif
