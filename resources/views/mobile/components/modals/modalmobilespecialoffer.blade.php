<div id="hc_modal_mobile_special_offer_{{ $id }}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog shadow m-3" role="document">
        <div class="modal-content">
            <div class="modal-header flex-column align-items-center">
                <h5 class="special-offer-title col-pink font-18 text-center w-100 mb-2">Special Offer</h5>
                <p class="mb-2 SofiaPro-SemiBold font-16">{{ $title }}</p>
                <p class="col-grey mb-1">{{ $fundedText }} {{ !empty($d['radius']) ? '-' : '' }} {{ $location }}</p>
            </div>
{{--            <div class="img-wrap w-100">--}}
{{--                <img class="w-100"--}}
{{--                     src="images/hospitals/hospital-placeholder.jpg"--}}
{{--                     alt="Image of {{ $title }}">--}}
{{--            </div>--}}
            <div class="modal-body p-3">
                <div class="special-offers_mobile">
                    <div class="">
                        <div class="">
                            <p class="special-offer-copy font-16 SofiaPro-Medium">Get your Knee operation done in under 2 weeks on our
                                self-pay
                                programme for £8,999 (reduced from £10,500).</p>
                        </div>
                        <div>
                            <ul class="mr-0 mb-3 font-16 SofiaPro-Medium">
                                <li class="pink-tick">2 weeks</li>
                                <li class="pink-tick">Outstanding</li>
                                <li class="pink-tick">5 star user rating</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-cta m-0 p-3">
                <div class="row">
                    <div class="col-6">
                        <button type="button" class="btn btn-squared btn-squared_slim w-100 btn-black text-center"
                                data-dismiss="modal"><span>Close</span>
                        </button>
                    </div>
                    <div class="col-6">
                        @include('components.basic.modalbutton', [
                                    'hospitalType'      => $NHSClass,
                                    'hrefValue'         => $url,
                                    'hospitalTitle'     => $title,
                                    'modalTarget'       => '#hc_modal_enquire_private',
                                    'classTitle'        => 'btn-nested-enquire btn btn-squared btn-enquire btn-squared_slim btn-blue text-center enquiry font-12 w-100 d-flex justify-content-center align-items-center flex-row-reverse px-3',
                                    'svg'               => 'circle-check',
                                    'target'            => '_blank',
                                    'buttonText'        => 'Enquiry',
                                    'hospitalIds'       => $id,
                                    'id'                => 'enquire_' . $id])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


