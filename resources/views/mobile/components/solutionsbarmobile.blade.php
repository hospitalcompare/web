<div class="compare-hospitals-bar compare-hospitals-bar_mobile {{ !empty($position) && $position == 'static' ? 'position-static' : ''  }}">
    <div class="compare-hospitals-header d-flex justify-content-between">
        <div class="container-fluid px-0 position-relative d-flex justify-content-between align-items-end h-100">
            @include('components.synergy')
{{--            @includeWhen(!empty($data['special_offers']), 'components.basic.modalbutton', [--}}
{{--                'id'                => 'hc_modal_mobile_special_offer_tab_trigger',--}}
{{--                'modalTarget'       => '#hc_modal_mobile_special_offer_tab',--}}
{{--                'classTitle'        => 'bg-pink col-white w-50 h-100 d-flex justify-content-center align-items-center',--}}
{{--                'svg'               => 'chevron-up',--}}
{{--                'svgClass'          => 'ml-3',--}}
{{--                'buttonText'        => 'Special Offer'--}}
{{--            ])--}}
        </div>
    </div>
    <div class="compare-hospitals-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-inner">
                        <div class="mb-4">
                            <p class="SofiaPro-SemiBold mb-1 d-none">You are comparing:</p>
{{--                            <p class="mb-3 d-none"><span id="nhs-hospital-count">0</span>&nbsp;NHS hospital(s) &<br><span--}}
{{--                                    id="private-hospital-count">0</span>&nbsp;Private hospital(s)</p>--}}
{{--                            <div class="form-wrapper pt-3 d-none">--}}
{{--                                @include('components.basic.modalbutton', [--}}
{{--                                    'htmlButton'        => true,--}}
{{--                                    'buttonText'        => 'Email private hospitals',--}}
{{--                                    'classTitle'        => 'btn btn-squared btn-blue btn-enquire-all font-12 w-100',--}}
{{--                                    'id'                => 'multiple_enquiries_button',--}}
{{--                                    'svg'               => 'circle-check',--}}
{{--                                    'svgClass'          => 'circle-check',--}}
{{--                                    'modalTarget'       => '#hc_modal_enquire_private',--}}
{{--                                    'disabled'          => true,--}}
{{--                                    'hospitalTitle'     => 'your selected hospitals',--}}
{{--                                    'hospitalIds'       => '',--}}
{{--                                    'htmlButton'        => true,--}}
{{--                                ])--}}
{{--                            </div>--}}
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
