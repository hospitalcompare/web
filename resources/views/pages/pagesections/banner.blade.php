<section class="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="banner-text col col-12 col-lg-6">
                <h1>Choose the <span class="col-brand-primary-1">Right Hospital <br class="d-none d-md-inline-block"></span>for <span class="col-brand-primary-1">Your&nbsp;Treatment</span></h1>
                <h3 class="font-20 d-lg-none">Find the best quality hospitals and shortest waiting times, locally or across England.</h3>
                <p class="col-grey d-none d-lg-block">Find the best quality hospitals and shortest waiting times, locally or across England.</p>
                <p class="col-grey d-none d-lg-block">Did you know: </p>
                <ul class="banner-list col-grey  d-none d-lg-block">
                    <li class="green-tick green-tick-large">Waiting times and quality of care vary greatly</li>
                    <li class="green-tick green-tick-large">You have a legal right to have your free NHS treatment at an NHS or private hospital of your choice*</li>
                    <li class="green-tick green-tick-large">You can use Hospital Compare to select a hospital,<br> paid for by you or your insurance.</li>
                </ul>
            </div>
            <div class="col col-lg-6 col-12">
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
                                'options'               => $data['procedures'],
                                'group'                 => true,
                                'groupName'             => 'procedures',
                                'suboptionClass'        => 'subprocedures',
                                'svg'                   => 'chevron-down',
                                'name'                  => 'procedure_id',
                                'selectId'              => 'choose_procedure',
                            ])
{{--                            <a tabindex="0"--}}
{{--                               class="help-link"--}}
{{--                                @include('components.basic.popover', [--}}
{{--                                'dismissible'   => true,--}}
{{--                                'placement'      => 'top',--}}
{{--                                'html'           => 'true',--}}
{{--                                'trigger'        => 'hover',--}}
{{--                                'content'        => '<p>Select your treatment<br>if known to refine results</p>'])--}}
{{--                            >@svg('icon-more-info')</a>--}}
                        </div>
                        <div class="form-child postcode-parent position-relative">
                            {{--                                Add this hidden input to remove the autocomplete functionality--}}
                            <label for="fake_postcode" class="d-none"></label>
                            <input name="fake_postcode" id="fake_postcode" type="text" style="display:none">

                            <div class="input-wrapper position-relative">
                                @include('components.basic.input', [
                                    'placeholder'       => 'Enter postcode',
                                    'inputClassName'    => 'postcode-text-box big input-postcode',
                                    'value'             => '',
                                    'name'              => 'postcode',
                                    'validation'        => 'maxlength=8 autocomplete="off"',
                                    'id'                => 'input_postcode'
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
                        <div class="form-child radius-parent full-left column-layout position-relative" data-reveal-direction="down" >
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
                            'classTitle'    => 'btn btn-squared btn-block text-center btn-brand-primary-1 mb-3 font-18',
                            'buttonText'    => 'Search Now',
                            'htmlButton'    => true,
                            'id'            => 'submit_search',
                        ])
                        <div class='browse-button text-left text-lg-center'>
                            @include('components.basic.button', [
                                'classTitle'    => 'col-grey pl-0 btn-plain btn-icon-arrow w-100 d-flex align-items-center justify-content-lg-center',
                                'buttonText'    => 'Browse all hospitals',
                                'htmlButton'    => true,
                                'svg'           => 'icon-arrow',
                                'hrefValue'     => '/results-page'
                            ])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@if(empty($hideText))
    <section class="mobile-choice d-lg-none text-center py-75">
        <div class="container">
            <div class="row">
                <div class="banner-text col col-12 col-lg-6">
                    <h2 class="h1">You have a <span class="col-brand-primary-1">choice</span></h2>
                    <p class="col-grey">The quality of care and waiting times in England vary greatly between hospitals. You have the
                        legal right to
                        choose where to have your treatment*. It can be at: </p>
                    <ul class="banner-list col-grey">
                        <li class="green-tick green-tick-large text-center">An NHS or private hospital, funded by the NHS</li>
                        <li class="green-tick green-tick-large text-center">A private hospital of your choice, paid for by you or your insurance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif
