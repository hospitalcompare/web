<div class="compare-hospitals-bar compare-hospitals-bar_mobile {{ !empty($position) && $position == 'static' ? 'position-static' : ''  }}">
    <div class="compare-hospitals-header d-flex justify-content-between">
        <div class="container-fluid px-0 position-relative d-flex justify-content-between align-items-end h-100">
            <div id="compare_button_title" class="compare-button-title d-flex align-items-center h-100 w-50 pl-3">
                @svg('compare-heart', 'compare-heart')
                <p class="font-12">Compare&nbsp;(<span id="compare_number">0</span>)<span
                        class="compare-arrow ml-3"></span>
                </p>
            </div>
            @if(!empty($data['special_offers']))
                <ul class="solutions-menu align-items-end d-md-flex mb-0 ml-auto w-50">
                    <li class="d-block h-100 w-100">
                        {{--Special offers tabs in solutions bar --}}
                        <div class="special-offer-tab pink__offer pink w-100 rounded-0">
                            <div class="special-offer-header d-flex align-items-center font-12">
                                Lowest waiting time
                                <span class="toggle-special-offer d-inline-flex align-items-center">
                                    @svg('chevron-up')
                                </span>
                            </div>
                            <div class="special-offer-body">
                                <div class="inner-body d-flex flex-column justify-content-between h-100">
                                    Body
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            @endif
        </div>
    </div>
    <div class="compare-hospitals-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-inner">
                        <div class="mb-4">
                            <p class="SofiaPro-SemiBold mb-1 d-none">You are comparing:</p>
                            <p class="mb-3 d-none"><span id="nhs-hospital-count">0</span>&nbsp;NHS hospital(s) &<br><span
                                    id="private-hospital-count">0</span>&nbsp;Private hospital(s)</p>
                            <div class="form-wrapper pt-3">
                                @include('components.basic.modalbutton', [
                                    'htmlButton'        => true,
                                    'buttonText'        => 'Make an enquiry to all your chosen hospitals',
                                    'classTitle'        => 'btn btn-squared btn-blue btn-enquire-all font-12 w-100',
                                    'id'                => 'multiple_enquiries_button',
                                    'svg'               => 'circle-check',
                                    'svgClass'          => 'circle-check',
                                    'modalTarget'       => '#hc_modal_enquire_private',
                                    'disabled'          => true,
                                    'hospitalTitle'     => 'your selected hospitals',
                                    'hospitalIds'       => '',
                                    'htmlButton'        => true
                                ])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-0 border-right-0">
                    <div class="hc-accordion" id="compare_hospitals_grid">
                        {{-- Comparison items go here  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
