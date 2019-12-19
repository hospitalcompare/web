<section class="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="banner-text col col-12 col-lg-6">
                <h1>Choose the <span class="col-turq">Right Hospital&nbsp;</span>for your&nbsp;<span class="col-turq">Treatment</span></h1>
                <h3 class="font-20 d-lg-none">Find which NHS and Private hospitals are available and fully funded.</h3>
                <p class="col-grey d-none d-lg-block">The quality of care and waiting times in England vary greatly between hospitals. You have the
                    legal right to
                    choose where to have your treatment*. It can be at: </p>
                <ul class="banner-list col-grey  d-none d-lg-block">
                    <li class="green-tick green-tick-large">An NHS or private hospital, funded by the NHS</li>
                    <li class="green-tick green-tick-large">A private hospital of your choice, paid for by you or your insurance</li>
                </ul>
            </div>
            <div class="col col-lg-6 col-12">
                <div class="banner-form-wrapper rounded ml-auto">
                    <p class="SofiaPro-Medium d-none d-lg-block">Find the best hospitals</p>
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
                                'svg'                   => 'chevron-down-aqua',
                                'name'                  => 'procedure_id',
                                'selectId'              => 'choose_procedure',
                                'showLabel'             => true,
                                'labelClass'            => 'd-none'
                            ])
                            <a tabindex="0"
                               class="help-link"
                                @include('components.basic.popover', [
                                'dismissible'   => true,
                                'placement'      => 'top',
                                'html'           => 'true',
                                'trigger'        => 'hover',
                                'content'        => '<p>Select your treatment<br>if known to refine results</p>'])
                            >@svg('question')</a>
                        </div>
                        <div class="form-child postcode-parent position-relative">
                            {{--                                Add this hidden input to remove the autocomplete functionality--}}
                            <label for="fake_postcode" class="d-none"></label>
                            <input name="fake_postcode" id="fake_postcode" type="text" style="display:none">

                            <div class="input-wrapper position-relative">
                                @include('components.basic.input', [
                                    'placeholder'   => 'Enter postcode',
                                    'inputClassName'     => 'postcode-text-box big',
                                    'value'         => '',
                                    'name'          =>'postcode',
                                    'validation'    => 'maxlength=8 autocomplete="off"',
                                    'id'            => 'input_postcode'
                                ])
                                <a tabindex="0" data-offset="0 5px"
                                   class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'html'           => 'true',
                                    'trigger'        => 'hover',
                                    'content'        => '<p>
                                                     Please enter your postcode<br>for a refined search.
                                                 </p>
                                                 '])
                                >@svg('question')</a>
                            </div>
                            <div class="postcode-results-container">
                                <div class="ajax-box"></div>
                            </div>
                        </div>
                        <div class="form-child radius-parent full-left column-layout position-relative" data-reveal-direction="down" >
                            @include('components.basic.select', [
                                'showLabel'             => true,
                                'selectClass'           => 'distance-dropdown',
                                'options'               => \App\Helpers\Utils::radius,
                                'selectParentClass'       => 'd-md-flex select_half-width w-100',
                                'placeholder'           => 'How far would you travel?',
                                'placeholderOption'     => 'Select Distance',
                                'selectedPlaceholder'   => true,
                                'labelClass'            => 'font-18 pr-4',
                                'name'                  =>'radius'])
                            <a tabindex="0" data-offset="0 5px"
                               class="help-link"
                                @include('components.basic.popover', [
                                'dismissible'   => true,
                                'placement'      => 'top',
                                'html'           => 'true',
                                'trigger'        => 'hover',
                                'content'        => '<p class="bold mb-0">
                                                 Distance
                                             </p>
                                             <p>
                                                 Select how far you would be willing to travel for your treatment.
                                             </p>
                                             '])
                            >@svg('question')</a>
                        </div>
                        @include('components.basic.button', [
                            'classTitle'    => 'btn btn-squared btn-block text-center btn-turq py-3 mb-3 font-18',
                            'buttonText'    => 'Find Hospitals',
                            'htmlButton'    => true,
                            'id'            => 'submit_search',
                        ])
                        <div class='browse-button text-left text-lg-center'>
                            @include('components.basic.button', [
                                'classTitle'    => 'col-grey pl-0 btn-plain btn-icon-arrow position-relative',
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
    <section class="mobile-choice d-lg-none text-center p-y-75">
        <div class="row">
            <div class="container">
                <div class="banner-text col col-12 col-lg-6">
                    <h2 class="h1">You have a <span class="col-turq">choice</span></h2>
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
