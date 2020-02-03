<section class="flat-banner d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col col-12">
                <div class="banner-form-wrapper banner-flatform-wrapper rounded mx-auto flat-form" style="">
                    <p class="SofiaPro-Medium d-lg-block">Choose the <span class="col-brand-primary-1">best hospital&nbsp;</span>for your&nbsp;<span class="col-brand-primary-1">treatment</p>
                    <form
                        id="search_form"
                        class="form-element d-lg-flex align-items-end search-form-row"
                        method="get"
                        action="/results-page"
                        style="">
                        <div class="form-child treatment-parent">
                            @include('components.basic.select', [
                                'selectPicker'          => 'true',
                                'selectClass'           => 'big select-picker',
                                'options'               => $data['procedures'],
                                'group'                 => true,
                                'groupName'             => 'procedures',
                                'suboptionClass'        => 'subprocedures',
                                'svg'                   => 'chevron-down-aqua',
                                'name'                  => 'procedure_id',
                                'selectId'              => 'choose_procedure',
                                'showLabel'             => true,
                                'labelClass'            => 'd-none'
                            ])
                        </div>
                        <div class="form-child postcode-parent position-relative">
                            {{--                                Add this hidden input to remove the autocomplete functionality--}}
                            <label for="fake_postcode" class="d-none"></label>
                            <input name="fake_postcode" id="fake_postcode" type="text" class="d-none">
                            <div class="input-wrapper position-relative">
                                @include('components.basic.input', [
                                    'placeholder'           => 'Enter postcode',
                                    'inputClassName'        => 'input-postcode postcode-text-box big',
                                    'value'                 => '',
                                    'name'                  => 'postcode',
                                    'validation'            => 'maxlength=8 autocomplete="off"',
                                    'id'                    => 'input_postcode'
                                ])
                            </div>
                            <div class="postcode-results-container">
                                <div class="ajax-box"></div>
                            </div>
                        </div>
                        <div class="form-child radius-parent full-left row-layout position-relative" data-reveal-direction="right" >
                            @include('components.basic.select', [
                                'selectClass'           =>  'distance-dropdown big select-picker',
                                'selectWrapperClass'    =>  'w-100',
                                'selectParentClass'     =>  'd-md-flex w-100',
                                'options'               =>  \App\Helpers\Utils::radius,
                                'placeholder'           => 'How far would you travel?',
                                'placeholderOption'     => 'Select Distance',
                                'selectedPlaceholder'   =>  true,
                                'name'                  =>  'radius',
                                'svg'                   =>  'chevron-down'])
                        </div>
                        @include('components.basic.button', [
                            'classTitle'    => 'btn btn-squared btn-brand-primary-1 font-18 text-center d-flex align-items-center justify-content-center p-0',
                            'buttonText'    => 'Find Hospitals',
                            'htmlButton'    => true,
                            'id'            => 'submit_search',
                            'style'         => 'height: 55px; line-height: 55px; border: 2px solid transparent',
                        ])
                        <div class='browse-button w-100 d-none'>
                            <a class="col-grey" href="{{url('/results-page')}}">Browse all hospitals</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
