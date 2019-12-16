<form class="form-element" id="resultspage_form">
    <div class="sort-parent" id="sort_parent">
        <div class="container">
            <div class="row pb-3">
                <div class="col-12 py-3">
                    <span class="SofiaPro-SemiBold">Showing {{$data['hospitals']->total()}} hospital(s)</span><br> Ordered
                    by {{ !empty(Request::input('sort_by')) ? \App\Helpers\Utils::sortBys[Request::input('sort_by')]['name'] : ((!empty(Request::input('postcode')) && empty($hc_errors[0]['postcode'])) ? 'Care Quality Rating & Distance' : 'Care Quality Rating & Waiting Time') }}
                </div>
                <div class="col-6">
                    @include('components.basic.button', [
                        'buttonText'        => 'Filter Results',
                        'classTitle'        => 'btn btn-turq btn-squared btn-squared_slim btn-arrow-down font-12 pl-5 btn-block',
                        'id'                => 'show_filters',
                        'icon'              => '',
                        'svg'               => 'filter'
                    ])
                </div>
                <div class="col-6">
                    @include('components.basic.select', [
                        'showLabel'             => false,
                        'options'               => $data['sortBy'],
                        'svg'                   => 'chevron-down',
                        'selectClass'           => 'select-sort-by SofiaPro-Medium font-12 bg-grey h-100',
                        'selectWrapperClass'    => 'h-100',
                        'selectParentClass'     => 'align-items-center h-100',
                        'placeholder'           =>'Sort by:',
                        'name'                  =>'sort_by',
                        'selectId'              => 'sort_by_select',
                        'labelClass'            => 'mb-0 SofiaPro-Medium sort-by-label'
                    ])
                </div>
            </div>
        </div>
    </div>
    <div class="filter-parent {{ !empty($displayBlock) && ($displayBlock) || !empty($hc_errors) ? 'd-block' : '' }} pt-0">
        <div class="filter container">
            <div class="postcode-radius row">
                <!-- Postcode -->
                <div class="postcode-radius-child postcode col-12 col-md-4 d-flex align-items-center">
                    @include('components.basic.input', [
                        'placeholder' => 'Enter your postcode',
                        'validation' => 'maxlength=8',
                        'inputClassName' => 'inputClass',
                        'value' => !empty(Request::input('postcode')) && empty($hc_errors) ? Request::input('postcode') : '' ,
                        'name' => 'postcode',
                        'id' => 'input_postcode'])
                    {{--                    <a tabindex="0" data-offset="0 5px"--}}
                    {{--                       class="help-link"--}}
                    {{--                       style="right: 53px"--}}
                    {{--                        @include('components.basic.popover', [--}}
                    {{--                        'dismissible'   => true,--}}
                    {{--                        'placement'      => 'top',--}}
                    {{--                        'html'           => 'true',--}}
                    {{--                        'size'           => 'max-width',--}}
                    {{--                        'trigger'        => 'hover',--}}
                    {{--                        'content'        => '<p>--}}
                    {{--                                         Please enter your postcode<br>for a refined search.--}}
                    {{--                                     </p>--}}
                    {{--                                     '])--}}
                    {{--                    >@svg('question')</a>--}}
                </div>
                <!-- Procedures -->
                <div class="postcode-radius-child col-12 col-md-4 d-flex align-items-center">
                    @include('components.basic.select', [
                        'selectParentClass'       => 'w-100',
                        'showLabel'             => false,
                        'selectPicker'          => 'true',
                        'group'                 => true,
                        'groupName'             => 'procedures',
                        'options'               => $data['filters']['procedures'],
                        'suboptionClass'        => 'subprocedures',
                        'selectId'              => 'resultspage_treatment_dropdown',
                        'svg'                   => 'chevron-down',
                        'selectClass'           => 'select-picker highlight-search-dropdown',
                        'name'                  =>'procedure_id'
                    ])
{{--                    <a tabindex="0" data-offset="0 5px"--}}
{{--                       class="help-link"--}}
{{--                       style="right: 53px"--}}
{{--                        @include('components.basic.popover', [--}}
{{--                        'dismissible'   => true,--}}
{{--                        'placement'      => 'top',--}}
{{--                        'size'           => 'max-width',--}}
{{--                        'html'           => 'true',--}}
{{--                        'trigger'        => 'hover',--}}
{{--                        'content'        => '--}}
{{--                        <p class="SofiaPro-Medium mb-0">--}}
{{--                                         Surgery Type--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         Select your treatment if known.--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         <a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a>--}}
{{--                                     </p>--}}
{{--                                     '])--}}
{{--                    >@svg('question')</a>--}}
                </div>
                <!-- Radius -->
                <div class="postcode-radius-child radius col-12 col-md-4">
                    <div class="h-100 position-relative">
                        @include('components.basic.select', [
                                'showLabel'             => false,
                                'selectClass'           => 'select-picker distance-dropdown',
                                'selectWrapperClass'    => 'w-100',
                                'selectParentClass'     => 'd-md-flex w-100',
                                'options'               => \App\Helpers\Utils::radius,
                                'placeholderOption'     => 'Select Distance',
                                'selectedPlaceholder'   => true,
                                'labelClass'            => 'font-18',
                                'svg'                   => 'chevron-down',
                                'name'                  =>'radius'])
{{--                        <a tabindex="0" data-offset="0 5px"--}}
{{--                           class="help-link"--}}
{{--                            @include('components.basic.popover', [--}}
{{--                            'dismissible'   => true,--}}
{{--                            'placement'      => 'top',--}}
{{--                            'html'           => 'true',--}}
{{--                            'trigger'        => 'hover',--}}
{{--                            'content'        => '<p class="bold mb-0">--}}
{{--                                             Distance--}}
{{--                                         </p>--}}
{{--                                         <p>--}}
{{--                                             Select how far you would be willing to travel for your treatment.--}}
{{--                                         </p>--}}
{{--                                         '])--}}
{{--                        >@svg('question')</a>--}}
                    </div>
                </div>

            </div>
            <div class="select-proximity filter-section row">
                <!-- Waiting time -->
                <div class="filter-section-child col-12 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectParentClass'     => 'w-100',
                        'showLabel'             => false,
                        'options'               => $data['filters']['waitingTimes'],
                        'svg'                   => 'chevron-down',
                        'selectClass'           => 'select-picker highlight-search-dropdown ',
                        'placeholder'           =>'Waiting time',
                        'name'                  =>'waiting_time',
                        'labelClass'            => 'font-14 SofiaPro-Medium'])
{{--                    <a tabindex="0" data-offset="0 5px"--}}
{{--                       class="help-link"--}}
{{--                        @include('components.basic.popover', [--}}
{{--                        'dismissible'       => true,--}}
{{--                        'placement'         => 'top',--}}
{{--                        'html'              => 'true',--}}
{{--                        'size'           => 'max-width',--}}
{{--                        'trigger'           => 'hover',--}}
{{--                        'content'           => '--}}
{{--                        <p class="SofiaPro-Medium mb-0">--}}
{{--                                         Waiting Time--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         Select the waiting time most suitable for your needs.--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         <a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a>--}}
{{--                                     </p>--}}
{{--                                     '])--}}
{{--                    >@svg('question')</a>--}}
                </div>
                <!-- NHS user rating -->
                <div class="filter-section-child col-12 col-md-4 col-lg-2">
                    {{--                            @include('components.basic.select', ['options' => [['id'=>1, 'name'=>'Choose your treatment'], ['id'=>2, 'name'=>'Choose your treatment']], 'selectClass' => 'results-page-select', 'svg' => 'chevron-down', 'placeholder' => 'NHS choices user rating', 'labelClass' => 'labelClass'])--}}
                    @include('components.basic.select', [
                        'selectParentClass' => 'w-100',
                        'showLabel' => false,
                        'options' => $data['filters']['userRatings'],
                        'svg' => 'chevron-down',
                        'selectClass' => 'select-picker highlight-search-dropdown',
                        'placeholder'=>'NHS User Rating',
                        'name'=>'user_rating',
                        'labelClass' => 'font-14 SofiaPro-Medium'])
{{--                    <a tabindex="0" data-offset="0 5px"--}}
{{--                       class="help-link"--}}
{{--                        @include('components.basic.popover', [--}}
{{--                        'dismissible'   => true,--}}
{{--                        'placement'      => 'top',--}}
{{--                        'html'           => 'true',--}}
{{--                        'size'           => 'max-width',--}}
{{--                        'trigger'        => 'hover',--}}
{{--                        'content'        => '--}}
{{--                        <p class="SofiaPro-Medium mb-0">--}}
{{--                                         NHS User Rating--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         Five star rating system based on feedback provided by users of the NHS (five stars being the best). Information is not available on some hospitals.--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         <a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a>--}}
{{--                                     </p>--}}
{{--                                     '])--}}
{{--                    >@svg('question')</a>--}}
                </div>
                <!-- CQC rating -->
                <div class="filter-section-child col-12 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'showLabel' => false,
                        'options' => $data['filters']['qualityRatings'],
                        'svg' => 'chevron-down',
                        'selectClass' => 'select-picker highlight-search-dropdown',
                        'placeholder'=>'Care Quality Rating',
                        'name'=>'quality_rating',
                        'labelClass' => 'font-14 SofiaPro-Medium'])
{{--                    <a tabindex="0" data-offset="0 5px"--}}
{{--                       class="help-link"--}}
{{--                        @include('components.basic.popover', [--}}
{{--                        'dismissible'   => true,--}}
{{--                        'placement'      => 'top',--}}
{{--                        'html'           => 'true',--}}
{{--                        'size'           => 'max-width',--}}
{{--                        'trigger'        => 'hover',--}}
{{--                        'content'        => '--}}
{{--                        <p class="SofiaPro-Medium mb-0">--}}
{{--                                         Care Quality Rating--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         <a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a>--}}
{{--                                     </p>--}}
{{--                                     '])--}}
{{--                    >@svg('question')</a>--}}
                </div>
                <!-- Hospital type -->
                <div class="filter-section-child col-12 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectParentClass' => 'w-100',
                        'showLabel' => false,
                        'options' => $data['filters']['hospitalTypes'],
                        'svg' => 'chevron-down',
                        'selectClass' => 'select-picker highlight-search-dropdown ',
                        'placeholder'=>'Hospital Type',
                        'name'=>'hospital_type',
                        'labelClass' => 'font-14 SofiaPro-Medium'])
{{--                    <a tabindex="0" data-offset="0 5px"--}}
{{--                       class="help-link"--}}
{{--                        @include('components.basic.popover', [--}}
{{--                        'dismissible'   => true,--}}
{{--                        'placement'      => 'top',--}}
{{--                        'html'           => 'true',--}}
{{--                        'size'           => 'max-width',--}}
{{--                        'trigger'        => 'hover',--}}
{{--                        'content'        => '--}}
{{--                        <p class="SofiaPro-Medium mb-0">--}}
{{--                                         NHS or Private Hospitals--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         Select which hospital type best suits your needs. Remember you can choose to have an NHS treatment at most private hospitals in England and Wales.--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         <a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a>--}}
{{--                                     </p>--}}
{{--                                     '])--}}
{{--                    >@svg('question')</a>--}}
                </div>
                <!-- Insurance -->
                <div class="filter-section-child col-12 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectParentClass'       => 'w-100',
                        'showLabel'             => false,
                        'selectPicker'          => 'true',
                        'options'               => $data['filters']['policies'],
                        'suboptionClass'        => 'policies',
                        'group'                 => true,
                        'groupName'             => 'policies',
                        'svg'                   => 'chevron-down',
                        'selectClass'           => 'highlight-search-dropdown select-picker',
                        'placeholder'           => 'Insurance',
                        'name'                  => 'policy_id',
                        'labelClass'          => 'font-14 SofiaPro-Medium'
                    ])
{{--                    <a tabindex="0" data-offset="0 5px"--}}
{{--                       class="help-link"--}}
{{--                        @include('components.basic.popover', [--}}
{{--                        'dismissible'   => true,--}}
{{--                        'placement'      => 'top',--}}
{{--                        'html'           => 'true',--}}
{{--                        'size'           => 'max-width',--}}
{{--                        'trigger'        => 'hover',--}}
{{--                        'content'        => '--}}
{{--                        <p class="SofiaPro-Medium mb-0">--}}
{{--                                         Insurance policy--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         Select your insurance provider and policy type.--}}
{{--                                     </p>--}}
{{--                                     <p>--}}
{{--                                         <a  class="btn btn-close btn-close__small btn-turq btn-icon" >Close</a>--}}
{{--                                     </p>--}}
{{--                                     '])--}}
{{--                    >@svg('question')</a>--}}
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2 d-flex align-items-end">
                    @include('components.basic.submit', [
                        'classTitle' => 'btn btn-blue d-block btn-submit-results font-16',
                        'buttonText' => 'Update Results'])
                </div>
            </div>
        </div>
    </div>

</form>
