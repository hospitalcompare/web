<button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
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
                        <a  data-toggle="modal"
                            data-target="#hc_modal_special"
                            data-content="<h1>' . $specialOfferContent = 'hello' . '</h1>"
                            data-dismiss="modal"
                            class="btn btn-icon btn-special-offer">Special Offers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
