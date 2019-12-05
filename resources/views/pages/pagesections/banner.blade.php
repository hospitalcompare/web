<section class="banner-parent py-0">
    <div class="banner">
        <div class="container {{ !empty($layout) && $layout == 'row' ? '_container-1028' : '' }}">
            <div class="row">
                @if(empty($hideText))
                    <div class="banner-text col col-12 col-lg-6">
                        <h1>Choose the <span class="col-turq">best hospital&nbsp;</span>for your&nbsp;<span class="col-turq">treatment</span></h1>
                        <p class="col-grey">The quality of care and waiting times in England vary greatly between hospitals. You have the
                            legal right to
                            choose where to have your treatment*. It can be at: </p>
                        <ul class="banner-list col-grey">
                            <li class="green-tick green-tick-large">An NHS or private hospital, funded by the NHS</li>
                            <li class="green-tick green-tick-large">A private hospital of your choice, paid for by you or your insurance</li>
                        </ul>
                    </div>
                @endif
                <div class="col {{ !empty($layout) ? 'col-12 d-flex' : 'col-lg-6 col-12' }}">
                    <div class="banner-form-wrapper rounded {{ !empty($layout) ? 'mx-auto flat-form d-inline-block' : 'ml-auto' }}" style="">
                        <p class="SofiaPro-Medium">{!! !empty($layout) ? 'Choose the <span class="col-turq">best hospital&nbsp;</span>for your&nbsp;<span class="col-turq">treatment' : 'Find the best hospitals' !!}</p>
                        <form
                            id="search_form"
                            class="form-element {{ !empty($layout) && $layout == 'row' ? 'd-flex align-items-end search-form-row' : '' }}"
                            method="get"
                            action="/results-page"
                            style="">
                            <div class="form-child {{ !empty($layout) ? 'mr-2' : ''}}">
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
{{--                                <a tabindex="0" data-offset="0 5px"--}}
{{--                                   class="help-link"--}}
{{--                                    @include('components.basic.popover', [--}}
{{--                                    'dismissible'   => true,--}}
{{--                                    'placement'      => 'top',--}}
{{--                                    'size'           => 'large',--}}
{{--                                    'html'           => 'true',--}}
{{--                                    'trigger'        => 'hover',--}}
{{--                                    'content'        => '<p>Select your treatment<br>if known to refine results</p>--}}
{{--                                                 --}}{{--<p><a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a></p>--}}{{--'])--}}
{{--                                >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</a>--}}
                            </div>
                            <div class="form-child postcode-parent {{ !empty($layout) ? 'mr-2' : ''}}">
{{--                                Add this hidden input to remove the autocomplete functionality--}}
                                <label for="fake_postcode" class="d-none"></label>
                                <input name="fake_postcode" id="fake_postcode" type="text" style="display:none">

                                <div class="input-wrapper position-relative">
                                    @include('components.basic.input', [
                                        'placeholder'   => 'Enter postcode',
                                        'className'     => 'postcode-text-box big',
                                        'value'         => '',
                                        'name'          =>'postcode',
                                        'validation'    => 'maxlength=8 autocomplete="off"',
                                        'id'            => 'input_postcode'
                                    ])
{{--                                    <a tabindex="0" data-offset="0 5px"--}}
{{--                                       class="help-link"--}}
{{--                                        @include('components.basic.popover', [--}}
{{--                                        'dismissible'   => true,--}}
{{--                                        'placement'      => 'top',--}}
{{--                                        'html'           => 'true',--}}
{{--                                        'trigger'        => 'hover',--}}
{{--                                        'content'        => '<p>--}}
{{--                                                         Please enter your postcode<br>for a refined search.--}}
{{--                                                     </p>--}}
{{--                                                     '])--}}
{{--                                    >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</a>--}}
                                </div>
                                <div class="postcode-results-container">
                                    <div class="ajax-box"></div>
                                </div>
                            </div>
                            <div data-reveal-direction="{{ !empty($layout) ? 'right' : 'down'}}" class="form-child radius-parent full-left {{ !empty($layout) ? 'row-layout' : 'column-layout'}}">
                                @include('components.basic.select', [
                                    'showLabel'             => true,
                                    'selectClass'           => empty($layout) ? 'distance-dropdown': 'distance-dropdown w-100',
                                    'options'               => \App\Helpers\Utils::radius,
                                    'selectClassName'       => empty($layout) ? 'd-md-flex select_half-width w-100' : 'd-md-flex flex-column align-items-end select_half-width w-100',
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
{{--                                                 <p><a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a></p>--}}
                                                 '])
                                >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</a>
                            </div>
                            @include('components.basic.button', [
                                'classTitle'    => !empty($layout) ? 'btn btn-squared btn-turq font-18 text-center' : 'btn btn-squared btn-block text-center btn-turq py-3 mb-3 font-18',
                                'buttonText'    => !empty($layout) ? 'Find Hospitals' : 'Find Hospitals',
                                'htmlButton'    => true,
                                'id'            => 'submit_search',
                                'style'         => !empty($layout) ? 'padding: 16px 45px; border: 2px solid transparent' : '',
                            ])
                            @unless(!empty($layout) && $layout == 'row')
                                <div class='browse-button'>
                                    <a class="col-grey" href="{{url('/results-page')}}">Browse all hospitals</a>
                                </div>
                            @endunless
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
