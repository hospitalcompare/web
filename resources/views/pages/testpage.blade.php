@extends('layout.app')

@section('title', 'Test Page')

@section('description', 'this is the meta description')

@section('keywords', 'this is the meta keywords')

@section('mobile', 'width=device-width, initial-scale=1')

@section('body-class', 'test-page')

@section('content')

        <section>
            @include('components.modals.modaltour',
                ['displayBlock' => 'true'])
        </section>
{{--    <section>--}}
{{--        @include('mobile.components.corporatecontentmobile', [--}}
{{--                'procedures'    => $data['filters']['procedures'],--}}
{{--                'hospitalTitle' => 'Dr Nick\'s dodgy ops',--}}
{{--                'id'            => 1,--}}
{{--                'latitude'      => '52.3',--}}
{{--                'longitude'     => '2.3',--}}
{{--                'address'       => '<strong>Hospital name</strong><br>Hospital address<br>Hospital Town<br>Hospital County<br>Hospital Postcode'--}}
{{--            ])--}}
{{--    </section>--}}
{{--    <section>--}}
{{--        @include('mobile.components.modals.modalenquireprivatemobile', ['procedures'    => $data['filters']['procedures'],])--}}
{{--    </section>--}}
{{--    <div>--}}
{{--        @include('mobile.components.modals.modalmobilespecialoffer',--}}
{{--            [--}}
{{--                'id'            => 200,--}}
{{--                'title'         => 'Hospital Name',--}}
{{--                'NHSClass'      => 'private-hospital',--}}
{{--                'url'           => '/',--}}
{{--                'location'      => '91.5 miles away',--}}
{{--                'fundedText'    => 'Private',--}}
{{--                'radius'        => 50--}}
{{--            ])--}}
{{--    </div>--}}
{{--    <section>--}}
{{--        @include('pages.pagesections.resultspageform', [--}}
{{--        'displayBlock' => true])--}}
{{--    </section>--}}
    <section>
        <h3>Waiting times popover</h3>
        <div class="popover popover-regular fade bs-popover-top show" role="tooltip"
             id="popover438743" x-placement="top" style="position: relative;">
            <div class="arrow"></div>
            <div class="popover-body">
                <div class="d-table w-100">
                    <div class="d-table-row">
                        <div class="d-table-cell"></div>
                        <div class="d-table-cell SofiaPro-Medium">Weeks</div>
                        <div class="d-table-cell SofiaPro-Medium">Ranking</div>
                    </div>
                    <div class="d-table-row">
                        <div class="d-table-cell">Current Waiting Time</div>
                        <div class="d-table-cell">20.4</div>
                        <div class="d-table-cell">X of Y</div>
                    </div>
                    <div class="d-table-row">
                        <div class="d-table-cell SofiaPro-SemiBold">Waiting Times for Treated Patients</div>
                        <div class="d-table-cell"></div>
                        <div class="d-table-cell"></div>
                    </div>
                    <div class="d-table-row">
                        <div class="d-table-cell">Outpatients Treated</div>
                        <div class="d-table-cell">34</div>
                        <div class="d-table-cell">X of Y</div>
                    </div>
                    <div class="d-table-row">
                        <div class="d-table-cell">Inpatients treated</div>
                        <div class="d-table-cell">23</div>
                        <div class="d-table-cell">X of Y</div>
                    </div>
                    <div class="d-table-row">
                        <div class="d-table-cell">Diagnostics - % waiting 6+ weeks</div>
                        <div class="d-table-cell">XX%</div>
                        <div class="d-table-cell">X of Y</div>
                    </div>
                    <div class="d-table-row">
                        <small>NB - Diagnostics is a % of current waiting list waiting 6+ weeks (national target is 1%)</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <section>--}}
    {{--        <div class="compare-hospitals-bar ">--}}
    {{--            <div class="compare-hospitals-header d-flex justify-content-between">--}}
    {{--                <div class="container position-relative d-flex justify-content-between align-items-end h-100">--}}


    {{--                    <ul class="solutions-menu align-items-end d-none d-md-flex mb-0 ml-auto mr-3">--}}
    {{--                        <li class="d-block h-100 ">--}}
    {{--                            <div class="special-offer-tab blue__offer blue">--}}
    {{--                                <div class="special-offer-header d-flex align-items-center">--}}


    {{--                                    <div class="offer-text">--}}
    {{--                                        <div class="closed-text">--}}
    {{--                                            <p class="offer-title mb-0">NHS funded operation</p>--}}
    {{--                                            <p class="offer-subtitle mb-0">in 4.3 Weeks </p>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="open-text">--}}
    {{--                                            <p class="hospital-name mb-0">Frimley Park Hospital - Scanning Centre </p>--}}
    {{--                                            <p class="distance mb-0"></p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <span class="toggle-special-offer">--}}
    {{--            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><g><g><path fill="#fff"--}}
    {{--                                                                                                           d="M9.72 3.84l7.277 7.276c.2.2.467.31.752.31s.552-.11.752-.31l.638-.638c.2-.2.31-.467.31-.752s-.11-.552-.31-.752L10.475.31c-.2-.2-.469-.31-.754-.31-.286 0-.554.11-.755.31L.31 8.966c-.2.2-.311.467-.311.752s.11.552.31.752l.638.638c.415.414 1.09.414 1.505 0z"></path></g></g></svg>--}}
    {{--        </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="special-offer-body">--}}
    {{--                                    <div class="inner-body d-flex flex-column justify-content-between h-100">--}}
    {{--                                        <div>--}}
    {{--                                            <ul class="bullets">--}}
    {{--                                                <li>4.3 Weeks</li>--}}
    {{--                                                <li>Good CQC Rating</li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}

    {{--                                        <div class="btn-area text-right">--}}
    {{--                                            <button href="" id="1" style=""--}}
    {{--                                                    class="btn btn-icon btn-enquire-now enquiry mt-auto" role="button"--}}
    {{--                                                    data-toggle="modal"--}}
    {{--                                                    data-modal-text="This is the default text for an enquiry to a private hospital"--}}
    {{--                                                    data-hospital-title="Frimley Park Hospital - Scanning Centre "--}}
    {{--                                                    data-target="#hc_modal_enquire_private" data-image=""--}}
    {{--                                                    data-address="">Enquire now--}}
    {{--                                            </button>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}
    {{--                        <li class="d-block h-100 ml-4">--}}
    {{--                            <div class="special-offer-tab pink__offer pink">--}}
    {{--                                <div class="special-offer-header d-flex align-items-center">--}}


    {{--                                    <div class="offer-text">--}}
    {{--                                        <div class="closed-text">--}}
    {{--                                            <p class="offer-title mb-0">NHS funded operation</p>--}}
    {{--                                            <p class="offer-subtitle mb-0">in 4.3 Weeks </p>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="open-text">--}}
    {{--                                            <p class="hospital-name mb-0">Inhealth Radiology Department </p>--}}
    {{--                                            <p class="distance mb-0"></p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <span class="toggle-special-offer">--}}
    {{--            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><g><g><path fill="#fff"--}}
    {{--                                                                                                           d="M9.72 3.84l7.277 7.276c.2.2.467.31.752.31s.552-.11.752-.31l.638-.638c.2-.2.31-.467.31-.752s-.11-.552-.31-.752L10.475.31c-.2-.2-.469-.31-.754-.31-.286 0-.554.11-.755.31L.31 8.966c-.2.2-.311.467-.311.752s.11.552.31.752l.638.638c.415.414 1.09.414 1.505 0z"></path></g></g></svg>--}}
    {{--        </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="special-offer-body">--}}
    {{--                                    <div class="inner-body d-flex flex-column justify-content-between h-100">--}}
    {{--                                        <div>--}}
    {{--                                            <ul class="bullets">--}}
    {{--                                                <li>4.3 Weeks</li>--}}
    {{--                                                <li>Good CQC Rating</li>--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}

    {{--                                        <div class="btn-area text-right">--}}
    {{--                                            <button href="" id="1" style=""--}}
    {{--                                                    class="btn btn-icon btn-enquire-now enquiry mt-auto" role="button"--}}
    {{--                                                    data-toggle="modal"--}}
    {{--                                                    data-modal-text="This is the default text for an enquiry to a private hospital"--}}
    {{--                                                    data-hospital-title="Inhealth Radiology Department "--}}
    {{--                                                    data-target="#hc_modal_enquire_private" data-image=""--}}
    {{--                                                    data-address="">Enquire now--}}
    {{--                                            </button>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </li>--}}


    {{--                    </ul>--}}
    {{--                    <div class="compare-button-title d-flex align-items-center h-100">--}}

    {{--                        <svg id="compare_heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"--}}
    {{--                             class="has-count active">--}}

    {{--                            <path id="outer-circle" fill="transparent" stroke-width="2" stroke="#fff"--}}
    {{--                                  d="M15 1c7.7 0 14 6.3 14 14s-6.3 14-14 14S1 22.7 1 15 7.3 1 15 1z"></path>--}}
    {{--                            <g>--}}
    {{--                                <path id="wishlist" fill="transparent"--}}
    {{--                                      d="M18.8 8c-1.3 0-2.6.7-3.3 1.8-.2.2-.3.5-.4.7-.1-.2-.3-.5-.4-.7-.7-1.1-2-1.8-3.3-1.8-2.6.1-4.4 2-4.4 4.4v.1c0 2.8 2.3 4.7 5.7 7.7.6.6 1.3 1.1 1.9 1.7.1.1.3.1.4.1.1 0 .2 0 .3-.1l2.1-1.8c3.2-2.7 5.6-4.7 5.6-7.6.1-2.4-1.7-4.4-4.1-4.6l-.1.1z"></path>--}}
    {{--                            </g>--}}
    {{--                        </svg>--}}
    {{--                        <p class="font-26">Compare&nbsp;(<span id="compare_number">2</span>)<span--}}
    {{--                                class="compare-arrow ml-3 rotated"></span>--}}
    {{--                        </p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="compare-hospitals-content revealed" style="display: block;">--}}
    {{--                <div class="container">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-2 d-none" id="no_items_added">--}}
    {{--                            <div class="col-inner">--}}
    {{--                                <div class="col-header_small">--}}
    {{--                                    <p class="font-16 SofiaPro-SemiBold mb-5">You haven’t added any--}}
    {{--                                        hospitals to compare yet. </p>--}}
    {{--                                    <p>Click the the&nbsp;<img width="14" height="12" src="/images/icons/heart.svg"--}}
    {{--                                                               alt="Heart icon">&nbsp;next to the hospital to add the--}}
    {{--                                        chosen--}}
    {{--                                        hospital into the comparison dashboard.</p>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div id="compare_hospitals_headings" class="col-2">--}}
    {{--                            <div class="col-inner h-100">--}}
    {{--                                <div class="col-header">--}}
    {{--                                    <p class="SofiaPro-SemiBold mb-1">You are comparing:</p>--}}
    {{--                                    <p>--}}
    {{--                                        <span id="nhs-hospital-count">1</span>&nbsp;NHS hospital(s) &amp;<br>--}}
    {{--                                        <span id="private-hospital-count">1</span>&nbsp;Private hospital(s)--}}
    {{--                                    </p>--}}
    {{--                                    <form id="multiple_enquiries_form" novalidate="novalidate">--}}

    {{--                                        <input id="multiple_enquiries_hospital_ids" class="d-none" type="text"--}}
    {{--                                               name="hospital_id" value="">--}}
    {{--                                        <input class="d-none" type="text" name="title" value="Mr">--}}
    {{--                                        <input class="d-none" type="text" name="first_name" value="Hello">--}}
    {{--                                        <input class="d-none" type="text" name="last_name" value="Hello">--}}
    {{--                                        <input class="d-none" type="email" name="email" value="hello@mello.yello">--}}
    {{--                                        <input class="d-none" type="email" name="confirm_email"--}}
    {{--                                               value="hello@mello.yello">--}}
    {{--                                        <input class="d-none" type="text" name="phone_number" value="01234567891">--}}
    {{--                                        <input class="d-none" type="text" name="postcode" value="ch23ae">--}}
    {{--                                        <input class="d-none" type="checkbox" value="on">--}}
    {{--                                        <input class="d-none" type="text" name="additional_information"--}}
    {{--                                               value="Some info">--}}
    {{--                                        <button id="multiple_enquiries_button" style=""--}}
    {{--                                                class="btn btn-squared btn-blue btn-enquiry font-14" target=""--}}
    {{--                                                data-target="" href="javascript:void(0);" role="button">--}}
    {{--                                            Make an enquiry to all your chosen hospitals--}}

    {{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"--}}
    {{--                                                 viewBox="0 0 20 20">--}}
    {{--                                                <g>--}}
    {{--                                                    <g>--}}
    {{--                                                        <g>--}}
    {{--                                                            <path fill="#fff"--}}
    {{--                                                                  d="M10.002 18.849c-4.878 0-8.846-3.968-8.846-8.847 0-4.878 3.968-8.846 8.846-8.846 4.879 0 8.847 3.968 8.847 8.846 0 4.879-3.968 8.847-8.847 8.847zm0-18.849C4.488 0 0 4.488 0 10.002c0 5.515 4.488 10.003 10.002 10.003 5.515 0 10.003-4.488 10.003-10.003C20.005 4.488 15.517 0 10.002 0z"></path>--}}
    {{--                                                        </g>--}}
    {{--                                                        <g>--}}
    {{--                                                            <path fill="#fff"--}}
    {{--                                                                  d="M14.47 5.848l-5.665 6.375-3.34-2.67a.578.578 0 0 0-.811.088c-.2.25-.158.615.091.815l3.769 3.015a.57.57 0 0 0 .361.125c.167 0 .325-.07.433-.196l6.03-6.783a.579.579 0 0 0 .146-.42.588.588 0 0 0-.191-.4.592.592 0 0 0-.824.05z"></path>--}}
    {{--                                                        </g>--}}
    {{--                                                    </g>--}}
    {{--                                                </g>--}}
    {{--                                            </svg>--}}
    {{--                                        </button>--}}

    {{--                                    </form>--}}
    {{--                                </div>--}}
    {{--                                <div class=""></div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Hospital Type&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" data-offset="0 5px" class="help-link"--}}
    {{--                                      data-toggle="popover-comparison" data-content="--}}
    {{--                                                 <span>--}}
    {{--                                                     NHS or Private Hospital--}}
    {{--                                                 </span>--}}
    {{--                                                 " data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Average Waiting Time&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" data-offset="0 5px" class="help-link"--}}
    {{--                                      data-toggle="popover-comparison" data-content="--}}
    {{--                                                    <span>--}}
    {{--                                                        Our waiting time data is based on NHS data, specifically the number of weeks that 92 out or 100 people wait for their treatment to start.--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">NHS User Rating&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" data-offset="0 5px" class="help-link"--}}
    {{--                                      data-toggle="popover-comparison" data-content="--}}
    {{--                                                 <span>--}}
    {{--                                                     The average waiting time for procedures at this hospital--}}
    {{--                                                 </span>--}}
    {{--                                                 " data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">% Operations cancelled&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" data-offset="0 5px" class="help-link"--}}
    {{--                                      data-toggle="popover-comparison" data-content="--}}
    {{--                                                 <span>--}}
    {{--                                                    The percentage of operations cancelled during the last reporting period. Data only available for NHS hospitals at this time.--}}
    {{--                                                 </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Care Quality Rating&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Friends &amp; Family Rating&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        The percentage of people who would recommend this hospital to family and friends.--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">NHS Funded Work&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        This hospital provides treatments funded by the NHS. Remember you can have an NHS treatment at most private hospitals.--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Private Self Pay&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Indicates whether a hospital location provides Private, Self Pay services. In many instances, your local NHS hospital will also offer private treatment.--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell column-break SofiaPro-SemiBold">Care Quality Rating</div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Safe&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Effective&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                    Info here--}}
    {{--                                                </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Caring&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Responsive&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Well Led&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell column-break SofiaPro-SemiBold">NHS User Rating</div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Cleanliness&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Food &amp; Hygiene&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Privacy, Dignity &amp; Wellbeing&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Dementia Domain&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                                <div class="cell">--}}
    {{--                            <span class="position-relative">Disability Domain&nbsp;&nbsp;--}}
    {{--                                <span tabindex="0" class="help-link" data-toggle="popover-comparison" data-content="<span>--}}
    {{--                                                        Info here--}}
    {{--                                                    </span>" data-trigger="hover" data-placement="top" data-html="true"--}}
    {{--                                      data-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="6"--}}
    {{--                                                                           height="8" viewBox="0 0 6 8">--}}
    {{--    <g>--}}
    {{--        <g>--}}
    {{--            <path--}}
    {{--                d="M1.7 7.086c0 .437.385.75.828.75.454 0 .826-.313.826-.75 0-.436-.372-.76-.826-.76-.443 0-.827.324-.827.76zm1.421-2.003c0-.526.291-.716.768-.85.91-.269 1.654-1.03 1.654-2.115 0-1.343-1.094-2.183-2.41-2.183C1.84-.065.804.842.804 2.275h1.153c0-.74.547-1.198 1.176-1.198.64 0 1.223.414 1.223 1.04 0 .303-.164.638-.467.84-1.106.716-1.955.604-1.955 2.126v.57h1.164z"></path>--}}
    {{--        </g>--}}
    {{--    </g>--}}
    {{--</svg>--}}
    {{--</span>--}}
    {{--                            </span>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-10">--}}
    {{--                            <div class="row" id="_compare_hospitals_grid">--}}
    {{--                                <div class="col text-center" id="compare_hospital_id_783">--}}
    {{--                                    <div class="col-inner">--}}
    {{--                                        <div class="col-header d-flex flex-column justify-content-between">--}}
    {{--                                            <div class="image-wrapper h-100"><img class="" src="images/alder-1.jpg"--}}
    {{--                                                                                  alt="Image of Walkergate Park ">--}}
    {{--                                                <div class="remove-hospital" id="remove_id_783"--}}
    {{--                                                     data-hospital-type="nhs-hospital"></div>--}}
    {{--                                                <div class="details"><p class="w-100 mt-auto">Walkergate Park </p><a--}}
    {{--                                                        id="783"--}}
    {{--                                                        class="btn btn-icon btn-blue btn-enquire enquiry mr-2 btn-block"--}}
    {{--                                                        role="button" data-toggle="modal"--}}
    {{--                                                        data-hospital-url="www.ntw.nhs.uk"--}}
    {{--                                                        data-hospital-title="Walkergate Park "--}}
    {{--                                                        data-target="#hc_modal_enquire_nhs">Make an enquiry--}}
    {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"--}}
    {{--                                                             viewBox="0 0 20 20">--}}
    {{--                                                            <g>--}}
    {{--                                                                <g>--}}
    {{--                                                                    <g>--}}
    {{--                                                                        <path fill="#fff"--}}
    {{--                                                                              d="M10.002 18.849c-4.878 0-8.846-3.968-8.846-8.847 0-4.878 3.968-8.846 8.846-8.846 4.879 0 8.847 3.968 8.847 8.846 0 4.879-3.968 8.847-8.847 8.847zm0-18.849C4.488 0 0 4.488 0 10.002c0 5.515 4.488 10.003 10.002 10.003 5.515 0 10.003-4.488 10.003-10.003C20.005 4.488 15.517 0 10.002 0z"></path>--}}
    {{--                                                                    </g>--}}
    {{--                                                                    <g>--}}
    {{--                                                                        <path fill="#fff"--}}
    {{--                                                                              d="M14.47 5.848l-5.665 6.375-3.34-2.67a.578.578 0 0 0-.811.088c-.2.25-.158.615.091.815l3.769 3.015a.57.57 0 0 0 .361.125c.167 0 .325-.07.433-.196l6.03-6.783a.579.579 0 0 0 .146-.42.588.588 0 0 0-.191-.4.592.592 0 0 0-.824.05z"></path>--}}
    {{--                                                                    </g>--}}
    {{--                                                                </g>--}}
    {{--                                                            </g>--}}
    {{--                                                        </svg>--}}
    {{--                                                    </a></div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="cell">NHS Hospital</div>--}}
    {{--                                        <div class="cell">11.92 Weeks</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell"><img src="images/icons/dash-black.svg" alt="Dash icon"></div>--}}
    {{--                                        <div class="cell column-break"></div>--}}
    {{--                                        <div class="cell">Good</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell column-break"></div>--}}
    {{--                                        <div class="cell">100%</div>--}}
    {{--                                        <div class="cell">92.77%</div>--}}
    {{--                                        <div class="cell">100%</div>--}}
    {{--                                        <div class="cell">93.8%</div>--}}
    {{--                                        <div class="cell">98.62%</div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col text-center" id="compare_hospital_id_272">--}}
    {{--                                    <div class="col-inner">--}}
    {{--                                        <div class="col-header d-flex flex-column justify-content-between">--}}
    {{--                                            <div class="image-wrapper h-100"><img class="" src="images/alder-1.jpg"--}}
    {{--                                                                                  alt="Image of Caterham Dene Hospital ">--}}
    {{--                                                <div class="remove-hospital" id="remove_id_272"--}}
    {{--                                                     data-hospital-type="private-hospital"></div>--}}
    {{--                                                <div class="details"><p class="w-100 mt-auto">Caterham Dene--}}
    {{--                                                        Hospital </p><a id="272"--}}
    {{--                                                                        class="btn btn-icon btn-blue btn-enquire enquiry mr-2 btn-block"--}}
    {{--                                                                        role="button" data-toggle="modal"--}}
    {{--                                                                        data-hospital-url="www.firstcommunityhealthcare.co.uk/caterham-dene-community-hospital"--}}
    {{--                                                                        data-hospital-title="Caterham Dene Hospital "--}}
    {{--                                                                        data-target="#hc_modal_enquire_private">Make an--}}
    {{--                                                        enquiry--}}
    {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"--}}
    {{--                                                             viewBox="0 0 20 20">--}}
    {{--                                                            <g>--}}
    {{--                                                                <g>--}}
    {{--                                                                    <g>--}}
    {{--                                                                        <path fill="#fff"--}}
    {{--                                                                              d="M10.002 18.849c-4.878 0-8.846-3.968-8.846-8.847 0-4.878 3.968-8.846 8.846-8.846 4.879 0 8.847 3.968 8.847 8.846 0 4.879-3.968 8.847-8.847 8.847zm0-18.849C4.488 0 0 4.488 0 10.002c0 5.515 4.488 10.003 10.002 10.003 5.515 0 10.003-4.488 10.003-10.003C20.005 4.488 15.517 0 10.002 0z"></path>--}}
    {{--                                                                    </g>--}}
    {{--                                                                    <g>--}}
    {{--                                                                        <path fill="#fff"--}}
    {{--                                                                              d="M14.47 5.848l-5.665 6.375-3.34-2.67a.578.578 0 0 0-.811.088c-.2.25-.158.615.091.815l3.769 3.015a.57.57 0 0 0 .361.125c.167 0 .325-.07.433-.196l6.03-6.783a.579.579 0 0 0 .146-.42.588.588 0 0 0-.191-.4.592.592 0 0 0-.824.05z"></path>--}}
    {{--                                                                    </g>--}}
    {{--                                                                </g>--}}
    {{--                                                            </g>--}}
    {{--                                                        </svg>--}}
    {{--                                                    </a></div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="cell">Private Hospital</div>--}}
    {{--                                        <div class="cell">9.58 Weeks</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell"><img src="images/icons/dash-black.svg" alt="Dash icon"></div>--}}
    {{--                                        <div class="cell column-break"></div>--}}
    {{--                                        <div class="cell">Good</div>--}}
    {{--                                        <div class="cell">Good</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell">Outstanding</div>--}}
    {{--                                        <div class="cell column-break"></div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                        <div class="cell">No data</div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <!-- Items added here -->--}}
    {{--                                <div class="col">--}}
    {{--                                    <div class="col-inner">--}}
    {{--                                        <div class="col-header">--}}
    {{--                                            <p class="text-center">Selected Hospital<br>--}}
    {{--                                                will appear here.</p>--}}
    {{--                                            <p class="text-center"> Add more hospitals to your--}}
    {{--                                                Shortlist by clicking the&nbsp;<img width="14" height="12"--}}
    {{--                                                                                    src="/images/icons/heart.svg"--}}
    {{--                                                                                    alt="Heart icon">--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col">--}}
    {{--                                    <div class="col-inner">--}}
    {{--                                        <div class="col-header">--}}
    {{--                                            <p class="text-center">Selected Hospital<br>--}}
    {{--                                                will appear here.</p>--}}
    {{--                                            <p class="text-center"> Add more hospitals to your--}}
    {{--                                                Shortlist by clicking the&nbsp;<img width="14" height="12"--}}
    {{--                                                                                    src="/images/icons/heart.svg"--}}
    {{--                                                                                    alt="Heart icon">--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col">--}}
    {{--                                    <div class="col-inner">--}}
    {{--                                        <div class="col-header">--}}
    {{--                                            <p class="text-center">Selected Hospital<br>--}}
    {{--                                                will appear here.</p>--}}
    {{--                                            <p class="text-center"> Add more hospitals to your--}}
    {{--                                                Shortlist by clicking the&nbsp;<img width="14" height="12"--}}
    {{--                                                                                    src="/images/icons/heart.svg"--}}
    {{--                                                                                    alt="Heart icon">--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}


    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <section>
        <div class="container">
            <h1>Special offers slide out</h1>
            @include('components.basic.specialofferslide', [
            'class'         => 'show',
            'url'           => 'hello.com',
            'NHSClass'      => 'private-hospital',
            'title'         => 'Budget hospitals dot com',
            'id'            => '1'])
            {{--            <h3>Select styling</h3>--}}
            {{--            <h4>Plain select</h4>--}}
            {{--            <select class="" id="" name="sort_by">--}}

            {{--                <option name="Distance from Postcode ascending" id="sort_by_0" value="0">--}}
            {{--                    Distance from Postcode ascending--}}
            {{--                </option>--}}
            {{--                <option name="Distance from Postcode descending" id="sort_by_1" value="1">--}}
            {{--                    Distance from Postcode descending--}}
            {{--                </option>--}}
            {{--                <option name="Waiting time ascending" id="sort_by_2" value="2">--}}
            {{--                    Waiting time ascending--}}
            {{--                </option>--}}
            {{--                <option name="Waiting time descending" id="sort_by_3" value="3">--}}
            {{--                    Waiting time descending--}}
            {{--                </option>--}}
            {{--                <option name="User Rating ascending" id="sort_by_4" value="4">--}}
            {{--                    User Rating ascending--}}
            {{--                </option>--}}
            {{--                <option name="User Rating descending" id="sort_by_5" value="5">--}}
            {{--                    User Rating descending--}}
            {{--                </option>--}}
            {{--            </select>--}}
        </div>
    </section>


    <section class="pt-3">
        <div class="container">
            <h3>Enquiry Form</h3>
            @include('components.modals.modalenquireprivate', [
                       'procedures'    => $data['filters']['procedures'],
                       'title'         => 'Mr',
                       'firstName'     => 'Test',
                       'dob'           => '1980/04/12',
                       'lastName'      => 'Testing',
                       'email'         => 'test@test.com',
                       'phone'         => '07941939374',
                       'postcode'      => 'ch423re',
                       'gdpr'          => true])
        </div>
    </section>
    {{--     {{ dd($doctor) }}--}}
    {{--    <section>--}}
    {{--        <div class="container my-4">--}}
    {{--            <!--Carousel Wrapper-->--}}
    {{--            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="">--}}
    {{--                <!--Slides-->--}}
    {{--                <div class="carousel-inner" role="listbox">--}}
    {{--                    <div class="carousel-item active">--}}
    {{--                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(88).jpg"--}}
    {{--                             alt="First slide">--}}
    {{--                    </div>--}}
    {{--                    <div class="carousel-item">--}}
    {{--                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(121).jpg"--}}
    {{--                             alt="Second slide">--}}
    {{--                    </div>--}}
    {{--                    <div class="carousel-item">--}}
    {{--                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg"--}}
    {{--                             alt="Third slide">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <!--/.Slides-->--}}
    {{--                <!--Controls-->--}}
    {{--                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">--}}
    {{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
    {{--                    <span class="sr-only">Previous</span>--}}
    {{--                </a>--}}
    {{--                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">--}}
    {{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
    {{--                    <span class="sr-only">Next</span>--}}
    {{--                </a>--}}
    {{--                <!--/.Controls-->--}}
    {{--                <ol class="_carousel-indicators row">--}}
    {{--                    <li data-target="#carousel-thumb" data-slide-to="0" class="active col-3">--}}
    {{--                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(88).jpg" class="img-fluid">--}}
    {{--                    </li>--}}
    {{--                    <li data-target="#carousel-thumb" data-slide-to="1" class="col-3">--}}
    {{--                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(121).jpg" class="img-fluid">--}}
    {{--                    </li>--}}
    {{--                    <li data-target="#carousel-thumb" data-slide-to="2" class="col-3">--}}
    {{--                        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/Carousel-thumbs/img%20(31).jpg" class="img-fluid">--}}
    {{--                    </li>--}}
    {{--                </ol>--}}
    {{--            </div>--}}
    {{--            <!--/.Carousel Wrapper-->--}}

    {{--        </div>--}}
    {{--    </section>--}}
    <section>
        <div class="container" style="height: 300px">
            @include('components.basic.closebutton',
                ['position'  => 'static'])
        </div>
    </section>
    <section>
        <h3>Large popover - left</h3>
        <div class="my-5 popover popover-large fade bs-popover-left show" role="tooltip" id="popover438743"
             x-placement="bottom"
             style="position: relative;">
            <div class="arrow arrow-large" style="left: 64px;"></div>
            <div class="popover-body">Hello, this is a large, left popover <a tabindex class="text-link">Click here</a>
            </div>
        </div>
    </section>
    <div class="section pt-3 pb-5">
        <div class="container">
            <p class="p-5" style="width: 300px; border: 3px solid black">
                When you have performed a search for hospitals on your results page you can click the
                blue “compare” icon
                <a id="1" class="float-right display-inline btn btn-compare compare mt-0" target=""
                   href="javascript:void(0);" role="button"><i class=""></i></a>
            </p>
        </div>
    </div>
    {{--    <div class="section py-3 ">--}}
    {{--        <div class="container-fluid px-0">--}}
    {{--            <h2>Solutions bar </h2>--}}
    {{--            @include('components.solutionsbar', [--}}
    {{--                'position' => '',--}}
    {{--                'specialOffers' => $data['special_offers']])--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="section py-3 ">
        <div class="section py-3">
            <div class="container">
                <h3>Modal - enquire now</h3>
                <div class="modal modal-enquire fade show" id="hc_example_modal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-modal="true"
                     style="display: block; position: static">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close position-absolute" data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true" class="text-white bg-black">Close</span>
                            </button>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col col-md-6 p-0">
                                            <div class="col-inner col-inner__left">
                                                <h3 class="modal-title mb-3">Hospital Name</h3>
                                                <div class="d-flex mb-3">
                                                    <div class="image-wrapper mr-3">
                                                        <img class="mr-3" src="images/alder-1.jpg">
                                                    </div>
                                                    <div class="modal-copy">
                                                        <p>This NHS hospital does not respond to direct enquiries
                                                            regarding NHS funded elective procedures prior to an
                                                            appointment being confirmed.</p>
                                                    </div>

                                                </div>
                                                <div class="btn-area">
                                                    <a href="http://' . $d['url'] . '" target="_blank"
                                                       class="btn btn-icon btn-blue btn-enquire">Visit hospital
                                                        website</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-md-6 p-0">
                                            <div
                                                class="col-inner col-inner__right h-100 text-center bg-pink">
                                                <h2 class="text-white">Or go back to results</h2>

                                                <div class="text-white modal-copy">
                                                    <p>Click <a class="text-link"
                                                                data-dismiss="modal"
                                                                aria-label="Close">here</a>
                                                        to go back to results</p>
                                                </div>
                                                {{--                                                                <div class="btn-area">--}}
                                                {{--                                                                    <a  data-toggle="modal"--}}
                                                {{--                                                                       data-target="#hc_modal_special"--}}
                                                {{--                                                                      data-content="<h1>' . $specialOfferContent = 'hello' . '</h1>"--}}
                                                {{--                                                                       data-dismiss="modal"--}}
                                                {{--                                                                        class="btn btn-icon btn-special-offer-reverse">Back to results</a>--}}
                                                {{--                                                               </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Dr Stevini</h2>
                {{--                @include('components.doctor', ['delay' => '500'])--}}
                <h2>Tooltips</h2>
                <br>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top">
                    Tooltip on top
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                        title="Tooltip on right">
                    Tooltip on right
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom"
                        title="Tooltip on bottom">
                    Tooltip on bottom
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left"
                        title="Tooltip on left">
                    Tooltip on left
                </button>
                <hr>
                <h3>Enquire now button</h3>
                @include('components.basic.button', [
                    'classTitle' => 'btn btn-icon btn-enquire-now mr-2',
                    'buttonText' => 'Enquire Now'])
                <h3>Special offer button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-icon btn-special-offer mr-2', 'buttonText' => 'Special Offers'])
                <h3>Special offer button reversed</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-icon btn-special-offer-reverse mr-2', 'buttonText' => 'Special Offers'])
                <h3>Enquiry button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-icon btn-enquire enquiry', 'buttonText' => 'Make an enquiry'])
                <h3>Close button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-close__small btn-brand-1 btn-icon', 'buttonText' => 'Close'])
                <h3>Let's go button</h3>
                @include('components.basic.button', ['classTitle' => 'btn btn-go btn-icon', 'buttonText' => 'Close'])
                <hr>
                <h2>Popovers</h2>
                <h3>Popover for CQC rating</h3>
                <div class="popover popover-cqc popover-regular fade bs-popover-top show" role="tooltip"
                     id="popover438743" x-placement="top" style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div
                                    class="cqc-left col-4 d-flex flex-column justify-content-center align-items-start bg-cqc-green text-white border">
                                    <h4 class="mb-0 text-white">Overall</h4>
                                    <h4 class="mb-0 text-white"><strong>Good</strong></h4>
                                </div>
                                <div class="cqc-right col-8 pr-0">
                                    <div class="cqc-table">
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Safe</div>
                                            <div class="cqc-rating ml-auto"><strong>Good</strong><span
                                                    class="cqc-colour bg-cqc-green"></span></div>
                                        </div>
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Effective</div>
                                            <div class="cqc-rating ml-auto"><strong>Good</strong><span
                                                    class="cqc-colour bg-cqc-green"></span></div>
                                        </div>
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Caring</div>
                                            <div class="cqc-rating ml-auto"><strong>Good</strong><span
                                                    class="cqc-colour bg-cqc-green"></span></div>
                                        </div>
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Responsive</div>
                                            <div class="cqc-rating ml-auto"><strong>Good</strong><span
                                                    class="cqc-colour bg-cqc-green"></span></div>
                                        </div>
                                        <div class="cqc-row d-flex justify-content-between">
                                            <div class="cqc-category">Well-Led</div>
                                            <div class="cqc-rating ml-auto"><strong>Good</strong><span
                                                    class="cqc-colour bg-cqc-green"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>Popover top</h3>
                <div class="popover popover-regular fade bs-popover-top show" role="tooltip" id="popover438743"
                     x-placement="top" style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <p><span class="mr-2">Food rating</span>
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                        </p>
                    </div>
                </div>
                <h3>Popover bottom</h3>
                <div class="popover popover-regular fade bs-popover-bottom show" role="tooltip" id="popover438743"
                     x-placement="bottom" style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <p><span class="mr-2">Food rating</span>
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                            <img class="star-icon" src="../images/icons/star.svg" alt="Whole Star">
                        </p>
                    </div>
                </div>
                <h3>Popover trigger</h3>
                <a tabindex="0" data-offset="30px 40px" class="help-link help-link__inline"
                    @include('components.basic.popover', [
                    'size'      => 'large',
                    'placement' => 'top',
                    'trigger'   => 'click',
                    'html'      => 'true',
                    'content'   => '<p class="bold mb-0">
                                        What is NHS funded work?
                                    </p>
                                    <p>
                                        Many private healthcare policies allow you to choose which hospital to have your elective
                                        procedure at. Enter your provider and policy name to find the best hospital for you.
                                    </p>'])>@svg('question')</a>
                <a href="#" class="btn btn-blue"
                   data-toggle="popover"
                   data-content="Hello, this is a popover"
                   data-placement="bottom"
                   title="Popover title">
                    Popover on click</a>
                <a href="#" class="btn btn-blue"
                   data-toggle="popover"
                   data-content="Hello, this is a popover"
                   data-trigger="hover"
                   title="Popover title">
                    Popover on hover</a>
                <a href="#" class="btn btn-blue"
                   data-toggle="popover"
                   data-content="Hello, this is a popover"
                   data-trigger="hover"
                   data-placement="bottom"
                   title="Popover title">
                    Popover on hover, at the bottom</a>
                <a class="btn btn-blue"
                   data-toggle="popover-large"
                   data-content="Hello, this is a popover"
                   data-trigger="hover"
                   data-placement="bottom"
                   title="Popover title">
                    Large popover</a>
                <br>
                <h3>Popover html</h3>
                <div class="popover fade bs-popover-bottom show" role="tooltip" id="popover438743" x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <h3 class="popover-header">Popover title</h3>
                    <div class="popover-body">Hello, this is a popover</div>
                </div>

                <h3>Popover with link</h3>
                <div class="popover fade bs-popover-top show" role="tooltip" id="popover438743" x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">Hello, this is a popover <a tabindex class="text-link">Click here</a>
                    </div>
                </div>

                <h3>Large popover - top</h3>
                <div class="my-5 popover popover-large fade bs-popover-top show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow arrow-large" style="left: 64px;"></div>
                    <div class="popover-body">Hello, this is a popover <a tabindex class="text-link">Click here</a>
                    </div>
                </div>
                <h3>Large popover - bottom</h3>
                <div class="my-5 popover popover-large fade bs-popover-bottom show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow arrow-large" style="left: 64px;"></div>
                    <div class="popover-body">Hello, this is a popover <a tabindex class="text-link">Click here</a>
                    </div>
                </div>

                <h3>Popover with stars</h3>
                <div class="popover popover-regular fade bs-popover-bottom show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="arrow" style="left: 64px;"></div>
                    <div class="popover-body">
                        <p><span class="mr-2">Food rating</span>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                            <img class="star-icon" src='../images/icons/star.svg' alt='Whole Star'>
                        </p>
                    </div>
                </div>

                <h3>Large popover - bottom</h3>
                <div class="mt-5 popover popover-large fade bs-popover-bottom show" role="tooltip" id="popover438743"
                     x-placement="bottom"
                     style="position: relative;">
                    <div class="popover-body">
                        <p class="bold mb-0">
                            What is NHS funded work?
                        </p>
                        <p>
                            Many private healthcare policies allow you to choose which hospital to have your elective
                            procedure at. Enter your provider and policy name to find the best hospital for you.
                        </p>
                        <p>
                            <a class="btn btn-close__small btn-brand-1 btn-icon" href="/">Close</a>
                        </p>
                    </div>
                    <div class="arrow arrow-large" style="left: 64px;"></div>
                </div>
                <hr>
                <h3>Modal trigger</h3>
                <div class="btn-area">
                    <button
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#hc_modal"
                        data-content="<h1>Some modal content</h1>">Open modal for @mdo
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hc_modal"
                            data-content="@fat">Open modal for @fat
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#hc_modal"
                            data-content="@getbootstrap">Open modal for @getbootstrap
                    </button>

                </div>


                <hr>

                <h4>Styled select</h4>
                <div class="select-parent  ">
                    <label class="_select-box sortLabel" for="">
                        Sort by:
                    </label>
                    <select class="results-page-select" id="" name="sort_by">

                        <option name="Distance from Postcode ascending" id="sort_by_0" value="0">
                            Distance from Postcode ascending
                        </option>
                        <option name="Distance from Postcode descending" id="sort_by_1" value="1">
                            Distance from Postcode descending
                        </option>
                        <option name="Waiting time ascending" id="sort_by_2" value="2">
                            Waiting time ascending
                        </option>
                        <option name="Waiting time descending" id="sort_by_3" value="3">
                            Waiting time descending
                        </option>
                        <option name="User Rating ascending" id="sort_by_4" value="4">
                            User Rating ascending
                        </option>
                        <option name="User Rating descending" id="sort_by_5" value="5">
                            User Rating descending
                        </option>
                    </select>
                    <svg class="svg-inline--fa fa-chevron-down fa-w-14 black-chevron" aria-hidden="true"
                         focusable="false" data-prefix="fas" data-icon="chevron-down" role="img"
                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                              d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
                    </svg><!-- <i class="fas fa-chevron-down black-chevron"></i> -->
                </div>
                <hr>

                {{--                @include('components.modals.modalenquirenhs')--}}
                @include('components.modals.modalvideo')
            </div>
        </div>
@endsection
