<form class="form-element" id="resultspage_form">
    <div class="sort-parent" id="sort_parent">
        <div class="container">
            <div class="sort-bar">
                <div class="show-section section-1 SofiaPro-Medium font-16">
                    <span class="SofiaPro-SemiBold">Showing {{$data['hospitals']->total()}} hospital(s)</span><br> Ordered
                    by {{ !empty(Request::input('sort_by')) ? \App\Helpers\Utils::sortBys[Request::input('sort_by')]['name'].((!empty(Request::input('postcode')) && empty($hc_errors[0]['postcode'])) ? ' & Distance' : ((Request::input('sort_by') == 10 || Request::input('sort_by') == 9) ? ' then Waiting Time' : ' then Care Quality')) : ((!empty(Request::input('postcode')) && empty($hc_errors[0]['postcode'])) ? 'Care Quality Rating then Distance' : 'Care Quality Rating then Waiting Time') }}
                </div>
                <div class="section-2 d-none d-lg-block">
                    <ul class="result-item-menu">
                        <li class="sort-item sort-care-quality-rating {{empty(Request::input('sort_by')) ? 'desc' : Request::input('sort_by') == 10 ? 'desc':'asc' }} {{Request::input('sort_by') == 10 || Request::input('sort_by') == 9 || empty(Request::input('sort_by'))? 'highlight' : ''}}">
                            <p tabindex="0"
                                @include('components.basic.popover', [
                                'placement' => 'top',
                                'trigger'   => 'hover',
                                'html'      => 'true',
                                'content'   => '<p class="bold mb-0">
                                                    Care Quality Rating
                                                </p>
                                                <p>
                                                    The Care Quality Commission is the independent regulator of health and social care in England. They rate hospitals as Outstanding, Good, Requires Improvement or Inadequate.
                                                </p>'])>Care Quality<br>Rating</p>
                            <span title="Sort by this column"
                                  class="sort-arrow sort-care-quality-rating {{empty(Request::input('sort_by')) ? 'desc' : Request::input('sort_by') == 10 ? 'desc':'asc' }}">@svg('chevron-down')</span>
                        </li>
                        <li class="sort-item sort-waiting-time {{Request::input('sort_by') == 4 ? 'desc':'asc' }} {{Request::input('sort_by') == 3 || Request::input('sort_by') == 4 ? 'highlight' : ''}}">
                            <p tabindex="0"
                                @include('components.basic.popover', [
                                'placement' => 'top',
                                'trigger'   => 'hover',
                                'html'      => 'true',
                                'content'   => '<p class="bold mb-0">
                                                    Waiting Time (NHS Funded)
                                                </p>
                                                <p>
                                                    Our waiting time data is based on NHS data, specifically the number of weeks that 92 out of 100 people wait for their treatment to start - this is the NHS standard.
                                                </p>'])>Waiting time <br>(NHS Funded)</p>
                            <span title="Sort by this column"
                                  class="sort-arrow sort-waiting-time {{Request::input('sort_by') == 4 ? 'desc':'asc' }}">@svg('chevron-down')</span>
                        </li>
                        <li class="sort-item sort-user-rating {{Request::input('sort_by') == 6 ? 'desc':'asc' }} {{Request::input('sort_by') == 5 || Request::input('sort_by') == 6 ? 'highlight' : ''}}">
                            <p tabindex="0"
                                @include('components.basic.popover', [
                                'placement' => 'top',
                                'trigger'   => 'hover',
                                'html'      => 'true',
                                'content'   => '<p class="bold mb-0">
                                                    NHS User Rating
                                                </p>
                                                <p>
                                                    Star rating system based on feedback provided by NHS patients, five stars being the best.
                                                </p>'])>NHS User<br> Rating&nbsp;<br></p>
                            <span title="Sort by this column"
                                  class="sort-arrow sort-user-rating {{Request::input('sort_by') == 6 ? 'desc':'asc' }}">@svg('chevron-down')</span>
                        </li>
                        <li class="sort-item sort-op-cancelled {{Request::input('sort_by') == 8 ? 'desc':'asc' }} {{Request::input('sort_by') == 7 || Request::input('sort_by') == 8 ? 'highlight' : ''}}">
                            <p tabindex="0"
                                @include('components.basic.popover', [
                                'placement' => 'top',
                                'trigger'   => 'hover',
                                'html'      => 'true',
                                'content'   => '<p class="bold mb-0">
                                                    % of Operations Cancelled
                                                </p>
                                                <p>
                                                    The percentage of operations cancelled during the latest reporting period. Data typically only available for NHS hospitals at this time.
                                                </p>'])>% Operations<br>Cancelled</p>
                            <span title="Sort by this column"
                                  class="sort-arrow sort-op-cancelled {{Request::input('sort_by') == 8 ? 'desc':'asc' }}">@svg('chevron-down')</span>
                        </li>
                        <li class="sort-item sort-ff-rating {{Request::input('sort_by') == 12 ? 'desc':'asc' }} {{Request::input('sort_by') == 11 || Request::input('sort_by') == 12 ? 'highlight' : ''}}">
                            <p tabindex="0"
                                @include('components.basic.popover', [
                                'placement' => 'top',
                                'trigger'   => 'hover',
                                'html'      => 'true',
                                'content'   => '<p class="bold mb-0">
                                                    Friends & Family Rating
                                                </p>
                                                <p>
                                                    The percentage of people who would recommend this hospital to their friends and family.
                                                </p>'])>Friends &<br>Family Rating</p>
                            <span title="Sort by this column"
                                  class="sort-arrow sort-ff-rating {{Request::input('sort_by') == 12 ? 'desc':'asc' }}">@svg('chevron-down')</span>
                        </li>
                        <li>
                            <p tabindex="0"
                                @include('components.basic.popover', [
                                'placement' => 'top',
                                'trigger'   => 'hover',
                                'html'      => 'true',
                                'content'   => '<p class="bold mb-0">
                                                    NHS Funded Work
                                                </p>
                                                <p>
                                                    A tick signifies the hospital provides NHS funded treatments.
                                                </p>'])>NHS<br>Funded Work</p>
{{--                            <span title="Sort by this column"--}}
{{--                                  class="sort-arrow sort-nhs-funded {{Request::input('sort_by') == 14 ? 'desc':'asc' }}"></span>--}}
                        </li>
                        <li>
                            <p tabindex="0"
                                @include('components.basic.popover', [
                                'placement' => 'top',
                                'trigger'   => 'hover',
                                'html'      => 'true',
                                'content'   => '<p class="bold mb-0">
                                                    Private Self Pay
                                                </p>
                                                <p>
                                                    Indicates whether a hospital location provides Private, Self Pay services. In many instances, your local NHS hospital will also offer private treatment.
                                                </p>'])>Private<br>Self Pay</p>
{{--                            <span title="Sort by this column"--}}
{{--                                  class="sort-arrow sort-self-pay {{Request::input('sort_by') == 16 ? 'desc':'asc' }}"></span>--}}
                        </li>
                    </ul>
                </div>
                <div class="sort-section section-3 d-flex flex-wrap justify-content-end align-items-center">
                    @include('components.basic.select', [
                        'showLabel'             => false,
                        'options'               => $data['sortBy'],
                        'svg'                   => 'chevron-down',
                        'selectClass'           => 'select-sort-by SofiaPro-Medium font-16',
                        'selectParentClass'       => 'mr-3 d-none align-items-center',
                        'placeholder'           =>'Sort by:',
                        'name'                  =>'sort_by',
                        'selectId'              => 'sort_by_select',
                        'labelClass'            => 'mb-0 SofiaPro-Medium sort-by-label'
                    ])

                    @include('components.basic.button', [
                        'buttonText'        => 'Show Filters',
                        'classTitle'        => 'btn btn-grey btn-icon btn-arrow-down font-16 pl-3 w-100',
                        'id'                => 'show_filters',
                        'icon'              => '',
                        'svg'               => 'chevron-down-white'
                    ])
                </div>
            </div>
        </div>
    </div>
    <div class="filter-parent {{ !empty($displayBlock) && ($displayBlock) ? 'd-block' : '' }}">
        <div class="filter container">
            <div class="postcode-radius row">
                <div class="postcode-radius-child procedures col-12 col-md-3 d-flex align-items-center">
                    @include('components.basic.select', [
                        'selectParentClass'     =>  'w-100',
                        'showLabel'             =>  false,
                        'selectPicker'          =>  'true',
                        'group'                 =>  true,
                        'groupName'             =>  'procedures',
                        'options'               =>  $data['filters']['procedures'],
                        'suboptionClass'        =>  'subprocedures',
                        'selectId'              =>  'resultspage_treatment_dropdown',
                        'svg'                   =>  'chevron-down',
                        'selectClass'           =>  'select-picker highlight-search-dropdown',
                        'name'                  =>  'procedure_id'
                    ])
                    <a tabindex="0" data-offset="0 5px"
                       class="help-link"
                       style="right: 53px"
                        @include('components.basic.popover', [
                        'dismissible'       => true,
                        'placement'         => 'top',
                        'size'              => 'max-width',
                        'html'              => 'true',
                        'trigger'           => 'hover',
                        'content'           => '<p>If you know what treatment you need, select the treatment from our list or select generic body areas if you\'re not sure</p>'])
                    >@svg('icon-more-info')</a>
                </div>
                <div class="postcode-radius-child postcode col-12 col-md-3 d-flex align-items-center">
                    @include('components.basic.input', [
                        'placeholder'               => 'Enter your postcode',
                        'validation'                => 'maxlength=8',
                        'inputParentClassName'      => 'w-100',
                        'inputClassName'            => 'inputClass',
                        'value'                     => !empty(Request::input('postcode')) && empty($hc_errors) ? Request::input('postcode') : '' ,
                        'name'                      => 'postcode',
                        'id'                        => 'input_postcode'])
                    <a tabindex="0" data-offset="0 5px"
                       class="help-link"
                       style="right: 53px"
                        @include('components.basic.popover', [
                        'dismissible'       => true,
                        'placement'         => 'top',
                        'html'              => 'true',
                        'size'              => 'max-width',
                        'trigger'           => 'hover',
                        'content'           => '<p>
                                             Please enter your postcode<br>for a refined search.
                                         </p>
                                         '])
                    >@svg('icon-more-info')</a>
                </div>
                <div class="postcode-radius-child radius col-12 col-md-6">
                    <div class="col-inner pr-4 d-flex flex-column flex-wrap flex-lg-row align-items-center h-100 position-relative">
                        @include('components.basic.range', [
                            'id'            => 'radiusProx',
                            'label'         => 'Within radius of:',
                            'labelClass'    => 'SofiaPro-SemiBold mb-3 mb-md-0',
                            'placeholder'   => '',
                            'classTitle'    => '',
                            'value'         => !empty(Request::input('radius')) ? Request::input('radius') : 4,
                            'name'          => 'radius',
                            'step'          => 1])
                    </div>
                </div>

            </div>
            <div class="select-proximity filter-section row">
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectParentClass'     => 'w-100',
                        'showLabel'             => true,
                        'options'               => $data['filters']['waitingTimes'],
                        'svg'                   => 'chevron-down',
                        'selectClass'           => 'select-picker highlight-search-dropdown',
                        'selectId'              => 'resultspage_waitingtime_dropdown',
                        'placeholder'           =>'Waiting time',
                        'name'                  =>'waiting_time',
                        'labelClass'            => 'font-14 SofiaPro-Medium'])
                    <a tabindex="0" data-offset="0 5px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'       => true,
                        'placement'         => 'top',
                        'html'              => 'true',
                        'size'              => 'max-width',
                        'trigger'           => 'hover',
                        'content'           => '
                                     <p>
                                         Select the waiting time most suitable for your needs.
                                     </p>
                                     '])
                    >@svg('icon-more-info')</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectParentClass' => 'w-100',
                        'showLabel' => true,
                        'options' => $data['filters']['userRatings'],
                        'svg' => 'chevron-down',
                        'selectClass' => 'select-picker highlight-search-dropdown _results-page-select _highlight',
                        'placeholder'=>'NHS User Rating',
                        'name'=>'user_rating',
                        'labelClass' => 'font-14 SofiaPro-Medium'])
                    <a tabindex="0" data-offset="0 5px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'html'           => 'true',
                        'size'           => 'max-width',
                        'trigger'        => 'hover',
                        'content'        => '
                                     <p>
                                         Five star rating system based on feedback provided by users of the NHS (five stars being the best). Information is not available on some hospitals.
                                     </p>
                                     '])
                    >@svg('icon-more-info')</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'showLabel'         =>  true,
                        'options'           =>  $data['filters']['qualityRatings'],
                        'svg'               =>  'chevron-down',
                        'selectClass'       =>  'select-picker highlight-search-dropdown _results-page-select _highlight',
                        'placeholder'       =>  'Care Quality Rating',
                        'name'              =>  'quality_rating',
                        'labelClass'        =>  'font-14 SofiaPro-Medium'])
                    <a tabindex="0" data-offset="0 5px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'html'           => 'true',
                        'size'           => 'max-width',
                        'trigger'        => 'hover',
                        'content'        => '
                                     <p>
                                         The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.
                                     </p>
                                     '])
                    >@svg('icon-more-info')</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectParentClass' => 'w-100',
                        'showLabel' => true,
                        'options' => $data['filters']['hospitalTypes'],
                        'svg' => 'chevron-down',
                        'selectClass' => 'select-picker highlight-search-dropdown _results-page-select _highlight',
                        'placeholder'=>'Hospital Type',
                        'name'=>'hospital_type',
                        'labelClass' => 'font-14 SofiaPro-Medium'])
                    <a tabindex="0" data-offset="0 5px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'html'           => 'true',
                        'size'           => 'max-width',
                        'trigger'        => 'hover',
                        'content'        => '
                                     <p>
                                         Select which hospital type best suits your needs. Remember you can choose to have an NHS treatment at most private hospitals in England and Wales.
                                     </p>
                                     '])
                    >@svg('icon-more-info')</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2">
                    @include('components.basic.select', [
                        'selectParentClass'       => 'w-100',
                        'showLabel'             => true,
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
                    <a tabindex="0" data-offset="0 5px"
                       class="help-link"
                        @include('components.basic.popover', [
                        'dismissible'   => true,
                        'placement'      => 'top',
                        'html'           => 'true',
                        'size'           => 'max-width',
                        'trigger'        => 'hover',
                        'content'        => '
                                     <p>
                                         Select your insurance provider and policy type.
                                     </p>
                                     '])
                    >@svg('icon-more-info')</a>
                </div>
                <div class="filter-section-child col-6 col-md-4 col-lg-2 d-flex flex-column justify-content-end align-items-end">
                    @include('components.basic.button', [
                        'id'            =>  'clear_filters',
                        'classTitle'    =>  'col-grey pb-2 border-0',
                        'buttonText'    =>  'Clear filters'
                        ])
                    @include('components.basic.submit', [
                        'classTitle' => 'btn btn-blue d-block btn-submit-results font-16 py-2 px-3 w-100 text-center',
                        'buttonText' => 'Update Results'
                        ])
                </div>
            </div>
        </div>
    </div>
</form>
