{{--Template for exit survey when l;eaving site --}}

<div class="modal fade" id="hc_modal_exit_survey" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content position-relative">
            <div class="modal-header d-flex justify-content-between">
                <button type="button" class="btn-plain ml-auto" data-dismiss="modal" aria-label="Close">
                    @svg('times-black')
                </button>
            </div>
            <div class="modal-body p-30">
                <div
                    class="col-inner h-100 col-inner__left text-center d-flex flex-column justify-content-center align-items-center">
                    <h3 class="modal-title mb-3">How would you rate your experience?</h3>
                    <form class="w-100" action="" id="form_exit_survey">
                        <div class="form-group mb-4 d-flex justify-content-center">
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="0.5 stars"></label>
                            </fieldset>
                        </div>
                        <div class="form-group mb-4">
                            <div id="col_additional_information">
                                <textarea class="form-control p-3" name="further_feedback" placeholder="Any further feedback?" id="further_feedback" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            @include('components.basic.button', [
                                'buttonText'        => 'Submit',
                                'classTitle'        => 'btn btn-squared btn-squared_slim btn-brand-secondary-3 px-5',
                                'htmlButton'        => 'true'
                            ])
                        </div>
                    </form>
                </div>
                <div class="p-30">
                </div>
            </div>
        </div>
    </div>
</div>
