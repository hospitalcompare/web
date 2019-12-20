<div id="hc_modal_mobile_special_offer_{{ $id }}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="special-offer-title col-pink font-18 text-center w-100">Special Offer</h5>
            </div>
            <div class="modal-body">
                <div class="special-offers_mobile">
                    <div class="">
                        <div class="">
                            <div class="img-wrap">
                                <img src="images/alder-1.jpg"
                                     alt="Image of {{ $title }}">
                            </div>
                        </div>
                        <div class="">

                            <p class="special-offer-copy font-14">Get your Knee operation done in under 2 weeks on our self-pay
                                programme for £8,999 (reduced from £10,500).</p>
                        </div>
                        <div>
                            <ul class="pl-2 mr-0 mb-3">
                                <li class="green-tick">2 weeks</li>
                                <li class="green-tick">Outstanding</li>
                                <li class="green-tick">5 star user rating</li>
                            </ul>
                            @include('components.basic.modalbutton', [
                                    'hospitalType'      => $NHSClass,
                                    'hrefValue'         => $url,
                                    'hospitalTitle'     => $title,
                                    'modalTarget'       => '#hc_modal_enquire_private',
                                    'classTitle'        => 'btn btn-enquire-pink btn-icon',
                                    'target'            => 'blank',
                                    'buttonText'        => 'Make an enquiry',
                                    'hospitalIds'       => $id,
                                    'id'                => 'enquire_'.$id])
                        </div>
                        {{--            <div class="col-3">--}}
                        {{--                <img width="100px" height="50px" class="mb-3" src="images/bupa.png" alt="">--}}
                        {{--            </div>--}}
                    </div>
                </div>
            </div>
            <div class="modal-footer m-0 p-3">
                <button type="button" class="btn btn-squared btn-squared_slim w-100 btn-black text-center" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


