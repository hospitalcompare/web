<div class="mobile-search-form">
    <div class="align-items-center">
        <div class="text">
            <h3 class="font-28 SofiaPro-Medium">Choose the <span class="col-brand-primary-1">Right Hospital&nbsp;</span>for your&nbsp;<span
                    class="col-brand-primary-1">Treatment</span></h3>
            <p class="font-20 d-lg-none">Find which NHS and Private hospitals are available and fully funded.</p>
        </div>
        <div class="">
            <div class="banner-form-wrapper rounded ml-auto">
                <p class="SofiaPro-Medium d-none d-lg-block">{{$data['dynamicKeywordText'] ?? 'Find the best hospitals'}}</p>
                <form
                    id="search_form"
                    class="form-element"
                    method="get"
                    action="/results-page"
                    style="">
                    <div class="form-child treatment-parent position-relative">
                        @include('components.basic.select', [
                            'selectPicker'          => 'true',
                            'selectClass'           => 'big select-picker',
                            'options'               => \App\Helpers\Utils::getProceduresForDropdown(),
                            'group'                 => true,
                            'groupName'             => 'procedures',
                            'suboptionClass'        => 'subprocedures',
                            'svg'                   => 'chevron-down-aqua',
                            'name'                  => 'procedure_id',
                            'selectId'              => 'choose_procedure',
                            'showLabel'             => true,
                            'labelClass'            => 'd-none'
                        ])
{{--                        <a tabindex="0"--}}
{{--                           class="help-link"--}}
{{--                            @include('components.basic.popover', [--}}
{{--                            'dismissible'   => true,--}}
{{--                            'placement'      => 'top',--}}
{{--                            'html'           => 'true',--}}
{{--                            'trigger'        => 'hover',--}}
{{--                            'content'        => '<p>Select your treatment<br>if known to refine results</p>'])--}}
{{--                        >@svg('icon-more-info')</a>--}}
                    </div>
                    <div class="form-child postcode-parent position-relative">
                        {{--                                Add this hidden input to remove the autocomplete functionality--}}
                        <label for="fake_postcode" class="d-none"></label>
                        <input name="fake_postcode" id="fake_postcode" type="text" style="display:none">

                        <div class="input-wrapper position-relative">
                            @include('components.basic.input', [
                                'placeholder'           => 'Enter postcode',
                                'inputClassName'        => 'input-postcode postcode-text-box big',
                                'value'                 => '',
                                'name'                  => 'postcode',
                                'validation'            => 'maxlength=8 autocomplete="off"',
                                'id'                    => 'input_postcode'
                            ])
                            {{--                                <a tabindex="0" data-offset="0 5px"--}}
                            {{--                                   class="help-link"--}}
                            {{--                                    @include('components.basic.popover', [--}}
                            {{--                                    'dismissible'   => true,--}}
                            {{--                                    'placement'      => 'top',--}}
                            {{--                                    'html'           => 'true',--}}
                            {{--                                    'trigger'        => 'hover',--}}
                            {{--                                    'content'        => '<p>--}}
                            {{--                                                     Please enter your postcode<br>for a refined search.--}}
                            {{--                                                 </p>--}}
                            {{--                                                 '])--}}
                            {{--                                >@svg('icon-more-info')</a>--}}
                        </div>
                        <div class="postcode-results-container">
                            <div class="ajax-box"></div>
                        </div>
                    </div>
                    <div class="form-child radius-parent full-left column-layout position-relative"
                         data-reveal-direction="down">
                        @include('components.basic.select', [
                                'selectClass'           =>  'distance-dropdown big select-picker',
                                'selectWrapperClass'    =>  'w-100',
                                'selectParentClass'     =>  'd-md-flex w-100',
                                'options'               =>  \App\Helpers\Utils::radius,
                                'placeholderOption'     =>  'Select Distance',
                                'selectedPlaceholder'   =>  true,
                                'name'                  =>  'radius',
                                'svg'                   =>  'chevron-down'])
                        {{--                            <a tabindex="0" data-offset="0 5px"--}}
                        {{--                               class="help-link"--}}
                        {{--                                @include('components.basic.popover', [--}}
                        {{--                                'dismissible'   => true,--}}
                        {{--                                'placement'      => 'top',--}}
                        {{--                                'html'           => 'true',--}}
                        {{--                                'trigger'        => 'hover',--}}
                        {{--                                'content'        => '<p class="bold mb-0">--}}
                        {{--                                                 Distance--}}
                        {{--                                             </p>--}}
                        {{--                                             <p>--}}
                        {{--                                                 Select how far you would be willing to travel for your treatment.--}}
                        {{--                                             </p>--}}
                        {{--                                             '])--}}
                        {{--                            >@svg('icon-more-info')</a>--}}
                    </div>
                    @include('components.basic.button', [
                        'classTitle'    => 'btn btn-squared btn-block text-center btn-brand-primary-1 py-3 mb-3 font-18',
                        'buttonText'    => 'Find Hospitals',
                        'htmlButton'    => true,
                        'id'            => 'submit_search',
                    ])
                </form>
            </div>
        </div>
    </div>
</div>
<div class="svg-wrapper">
{{--    @svg('footer-heart', 'stroke-turq')--}}
</div>
