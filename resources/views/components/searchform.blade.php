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
                'svg'                   => 'chevron-down-aqua',
                'name'                  => 'procedure_id'
            ])
            <a tabindex="0"
               class="help-link"
                @include('components.basic.popover', [
                'dismissible'   => true,
                'placement'      => 'top',
{{--                                    'size'           => 'large',--}}
                'html'           => 'true',
                'trigger'        => 'hover',
                'content'        => '<p>Select your treatment<br>if known to refine results</p>
                             {{--<p><a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a></p>--}}'])
            >@svg('question')</a>
        </div>
        <div class="form-child postcode-parent">
            <div class="input-wrapper position-relative">
                @include('components.basic.input', [
                'placeholder' => 'Enter postcode',
                'className' => 'postcode-text-box big',
                'value' => '',
                'name' =>'postcode',
                'validation' => 'maxlength=8',
                 'id' => 'input_postcode'])
                <a tabindex="0"
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
        <div class="form-child radius-parent full-left">
            @include('components.basic.select', [
                'showLabel'             => true,
                'selectClass'           => 'distance-dropdown',
                'options'               => \App\Helpers\Utils::radius,
                'selectParentClass'       => 'd-md-flex select_half-width w-100',
                'placeholder'           => 'How far would you travel?',
                'placeholderOption'     => 'Select Distance',
                'selectedPlaceholder'   => true,
                'chevronFAClassName'    => '',
                'labelClass'            => 'font-18 pr-4',
                'name'                  =>'radius'])
            <a tabindex="0"
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
            >@svg('question')</a>
        </div>
        @include('components.basic.submit', [
            'classTitle'    => 'btn btn-m btn-turq py-3 mb-3',
            'buttonText'        => 'Find Hospitals'])
        <div class='browse-button'>
            <a class="SofiaPro-Medium" href="{{url('/results-page')}}">Browse all hospitals</a>
        </div>
    </form>
</div>
