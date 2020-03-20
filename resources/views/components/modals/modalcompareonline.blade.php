<!--{{--Template for corporate video modal --}}-->
<!---->
<div class="modal modal-tour fade {{ !empty($displayBlock) ? 'd-block show' : '' }}"
     style="{{ !empty($displayBlock) ? 'opacity: 1' : '' }}"
     id="hc_modal_compare_online"
     tabindex="-1"
     role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-right">
                <button type="button" class="btn-plain" data-dismiss="modal" aria-label="Close">
                    @svg('times-black')
                </button>
            </div>
            <div class="modal-body p-3 position-relative">
                <p class="col-grey font-16">Fund Your Treatment and Get Seen Faster</p>
                <p>There are a number of private treatment funding options, from loans designed specifically for medical
                    treatment, standard unsecured loans, as well as
                    options created by the providers below. Hospital Compare has carefully identified the following
                    providers (based on their high customer ratings) as some
                    options you may wish to consider. Read our guide to treatment funding.</p>
                <!--Controls-->
            </div>
        </div>
    </div>
</div>
