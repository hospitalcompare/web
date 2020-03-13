<div id="hc_modal_mobile_special_offer_tab" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog m-0 d-flex flex-column justify-content-end h-100" role="document">
        <div class="modal-content position-relative result-item-mobile pt-5">
            <div class="item-tags position-absolute d-flex">
                <div class="{{ $specialOffer['hospital_type_id'] === 1 ? 'bg-private private-hospital' : 'bg-nhs nhs-hospital' }} hospital-type pp-2 bg-blue position-relative d-inline-block">
                    <p class="px-3 m-0 font-12">{{ $specialOffer['hospital_type_id'] === 1 ? 'Private' : 'NHS' }}</p>
                </div>
            </div>
            @include('components.basic.button', [
                'classTitle'        => 'btn btn-compare compare font-12 shadow-none position-absolute mt-2 mr-2',
                'htmlButton'        => true,
                'buttonText'        => 'Add to compare',
                'hospitalType'      => 1,
                'svg'               => 'heart-solid',
                'id'                => $specialOffer['id']])
            <div class="modal-header flex-column align-items-center">
                <h5 class="special-offer-title font-18 text-center w-100 mb-2">Lowest Waiting time</h5>
                <p class="mb-2 SofiaPro-SemiBold font-16">{{ $specialOffer['name'] }}</p>
                <p class="col-grey mb-1"> {{ !empty($d['radius']) ? round($d['radius'], 1) . ' miles away' : '' }}</p>
            </div>
            <div class="modal-body p-3">
                <div class="special-offers_mobile">
                    <div class="">
                        <div>
                            <ul class="mr-0 mb-3 font-16 SofiaPro-Medium">
                                <li class="pink-tick">{{ number_format((float)$specialOffer['waiting_time'][0]['perc_waiting_weeks'], 1).' Weeks ' }}</li>
                                <li class="pink-tick">{{ $specialOffer['rating']['latest_rating'] . ' CQC Rating' }}</li>
                                {!!   (!empty($specialOffer['rating']['avg_user_rating'])) ? '<li class="pink-tick">'.$specialOffer['rating']['avg_user_rating'] . ' star NHS Choices user rating</li>' : null !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-cta m-0 p-3 pb-5">
                <div class="row">
                    <div class="col-6 d-flex">
                        <button type="button" class="btn btn-squared btn-squared_slim w-100 btn-black text-center"
                                data-dismiss="modal">Close
                        </button>
                    </div>
                    <div class="col-6 d-flex">
                        @include('components.basic.modalbutton', [
                                    'hospitalType'      => $specialOffer['hospital_type_id'],
                                    'hrefValue'         => $specialOffer['url'],
                                    'hospitalTitle'     => $specialOffer['name'],
                                    'modalTarget'       => '#hc_modal_enquire_private',
                                    'classTitle'        => 'btn-nested-enquire btn btn-squared btn-enquire btn-squared_slim btn-blue text-center enquiry font-12 w-100 d-flex justify-content-center align-items-center flex-row-reverse px-3',
                                    'svg'               => 'circle-check',
                                    'target'            => '_blank',
                                    'dismiss'           => true,
                                    'buttonText'        => 'Make enquiry',
                                    'hospitalIds'       => $specialOffer['id'],
                                    'id'                => 'enquire_' . $specialOffer['id']])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
