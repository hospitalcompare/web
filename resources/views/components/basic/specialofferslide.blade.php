<div class="special-offers-slide {{ $class }}">
    <div class="d-flex">
        {{--            <button type="button" class="close toggle-special-offer position-absolute" data-dismiss="modal"--}}
        {{--                    aria-label="Close">--}}
        {{--            </button>--}}
        <span class="position-absolute close-offer toggle-special-offer d-inline-flex">
            @svg('times')
        </span>
        <div class="mr-2">
            <div class="img-wrap">
                <img width="71"
                     height="65"
                     src="images/hospitals/hospital-placeholder.jpg"
                     alt="Image of {{ $title }}">
            </div>
        </div>
        <div class="mr-2" style="max-width: 150px">
            <p class="special-offer-title text-uppercase font-14">Special Offer</p>
            <p class="special-offer-copy font-14">Get your Knee operation done in under 2 weeks on our self-pay
                programme for £8,999 (reduced from £10,500).</p>
        </div>
        <div class="" style="min-width: 130px">
            <ul class="bullets pl-2 mr-0 mb-3">
                <li>2 weeks</li>
                <li>Outstanding</li>
                <li>5 star user rating</li>
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
