<form class="form-element" id="resultspage_form">
    <div class="sort-parent" id="sort_parent">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3 bg-navy col-white results-info-bar">
                    <span class="SofiaPro-SemiBold">Showing {{(!empty($data['hospitals']) && !is_array($data['hospitals']) && $data['hospitals']->total() == 50)? 'a maximum of 50':$data['hospitals']->total()}} hospital(s)</span><br>
                    Ordered
                    by {{ !empty(Request::input('sort_by')) ? \App\Helpers\Utils::sortBys[Request::input('sort_by')]['name'].((!empty(Request::input('postcode')) && empty($hc_errors[0]['postcode'])) ? ' & Distance' : ((Request::input('sort_by') == 10 || Request::input('sort_by') == 9) ? ' then Waiting Time' : ' then Care Quality')) : ((!empty(Request::input('postcode')) && empty($hc_errors[0]['postcode'])) ? 'Care Quality Rating then Distance' : 'Care Quality Rating then Waiting Time') }}
                </div>
{{--                Sort button--}}
                <div class="col-4 px-0 results-sort-filter-compare">
                    @include('components.basic.select', [
                        'showLabel'             =>  false,
                        'options'               =>  $data['sortBy'],
                        'svg'                   =>  'icon-order-by',
                        'selectClass'           =>  'select-sort-by select-picker font-12 h-100 border-right pt-0 col-grey rounded-0',
                        'selectWrapperClass'    =>  'h-100',
                        'selectParentClass'     =>  'align-items-center h-100',
                        'placeholder'           =>  'Sort by:',
                        'name'                  =>  'sort_by',
                        'selectId'              =>  'sort_by_select',
                        'labelClass'            =>  'mb-0 SofiaPro-Medium sort-by-label'
                    ])
                </div>
{{--                Filter button--}}
                <div class="col-4 px-0">
                    @include('components.basic.button', [
                        'buttonText'        =>  'Filter',
                        'classTitle'        =>  'btn btn-squared col-grey font-12 d-flex flex-row-reverse justify-content-around align-items-center border-right rounded-0',
                        'id'                =>  'show_filters',
                        'svg'               =>  'icon-filter',
                        'svgClass'          =>  'd-inline position-static'
                    ])
                </div>
{{--             Compare button --}}
                <div class="col-4 px-0">
                    <div id="open_shortlist" class="compare-button-title d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="svg-wrapper">
                            @svg('compare-heart', 'compare-heart')
                            <span id="count_badge" class="rounded-circle"></span>
                        </div>
                        <p class="font-12 mb-0">Compare</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="filter-parent">
        <div class="filter container">
            <div class="row">
                <!-- Postcode -->
                <div class="postcode col-12 col-md-4 d-flex align-items-center mb-4">
                    @include('components.basic.input', [
                        'label'                 => 'Enter your postcode',
                        'placeholder'           => 'Enter your postcode',
                        'validation'            => 'maxlength=8',
                        'labelClassName'        => 'position-absolute p-2',
                        'inputClassName'        => 'p-2',
                        'inputParentClassName'  => 'w-100',
                        'value'                 => !empty(Request::input('postcode')) && empty($hc_errors) ? Request::input('postcode') : '' ,
                        'name'                  => 'postcode',
                        'id'                    => 'input_postcode',
                      ])
                </div>
                <!-- Procedures -->
                <div class="filter-mobile col-12 d-flex align-items-center">
                    @include('components.basic.select', [
                        'selectParentClass'     => 'w-100',
                        'showLabel'             => true,
                        'placeholder'           => 'Select a treatment',
                        'selectPicker'          => 'true',
                        'group'                 => true,
                        'groupName'             => 'procedures',
                        'options'               => $data['filters']['procedures'],
                        'suboptionClass'        => 'subprocedures',
                        'selectId'              => 'resultspage_treatment_dropdown',
                        'svg'                   => 'icon-chevron-down',
                        'selectClass'           => 'select-picker',
                        'name'                  => 'procedure_id',
                        'showTooltip'           => true,
                        'modalText'             =>
                            '<p class="SofiaPro-SemiBold mb-3 font-18">
                                 Surgery Type
                            </p>
                            <p>
                                Select your treatment if known.
                            </p>'
                        ])
                </div>
                <!-- Radius -->
                <div class="filter-mobile radius col-12 d-flex align-items-center">
                    @include('components.basic.select', [
                            'showLabel'             => true,
                            'placeholder'           => 'Within radius of',
                            'selectClass'           => 'select-picker distance-dropdown',
                            'selectWrapperClass'    => 'w-100',
                            'selectParentClass'     => 'w-100',
                            'options'               => \App\Helpers\Utils::radius,
                            'placeholderOption'     => 'Select Distance',
                            'selectedPlaceholder'   => true,
                            'labelClass'            => '',
                            'svg'                   => 'icon-chevron-down',
                            'name'                  =>'radius',
                            'showTooltip'           => true,
                            'modalText'             =>
                                '<p class="SofiaPro-SemiBold mb-3 font-18">
                                     Distance
                                </p>
                                <p>
                                    Select how far you would be willing to travel for your treatment..
                                </p>'])
                </div>
                <!-- Waiting time -->
                <div class="filter-mobile col-12">
                    @include('components.basic.select', [
                        'selectParentClass'     => 'w-100',
                        'showLabel'             => true,
                        'placeholder'           => 'Waiting time',
                        'options'               => $data['filters']['waitingTimes'],
                        'svg'                   => 'icon-chevron-down',
                        'selectClass'           => 'select-picker',
                        'placeholder'           =>'Waiting time',
                        'name'                  =>'waiting_time',
                        'labelClass'            => '',
                        'showTooltip'           => true,
                        'modalText'             =>
                            '<p class="SofiaPro-SemiBold mb-3 font-18">
                                 Waiting time
                            </p>
                            <p>
                                Select the waiting time most suitable for your needs.
                            </p>'])
                </div>
                <!-- NHS user rating -->
                <div class="filter-mobile col-12">
                    @include('components.basic.select', [
                        'selectParentClass'     => 'w-100',
                        'showLabel'             => true,
                        'placeholder'           => 'NHS User Rating',
                        'options'               => $data['filters']['userRatings'],
                        'svg'                   => 'icon-chevron-down',
                        'selectClass'           => 'select-picker',
                        'placeholder'           => 'NHS User Rating',
                        'name'                  => 'user_rating',
                        'showTooltip'           => true,
                        'modalText'             =>
                            '<p class="SofiaPro-SemiBold mb-3 font-18">
                                 NHS User Rating
                            </p>
                            <p>
                                Five star rating system based on feedback provided by users of the NHS (five stars being the best). Information is not available on some hospitals.
                            </p>'])
                </div>
                <!-- CQC rating -->
                <div class="filter-mobile col-12">
                    @include('components.basic.select', [
                        'showLabel'         => true,
                        'placeholder'       => 'Care Quality Rating',
                        'options'           => $data['filters']['qualityRatings'],
                        'svg'               => 'icon-chevron-down',
                        'selectClass'       => 'select-picker',
                        'placeholder'       => 'Care Quality Rating',
                        'name'              => 'quality_rating',
                        'showTooltip'       => true,
                        'modalText'         =>
                            '<p class="SofiaPro-SemiBold mb-3 font-18">
                                 Care quality rating
                            </p>
                            <p>
                                The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.
                            </p>'])
                </div>
                <!-- Hospital type -->
                <div class="filter-mobile col-12">
                    @include('components.basic.select', [
                        'selectParentClass'     => 'w-100',
                        'showLabel'             => true,
                        'placeholder'           => 'Hospital Type',
                        'options'               => $data['filters']['hospitalTypes'],
                        'svg'                   => 'icon-chevron-down',
                        'selectClass'           => 'select-picker',
                        'placeholder'           => 'Hospital Type',
                        'name'                  => 'hospital_type',
                        'showTooltip'           => true,
                        'modalText'             =>
                            '<p class="SofiaPro-SemiBold mb-3 font-18">
                                 NHS or Private Hospitals
                            </p>
                            <p>
                                Select which hospital type best suits your needs. Remember you can choose to have an NHS treatment at most private hospitals in England and Wales.
                            </p>'])
                </div>
                <!-- Insurance -->
                <div class="filter-mobile col-12">
                    @include('components.basic.select', [
                        'selectParentClass'     =>  'w-100',
                        'showLabel'             =>  true,
                        'placeholder'           =>  'Insurance',
                        'selectPicker'          =>  'true',
                        'options'               =>  $data['filters']['policies'],
                        'suboptionClass'        =>  'policies',
                        'group'                 =>  true,
                        'groupName'             =>  'policies',
                        'svg'                   =>  'icon-chevron-down',
                        'selectClass'           =>  'select-picker',
                        'placeholder'           =>  'Insurance',
                        'name'                  =>  'policy_id',
                        'showTooltip'           =>  true,
                        'selectPickerContainer' =>  '.filter-parent',
                        'modalText'             =>
                            '<p class="SofiaPro-SemiBold mb-3 font-18">
                                 Insurance policy
                            </p>
                            <p>
                                Select your insurance provider and policy type.
                            </p>'])
                </div>
                <div class="col-12 w-100">
                    <div class="row">
                        <div class="col-6 button-wrapper">
                            @include('components.basic.button', [
                                'classTitle'    => 'text-center btn btn-black btn-squared btn-squared_slim d-block font-14 h-100',
                                'buttonText'    => 'Close',
                                'id'            => 'close_mobile_filters'])
                        </div>
                        <div class="col-6 button-wrapper">
                            @include('components.basic.submit', [
                                'classTitle'    => 'btn-submit-results text-center btn btn-brand-primary-1 btn-squared btn-squared_slim d-block font-14 w-100 h-100',
                                'buttonText'    => 'Update Results'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
