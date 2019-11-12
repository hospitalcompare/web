<section class="banner-parent">
    <div class="banner">
        <div class="container {{ !empty($layout) && $layout == 'row' ? 'container-1028' : '' }}">
            <div class="banner-data row">
                @if(empty($hideText))
                    <div class="home-promo col col-12 col-lg-6">
                        <p>The quality of care and waiting times in England vary greatly between hospitals. You have the
                            legal right to
                            choose where to have your treatment*. It can be at: </p>
                        <ul class="promo-list">
                            <li>An NHS or private hospital, funded by the NHS</li>
                            <li>A private hospital of your choice, paid for by you or your insurance</li>
                        </ul>
                    </div>
                @endif
                <div class="col {{ !empty($layout) ? 'col-12 d-flex' : 'col-lg-6 col-12' }}">
                    <div class="box {{ !empty($layout) ? 'mx-auto flat-box' : 'ml-auto' }}" style="{{ empty($hideText) ? 'max-width: 511px' : '' }}">
                        <p class="SofiaPro-Medium">Find the best hospital{!! empty($layout) ? '<br>' : '' !!}  for your treatment</p><br>
                        <form class="form-element {{ !empty($layout) && $layout == 'row' ? 'd-flex align-items-end search-form-row' : '' }}"
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
                                    'chevronFAClassName'    => 'fa-chevron-down aqua-chevron',
                                    'name'                  => 'procedure_id'
                                ])
                                <a tabindex="0" _data-offset="30px, 40px"
                                   class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
{{--                                    'size'           => 'large',--}}
                                    'html'           => 'true',
                                    'trigger'        => 'hover',
                                    'content'        => '<p>Select your treatment<br>if known to refine results</p>
                                                 {{--<p><a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a></p>--}}'])
                                >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</a>
                            </div>
                            <div class="form-child home-postcode-parent {{ !empty($layout) ? 'mr-2' : ''}}">
{{--                                Add this hidden input to remove the autocomplete functionality--}}
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
                                    <a tabindex="0" _data-offset="30px, 40px"
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
                                    >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</a>
                                </div>
                                <div class="postcode-autocomplete-container">
                                    <div class="ajax-box"></div>
                                </div>
                            </div>
                            <div class="form-child home-radius-parent full-left {{ !empty($layout) ? 'mr-4' : ''}}">
                                @include('components.basic.select', [
                                    'showLabel'             => true,
                                    'selectClass'           => empty($layout) ? 'distance-dropdown': 'distance-dropdown w-100',
                                    'options'               => \App\Helpers\Utils::radius,
                                    'selectClassName'       => empty($layout) ? 'd-md-flex select_half-width w-100' : 'd-md-flex flex-column align-items-end select_half-width w-100',
                                    'placeholder'           => 'How far would you travel?',
                                    'placeholderOption'     => 'Select Distance',
                                    'selectedPlaceholder'   => true,
                                    'chevronFAClassName'    => '',
                                    'labelClass'            => 'font-18 pr-4',
                                    'name'                  =>'radius'])
                                <a tabindex="0" _data-offset="30px, 40px"
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
{{--                                                 <p><a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a></p>--}}
                                                 '])
                                >{!! file_get_contents(asset('/images/icons/question.svg')) !!}</a>
                            </div>
                            @include('components.basic.button', [
                                'classTitle'    => !empty($layout) ? 'btn btn-m btn-grad btn-teal' : 'btn btn-m btn-grad btn-teal py-3 mb-3',
                                'button'        => !empty($layout) ? 'Find<br>Hospitals' : 'Find Hospitals',
                                'htmlButton'    => true,
                                'style'         => !empty($layout) ? 'width: 114px; text-align: center; padding: 0; font-size: 18px; height: 62px; border-radius: 24px' : ''])
                            @unless(!empty($layout) && $layout == 'row')
                                <div class='browse-button'>
                                    <a class="SofiaPro-Medium" href="{{url('/results-page')}}">Browse all hospitals</a>
                                </div>
                            @endunless
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
