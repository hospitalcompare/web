<section class="banner-parent">
    <div class="banner">
        <div class="container">
            <div class="banner-data row">
                <div class="home-promo col col-12 col-lg-6">
                    <p>The quality of care and waiting times in England vary greatly between hospitals. You have the legal right to
                        choose where to have your treatment*. It can be at: </p>
                    <ul class="promo-list">
                        <li>An NHS or private hospital, funded by the NHS</li>
                        <li>A private hospital of your choice, paid for by you or your insurance</li>
                    </ul>
                    <p>
                </div>
                <div class="col col-12 col-lg-6">
                    <div class="box full-left ml-auto">
                        <p>Find the best hospital for your elective surgery</p><br>
                        <form class="form-element" method="get" action="/results-page">

                            <div class="form-child">
                                @include('components.basic.select', [
                                    'selectPicker' => 'true',
                                    'selectClass'=> 'big select-picker',
                                    'options' => $data['procedures'],
                                    'chevronFAClassName' => 'fa-chevron-down aquaChevron',
                                    'placeholder'=>'Choose your treatment (if known)',
                                    'name'=> 'procedure_id'])
                                <a tabindex="0" data-offset="30px, 40px"
                                   class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'size'           => 'large',
                                    'html'           => 'true',
                                    'trigger'        => 'focus',
                                    'content'        => '<p class="bold mb-0">
                                                     Choose your treatment
                                                 </p>
                                                 <p>
                                                     Please choose the procedure if you know it
                                                 </p>
                                                 <p>
                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                 </p>'])
                                >?</a>
                            </div>

                            <div class="form-child home-postcode-parent">
                                @include('components.basic.input', [
                                    'placeholder' => 'Enter postcode',
                                    'className' => 'postcode-text-box big',
                                    'value' => '',
                                    'name' =>'postcode',
                                    'validation' => 'maxlength=8',
                                     'id' => 'input_postcode'])
                                <a tabindex="0" data-offset="30px, 40px"
                                   class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'size'           => 'large',
                                    'html'           => 'true',
                                    'trigger'        => 'focus',
                                    'content'        => '<p class="bold mb-0">
                                                     Postcode
                                                 </p>
                                                 <p>
                                                     Please enter your postcode for a refined search
                                                 </p>
                                                 <p>
                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                 </p>'])
                                >?</a>
                                <div class="postcode-autocomplete-cont">
                                    <div class="ajax-box"></div>
                                </div>
                            </div>

                            <div class="form-child full-left d-flex">
                                @include('components.basic.select', [
                                    'showLabel' => true, 'selectClass'=> 'distance-dropdown',
                                    'options' => \App\Helpers\Utils::radius,
                                     'selectClassName'=> 'd-flex select_half-width', 'placeholder' => 'How far would you like to travel?', 'chevronFAClassName' => '', 'name'=>'radius'])
                                <a tabindex="0" data-offset="30px, 40px"
                                   class="help-link"
                                    @include('components.basic.popover', [
                                    'dismissible'   => true,
                                    'placement'      => 'top',
                                    'size'           => 'large',
                                    'html'           => 'true',
                                    'trigger'        => 'focus',
                                    'content'        => '<p class="bold mb-0">
                                                     Distance
                                                 </p>
                                                 <p>
                                                     Please enter your distance. This is based on the postcode provided
                                                 </p>
                                                 <p>
                                                     <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                                 </p>'])
                                >?</a>
                            </div>

                            <div class="form-child full-left d-none">
                                @include('components.basic.select', ['showLabel' => true, 'selectClass'=> '', 'options' => [['id'=>1, 'name'=>'Provider Name']], 'selectClassName'=> 'd-flex select_half-width', 'placeholder' => 'Do you have private healthcare insurance?', 'chevronFAClassName' => '', 'name'=>'insurance_id'])
                                @include('components.basic.helplink', [ 'helpChar'=> '?', 'helpText' => 'select2', 'className' => '', 'lightBoxClass' => 'lightboxAdjust'])
                            </div>

                            @include('components.basic.submit', ['classTitle' => 'btn btn-m btn-grad btn-teal', 'button' => 'Find Hospitals'])

                            <p class='browseButton'><a href="{{url('/results-page')}}">Browse all hospitals</a></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
