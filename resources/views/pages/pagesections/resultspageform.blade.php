<form class="form-element" id="resultspage_form">
    <div class="filter-parent {{ !empty($displayBlock) && ($displayBlock) || !empty($hc_errors) ? 'd-block' : '' }}">
        <div class="filter container">
            <div class="postcode-proximity row">
                <div class="postcode-proximity-child col-12 col-md-4">
                    @include('components.basic.input', [
                        'placeholder' => 'Enter your postcode',
                        'validation' => 'maxlength=8',
                        'inputClassName' => 'inputClass',
                        'value' => !empty(Request::input('postcode')) && empty($hc_errors) ? Request::input('postcode') : '' ,
                        'name' => 'postcode',
                        'id' => 'input_postcode'])
                </div>
                <div class="postcode-proximity-child col-12 col-md-6">
                    @include('components.basic.range', [
                        'label'         => 'Within radius of:',
                        'classTitle'    => 'radiusRange range-slider__range',
                        'min'           => 1,
                        'max'           => 7,
                        'value'         => !empty(Request::input('radius')) ? Request::input('radius') : 4,
                        'name'          => 'radius',
                        'step'          => 1])
                </div>
                <div class="postcode-proximity-child col-2">
                    @include('components.basic.submit', ['classTitle' => 'btn btn-grad btn-blue btn-s d-block btn-submit-results', 'button' => 'Update Results'])
                </div>
            </div>
            <div class="select-proximity filter-section row">
                <div class="filter-section-child col-2">
                    @include('components.basic.select', [
                        'selectClassName'       => 'w-100',
                        'showLabel'             => true,
                        'selectPicker'          => 'true',
                        'group'                 => true,
                        'groupName'             => 'procedures',
                        'placeholder'           => 'Treatment',
                        'options'               => $data['filters']['procedures'],
                        'suboptionClass'        => 'subprocedures',
                        'chevronFAClassName'    => 'fa-chevron-down black-chevron',
                        'selectClass'           => 'select-picker highlight-search-dropdown',
                        'name'                  =>'procedure_id',
                        'resultsLabel'          => 'resultsLabel'
                    ])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         Surgery Type
                                     </p>
                                     <p>
                                         Select your treatment if known.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-2">
                    {{--                            @include('components.basic.select', ['options' => [['id'=>1, 'name'=>'Choose your treatment'], ['id'=>2, 'name'=>'Choose your treatment']], 'selectClass' => 'results-page-select', 'chevronFAClassName' => 'fa-chevron-down black-chevron', 'placeholder' => 'Waiting time', 'resultsLabel' => 'resultsLabel'])--}}
                    @include('components.basic.select', ['selectClassName' => 'w-100', 'showLabel' => true, 'options' => $data['filters']['waitingTimes'], 'chevronFAClassName' => 'fa-chevron-down black-chevron', 'selectClass' => 'results-page-select highlight', 'placeholder'=>'Waiting time', 'name'=>'waiting_time', 'resultsLabel' => 'resultsLabel'])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         Waiting Time
                                     </p>
                                     <p>
                                         Select the waiting time most suitable for your needs.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-2">
                    {{--                            @include('components.basic.select', ['options' => [['id'=>1, 'name'=>'Choose your treatment'], ['id'=>2, 'name'=>'Choose your treatment']], 'selectClass' => 'results-page-select', 'chevronFAClassName' => 'fa-chevron-down black-chevron', 'placeholder' => 'NHS choices user rating', 'resultsLabel' => 'resultsLabel'])--}}
                    @include('components.basic.select', ['selectClassName' => 'w-100', 'showLabel' => true, 'options' => $data['filters']['userRatings'], 'chevronFAClassName' => 'fa-chevron-down black-chevron', 'selectClass' => 'results-page-select highlight', 'placeholder'=>'NHS User Rating', 'name'=>'user_rating', 'resultsLabel' => 'resultsLabel'])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         NHS User Rating
                                     </p>
                                     <p>
                                         Five star rating system based on feedback provided by users of the NHS (five stars being the best). Information is not available on some hospitals.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-2">
                    @include('components.basic.select', [
                        'showLabel' => true,
                        'options' => $data['filters']['qualityRatings'],
                        'chevronFAClassName' => 'fa-chevron-down black-chevron',
                        'selectClass' => 'results-page-select highlight',
                        'placeholder'=>'Care Quality Rating',
                        'name'=>'quality_rating',
                        'resultsLabel' => 'resultsLabel'])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         Care Quality Rating
                                     </p>
                                     <p>
                                         The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-2">
                    @include('components.basic.select', ['selectClassName' => 'w-100', 'showLabel' => true, 'options' => $data['filters']['hospitalTypes'], 'chevronFAClassName' => 'fa-chevron-down black-chevron', 'selectClass' => 'results-page-select highlight', 'placeholder'=>'Hospital Type', 'name'=>'hospital_type', 'resultsLabel' => 'resultsLabel'])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         NHS or Private Hospitals
                                     </p>
                                     <p>
                                         Select which hospital type best suits your needs. Remember you can choose to have an NHS treatment at most private hospitals in England and Wales.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
                <div class="filter-section-child col-2">
                    @include('components.basic.select', [
                        'selectClassName'       => 'w-100',
                        'showLabel'             => true,
                        'selectPicker'          => 'true',
                        'options'               => $data['filters']['policies'],
                        'suboptionClass'        => 'policies',
                        'group'                 => true,
                        'groupName'             => 'policies',
                        'chevronFAClassName'    => 'fa-chevron-down black-chevron',
                        'selectClass'           => 'highlight-search-dropdown select-picker',
                        'placeholder'           => 'Insurance',
                        'name'                  => 'policy_id',
                        'resultsLabel'          => 'resultsLabel'
                    ])
                    <a tabindex="0" data-offset="30px, 40px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'size'           => 'large',
                        'html'           => 'true',
                        'trigger'        => 'focus',
                        'content'        => '<p class="bold mb-0">
                                         Insurance policy
                                     </p>
                                     <p>
                                         Select your insurance provider and policy type.
                                     </p>
                                     <p>
                                         <a  class="btn btn-close btn-close__small btn-teal btn-icon" >Close</a>
                                     </p>'])
                    >?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="sort-parent" id="sort_parent">
        <div class="container">
            <div class="sort-bar row">
                <div class="show-section col-6">
                    Showing {{$data['hospitals']->total()}} hospital(s) | Ordered
                    by {{ !empty(Request::input('sort_by')) ? \App\Helpers\Utils::sortBys[Request::input('sort_by')]['name'] : (!empty(Request::input('postcode')) && empty($hc_errors[0]['postcode'])) ? 'Care Quality Rating & Distance' : 'Care Quality Rating & Waiting Time' }}
                </div>
                <div class="sort-section col-6 d-flex justify-content-end align-items-center">
                    @include('components.basic.button', [
                        'button'            => 'Filter Results',
                        'classTitle'        => 'btn btn-s btn-teal btn-grad btn-icon btn-arrow-down',
                        'id'                => 'show_filters',
                        'icon'              => 'fas fa-chevron-down'
                    ])
                    @include('components.basic.select', [
                        'showLabel' => true,
                        'options' => $data['sortBy'],
                        'chevronFAClassName' => 'fa-chevron-down black-chevron',
                        'selectClass' => 'results-page-select select-sort-by',
                        'selectClassName' => 'pl-3',
                        'placeholder'=>'Sort by:',
                        'name'=>'sort_by',
                        'resultsLabel' => 'sortLabel'])
                </div>
            </div>
        </div>
    </div>
</form>
