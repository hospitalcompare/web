@if(!empty($data['special_offers']))
    <ul class="solutions-menu mb-0 row flex-nowrap align-items-end">
        @foreach($specialOffers as $key => $specialOffer )
            <li class="col">
                @include('components.basic.specialoffertab', [
                    'bgColor' => 'pink',
                    'headerText' => [
                        'open' => [
                            'title' => 'Your Nearest Outstanding NHS Hospital',
                            'subtitle' => !empty($specialOffer['radius']) ? round($specialOffer['radius'], 1) . ' miles away' : ''
                        ],
                        'closed' => [
                            'title' => 'Your Nearest Outstanding NHS Hospital',
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
                    'offerPrice'        => null,
                    'hospitalType'      => $specialOffer['hospital_type']['name'] == 'Independent' ? 'private-hospital' : 'nhs-hospital',
                    'title'             => $specialOffer['name'],
                    'url'               => $specialOffer['url'],
                    'id'                => $specialOffer['id'],
                    'tel'               => $specialOffer['phone_number'],
                    'tel2'              => $specialOffer['phone_number_2'],
                ])
            </li>
        @endforeach
    </ul>
@endif
