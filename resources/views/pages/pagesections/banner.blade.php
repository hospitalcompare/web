<section class="banner-parent">
    <div class="banner">
        <div class="container">
            <div class="banner-data row">
                <div class="home-promo col col-12 col-lg-6">
                    <p>The quality of care and waiting times in England vary greatly between hospitals. You have the
                        legal right to
                        choose where to have your treatment*. It can be at: </p>
                    <ul class="promo-list">
                        <li>An NHS or private hospital, funded by the NHS</li>
                        <li>A private hospital of your choice, paid for by you or your insurance</li>
                    </ul>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="box full-left ml-auto">
                        <p class="SofiaPro-Medium">Find the best hospital<br>for your treatment</p><br>
                        <form class="form-element" method="get" action="/results-page">
                            <div class="form-child">
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
                                    'content'        => '<p class="bold mb-0">
                                                     Treatment
                                                 </p>
                                                 <p>
                                                     Select your treatment if known.
                                                 </p>
                                                 {{--<p><a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a></p>--}}'])
                                >?</a>
                            </div>

                            <div class="form-child home-postcode-parent">
                                <div class="input-wrapper position-relative">
                                    @include('components.basic.input', [
                                    'placeholder' => 'Enter postcode',
                                    'className' => 'postcode-text-box big',
                                    'value' => '',
                                    'name' =>'postcode',
                                    'validation' => 'maxlength=8',
                                     'id' => 'input_postcode'])
                                    <a tabindex="0" _data-offset="30px, 40px"
                                       class="help-link"
                                        @include('components.basic.popover', [
                                        'dismissible'   => true,
                                        'placement'      => 'top',
{{--                                        'size'           => 'large',--}}
                                        'html'           => 'true',
                                        'trigger'        => 'hover',
                                        'content'        => '<p class="bold mb-0">
                                                         Postcode
                                                     </p>
                                                     <p>
                                                         Please enter your postcode for a refined search.
                                                     </p>
{{--                                                     <p><a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a></p>--}}
                                                     '])
                                    >?</a>
                                </div>
                                <div class="postcode-autocomplete-container">
                                    <div class="ajax-box"></div>
                                </div>
                            </div>

                            <div class="form-child full-left d-flex">
                                @include('components.basic.select', [
                                    'showLabel'             => true,
                                    'selectClass'           => 'distance-dropdown',
                                    'options'               => \App\Helpers\Utils::radius,
                                    'selectClassName'       => 'd-md-flex select_half-width w-100',
                                    'placeholder'           => 'How far would you travel?',
                                    'chevronFAClassName'    => '',
                                    'labelClass'            => 'font-18',
                                    'name'                  =>'radius'])
                                <a tabindex="0" _data-offset="30px, 40px"
                                   class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
{{--                                    'size'           => 'large',--}}
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
                                >?</a>
                            </div>

                            @include('components.basic.submit', [
                                'classTitle'    => 'btn btn-m btn-grad btn-teal py-3 mb-3',
                                'button'        => 'Find Hospitals'])

                            <div class='browse-button'>
                                <a class="SofiaPro-Medium" href="{{url('/results-page')}}">Browse all hospitals</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
