import React, {Component} from 'react';

class ResultsPageForm extends Component {
    render() {
        return (
            <form className="form-element" id="resultspage_form" style={{top: '0px', position: 'sticky'}}>
                <div className="sort-parent" id="sort_parent">
                    <div className="container">
                        <div className="sort-bar">
                            <div className="show-section section-1 SofiaPro-Medium font-16">
                                <span
                                    className="SofiaPro-SemiBold">Showing a maximum of 50 hospital(s)</span><br/> Ordered
                                by Care Quality Rating then Waiting Time
                            </div>
                            <div className="section-2 d-none d-lg-block">
                                <ul className="result-item-menu">
                                    <li className="sort-item sort-care-quality-rating desc highlight">
                                        <p tabIndex="0" data-toggle="popover" data-content="<p class=&quot;bold mb-0&quot;>
                                                    Care Quality Rating
                                                </p>
                                                <p>
                                                    The Care Quality Commission is the independent regulator of health and social care in England. They rate hospitals as Outstanding, Good, Requires Improvement or Inadequate.
                                                </p>" data-trigger="hover" data-placement="top" data-html="true"
                                           data-original-title="" title="">Care Quality<br/>Rating</p>
                                        <span title="Sort by this column"
                                              className="sort-arrow sort-care-quality-rating desc"><svg className=""
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="18"
                                                                                                        height="11"
                                                                                                        viewBox="0 0 18 11">
    <g>
        <g>
            <path
                d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>
        </g>
    </g>
</svg></span>
                                    </li>
                                    <li className="sort-item sort-waiting-time asc ">
                                        <p tabIndex="0" data-toggle="popover" data-content="<p class=&quot;bold mb-0&quot;>
                                                    Waiting Time (NHS Funded)
                                                </p>
                                                <p>
                                                    Our waiting time data is based on NHS data, specifically the number of weeks that 92 out of 100 people wait for their treatment to start - this is the NHS standard.
                                                </p>" data-trigger="hover" data-placement="top" data-html="true"
                                           data-original-title="" title="">Waiting time <br/>(NHS Funded)</p>
                                        <span title="Sort by this column" className="sort-arrow sort-waiting-time asc"><svg
                                            className="" xmlns="http://www.w3.org/2000/svg" width="18" height="11"
                                            viewBox="0 0 18 11">
    <g>
        <g>
            <path
                d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>
        </g>
    </g>
</svg></span>
                                    </li>
                                    <li className="sort-item sort-user-rating asc ">
                                        <p tabIndex="0" data-toggle="popover" data-content="<p class=&quot;bold mb-0&quot;>
                                                    NHS User Rating
                                                </p>
                                                <p>
                                                    Star rating system based on feedback provided by NHS patients, five stars being the best.
                                                </p>" data-trigger="hover" data-placement="top" data-html="true"
                                           data-original-title="" title="">NHS User<br/> Rating&nbsp;<br/></p>
                                        <span title="Sort by this column" className="sort-arrow sort-user-rating asc"><svg
                                            className="" xmlns="http://www.w3.org/2000/svg" width="18" height="11"
                                            viewBox="0 0 18 11">
    <g>
        <g>
            <path
                d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>
        </g>
    </g>
</svg></span>
                                    </li>
                                    <li className="sort-item sort-op-cancelled asc ">
                                        <p tabIndex="0" data-toggle="popover" data-content="<p class=&quot;bold mb-0&quot;>
                                                    % of Operations Cancelled
                                                </p>
                                                <p>
                                                    The percentage of operations cancelled during the latest reporting period. Data typically only available for NHS hospitals at this time.
                                                </p>" data-trigger="hover" data-placement="top" data-html="true"
                                           data-original-title="" title="">% Operations<br/>Cancelled</p>
                                        <span title="Sort by this column" className="sort-arrow sort-op-cancelled asc"><svg
                                            className="" xmlns="http://www.w3.org/2000/svg" width="18" height="11"
                                            viewBox="0 0 18 11">
    <g>
        <g>
            <path
                d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>
        </g>
    </g>
</svg></span>
                                    </li>
                                    <li className="sort-item sort-ff-rating asc ">
                                        <p tabIndex="0" data-toggle="popover" data-content="<p class=&quot;bold mb-0&quot;>
                                                    Friends &amp; Family Rating
                                                </p>
                                                <p>
                                                    The percentage of people who would recommend this hospital to their friends and family.
                                                </p>" data-trigger="hover" data-placement="top" data-html="true"
                                           data-original-title="" title="">Friends &amp;<br/>Family Rating</p>
                                        <span title="Sort by this column" className="sort-arrow sort-ff-rating asc"><svg
                                            className="" xmlns="http://www.w3.org/2000/svg" width="18" height="11"
                                            viewBox="0 0 18 11">
    <g>
        <g>
            <path
                d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>
        </g>
    </g>
</svg></span>
                                    </li>
                                    <li>
                                        <p tabIndex="0" data-toggle="popover" data-content="<p class=&quot;bold mb-0&quot;>
                                                    NHS Funded Work
                                                </p>
                                                <p>
                                                    A tick signifies the hospital provides NHS funded treatments.
                                                </p>" data-trigger="hover" data-placement="top" data-html="true"
                                           data-original-title="" title="">NHS<br/>Funded Work</p>


                                    </li>
                                    <li>
                                        <p tabIndex="0" data-toggle="popover" data-content="<p class=&quot;bold mb-0&quot;>
                                                    Private Self Pay
                                                </p>
                                                <p>
                                                    Indicates whether a hospital location provides Private, Self Pay services. In many instances, your local NHS hospital will also offer private treatment.
                                                </p>" data-trigger="hover" data-placement="top" data-html="true"
                                           data-original-title="" title="">Private<br/>Self Pay</p>


                                    </li>
                                </ul>
                            </div>
                            <div
                                className="sort-section section-3 d-flex justify-content-end align-items-center mt-2 mt-lg-0">
                                <div className="select-parent mr-3 d-none align-items-center">
                                    <div className="select-wrapper position-relative ">
                                        <select className="select-sort-by SofiaPro-Medium font-16 form-control"
                                                id="sort_by_select" data-live-search="" name="sort_by">
                                            <option name="Default sorting" id="sort_by_0" value="0" className="">
                                                Default sorting
                                            </option>
                                            <option name="Distance" id="sort_by_1" value="1" className="">
                                                Distance
                                            </option>
                                            <option name="Distance" id="sort_by_2" value="2" className="d-none">
                                                Distance
                                            </option>
                                            <option name="Waiting time" id="sort_by_3" value="3" className="d-none">
                                                Waiting time
                                            </option>
                                            <option name="Waiting time" id="sort_by_4" value="4" className="">
                                                Waiting time
                                            </option>
                                            <option name="User Rating" id="sort_by_5" value="5" className="d-none">
                                                User Rating
                                            </option>
                                            <option name="User Rating" id="sort_by_6" value="6" className="">
                                                User Rating
                                            </option>
                                            <option name="Operations Cancelled" id="sort_by_7" value="7"
                                                    className="d-none">
                                                Operations Cancelled
                                            </option>
                                            <option name="Operations Cancelled" id="sort_by_8" value="8" className="">
                                                Operations Cancelled
                                            </option>
                                            <option name="Care Quality Rating" id="sort_by_9" value="9"
                                                    className="d-none">
                                                Care Quality Rating
                                            </option>
                                            <option name="Care Quality Rating" id="sort_by_10" value="10" className="">
                                                Care Quality Rating
                                            </option>
                                            <option name="F&amp;F Rating" id="sort_by_11" value="11" className="d-none">
                                                F&amp;F Rating
                                            </option>
                                            <option name="F&amp;F Rating" id="sort_by_12" value="12" className="">
                                                F&amp;F Rating
                                            </option>
                                        </select>
                                        <svg className="position-absolute v-c" xmlns="http://www.w3.org/2000/svg"
                                             width="18" height="11" viewBox="0 0 18 11">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <button
                                    id="show_filters"
                                    className="btn btn-grey btn-icon btn-arrow-down font-14 py-2 pl-3 mr-3 w-100"
                                    role="button">
                                    <span>Filters</span>
                                    <svg className="" xmlns="http://www.w3.org/2000/svg" width="18" height="11"
                                         viewBox="0 0 18 11">
                                        <g>
                                            <g>
                                                <path fill="#fff"
                                                      d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </button>

                                <div id="open_shortlist"
                                     className="compare-button-title d-flex align-items-center h-100 ml-auto pulse-animation shortlist-has-items">
                                    <div className="svg-wrapper">
                                        <svg className="compare-heart" height="30" width="30" id="compare_heart"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                            <path id="outer-circle" fill="transparent" strokeWidth="1" stroke="#757575"
                                                  d="M15 1c7.7 0 14 6.3 14 14s-6.3 14-14 14S1 22.7 1 15 7.3 1 15 1z"></path>
                                            <g>
                                                <path id="wishlist" fill="transparent" strokeWidth="1" stroke="#757575"
                                                      d="M18.8 8c-1.3 0-2.6.7-3.3 1.8-.2.2-.3.5-.4.7-.1-.2-.3-.5-.4-.7-.7-1.1-2-1.8-3.3-1.8-2.6.1-4.4 2-4.4 4.4v.1c0 2.8 2.3 4.7 5.7 7.7.6.6 1.3 1.1 1.9 1.7.1.1.3.1.4.1.1 0 .2 0 .3-.1l2.1-1.8c3.2-2.7 5.6-4.7 5.6-7.6.1-2.4-1.7-4.4-4.1-4.6l-.1.1z"></path>
                                            </g>
                                        </svg>
                                        <span id="compare_number" className="col-white">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/*<div className="filter-parent ">*/}
                {/*    <div className="filter container">*/}
                {/*        <div className="postcode-radius row">*/}
                {/*            <div className="postcode-radius-child procedures col-12 col-md-3 d-flex align-items-center">*/}
                {/*                <div className="select-parent w-100">*/}
                {/*                    <div className="select-wrapper position-relative ">*/}
                {/*                        <div*/}
                {/*                            className="dropdown bootstrap-select select-picker highlight-search-dropdown form-control">*/}
                {/*                            <select className="select-picker highlight-search-dropdown form-control"*/}
                {/*                                    id="resultspage_treatment_dropdown" data-live-search="true"*/}
                {/*                                    name="procedure_id" tabIndex="-98">*/}
                {/*                                <option name="Choose your treatment (if known)"*/}
                {/*                                        id="group_procedure_id_0" value="0" className=""*/}
                {/*                                        disabled="disabled" hidden="hidden">*/}
                {/*                                    Choose your treatment (if known)*/}
                {/*                                </option>*/}
                {/*                                <option name="Not Known" id="group_procedure_id_-1" value="-1"*/}
                {/*                                        className="">*/}
                {/*                                    Not Known*/}
                {/*                                </option>*/}
                {/*                                <option name="Bariatrics" id="group_procedure_id_21" value="21"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Bariatrics*/}
                {/*                                </option>*/}
                {/*                                <option name="Weight Loss  (General/Other)" id="procedure_id_596"*/}
                {/*                                        value="596" className="suboption subprocedures">*/}
                {/*                                    Weight Loss (General/Other)*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardiology" id="group_procedure_id_14" value="14"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Cardiology*/}
                {/*                                </option>*/}
                {/*                                <option name="Ambulatory blood pressure recording" id="procedure_id_2"*/}
                {/*                                        value="2" className="suboption subprocedures">*/}
                {/*                                    Ambulatory blood pressure recording*/}
                {/*                                </option>*/}
                {/*                                <option name="Ambulatory ECG" id="procedure_id_3" value="3"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ambulatory ECG*/}
                {/*                                </option>*/}
                {/*                                <option name="Angioplasty" id="procedure_id_4" value="4"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Angioplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Atrial Fibrillation AF Ablation" id="procedure_id_5"*/}
                {/*                                        value="5" className="suboption subprocedures">*/}
                {/*                                    Atrial Fibrillation AF Ablation*/}
                {/*                                </option>*/}
                {/*                                <option name="Balloon sinuplasty" id="procedure_id_6" value="6"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Balloon sinuplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Blood pressure test" id="procedure_id_7" value="7"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Blood pressure test*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardiac catheterisation" id="procedure_id_8" value="8"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cardiac catheterisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardiac stress testing" id="procedure_id_9" value="9"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cardiac stress testing*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardio Pulmonary Exercise Test CPET" id="procedure_id_10"*/}
                {/*                                        value="10" className="suboption subprocedures">*/}
                {/*                                    Cardio Pulmonary Exercise Test CPET*/}
                {/*                                </option>*/}
                {/*                                <option name="Contrast echocardiography" id="procedure_id_11" value="11"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Contrast echocardiography*/}
                {/*                                </option>*/}
                {/*                                <option name="Coronary angiography" id="procedure_id_12" value="12"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Coronary angiography*/}
                {/*                                </option>*/}
                {/*                                <option name="Coronary artery bypass" id="procedure_id_13" value="13"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Coronary artery bypass*/}
                {/*                                </option>*/}
                {/*                                <option name="CT coronary angiography" id="procedure_id_14" value="14"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    CT coronary angiography*/}
                {/*                                </option>*/}
                {/*                                <option name="ECG, electrocardiogram" id="procedure_id_15" value="15"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    ECG, electrocardiogram*/}
                {/*                                </option>*/}
                {/*                                <option name="Echocardiogram" id="procedure_id_16" value="16"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Echocardiogram*/}
                {/*                                </option>*/}
                {/*                                <option name="Endovascular aortic aneurysm repair EVAR"*/}
                {/*                                        id="procedure_id_17" value="17"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Endovascular aortic aneurysm repair EVAR*/}
                {/*                                </option>*/}
                {/*                                <option name="Heart" id="procedure_id_1" value="1"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Heart*/}
                {/*                                </option>*/}
                {/*                                <option name="Internal cardiac defibrillator implantation"*/}
                {/*                                        id="procedure_id_18" value="18"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Internal cardiac defibrillator implantation*/}
                {/*                                </option>*/}
                {/*                                <option name="Mitral valve surgery" id="procedure_id_19" value="19"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Mitral valve surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Myocardial perfusion imaging" id="procedure_id_20"*/}
                {/*                                        value="20" className="suboption subprocedures">*/}
                {/*                                    Myocardial perfusion imaging*/}
                {/*                                </option>*/}
                {/*                                <option name="Pacemaker (insertion, removal or attention)"*/}
                {/*                                        id="procedure_id_21" value="21"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Pacemaker (insertion, removal or attention)*/}
                {/*                                </option>*/}
                {/*                                <option name="Pacemaker implantation" id="procedure_id_22" value="22"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Pacemaker implantation*/}
                {/*                                </option>*/}
                {/*                                <option name="PTCA (angioplasty)" id="procedure_id_23" value="23"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    PTCA (angioplasty)*/}
                {/*                                </option>*/}
                {/*                                <option name="Stress echocardiogram" id="procedure_id_24" value="24"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Stress echocardiogram*/}
                {/*                                </option>*/}
                {/*                                <option name="TAVI (Aortic valve replacement)" id="procedure_id_25"*/}
                {/*                                        value="25" className="suboption subprocedures">*/}
                {/*                                    TAVI (Aortic valve replacement)*/}
                {/*                                </option>*/}
                {/*                                <option name="Transoesophageal echocardiography" id="procedure_id_26"*/}
                {/*                                        value="26" className="suboption subprocedures">*/}
                {/*                                    Transoesophageal echocardiography*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardiothoracic Surgery" id="group_procedure_id_11"*/}
                {/*                                        value="11" disabled="" className="">*/}
                {/*                                    Cardiothoracic Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Aortic aneurysm repair" id="procedure_id_41" value="41"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Aortic aneurysm repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Aortic root replacement" id="procedure_id_27" value="27"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Aortic root replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Aortic valve replacement" id="procedure_id_28" value="28"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Aortic valve replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Bronchoscopy" id="procedure_id_34" value="34"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bronchoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardiac surgery - aortic valve repair / replacement"*/}
                {/*                                        id="procedure_id_29" value="29"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cardiac surgery - aortic valve repair / replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardiac surgery - mitral valve repair / replacement"*/}
                {/*                                        id="procedure_id_30" value="30"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cardiac surgery - mitral valve repair / replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardiac surgery (coronary artery bypass graft - CABG)"*/}
                {/*                                        id="procedure_id_31" value="31"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cardiac surgery (coronary artery bypass graft - CABG)*/}
                {/*                                </option>*/}
                {/*                                <option name="Cardioversion" id="procedure_id_32" value="32"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cardioversion*/}
                {/*                                </option>*/}
                {/*                                <option name="Lung biopsy" id="procedure_id_35" value="35"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lung biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Lung Cancer" id="procedure_id_36" value="36"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lung Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Lung function testing" id="procedure_id_37" value="37"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lung function testing*/}
                {/*                                </option>*/}
                {/*                                <option name="Lungs" id="procedure_id_33" value="33"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lungs*/}
                {/*                                </option>*/}
                {/*                                <option name="Pleural biopsy and drainage" id="procedure_id_38"*/}
                {/*                                        value="38" className="suboption subprocedures">*/}
                {/*                                    Pleural biopsy and drainage*/}
                {/*                                </option>*/}
                {/*                                <option name="Thoracoscopy" id="procedure_id_39" value="39"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Thoracoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Transbronchial biopsy" id="procedure_id_40" value="40"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Transbronchial biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Dermatology" id="group_procedure_id_15" value="15"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Dermatology*/}
                {/*                                </option>*/}
                {/*                                <option name="Excess sweating of the feet hyperhidrosis"*/}
                {/*                                        id="procedure_id_43" value="43"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Excess sweating of the feet hyperhidrosis*/}
                {/*                                </option>*/}
                {/*                                <option name="Excision of a Ganglion" id="procedure_id_44" value="44"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Excision of a Ganglion*/}
                {/*                                </option>*/}
                {/*                                <option name="Pilonidal sinus removal" id="procedure_id_45" value="45"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Pilonidal sinus removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Skin" id="procedure_id_42" value="42"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Skin*/}
                {/*                                </option>*/}
                {/*                                <option name="Skin lesion removal" id="procedure_id_46" value="46"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Skin lesion removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Varicose Veins Surgery" id="procedure_id_47" value="47"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Varicose Veins Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Ear, Nose &amp; Throat (ENT)" id="group_procedure_id_6"*/}
                {/*                                        value="6" disabled="" className="">*/}
                {/*                                    Ear, Nose &amp; Throat (ENT)*/}
                {/*                                </option>*/}
                {/*                                <option name="Adenoidectomy" id="procedure_id_63" value="63"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Adenoidectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Audiology consultation" id="procedure_id_49" value="49"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Audiology consultation*/}
                {/*                                </option>*/}
                {/*                                <option name="Bonebridge ear implant" id="procedure_id_50" value="50"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bonebridge ear implant*/}
                {/*                                </option>*/}
                {/*                                <option name="Cholesteatoma surgery" id="procedure_id_51" value="51"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cholesteatoma surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Cochlear implants" id="procedure_id_52" value="52"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cochlear implants*/}
                {/*                                </option>*/}
                {/*                                <option name="Drainage of middle ear (insertion of grommets)"*/}
                {/*                                        id="procedure_id_53" value="53"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Drainage of middle ear (insertion of grommets)*/}
                {/*                                </option>*/}
                {/*                                <option name="Ear" id="procedure_id_48" value="48"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ear*/}
                {/*                                </option>*/}
                {/*                                <option name="Ear external lesion removal" id="procedure_id_54"*/}
                {/*                                        value="54" className="suboption subprocedures">*/}
                {/*                                    Ear external lesion removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Ear pinning (pinnaplasty)" id="procedure_id_55" value="55"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ear pinning (pinnaplasty)*/}
                {/*                                </option>*/}
                {/*                                <option name="Eardrum repair" id="procedure_id_56" value="56"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Eardrum repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Endoscopic sinus surgery" id="procedure_id_64" value="64"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Endoscopic sinus surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Grommets insertion (glue ear treatment)"*/}
                {/*                                        id="procedure_id_57" value="57"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Grommets insertion (glue ear treatment)*/}
                {/*                                </option>*/}
                {/*                                <option name="Laryngoscopy and pharyngoscopy" id="procedure_id_73"*/}
                {/*                                        value="73" className="suboption subprocedures">*/}
                {/*                                    Laryngoscopy and pharyngoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Myringoplasty" id="procedure_id_58" value="58"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Myringoplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Nasal polypectomy" id="procedure_id_65" value="65"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Nasal polypectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Nose" id="procedure_id_62" value="62"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Nose*/}
                {/*                                </option>*/}
                {/*                                <option name="Nose (turbinate) procedure" id="procedure_id_66"*/}
                {/*                                        value="66" className="suboption subprocedures">*/}
                {/*                                    Nose (turbinate) procedure*/}
                {/*                                </option>*/}
                {/*                                <option name="Nose diagnostic examination (endoscopy)"*/}
                {/*                                        id="procedure_id_67" value="67"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Nose diagnostic examination (endoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Nose removal of lesion" id="procedure_id_68" value="68"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Nose removal of lesion*/}
                {/*                                </option>*/}
                {/*                                <option name="Parathyroidectomy" id="procedure_id_74" value="74"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Parathyroidectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Parotid gland removal" id="procedure_id_75" value="75"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Parotid gland removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Repair of oesophagus (for gastric reflux)"*/}
                {/*                                        id="procedure_id_76" value="76"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Repair of oesophagus (for gastric reflux)*/}
                {/*                                </option>*/}
                {/*                                <option name="Septoplasty and submucous resection" id="procedure_id_69"*/}
                {/*                                        value="69" className="suboption subprocedures">*/}
                {/*                                    Septoplasty and submucous resection*/}
                {/*                                </option>*/}
                {/*                                <option name="Septorhinoplasty with graft or implant"*/}
                {/*                                        id="procedure_id_70" value="70"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Septorhinoplasty with graft or implant*/}
                {/*                                </option>*/}
                {/*                                <option name="Sinus procedure" id="procedure_id_71" value="71"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sinus procedure*/}
                {/*                                </option>*/}
                {/*                                <option name="Stapedectomy" id="procedure_id_59" value="59"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Stapedectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Submandibular gland removal" id="procedure_id_77"*/}
                {/*                                        value="77" className="suboption subprocedures">*/}
                {/*                                    Submandibular gland removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Throat" id="procedure_id_72" value="72"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Throat*/}
                {/*                                </option>*/}
                {/*                                <option name="Thyroidectomy" id="procedure_id_78" value="78"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Thyroidectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Thyroidectomy for Goitre" id="procedure_id_79" value="79"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Thyroidectomy for Goitre*/}
                {/*                                </option>*/}
                {/*                                <option name="Thyroidectomy for Nodule" id="procedure_id_80" value="80"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Thyroidectomy for Nodule*/}
                {/*                                </option>*/}
                {/*                                <option name="Tinnitus Counselling" id="procedure_id_60" value="60"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Tinnitus Counselling*/}
                {/*                                </option>*/}
                {/*                                <option name="Tonsillectomy" id="procedure_id_81" value="81"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Tonsillectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Total thyroidectomy (for thyrotoxicosis)"*/}
                {/*                                        id="procedure_id_82" value="82"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Total thyroidectomy (for thyrotoxicosis)*/}
                {/*                                </option>*/}
                {/*                                <option name="Vibrant Soundbridge Middle Ear Implant"*/}
                {/*                                        id="procedure_id_61" value="61"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Vibrant Soundbridge Middle Ear Implant*/}
                {/*                                </option>*/}
                {/*                                <option name="Gastroenterology" id="group_procedure_id_13" value="13"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Gastroenterology*/}
                {/*                                </option>*/}
                {/*                                <option name="Anal fistula therapeutic procedure" id="procedure_id_83"*/}
                {/*                                        value="83" className="suboption subprocedures">*/}
                {/*                                    Anal fistula therapeutic procedure*/}
                {/*                                </option>*/}
                {/*                                <option name="Appendicectomy Surgery" id="procedure_id_87" value="87"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Appendicectomy Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Banded Gastric Band" id="procedure_id_136" value="136"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Banded Gastric Band*/}
                {/*                                </option>*/}
                {/*                                <option name="Banded Sleeve Gastrectomy" id="procedure_id_137"*/}
                {/*                                        value="137" className="suboption subprocedures">*/}
                {/*                                    Banded Sleeve Gastrectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Bowel Cancer" id="procedure_id_88" value="88"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bowel Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Bowel Cancer Screening" id="procedure_id_89" value="89"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bowel Cancer Screening*/}
                {/*                                </option>*/}
                {/*                                <option name="Bowel Cancer Surgery" id="procedure_id_90" value="90"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bowel Cancer Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Bowel therapeutic endoscopy (colonoscopy)"*/}
                {/*                                        id="procedure_id_91" value="91"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bowel therapeutic endoscopy (colonoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Bowel therapeutic endoscopy (sigmoidoscopy)"*/}
                {/*                                        id="procedure_id_92" value="92"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bowel therapeutic endoscopy (sigmoidoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Capsule endoscopy" id="procedure_id_93" value="93"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Capsule endoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Cholecystectomy and examination of Bile Duct"*/}
                {/*                                        id="procedure_id_109" value="109"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cholecystectomy and examination of Bile Duct*/}
                {/*                                </option>*/}
                {/*                                <option name="Cholecystectomy laparoscopic" id="procedure_id_110"*/}
                {/*                                        value="110" className="suboption subprocedures">*/}
                {/*                                    Cholecystectomy laparoscopic*/}
                {/*                                </option>*/}
                {/*                                <option name="Colonoscopy" id="procedure_id_94" value="94"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Colonoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Colorectal Treatment" id="procedure_id_95" value="95"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Colorectal Treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Colostomy closure of loop" id="procedure_id_96" value="96"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Colostomy closure of loop*/}
                {/*                                </option>*/}
                {/*                                <option*/}
                {/*                                    name="Diagnostic flexible sigmoidoscopy, includes forceps biopsy"*/}
                {/*                                    id="procedure_id_97" value="97" className="suboption subprocedures">*/}
                {/*                                    Diagnostic flexible sigmoidoscopy, includes forceps biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Digestive System (Lower)" id="procedure_id_86" value="86"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Digestive System (Lower)*/}
                {/*                                </option>*/}
                {/*                                <option name="Digestive System (Upper)" id="procedure_id_108"*/}
                {/*                                        value="108" className="suboption subprocedures">*/}
                {/*                                    Digestive System (Upper)*/}
                {/*                                </option>*/}
                {/*                                <option name="Duodenal Switch" id="procedure_id_98" value="98"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Duodenal Switch*/}
                {/*                                </option>*/}
                {/*                                <option name="Endoscopy" id="procedure_id_111" value="111"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Endoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="ERCP (Endoscopic Retrograde Cholangio-Pancreatography)"*/}
                {/*                                        id="procedure_id_112" value="112"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    ERCP (Endoscopic Retrograde Cholangio-Pancreatography)*/}
                {/*                                </option>*/}
                {/*                                <option name="Flexible sigmoidoscopy" id="procedure_id_99" value="99"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Flexible sigmoidoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Gallbladder / gallstone removal (cholecystectomy)"*/}
                {/*                                        id="procedure_id_113" value="113"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Gallbladder / gallstone removal (cholecystectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Gallbladder Cancer" id="procedure_id_114" value="114"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Gallbladder Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Gallbladder surgery (cholecystectomy)"*/}
                {/*                                        id="procedure_id_115" value="115"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Gallbladder surgery (cholecystectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Gastric band surgery" id="procedure_id_138" value="138"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Gastric band surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Gastric bypass surgery" id="procedure_id_139" value="139"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Gastric bypass surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Gastric sleeve sleeve gastrectomy" id="procedure_id_140"*/}
                {/*                                        value="140" className="suboption subprocedures">*/}
                {/*                                    Gastric sleeve sleeve gastrectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Gastroesophageal reflux surgery anti reflux surgery"*/}
                {/*                                        id="procedure_id_116" value="116"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Gastroesophageal reflux surgery anti reflux surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Gastroscopy (diagnostic endoscopy of stomach)"*/}
                {/*                                        id="procedure_id_117" value="117"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Gastroscopy (diagnostic endoscopy of stomach)*/}
                {/*                                </option>*/}
                {/*                                <option name="Haemorrhoid removal" id="procedure_id_100" value="100"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Haemorrhoid removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Haemorrhoid treatment" id="procedure_id_101" value="101"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Haemorrhoid treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Inserting an oesophageal stent endoscopy"*/}
                {/*                                        id="procedure_id_118" value="118"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Inserting an oesophageal stent endoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic bile duct exploration" id="procedure_id_119"*/}
                {/*                                        value="119" className="suboption subprocedures">*/}
                {/*                                    Laparoscopic bile duct exploration*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic Cholecystectomy" id="procedure_id_120"*/}
                {/*                                        value="120" className="suboption subprocedures">*/}
                {/*                                    Laparoscopic Cholecystectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic greater curvature plication LRCP"*/}
                {/*                                        id="procedure_id_141" value="141"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Laparoscopic greater curvature plication LRCP*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic ileoanal pouch surgery" id="procedure_id_121"*/}
                {/*                                        value="121" className="suboption subprocedures">*/}
                {/*                                    Laparoscopic ileoanal pouch surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic incisional hernia" id="procedure_id_122"*/}
                {/*                                        value="122" className="suboption subprocedures">*/}
                {/*                                    Laparoscopic incisional hernia*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic myomectomies" id="procedure_id_123"*/}
                {/*                                        value="123" className="suboption subprocedures">*/}
                {/*                                    Laparoscopic myomectomies*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic sterilisation" id="procedure_id_124"*/}
                {/*                                        value="124" className="suboption subprocedures">*/}
                {/*                                    Laparoscopic sterilisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopy" id="procedure_id_125" value="125"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Laparoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Nissen fundoplication laparoscopic" id="procedure_id_126"*/}
                {/*                                        value="126" className="suboption subprocedures">*/}
                {/*                                    Nissen fundoplication laparoscopic*/}
                {/*                                </option>*/}
                {/*                                <option name="Open Cholecystectomy" id="procedure_id_127" value="127"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Open Cholecystectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Pancreatic Cancer" id="procedure_id_128" value="128"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Pancreatic Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Percutaneous endoscopic gastrostomy PEG"*/}
                {/*                                        id="procedure_id_129" value="129"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Percutaneous endoscopic gastrostomy PEG*/}
                {/*                                </option>*/}
                {/*                                <option name="Pyloromyotomy" id="procedure_id_130" value="130"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Pyloromyotomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Rectal examination (under anaesthetic)"*/}
                {/*                                        id="procedure_id_102" value="102"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Rectal examination (under anaesthetic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Rectal prolapse repair (perineal)" id="procedure_id_103"*/}
                {/*                                        value="103" className="suboption subprocedures">*/}
                {/*                                    Rectal prolapse repair (perineal)*/}
                {/*                                </option>*/}
                {/*                                <option name="Rectum" id="procedure_id_135" value="135"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Rectum*/}
                {/*                                </option>*/}
                {/*                                <option name="Reversal of Hartmanns procedure" id="procedure_id_104"*/}
                {/*                                        value="104" className="suboption subprocedures">*/}
                {/*                                    Reversal of Hartmanns procedure*/}
                {/*                                </option>*/}
                {/*                                <option name="Revision surgery after primary bariatric consultation"*/}
                {/*                                        id="procedure_id_105" value="105"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Revision surgery after primary bariatric consultation*/}
                {/*                                </option>*/}
                {/*                                <option name="Sacral neurostimulation" id="procedure_id_106" value="106"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sacral neurostimulation*/}
                {/*                                </option>*/}
                {/*                                <option name="Sigmoid colectomy for diverticular disease"*/}
                {/*                                        id="procedure_id_84" value="84"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sigmoid colectomy for diverticular disease*/}
                {/*                                </option>*/}
                {/*                                <option name="Sigmoidoscopy" id="procedure_id_107" value="107"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sigmoidoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Sphincterotomy (Lateral Internal)" id="procedure_id_85"*/}
                {/*                                        value="85" className="suboption subprocedures">*/}
                {/*                                    Sphincterotomy (Lateral Internal)*/}
                {/*                                </option>*/}
                {/*                                <option name="Surgery to remove bile duct stones" id="procedure_id_131"*/}
                {/*                                        value="131" className="suboption subprocedures">*/}
                {/*                                    Surgery to remove bile duct stones*/}
                {/*                                </option>*/}
                {/*                                <option name="Surgery to remove gall bladder stones"*/}
                {/*                                        id="procedure_id_132" value="132"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Surgery to remove gall bladder stones*/}
                {/*                                </option>*/}
                {/*                                <option name="Upper GI endoscopy and dilatation" id="procedure_id_133"*/}
                {/*                                        value="133" className="suboption subprocedures">*/}
                {/*                                    Upper GI endoscopy and dilatation*/}
                {/*                                </option>*/}
                {/*                                <option name="Upper GI endoscopy gastroscopy" id="procedure_id_134"*/}
                {/*                                        value="134" className="suboption subprocedures">*/}
                {/*                                    Upper GI endoscopy gastroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Weight loss surgery (bypass operation)"*/}
                {/*                                        id="procedure_id_142" value="142"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Weight loss surgery (bypass operation)*/}
                {/*                                </option>*/}
                {/*                                <option name="Weight loss surgery (gastrectomy)" id="procedure_id_143"*/}
                {/*                                        value="143" className="suboption subprocedures">*/}
                {/*                                    Weight loss surgery (gastrectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Weight loss surgery (gastric balloon)"*/}
                {/*                                        id="procedure_id_144" value="144"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Weight loss surgery (gastric balloon)*/}
                {/*                                </option>*/}
                {/*                                <option name="Weight loss surgery (gastric band maintenance)"*/}
                {/*                                        id="procedure_id_145" value="145"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Weight loss surgery (gastric band maintenance)*/}
                {/*                                </option>*/}
                {/*                                <option name="Weight loss surgery (gastric banding)"*/}
                {/*                                        id="procedure_id_146" value="146"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Weight loss surgery (gastric banding)*/}
                {/*                                </option>*/}
                {/*                                <option name="Weight loss surgery (gastric stapling)"*/}
                {/*                                        id="procedure_id_147" value="147"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Weight loss surgery (gastric stapling)*/}
                {/*                                </option>*/}
                {/*                                <option name="General Medicine" id="group_procedure_id_12" value="12"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    General Medicine*/}
                {/*                                </option>*/}
                {/*                                <option name="Brain or Memory" id="procedure_id_148" value="148"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Brain or Memory*/}
                {/*                                </option>*/}
                {/*                                <option name="General Surgery" id="group_procedure_id_4" value="4"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    General Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Abdomen" id="procedure_id_152" value="152"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Abdomen*/}
                {/*                                </option>*/}
                {/*                                <option name="Abdominal adhesion surgery (endoscopic)"*/}
                {/*                                        id="procedure_id_179" value="179"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Abdominal adhesion surgery (endoscopic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Abdominal Aortic Aneurysm AAA Screening"*/}
                {/*                                        id="procedure_id_203" value="203"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Abdominal Aortic Aneurysm AAA Screening*/}
                {/*                                </option>*/}
                {/*                                <option name="Abdominal surgery for Crohns Disease"*/}
                {/*                                        id="procedure_id_180" value="180"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Abdominal surgery for Crohns Disease*/}
                {/*                                </option>*/}
                {/*                                <option name="Abdominal wall reconstruction" id="procedure_id_181"*/}
                {/*                                        value="181" className="suboption subprocedures">*/}
                {/*                                    Abdominal wall reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Abnormal Liver Function tests LFTs" id="procedure_id_188"*/}
                {/*                                        value="188" className="suboption subprocedures">*/}
                {/*                                    Abnormal Liver Function tests LFTs*/}
                {/*                                </option>*/}
                {/*                                <option name="Abnormal liver imaging" id="procedure_id_189" value="189"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Abnormal liver imaging*/}
                {/*                                </option>*/}
                {/*                                <option name="Abscess Incision and Drainage" id="procedure_id_178"*/}
                {/*                                        value="178" className="suboption subprocedures">*/}
                {/*                                    Abscess Incision and Drainage*/}
                {/*                                </option>*/}
                {/*                                <option name="Alcoholic liver disease" id="procedure_id_190" value="190"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Alcoholic liver disease*/}
                {/*                                </option>*/}
                {/*                                <option name="Anal lesion removal" id="procedure_id_176" value="176"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Anal lesion removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Appendicectomy" id="procedure_id_170" value="170"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Appendicectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Apronectomy (abdominolipectomy)" id="procedure_id_150"*/}
                {/*                                        value="150" className="suboption subprocedures">*/}
                {/*                                    Apronectomy (abdominolipectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast" id="procedure_id_182" value="182"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast*/}
                {/*                                </option>*/}
                {/*                                <option name="Diagnostic Laparoscopy" id="procedure_id_200" value="200"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Diagnostic Laparoscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Diagnostic laparoscopy and dye test" id="procedure_id_201"*/}
                {/*                                        value="201" className="suboption subprocedures">*/}
                {/*                                    Diagnostic laparoscopy and dye test*/}
                {/*                                </option>*/}
                {/*                                <option name="Endovenous laser therapy EVLT" id="procedure_id_204"*/}
                {/*                                        value="204" className="suboption subprocedures">*/}
                {/*                                    Endovenous laser therapy EVLT*/}
                {/*                                </option>*/}
                {/*                                <option name="Epidural anaesthetic" id="procedure_id_196" value="196"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Epidural anaesthetic*/}
                {/*                                </option>*/}
                {/*                                <option name="Epidural injection" id="procedure_id_197" value="197"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Epidural injection*/}
                {/*                                </option>*/}
                {/*                                <option name="Epigastric hernia repair" id="procedure_id_153"*/}
                {/*                                        value="153" className="suboption subprocedures">*/}
                {/*                                    Epigastric hernia repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Face" id="procedure_id_183" value="183"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Face*/}
                {/*                                </option>*/}
                {/*                                <option name="Femoral hernia repair" id="procedure_id_154" value="154"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Femoral hernia repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Femoro popliteal bypass surgery" id="procedure_id_205"*/}
                {/*                                        value="205" className="suboption subprocedures">*/}
                {/*                                    Femoro popliteal bypass surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Ganglion excision" id="procedure_id_171" value="171"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ganglion excision*/}
                {/*                                </option>*/}
                {/*                                <option name="Hernia Repair (Femoral)" id="procedure_id_155" value="155"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hernia Repair (Femoral)*/}
                {/*                                </option>*/}
                {/*                                <option name="Hernia Repair (Open Incisional)" id="procedure_id_156"*/}
                {/*                                        value="156" className="suboption subprocedures">*/}
                {/*                                    Hernia Repair (Open Incisional)*/}
                {/*                                </option>*/}
                {/*                                <option name="Hernia Repair (Open Inguinal)" id="procedure_id_157"*/}
                {/*                                        value="157" className="suboption subprocedures">*/}
                {/*                                    Hernia Repair (Open Inguinal)*/}
                {/*                                </option>*/}
                {/*                                <option name="Hernia Repair (Paraumbilical and umbilical)"*/}
                {/*                                        id="procedure_id_158" value="158"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hernia Repair (Paraumbilical and umbilical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Hernia surgery" id="procedure_id_159" value="159"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hernia surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Hiatus hernia repair" id="procedure_id_160" value="160"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hiatus hernia repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Incisional hernia repair" id="procedure_id_161"*/}
                {/*                                        value="161" className="suboption subprocedures">*/}
                {/*                                    Incisional hernia repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Ingrown toe nails" id="procedure_id_175" value="175"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ingrown toe nails*/}
                {/*                                </option>*/}
                {/*                                <option name="Kidney removal (nephrectomy)" id="procedure_id_191"*/}
                {/*                                        value="191" className="suboption subprocedures">*/}
                {/*                                    Kidney removal (nephrectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Kidney stone treatment (endoscopy)" id="procedure_id_192"*/}
                {/*                                        value="192" className="suboption subprocedures">*/}
                {/*                                    Kidney stone treatment (endoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Kidney stone treatment (ultrasound)" id="procedure_id_193"*/}
                {/*                                        value="193" className="suboption subprocedures">*/}
                {/*                                    Kidney stone treatment (ultrasound)*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic inguinal hernia repair (TAPP)"*/}
                {/*                                        id="procedure_id_162" value="162"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Laparoscopic inguinal hernia repair (TAPP)*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic inguinal hernia repair (TEP)"*/}
                {/*                                        id="procedure_id_163" value="163"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Laparoscopic inguinal hernia repair (TEP)*/}
                {/*                                </option>*/}
                {/*                                <option name="Laparoscopic Nissen Fundoplication" id="procedure_id_164"*/}
                {/*                                        value="164" className="suboption subprocedures">*/}
                {/*                                    Laparoscopic Nissen Fundoplication*/}
                {/*                                </option>*/}
                {/*                                <option name="Liver biopsy" id="procedure_id_194" value="194"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Liver biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Lymph Node" id="procedure_id_184" value="184"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lymph Node*/}
                {/*                                </option>*/}
                {/*                                <option name="Lymph node biopsy" id="procedure_id_185" value="185"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lymph node biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Lymph node transfer" id="procedure_id_186" value="186"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lymph node transfer*/}
                {/*                                </option>*/}
                {/*                                <option name="Minimal access thyroid surgery" id="procedure_id_199"*/}
                {/*                                        value="199" className="suboption subprocedures">*/}
                {/*                                    Minimal access thyroid surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Minimally Invasive Spinal Surgery MISS"*/}
                {/*                                        id="procedure_id_198" value="198"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Minimally Invasive Spinal Surgery MISS*/}
                {/*                                </option>*/}
                {/*                                <option name="Open incisional hernia repair" id="procedure_id_165"*/}
                {/*                                        value="165" className="suboption subprocedures">*/}
                {/*                                    Open incisional hernia repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Renal (Liver, Kidneys etc)" id="procedure_id_195"*/}
                {/*                                        value="195" className="suboption subprocedures">*/}
                {/*                                    Renal (Liver, Kidneys etc)*/}
                {/*                                </option>*/}
                {/*                                <option name="Repair of inguinal hernia" id="procedure_id_166"*/}
                {/*                                        value="166" className="suboption subprocedures">*/}
                {/*                                    Repair of inguinal hernia*/}
                {/*                                </option>*/}
                {/*                                <option name="Repair of inguinal hernia - keyhole" id="procedure_id_167"*/}
                {/*                                        value="167" className="suboption subprocedures">*/}
                {/*                                    Repair of inguinal hernia - keyhole*/}
                {/*                                </option>*/}
                {/*                                <option name="Repair of inguinal hernia (recurrent)"*/}
                {/*                                        id="procedure_id_168" value="168"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Repair of inguinal hernia (recurrent)*/}
                {/*                                </option>*/}
                {/*                                <option name="Sports hernia repair" id="procedure_id_169" value="169"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sports hernia repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Surgery - Skin or Muscle (General/Other)"*/}
                {/*                                        id="procedure_id_187" value="187"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Surgery - Skin or Muscle (General/Other)*/}
                {/*                                </option>*/}
                {/*                                <option name="Surgery for Anal Fistula" id="procedure_id_177"*/}
                {/*                                        value="177" className="suboption subprocedures">*/}
                {/*                                    Surgery for Anal Fistula*/}
                {/*                                </option>*/}
                {/*                                <option name="Surgery to remove the appendix" id="procedure_id_172"*/}
                {/*                                        value="172" className="suboption subprocedures">*/}
                {/*                                    Surgery to remove the appendix*/}
                {/*                                </option>*/}
                {/*                                <option name="Tummy tuck (abdominoplasty)" id="procedure_id_151"*/}
                {/*                                        value="151" className="suboption subprocedures">*/}
                {/*                                    Tummy tuck (abdominoplasty)*/}
                {/*                                </option>*/}
                {/*                                <option name="Umbilical hernia repair" id="procedure_id_173" value="173"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Umbilical hernia repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Vascular" id="procedure_id_202" value="202"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Vascular*/}
                {/*                                </option>*/}
                {/*                                <option name="Ventral hernia repair" id="procedure_id_174" value="174"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ventral hernia repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Geriatric Medicine" id="group_procedure_id_19" value="19"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Geriatric Medicine*/}
                {/*                                </option>*/}
                {/*                                <option name="Dementia" id="procedure_id_206" value="206"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Dementia*/}
                {/*                                </option>*/}
                {/*                                <option name="Memory Problems Assessment and Treatment"*/}
                {/*                                        id="procedure_id_149" value="149"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Memory Problems Assessment and Treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Gynaecology" id="group_procedure_id_20" value="20"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Gynaecology*/}
                {/*                                </option>*/}
                {/*                                <option name="3D 4D scan" id="procedure_id_225" value="225"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    3D 4D scan*/}
                {/*                                </option>*/}
                {/*                                <option name="Anterior repair" id="procedure_id_217" value="217"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Anterior repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Cervical Cancer" id="procedure_id_209" value="209"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cervical Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Cervical Cancer Fertility Sparing Treatment"*/}
                {/*                                        id="procedure_id_210" value="210"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cervical Cancer Fertility Sparing Treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Cervical Cancer Laparoscopic Radical Hysterectomy"*/}
                {/*                                        id="procedure_id_211" value="211"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cervical Cancer Laparoscopic Radical Hysterectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Cervical cerclage" id="procedure_id_212" value="212"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cervical cerclage*/}
                {/*                                </option>*/}
                {/*                                <option name="Cervix" id="procedure_id_213" value="213"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cervix*/}
                {/*                                </option>*/}
                {/*                                <option name="Cervix lesion cauterisation" id="procedure_id_214"*/}
                {/*                                        value="214" className="suboption subprocedures">*/}
                {/*                                    Cervix lesion cauterisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Colposcopy" id="procedure_id_215" value="215"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Colposcopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Cycle monitoring" id="procedure_id_226" value="226"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cycle monitoring*/}
                {/*                                </option>*/}
                {/*                                <option name="Diagnostic hysteroscopy (examination of the uterus)"*/}
                {/*                                        id="procedure_id_248" value="248"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Diagnostic hysteroscopy (examination of the uterus)*/}
                {/*                                </option>*/}
                {/*                                <option name="Dilatation and curettage (D&amp;C)" id="procedure_id_249"*/}
                {/*                                        value="249" className="suboption subprocedures">*/}
                {/*                                    Dilatation and curettage (D&amp;C)*/}
                {/*                                </option>*/}
                {/*                                <option name="Donor insemination" id="procedure_id_227" value="227"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Donor insemination*/}
                {/*                                </option>*/}
                {/*                                <option name="Early pregnancy and dating scan" id="procedure_id_228"*/}
                {/*                                        value="228" className="suboption subprocedures">*/}
                {/*                                    Early pregnancy and dating scan*/}
                {/*                                </option>*/}
                {/*                                <option name="Egg collection and transfer" id="procedure_id_229"*/}
                {/*                                        value="229" className="suboption subprocedures">*/}
                {/*                                    Egg collection and transfer*/}
                {/*                                </option>*/}
                {/*                                <option name="Egg donation" id="procedure_id_230" value="230"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Egg donation*/}
                {/*                                </option>*/}
                {/*                                <option name="Egg freezing" id="procedure_id_231" value="231"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Egg freezing*/}
                {/*                                </option>*/}
                {/*                                <option name="Egg sharing" id="procedure_id_232" value="232"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Egg sharing*/}
                {/*                                </option>*/}
                {/*                                <option name="Embryo cryopreservation" id="procedure_id_233" value="233"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Embryo cryopreservation*/}
                {/*                                </option>*/}
                {/*                                <option name="Endometrial ablation" id="procedure_id_250" value="250"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Endometrial ablation*/}
                {/*                                </option>*/}
                {/*                                <option name="Fallopian tube and / or ovary removal"*/}
                {/*                                        id="procedure_id_244" value="244"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Fallopian tube and / or ovary removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Female Genitals" id="procedure_id_216" value="216"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Female Genitals*/}
                {/*                                </option>*/}
                {/*                                <option name="Fertility or Pregnancy" id="procedure_id_234" value="234"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Fertility or Pregnancy*/}
                {/*                                </option>*/}
                {/*                                <option name="Fibroid surgery (myomectomy)" id="procedure_id_251"*/}
                {/*                                        value="251" className="suboption subprocedures">*/}
                {/*                                    Fibroid surgery (myomectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Foetal anatomy anomaly scan" id="procedure_id_235"*/}
                {/*                                        value="235" className="suboption subprocedures">*/}
                {/*                                    Foetal anatomy anomaly scan*/}
                {/*                                </option>*/}
                {/*                                <option name="Frozen embryo replacement cycle" id="procedure_id_236"*/}
                {/*                                        value="236" className="suboption subprocedures">*/}
                {/*                                    Frozen embryo replacement cycle*/}
                {/*                                </option>*/}
                {/*                                <option name="Gynaecology consultation" id="procedure_id_239"*/}
                {/*                                        value="239" className="suboption subprocedures">*/}
                {/*                                    Gynaecology consultation*/}
                {/*                                </option>*/}
                {/*                                <option name="Hysterectomy - abdominal" id="procedure_id_252"*/}
                {/*                                        value="252" className="suboption subprocedures">*/}
                {/*                                    Hysterectomy - abdominal*/}
                {/*                                </option>*/}
                {/*                                <option name="Hysterectomy - keyhole" id="procedure_id_253" value="253"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hysterectomy - keyhole*/}
                {/*                                </option>*/}
                {/*                                <option name="Hysterectomy - keyhole vaginal" id="procedure_id_254"*/}
                {/*                                        value="254" className="suboption subprocedures">*/}
                {/*                                    Hysterectomy - keyhole vaginal*/}
                {/*                                </option>*/}
                {/*                                <option name="Hysterectomy - vaginal" id="procedure_id_255" value="255"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hysterectomy - vaginal*/}
                {/*                                </option>*/}
                {/*                                <option name="Hysteroscopy" id="procedure_id_256" value="256"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hysteroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="In vitro fertilisation IVF" id="procedure_id_237"*/}
                {/*                                        value="237" className="suboption subprocedures">*/}
                {/*                                    In vitro fertilisation IVF*/}
                {/*                                </option>*/}
                {/*                                <option name="Introduction of coil (IUD)" id="procedure_id_240"*/}
                {/*                                        value="240" className="suboption subprocedures">*/}
                {/*                                    Introduction of coil (IUD)*/}
                {/*                                </option>*/}
                {/*                                <option name="Labiaplasty" id="procedure_id_218" value="218"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Labiaplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Mammography" id="procedure_id_208" value="208"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Mammography*/}
                {/*                                </option>*/}
                {/*                                <option name="Other Gynaecology" id="procedure_id_241" value="241"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Other Gynaecology*/}
                {/*                                </option>*/}
                {/*                                <option name="Ovarian lesion treatment (laparoscopic)"*/}
                {/*                                        id="procedure_id_245" value="245"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ovarian lesion treatment (laparoscopic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Ovarian lesion treatment (open)" id="procedure_id_246"*/}
                {/*                                        value="246" className="suboption subprocedures">*/}
                {/*                                    Ovarian lesion treatment (open)*/}
                {/*                                </option>*/}
                {/*                                <option name="Ovary" id="procedure_id_243" value="243"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ovary*/}
                {/*                                </option>*/}
                {/*                                <option name="Posterior repair" id="procedure_id_219" value="219"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Posterior repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Removal of coil (IUD)" id="procedure_id_242" value="242"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Removal of coil (IUD)*/}
                {/*                                </option>*/}
                {/*                                <option name="Removal of products of conception (RPOC)"*/}
                {/*                                        id="procedure_id_220" value="220"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Removal of products of conception (RPOC)*/}
                {/*                                </option>*/}
                {/*                                <option name="Repair of prolapsed vagina" id="procedure_id_221"*/}
                {/*                                        value="221" className="suboption subprocedures">*/}
                {/*                                    Repair of prolapsed vagina*/}
                {/*                                </option>*/}
                {/*                                <option name="Reversal of Sterilisation" id="procedure_id_238"*/}
                {/*                                        value="238" className="suboption subprocedures">*/}
                {/*                                    Reversal of Sterilisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Sacrospinous Fixation SSF" id="procedure_id_222"*/}
                {/*                                        value="222" className="suboption subprocedures">*/}
                {/*                                    Sacrospinous Fixation SSF*/}
                {/*                                </option>*/}
                {/*                                <option name="Stress incontinence surgery (female)"*/}
                {/*                                        id="procedure_id_207" value="207"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Stress incontinence surgery (female)*/}
                {/*                                </option>*/}
                {/*                                <option name="Total laparoscopic hysterectomy" id="procedure_id_257"*/}
                {/*                                        value="257" className="suboption subprocedures">*/}
                {/*                                    Total laparoscopic hysterectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Uterine cancer condition" id="procedure_id_258"*/}
                {/*                                        value="258" className="suboption subprocedures">*/}
                {/*                                    Uterine cancer condition*/}
                {/*                                </option>*/}
                {/*                                <option name="Uterus " id="procedure_id_247" value="247"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Uterus*/}
                {/*                                </option>*/}
                {/*                                <option name="Vaginal repair operation" id="procedure_id_223"*/}
                {/*                                        value="223" className="suboption subprocedures">*/}
                {/*                                    Vaginal repair operation*/}
                {/*                                </option>*/}
                {/*                                <option name="Vulvectomy" id="procedure_id_224" value="224"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Vulvectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Neurology" id="group_procedure_id_17" value="17"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Neurology*/}
                {/*                                </option>*/}
                {/*                                <option name="Nervous System" id="procedure_id_259" value="259"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Nervous System*/}
                {/*                                </option>*/}
                {/*                                <option name="Neurosurgery" id="group_procedure_id_9" value="9"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Neurosurgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Craniotomy Brain Surgery" id="procedure_id_260"*/}
                {/*                                        value="260" className="suboption subprocedures">*/}
                {/*                                    Craniotomy Brain Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Neuropsychological testing" id="procedure_id_261"*/}
                {/*                                        value="261" className="suboption subprocedures">*/}
                {/*                                    Neuropsychological testing*/}
                {/*                                </option>*/}
                {/*                                <option name="Ophthalmology" id="group_procedure_id_7" value="7"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Ophthalmology*/}
                {/*                                </option>*/}
                {/*                                <option name="Advanced laser vision correction" id="procedure_id_263"*/}
                {/*                                        value="263" className="suboption subprocedures">*/}
                {/*                                    Advanced laser vision correction*/}
                {/*                                </option>*/}
                {/*                                <option name="Age-related macular degeneration treatment"*/}
                {/*                                        id="procedure_id_264" value="264"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Age-related macular degeneration treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Cataract surgery" id="procedure_id_265" value="265"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cataract surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Cataract surgery assessment" id="procedure_id_266"*/}
                {/*                                        value="266" className="suboption subprocedures">*/}
                {/*                                    Cataract surgery assessment*/}
                {/*                                </option>*/}
                {/*                                <option name="Corneal transplant surgery" id="procedure_id_267"*/}
                {/*                                        value="267" className="suboption subprocedures">*/}
                {/*                                    Corneal transplant surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Correction of squint" id="procedure_id_268" value="268"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Correction of squint*/}
                {/*                                </option>*/}
                {/*                                <option name="Entropion and ectropion repair" id="procedure_id_269"*/}
                {/*                                        value="269" className="suboption subprocedures">*/}
                {/*                                    Entropion and ectropion repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Excimer laser surgery" id="procedure_id_270" value="270"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Excimer laser surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Eye" id="procedure_id_262" value="262"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Eye*/}
                {/*                                </option>*/}
                {/*                                <option name="Eye angiogram" id="procedure_id_271" value="271"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Eye angiogram*/}
                {/*                                </option>*/}
                {/*                                <option name="Eye operations (vitreous body)" id="procedure_id_272"*/}
                {/*                                        value="272" className="suboption subprocedures">*/}
                {/*                                    Eye operations (vitreous body)*/}
                {/*                                </option>*/}
                {/*                                <option name="eyelid surgery, blepharoplasty" id="procedure_id_273"*/}
                {/*                                        value="273" className="suboption subprocedures">*/}
                {/*                                    eyelid surgery, blepharoplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Glaucoma surgery trabeculectomy" id="procedure_id_274"*/}
                {/*                                        value="274" className="suboption subprocedures">*/}
                {/*                                    Glaucoma surgery trabeculectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="IOL Vip system" id="procedure_id_275" value="275"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    IOL Vip system*/}
                {/*                                </option>*/}
                {/*                                <option name="Low vision aids" id="procedure_id_276" value="276"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Low vision aids*/}
                {/*                                </option>*/}
                {/*                                <option name="Low vision assessment" id="procedure_id_277" value="277"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Low vision assessment*/}
                {/*                                </option>*/}
                {/*                                <option name="Ophthalmic diagnostic testing" id="procedure_id_278"*/}
                {/*                                        value="278" className="suboption subprocedures">*/}
                {/*                                    Ophthalmic diagnostic testing*/}
                {/*                                </option>*/}
                {/*                                <option name="Ophthalmology consultation" id="procedure_id_279"*/}
                {/*                                        value="279" className="suboption subprocedures">*/}
                {/*                                    Ophthalmology consultation*/}
                {/*                                </option>*/}
                {/*                                <option name="Ptosis management" id="procedure_id_280" value="280"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ptosis management*/}
                {/*                                </option>*/}
                {/*                                <option name="Ptosis surgery" id="procedure_id_281" value="281"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ptosis surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Refraction and low vision assessment"*/}
                {/*                                        id="procedure_id_282" value="282"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Refraction and low vision assessment*/}
                {/*                                </option>*/}
                {/*                                <option name="Retinal detachment surgery" id="procedure_id_283"*/}
                {/*                                        value="283" className="suboption subprocedures">*/}
                {/*                                    Retinal detachment surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Squint Surgery" id="procedure_id_284" value="284"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Squint Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Oral Surgery" id="group_procedure_id_8" value="8"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Oral Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Extraction of wisdom teeth" id="procedure_id_288"*/}
                {/*                                        value="288" className="suboption subprocedures">*/}
                {/*                                    Extraction of wisdom teeth*/}
                {/*                                </option>*/}
                {/*                                <option name="Implantation of tooth" id="procedure_id_289" value="289"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Implantation of tooth*/}
                {/*                                </option>*/}
                {/*                                <option name="Investigation and treatment of oral ulcers"*/}
                {/*                                        id="procedure_id_290" value="290"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Investigation and treatment of oral ulcers*/}
                {/*                                </option>*/}
                {/*                                <option name="Larynx diagnostic examination (endoscopy)"*/}
                {/*                                        id="procedure_id_295" value="295"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Larynx diagnostic examination (endoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Larynx therapeutic procedure (endoscopy)"*/}
                {/*                                        id="procedure_id_296" value="296"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Larynx therapeutic procedure (endoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Mouth or Teeth" id="procedure_id_291" value="291"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Mouth or Teeth*/}
                {/*                                </option>*/}
                {/*                                <option name="Removal of facial skin lesions" id="procedure_id_285"*/}
                {/*                                        value="285" className="suboption subprocedures">*/}
                {/*                                    Removal of facial skin lesions*/}
                {/*                                </option>*/}
                {/*                                <option name="Removal of lumps of the salivary glands"*/}
                {/*                                        id="procedure_id_286" value="286"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Removal of lumps of the salivary glands*/}
                {/*                                </option>*/}
                {/*                                <option name="Removing teeth" id="procedure_id_292" value="292"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Removing teeth*/}
                {/*                                </option>*/}
                {/*                                <option name="Salivary gland excision" id="procedure_id_293" value="293"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Salivary gland excision*/}
                {/*                                </option>*/}
                {/*                                <option name="Temporomandibular joint management TMJ"*/}
                {/*                                        id="procedure_id_287" value="287"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Temporomandibular joint management TMJ*/}
                {/*                                </option>*/}
                {/*                                <option name="Tooth or teeth extraction (excluding wisdom teeth)"*/}
                {/*                                        id="procedure_id_294" value="294"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Tooth or teeth extraction (excluding wisdom teeth)*/}
                {/*                                </option>*/}
                {/*                                <option name="Other" id="group_procedure_id_3" value="3" disabled=""*/}
                {/*                                        className="">*/}
                {/*                                    Other*/}
                {/*                                </option>*/}
                {/*                                <option name="Intra cytoplasmic sperm injection ICSI"*/}
                {/*                                        id="procedure_id_298" value="298"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Intra cytoplasmic sperm injection ICSI*/}
                {/*                                </option>*/}
                {/*                                <option name="Intrauterine insemination" id="procedure_id_299"*/}
                {/*                                        value="299" className="suboption subprocedures">*/}
                {/*                                    Intrauterine insemination*/}
                {/*                                </option>*/}
                {/*                                <option name="Nuchal translucency scan" id="procedure_id_300"*/}
                {/*                                        value="300" className="suboption subprocedures">*/}
                {/*                                    Nuchal translucency scan*/}
                {/*                                </option>*/}
                {/*                                <option name="Open testicular biopsy with microsurgical techniques"*/}
                {/*                                        id="procedure_id_305" value="305"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Open testicular biopsy with microsurgical techniques*/}
                {/*                                </option>*/}
                {/*                                <option name="Ovarian Cancer" id="procedure_id_308" value="308"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ovarian Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Parental induction of ovulation" id="procedure_id_301"*/}
                {/*                                        value="301" className="suboption subprocedures">*/}
                {/*                                    Parental induction of ovulation*/}
                {/*                                </option>*/}
                {/*                                <option name="Prostate Cancer" id="procedure_id_309" value="309"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Prostate Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Prostate Cancer Prostate Mapping" id="procedure_id_310"*/}
                {/*                                        value="310" className="suboption subprocedures">*/}
                {/*                                    Prostate Cancer Prostate Mapping*/}
                {/*                                </option>*/}
                {/*                                <option name="Prostate Cancer Prostatectomy" id="procedure_id_311"*/}
                {/*                                        value="311" className="suboption subprocedures">*/}
                {/*                                    Prostate Cancer Prostatectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Sclerotherapy treatment" id="procedure_id_314" value="314"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sclerotherapy treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Sexing scan" id="procedure_id_302" value="302"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sexing scan*/}
                {/*                                </option>*/}
                {/*                                <option name="Sleep studies snoring clinic" id="procedure_id_307"*/}
                {/*                                        value="307" className="suboption subprocedures">*/}
                {/*                                    Sleep studies snoring clinic*/}
                {/*                                </option>*/}
                {/*                                <option name="Sperm freezing" id="procedure_id_303" value="303"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sperm freezing*/}
                {/*                                </option>*/}
                {/*                                <option name="Surgical sperm recovery" id="procedure_id_304" value="304"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Surgical sperm recovery*/}
                {/*                                </option>*/}
                {/*                                <option name="Testicular Cancer" id="procedure_id_306" value="306"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Testicular Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Uterine artery embolisation" id="procedure_id_312"*/}
                {/*                                        value="312" className="suboption subprocedures">*/}
                {/*                                    Uterine artery embolisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Varicose vein laser treatment" id="procedure_id_315"*/}
                {/*                                        value="315" className="suboption subprocedures">*/}
                {/*                                    Varicose vein laser treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Varicose veins treatment" id="procedure_id_316"*/}
                {/*                                        value="316" className="suboption subprocedures">*/}
                {/*                                    Varicose veins treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Verruca" id="procedure_id_297" value="297"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Verruca*/}
                {/*                                </option>*/}
                {/*                                <option name="Womb Cancer" id="procedure_id_313" value="313"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Womb Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Plastic Surgery" id="group_procedure_id_10" value="10"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Plastic Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast - nipple operation" id="procedure_id_321"*/}
                {/*                                        value="321" className="suboption subprocedures">*/}
                {/*                                    Breast - nipple operation*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast Cancer" id="procedure_id_322" value="322"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast Cancer Rapid Access Clinics symptomatic"*/}
                {/*                                        id="procedure_id_323" value="323"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast Cancer Rapid Access Clinics symptomatic*/}
                {/*                                </option>*/}
                {/*                                <option*/}
                {/*                                    name="Breast Cancer Single Dose Intraoperative Radiotherapy SD IORT"*/}
                {/*                                    id="procedure_id_324" value="324"*/}
                {/*                                    className="suboption subprocedures">*/}
                {/*                                    Breast Cancer Single Dose Intraoperative Radiotherapy SD IORT*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast duct surgery" id="procedure_id_325" value="325"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast duct surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast enlargement" id="procedure_id_326" value="326"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast enlargement*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast enlargement and breast augmentation"*/}
                {/*                                        id="procedure_id_327" value="327"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast enlargement and breast augmentation*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast lift" id="procedure_id_328" value="328"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast lift*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast prosthesis" id="procedure_id_329" value="329"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast prosthesis*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast reconstruction" id="procedure_id_330" value="330"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast reconstruction - pedicle" id="procedure_id_331"*/}
                {/*                                        value="331" className="suboption subprocedures">*/}
                {/*                                    Breast reconstruction - pedicle*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast reconstruction DIEP Flap" id="procedure_id_332"*/}
                {/*                                        value="332" className="suboption subprocedures">*/}
                {/*                                    Breast reconstruction DIEP Flap*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast reconstruction DIEP Flap with Lymph Node Transfer"*/}
                {/*                                        id="procedure_id_333" value="333"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast reconstruction DIEP Flap with Lymph Node Transfer*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast reconstruction TRAM Flap" id="procedure_id_334"*/}
                {/*                                        value="334" className="suboption subprocedures">*/}
                {/*                                    Breast reconstruction TRAM Flap*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast reconstruction with latissimus dorsi flap"*/}
                {/*                                        id="procedure_id_335" value="335"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast reconstruction with latissimus dorsi flap*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast reduction" id="procedure_id_336" value="336"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast reduction*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast reduction surgery breast reduction operation"*/}
                {/*                                        id="procedure_id_337" value="337"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast reduction surgery breast reduction operation*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast Screening asymptomatic" id="procedure_id_338"*/}
                {/*                                        value="338" className="suboption subprocedures">*/}
                {/*                                    Breast Screening asymptomatic*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast Surgery Excision Biopsy" id="procedure_id_339"*/}
                {/*                                        value="339" className="suboption subprocedures">*/}
                {/*                                    Breast Surgery Excision Biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast Surgery Lump Removal Lumpectomy"*/}
                {/*                                        id="procedure_id_340" value="340"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast Surgery Lump Removal Lumpectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast Surgery Mastectomy" id="procedure_id_341"*/}
                {/*                                        value="341" className="suboption subprocedures">*/}
                {/*                                    Breast Surgery Mastectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast surgery other" id="procedure_id_342" value="342"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast surgery other*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast Surgery Reconstruction Following Mastectomy"*/}
                {/*                                        id="procedure_id_343" value="343"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast Surgery Reconstruction Following Mastectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast surgery Sentinel Lymph Node Biopsy"*/}
                {/*                                        id="procedure_id_344" value="344"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast surgery Sentinel Lymph Node Biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast uplift (mastopexy)" id="procedure_id_345"*/}
                {/*                                        value="345" className="suboption subprocedures">*/}
                {/*                                    Breast uplift (mastopexy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Brow lift" id="procedure_id_356" value="356"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Brow lift*/}
                {/*                                </option>*/}
                {/*                                <option name="Excision lesion of breast (lumpectomy)"*/}
                {/*                                        id="procedure_id_346" value="346"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Excision lesion of breast (lumpectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Eye lift (blepharoplasty)" id="procedure_id_351"*/}
                {/*                                        value="351" className="suboption subprocedures">*/}
                {/*                                    Eye lift (blepharoplasty)*/}
                {/*                                </option>*/}
                {/*                                <option name="Eyelid correction" id="procedure_id_352" value="352"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Eyelid correction*/}
                {/*                                </option>*/}
                {/*                                <option name="Eyelid cyst removal" id="procedure_id_353" value="353"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Eyelid cyst removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Eyelid lift (ptosis)" id="procedure_id_354" value="354"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Eyelid lift (ptosis)*/}
                {/*                                </option>*/}
                {/*                                <option name="Eyelid reconstruction" id="procedure_id_355" value="355"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Eyelid reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Face lift" id="procedure_id_357" value="357"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Face lift*/}
                {/*                                </option>*/}
                {/*                                <option name="Fat transfer" id="procedure_id_317" value="317"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Fat transfer*/}
                {/*                                </option>*/}
                {/*                                <option name="Fat Transfer for Breast Reconstruction"*/}
                {/*                                        id="procedure_id_347" value="347"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Fat Transfer for Breast Reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Lip removal of lesion" id="procedure_id_358" value="358"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lip removal of lesion*/}
                {/*                                </option>*/}
                {/*                                <option name="Liposuction" id="procedure_id_318" value="318"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Liposuction*/}
                {/*                                </option>*/}
                {/*                                <option name="Mastectomy" id="procedure_id_348" value="348"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Mastectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Mastectomy (partial)" id="procedure_id_349" value="349"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Mastectomy (partial)*/}
                {/*                                </option>*/}
                {/*                                <option name="Mole, cyst, wart and skin tag removal"*/}
                {/*                                        id="procedure_id_319" value="319"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Mole, cyst, wart and skin tag removal*/}
                {/*                                </option>*/}
                {/*                                <option name="Nose reshaping (rhinoplasty)" id="procedure_id_359"*/}
                {/*                                        value="359" className="suboption subprocedures">*/}
                {/*                                    Nose reshaping (rhinoplasty)*/}
                {/*                                </option>*/}
                {/*                                <option name="Partial excision of breast (wide local excision)"*/}
                {/*                                        id="procedure_id_350" value="350"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Partial excision of breast (wide local excision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Refashioning of scar" id="procedure_id_320" value="320"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Refashioning of scar*/}
                {/*                                </option>*/}
                {/*                                <option name="Rhinoplasty" id="procedure_id_360" value="360"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Rhinoplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Septoplasty" id="procedure_id_361" value="361"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Septoplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Varicose vein combined treatments" id="procedure_id_362"*/}
                {/*                                        value="362" className="suboption subprocedures">*/}
                {/*                                    Varicose vein combined treatments*/}
                {/*                                </option>*/}
                {/*                                <option name="Varicose vein sclerotherapy" id="procedure_id_363"*/}
                {/*                                        value="363" className="suboption subprocedures">*/}
                {/*                                    Varicose vein sclerotherapy*/}
                {/*                                </option>*/}
                {/*                                <option name="Varicose vein treatment (laser ablation)"*/}
                {/*                                        id="procedure_id_364" value="364"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Varicose vein treatment (laser ablation)*/}
                {/*                                </option>*/}
                {/*                                <option*/}
                {/*                                    name="Varicose vein treatment (ligation, stripping and avulsion)"*/}
                {/*                                    id="procedure_id_365" value="365"*/}
                {/*                                    className="suboption subprocedures">*/}
                {/*                                    Varicose vein treatment (ligation, stripping and avulsion)*/}
                {/*                                </option>*/}
                {/*                                <option name="Varicose vein treatment (radiofrequency ablation)"*/}
                {/*                                        id="procedure_id_366" value="366"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Varicose vein treatment (radiofrequency ablation)*/}
                {/*                                </option>*/}
                {/*                                <option name="Rheumatology" id="group_procedure_id_18" value="18"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Rheumatology*/}
                {/*                                </option>*/}
                {/*                                <option name="Arthritis" id="procedure_id_367" value="367"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Arthritis*/}
                {/*                                </option>*/}
                {/*                                <option name="Osteoperosis" id="procedure_id_368" value="368"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Osteoperosis*/}
                {/*                                </option>*/}
                {/*                                <option name="Thoracic Medicine" id="group_procedure_id_16" value="16"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Thoracic Medicine*/}
                {/*                                </option>*/}
                {/*                                <option name="Respiratory physiotherapy" id="procedure_id_369"*/}
                {/*                                        value="369" className="suboption subprocedures">*/}
                {/*                                    Respiratory physiotherapy*/}
                {/*                                </option>*/}
                {/*                                <option name="Trauma &amp; Orthopaedics" id="group_procedure_id_1"*/}
                {/*                                        value="1" disabled="" className="">*/}
                {/*                                    Trauma &amp; Orthopaedics*/}
                {/*                                </option>*/}
                {/*                                <option name="ACL Reconstruction Surgery, Knee ACL reconstruction"*/}
                {/*                                        id="procedure_id_440" value="440"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    ACL Reconstruction Surgery, Knee ACL reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Acromioclavicular joint arthroscopy" id="procedure_id_476"*/}
                {/*                                        value="476" className="suboption subprocedures">*/}
                {/*                                    Acromioclavicular joint arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Acromioclavicular joint decompression"*/}
                {/*                                        id="procedure_id_477" value="477"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Acromioclavicular joint decompression*/}
                {/*                                </option>*/}
                {/*                                <option name="Acromioclavicular joint stabilisation"*/}
                {/*                                        id="procedure_id_478" value="478"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Acromioclavicular joint stabilisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Ankle" id="procedure_id_370" value="370"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ankle*/}
                {/*                                </option>*/}
                {/*                                <option name="Ankle arthroscopy" id="procedure_id_372" value="372"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ankle arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Ankle Instability" id="procedure_id_373" value="373"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ankle Instability*/}
                {/*                                </option>*/}
                {/*                                <option name="Ankle ligament reconstruction" id="procedure_id_374"*/}
                {/*                                        value="374" className="suboption subprocedures">*/}
                {/*                                    Ankle ligament reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Ankle Pain" id="procedure_id_375" value="375"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Ankle Pain*/}
                {/*                                </option>*/}
                {/*                                <option name="Ankle replacement (primary)" id="procedure_id_376"*/}
                {/*                                        value="376" className="suboption subprocedures">*/}
                {/*                                    Ankle replacement (primary)*/}
                {/*                                </option>*/}
                {/*                                <option name="Ankle replacement (revision)" id="procedure_id_377"*/}
                {/*                                        value="377" className="suboption subprocedures">*/}
                {/*                                    Ankle replacement (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Ankle Surgery and Ankle Arthroscopy" id="procedure_id_378"*/}
                {/*                                        value="378" className="suboption subprocedures">*/}
                {/*                                    Ankle Surgery and Ankle Arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Arthroscopic Latarjet" id="procedure_id_461" value="461"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Arthroscopic Latarjet*/}
                {/*                                </option>*/}
                {/*                                <option name="Arthroscopic Subacromial Decompression"*/}
                {/*                                        id="procedure_id_479" value="479"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Arthroscopic Subacromial Decompression*/}
                {/*                                </option>*/}
                {/*                                <option name="Arthroscopy of joint (other)" id="procedure_id_462"*/}
                {/*                                        value="462" className="suboption subprocedures">*/}
                {/*                                    Arthroscopy of joint (other)*/}
                {/*                                </option>*/}
                {/*                                <option name="Back orthotics" id="procedure_id_495" value="495"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Back orthotics*/}
                {/*                                </option>*/}
                {/*                                <option name="Back pain" id="procedure_id_496" value="496"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Back pain*/}
                {/*                                </option>*/}
                {/*                                <option name="Back surgery (slipped disc)" id="procedure_id_497"*/}
                {/*                                        value="497" className="suboption subprocedures">*/}
                {/*                                    Back surgery (slipped disc)*/}
                {/*                                </option>*/}
                {/*                                <option name="Back surgery (spinal surgery)" id="procedure_id_498"*/}
                {/*                                        value="498" className="suboption subprocedures">*/}
                {/*                                    Back surgery (spinal surgery)*/}
                {/*                                </option>*/}
                {/*                                <option name="Back surgery (trapped nerve release)"*/}
                {/*                                        id="procedure_id_499" value="499"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Back surgery (trapped nerve release)*/}
                {/*                                </option>*/}
                {/*                                <option name="Bunion Surgery" id="procedure_id_551" value="551"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bunion Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Bursa excision (surgical)" id="procedure_id_389"*/}
                {/*                                        value="389" className="suboption subprocedures">*/}
                {/*                                    Bursa excision (surgical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Bursa treatment (non-surgical)" id="procedure_id_390"*/}
                {/*                                        value="390" className="suboption subprocedures">*/}
                {/*                                    Bursa treatment (non-surgical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Carpal tunnel release" id="procedure_id_408" value="408"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Carpal tunnel release*/}
                {/*                                </option>*/}
                {/*                                <option name="Carpal tunnel release (revision)" id="procedure_id_409"*/}
                {/*                                        value="409" className="suboption subprocedures">*/}
                {/*                                    Carpal tunnel release (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Cartilage Operation" id="procedure_id_463" value="463"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cartilage Operation*/}
                {/*                                </option>*/}
                {/*                                <option name="Cervical spine surgery" id="procedure_id_500" value="500"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cervical spine surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Comprehensive Arthroscopic Management CAM"*/}
                {/*                                        id="procedure_id_464" value="464"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Comprehensive Arthroscopic Management CAM*/}
                {/*                                </option>*/}
                {/*                                <option name="Computer assisted navigation high tibial osteotomy"*/}
                {/*                                        id="procedure_id_441" value="441"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Computer assisted navigation high tibial osteotomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Computer assisted navigation total knee replacement"*/}
                {/*                                        id="procedure_id_442" value="442"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Computer assisted navigation total knee replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Congenital deformity of hand repair" id="procedure_id_410"*/}
                {/*                                        value="410" className="suboption subprocedures">*/}
                {/*                                    Congenital deformity of hand repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Correction of congenital foot abnormality"*/}
                {/*                                        id="procedure_id_379" value="379"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Correction of congenital foot abnormality*/}
                {/*                                </option>*/}
                {/*                                <option name="Cranio-cervical decompression" id="procedure_id_501"*/}
                {/*                                        value="501" className="suboption subprocedures">*/}
                {/*                                    Cranio-cervical decompression*/}
                {/*                                </option>*/}
                {/*                                <option name="Cubital tunnel release" id="procedure_id_391" value="391"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Cubital tunnel release*/}
                {/*                                </option>*/}
                {/*                                <option name="Debridement of joint (other)" id="procedure_id_465"*/}
                {/*                                        value="465" className="suboption subprocedures">*/}
                {/*                                    Debridement of joint (other)*/}
                {/*                                </option>*/}
                {/*                                <option name="Discectomy" id="procedure_id_502" value="502"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Discectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Dupuytren's contracture surgery" id="procedure_id_402"*/}
                {/*                                        value="402" className="suboption subprocedures">*/}
                {/*                                    Dupuytren's contracture surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Dupuytren's contracture surgery (revision)"*/}
                {/*                                        id="procedure_id_403" value="403"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Dupuytren's contracture surgery (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Elbow" id="procedure_id_388" value="388"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Elbow*/}
                {/*                                </option>*/}
                {/*                                <option name="Elbow Arthroscopy" id="procedure_id_392" value="392"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Elbow Arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Elbow decompression" id="procedure_id_393" value="393"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Elbow decompression*/}
                {/*                                </option>*/}
                {/*                                <option name="Elbow replacement (primary)" id="procedure_id_394"*/}
                {/*                                        value="394" className="suboption subprocedures">*/}
                {/*                                    Elbow replacement (primary)*/}
                {/*                                </option>*/}
                {/*                                <option name="Elbow replacement (revision)" id="procedure_id_395"*/}
                {/*                                        value="395" className="suboption subprocedures">*/}
                {/*                                    Elbow replacement (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Elbow stabilisation" id="procedure_id_396" value="396"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Elbow stabilisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Endoscopic Minimal Invasive Spine Surgery Lower Back"*/}
                {/*                                        id="procedure_id_503" value="503"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Endoscopic Minimal Invasive Spine Surgery Lower Back*/}
                {/*                                </option>*/}
                {/*                                <option name="Epidural for back pain" id="procedure_id_504" value="504"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Epidural for back pain*/}
                {/*                                </option>*/}
                {/*                                <option name="Epidural for chronic pain relief" id="procedure_id_505"*/}
                {/*                                        value="505" className="suboption subprocedures">*/}
                {/*                                    Epidural for chronic pain relief*/}
                {/*                                </option>*/}
                {/*                                <option name="Excision foot bone" id="procedure_id_380" value="380"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Excision foot bone*/}
                {/*                                </option>*/}
                {/*                                <option name="Facet joint injections" id="procedure_id_466" value="466"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Facet joint injections*/}
                {/*                                </option>*/}
                {/*                                <option name="Fingers or Thumb" id="procedure_id_401" value="401"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Fingers or Thumb*/}
                {/*                                </option>*/}
                {/*                                <option name="Foot" id="procedure_id_371" value="371"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Foot*/}
                {/*                                </option>*/}
                {/*                                <option name="Foot amputation" id="procedure_id_381" value="381"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Foot amputation*/}
                {/*                                </option>*/}
                {/*                                <option name="Foot arthroscopy" id="procedure_id_382" value="382"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Foot arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Foot orthotics" id="procedure_id_383" value="383"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Foot orthotics*/}
                {/*                                </option>*/}
                {/*                                <option name="Foot surgery" id="procedure_id_384" value="384"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Foot surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Forefoot reconstruction (complex)" id="procedure_id_385"*/}
                {/*                                        value="385" className="suboption subprocedures">*/}
                {/*                                    Forefoot reconstruction (complex)*/}
                {/*                                </option>*/}
                {/*                                <option name="Forefoot reconstruction (simple)" id="procedure_id_386"*/}
                {/*                                        value="386" className="suboption subprocedures">*/}
                {/*                                    Forefoot reconstruction (simple)*/}
                {/*                                </option>*/}
                {/*                                <option name="Frozen shoulder release" id="procedure_id_480" value="480"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Frozen shoulder release*/}
                {/*                                </option>*/}
                {/*                                <option name="Gait analysis" id="procedure_id_467" value="467"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Gait analysis*/}
                {/*                                </option>*/}
                {/*                                <option name="Ganglion excision - wrist and hand" id="procedure_id_411"*/}
                {/*                                        value="411" className="suboption subprocedures">*/}
                {/*                                    Ganglion excision - wrist and hand*/}
                {/*                                </option>*/}
                {/*                                <option name="Great toe fusion" id="procedure_id_552" value="552"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Great toe fusion*/}
                {/*                                </option>*/}
                {/*                                <option name="Hand Amputation" id="procedure_id_412" value="412"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hand Amputation*/}
                {/*                                </option>*/}
                {/*                                <option name="Hand and wrist exercise and functional activity"*/}
                {/*                                        id="procedure_id_413" value="413"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hand and wrist exercise and functional activity*/}
                {/*                                </option>*/}
                {/*                                <option name="Hand and wrist manual therapies" id="procedure_id_414"*/}
                {/*                                        value="414" className="suboption subprocedures">*/}
                {/*                                    Hand and wrist manual therapies*/}
                {/*                                </option>*/}
                {/*                                <option name="Hand and wrist splinting" id="procedure_id_415"*/}
                {/*                                        value="415" className="suboption subprocedures">*/}
                {/*                                    Hand and wrist splinting*/}
                {/*                                </option>*/}
                {/*                                <option name="Hand or Wrist" id="procedure_id_407" value="407"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hand or Wrist*/}
                {/*                                </option>*/}
                {/*                                <option name="Hand reconstruction" id="procedure_id_416" value="416"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hand reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Head of femur replacement" id="procedure_id_424"*/}
                {/*                                        value="424" className="suboption subprocedures">*/}
                {/*                                    Head of femur replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Head of femur replacement (revision)"*/}
                {/*                                        id="procedure_id_425" value="425"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Head of femur replacement (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Hindfoot reconstruction" id="procedure_id_387" value="387"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hindfoot reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip" id="procedure_id_422" value="422"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hip*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip Arthroscopy" id="procedure_id_426" value="426"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hip Arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip Debridement Surgery" id="procedure_id_427" value="427"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hip Debridement Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip dislocation reduction" id="procedure_id_428"*/}
                {/*                                        value="428" className="suboption subprocedures">*/}
                {/*                                    Hip dislocation reduction*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip Injection Treatment" id="procedure_id_429" value="429"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hip Injection Treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip joint manipulation" id="procedure_id_430" value="430"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hip joint manipulation*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip replacement (primary)" id="procedure_id_431"*/}
                {/*                                        value="431" className="suboption subprocedures">*/}
                {/*                                    Hip replacement (primary)*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip replacement (revision)" id="procedure_id_432"*/}
                {/*                                        value="432" className="suboption subprocedures">*/}
                {/*                                    Hip replacement (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip Replacement Surgery" id="procedure_id_433" value="433"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hip Replacement Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip Resurfacing" id="procedure_id_434" value="434"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hip Resurfacing*/}
                {/*                                </option>*/}
                {/*                                <option name="Hip Revision" id="procedure_id_435" value="435"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Hip Revision*/}
                {/*                                </option>*/}
                {/*                                <option name="Injections for Dupuytren disease" id="procedure_id_417"*/}
                {/*                                        value="417" className="suboption subprocedures">*/}
                {/*                                    Injections for Dupuytren disease*/}
                {/*                                </option>*/}
                {/*                                <option name="Joint injections for pain" id="procedure_id_468"*/}
                {/*                                        value="468" className="suboption subprocedures">*/}
                {/*                                    Joint injections for pain*/}
                {/*                                </option>*/}
                {/*                                <option name="Joint pain treatment (joint injections)"*/}
                {/*                                        id="procedure_id_469" value="469"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Joint pain treatment (joint injections)*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee" id="procedure_id_439" value="439"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Knee*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee Arthroscopy" id="procedure_id_443" value="443"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Knee Arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee Injuries" id="procedure_id_444" value="444"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Knee Injuries*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee ligament reconstruction" id="procedure_id_445"*/}
                {/*                                        value="445" className="suboption subprocedures">*/}
                {/*                                    Knee ligament reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee ligament surgery" id="procedure_id_446" value="446"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Knee ligament surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee orthotics " id="procedure_id_447" value="447"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Knee orthotics*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee replacement (primary - patellofemoral)"*/}
                {/*                                        id="procedure_id_448" value="448"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Knee replacement (primary - patellofemoral)*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee replacement (primary - unicompartmental)"*/}
                {/*                                        id="procedure_id_449" value="449"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Knee replacement (primary - unicompartmental)*/}
                {/*                                </option>*/}
                {/*                                <option name="Knee replacement (revision)" id="procedure_id_450"*/}
                {/*                                        value="450" className="suboption subprocedures">*/}
                {/*                                    Knee replacement (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Leg (Lower)" id="procedure_id_455" value="455"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Leg (Lower)*/}
                {/*                                </option>*/}
                {/*                                <option name="Leg (Upper)" id="procedure_id_423" value="423"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Leg (Upper)*/}
                {/*                                </option>*/}
                {/*                                <option name="Lower Limb Reconstruction" id="procedure_id_456"*/}
                {/*                                        value="456" className="suboption subprocedures">*/}
                {/*                                    Lower Limb Reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Lumbar laminectomy" id="procedure_id_506" value="506"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lumbar laminectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Lumbar microdiscectomy" id="procedure_id_507" value="507"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Lumbar microdiscectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Lumbar spinal decompression" id="procedure_id_508"*/}
                {/*                                        value="508" className="suboption subprocedures">*/}
                {/*                                    Lumbar spinal decompression*/}
                {/*                                </option>*/}
                {/*                                <option name="Manipulation of joint" id="procedure_id_470" value="470"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Manipulation of joint*/}
                {/*                                </option>*/}
                {/*                                <option name="Metatarsal osteotomy" id="procedure_id_471" value="471"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Metatarsal osteotomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Open operation on semilunar cartilage (knee)"*/}
                {/*                                        id="procedure_id_451" value="451"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Open operation on semilunar cartilage (knee)*/}
                {/*                                </option>*/}
                {/*                                <option name="Osteotomy Surgery" id="procedure_id_452" value="452"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Osteotomy Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Other Bone" id="procedure_id_457" value="457"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Other Bone*/}
                {/*                                </option>*/}
                {/*                                <option name="Other Joint" id="procedure_id_460" value="460"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Other Joint*/}
                {/*                                </option>*/}
                {/*                                <option name="Other toe fusion" id="procedure_id_553" value="553"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Other toe fusion*/}
                {/*                                </option>*/}
                {/*                                <option name="Pain management injections for back and facet joints"*/}
                {/*                                        id="procedure_id_472" value="472"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Pain management injections for back and facet joints*/}
                {/*                                </option>*/}
                {/*                                <option name="Partial Knee Replacement Surgery" id="procedure_id_453"*/}
                {/*                                        value="453" className="suboption subprocedures">*/}
                {/*                                    Partial Knee Replacement Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Pelvic health rehabilitation" id="procedure_id_436"*/}
                {/*                                        value="436" className="suboption subprocedures">*/}
                {/*                                    Pelvic health rehabilitation*/}
                {/*                                </option>*/}
                {/*                                <option name="Release nerve at wrist" id="procedure_id_418" value="418"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Release nerve at wrist*/}
                {/*                                </option>*/}
                {/*                                <option name="Release of Stiff Elbow" id="procedure_id_397" value="397"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Release of Stiff Elbow*/}
                {/*                                </option>*/}
                {/*                                <option name="Removal carpal bones" id="procedure_id_419" value="419"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Removal carpal bones*/}
                {/*                                </option>*/}
                {/*                                <option name="Removal of metalwork from bone" id="procedure_id_459"*/}
                {/*                                        value="459" className="suboption subprocedures">*/}
                {/*                                    Removal of metalwork from bone*/}
                {/*                                </option>*/}
                {/*                                <option name="Removal of spinal instrumentation or fixation"*/}
                {/*                                        id="procedure_id_509" value="509"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Removal of spinal instrumentation or fixation*/}
                {/*                                </option>*/}
                {/*                                <option name="Repair of fractured neck of femur" id="procedure_id_437"*/}
                {/*                                        value="437" className="suboption subprocedures">*/}
                {/*                                    Repair of fractured neck of femur*/}
                {/*                                </option>*/}
                {/*                                <option name="Revision Elbow Replacement" id="procedure_id_398"*/}
                {/*                                        value="398" className="suboption subprocedures">*/}
                {/*                                    Revision Elbow Replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Revision Knee Replacement" id="procedure_id_454"*/}
                {/*                                        value="454" className="suboption subprocedures">*/}
                {/*                                    Revision Knee Replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Rotator cuff repair" id="procedure_id_481" value="481"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Rotator cuff repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Rotator Cuff Surgery" id="procedure_id_482" value="482"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Rotator Cuff Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Scoliosis" id="procedure_id_510" value="510"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Scoliosis*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder" id="procedure_id_475" value="475"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Shoulder*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder Arthroplasty" id="procedure_id_483" value="483"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Shoulder Arthroplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder Arthroscopy" id="procedure_id_484" value="484"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Shoulder Arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder Pain" id="procedure_id_485" value="485"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Shoulder Pain*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder reconstruction" id="procedure_id_486" value="486"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Shoulder reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder replacement (primary)" id="procedure_id_487"*/}
                {/*                                        value="487" className="suboption subprocedures">*/}
                {/*                                    Shoulder replacement (primary)*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder replacement (revision - reverse polarity)"*/}
                {/*                                        id="procedure_id_488" value="488"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Shoulder replacement (revision - reverse polarity)*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder replacement (revision)" id="procedure_id_489"*/}
                {/*                                        value="489" className="suboption subprocedures">*/}
                {/*                                    Shoulder replacement (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder rotator cuff repair" id="procedure_id_490"*/}
                {/*                                        value="490" className="suboption subprocedures">*/}
                {/*                                    Shoulder rotator cuff repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder slap repair" id="procedure_id_491" value="491"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Shoulder slap repair*/}
                {/*                                </option>*/}
                {/*                                <option name="Shoulder stabilisation" id="procedure_id_492" value="492"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Shoulder stabilisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal anaesthetic" id="procedure_id_511" value="511"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal anaesthetic*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal biopsy" id="procedure_id_512" value="512"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (cervical)" id="procedure_id_513"*/}
                {/*                                        value="513" className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (lumbar)" id="procedure_id_514"*/}
                {/*                                        value="514" className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (lumbar)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (lumbar/thoracic)"*/}
                {/*                                        id="procedure_id_515" value="515"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (lumbar/thoracic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (posterior cervical)"*/}
                {/*                                        id="procedure_id_516" value="516"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (posterior cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (revision cervical)"*/}
                {/*                                        id="procedure_id_517" value="517"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (revision cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (revision lumbar)"*/}
                {/*                                        id="procedure_id_518" value="518"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (revision lumbar)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (revision lumbar/thoracic)"*/}
                {/*                                        id="procedure_id_519" value="519"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (revision lumbar/thoracic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (revision posterior cervical)"*/}
                {/*                                        id="procedure_id_520" value="520"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (revision posterior cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (revision thoracic)"*/}
                {/*                                        id="procedure_id_521" value="521"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (revision thoracic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal decompression (thoracic)" id="procedure_id_522"*/}
                {/*                                        value="522" className="suboption subprocedures">*/}
                {/*                                    Spinal decompression (thoracic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal deformity correction (scoliosis)"*/}
                {/*                                        id="procedure_id_523" value="523"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal deformity correction (scoliosis)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal disc excision (cervical)" id="procedure_id_524"*/}
                {/*                                        value="524" className="suboption subprocedures">*/}
                {/*                                    Spinal disc excision (cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal disc excision (lumbar)" id="procedure_id_525"*/}
                {/*                                        value="525" className="suboption subprocedures">*/}
                {/*                                    Spinal disc excision (lumbar)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal disc excision (revision lumbar)"*/}
                {/*                                        id="procedure_id_526" value="526"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal disc excision (revision lumbar)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal disc replacement" id="procedure_id_527" value="527"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal disc replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal disc replacement (cervical)" id="procedure_id_528"*/}
                {/*                                        value="528" className="suboption subprocedures">*/}
                {/*                                    Spinal disc replacement (cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal disc replacement (lumbar)" id="procedure_id_529"*/}
                {/*                                        value="529" className="suboption subprocedures">*/}
                {/*                                    Spinal disc replacement (lumbar)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal facet joint denervation" id="procedure_id_530"*/}
                {/*                                        value="530" className="suboption subprocedures">*/}
                {/*                                    Spinal facet joint denervation*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fracture decompression" id="procedure_id_531"*/}
                {/*                                        value="531" className="suboption subprocedures">*/}
                {/*                                    Spinal fracture decompression*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (anterior cervical)" id="procedure_id_532"*/}
                {/*                                        value="532" className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (anterior cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (cervical C1/C2)" id="procedure_id_533"*/}
                {/*                                        value="533" className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (cervical C1/C2)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (cervical)" id="procedure_id_534"*/}
                {/*                                        value="534" className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (cranio-cervical)" id="procedure_id_535"*/}
                {/*                                        value="535" className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (cranio-cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (lumbar / thoracic)" id="procedure_id_536"*/}
                {/*                                        value="536" className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (lumbar / thoracic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (lumbar)" id="procedure_id_537" value="537"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (lumbar)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (posterior cervical)" id="procedure_id_538"*/}
                {/*                                        value="538" className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (posterior cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (revision anterior cervical)"*/}
                {/*                                        id="procedure_id_539" value="539"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (revision anterior cervical)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (revision lumbar)" id="procedure_id_540"*/}
                {/*                                        value="540" className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (revision lumbar)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal fusion (revision)" id="procedure_id_541"*/}
                {/*                                        value="541" className="suboption subprocedures">*/}
                {/*                                    Spinal fusion (revision)*/}
                {/*                                </option>*/}
                {/*                                <option*/}
                {/*                                    name="Spinal injection (facet joint injection or paravertebral block)"*/}
                {/*                                    id="procedure_id_542" value="542"*/}
                {/*                                    className="suboption subprocedures">*/}
                {/*                                    Spinal injection (facet joint injection or paravertebral block)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal lesion excision" id="procedure_id_543" value="543"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal lesion excision*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal nerve root destruction" id="procedure_id_544"*/}
                {/*                                        value="544" className="suboption subprocedures">*/}
                {/*                                    Spinal nerve root destruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal operation (other)" id="procedure_id_545"*/}
                {/*                                        value="545" className="suboption subprocedures">*/}
                {/*                                    Spinal operation (other)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal spacer insertion" id="procedure_id_546" value="546"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal spacer insertion*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal stablilisation" id="procedure_id_547" value="547"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spinal stablilisation*/}
                {/*                                </option>*/}
                {/*                                <option name="Spinal surgery (thoracic)" id="procedure_id_548"*/}
                {/*                                        value="548" className="suboption subprocedures">*/}
                {/*                                    Spinal surgery (thoracic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Spine" id="procedure_id_494" value="494"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spine*/}
                {/*                                </option>*/}
                {/*                                <option name="Spine manipulation" id="procedure_id_549" value="549"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Spine manipulation*/}
                {/*                                </option>*/}
                {/*                                <option name="Sternoclavicular joint arthroscopy" id="procedure_id_473"*/}
                {/*                                        value="473" className="suboption subprocedures">*/}
                {/*                                    Sternoclavicular joint arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Sternoclavicular joint decompression"*/}
                {/*                                        id="procedure_id_474" value="474"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Sternoclavicular joint decompression*/}
                {/*                                </option>*/}
                {/*                                <option name="Subacromial joint decompression" id="procedure_id_493"*/}
                {/*                                        value="493" className="suboption subprocedures">*/}
                {/*                                    Subacromial joint decompression*/}
                {/*                                </option>*/}
                {/*                                <option name="Surgery -Bone/Joint" id="procedure_id_458" value="458"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Surgery -Bone/Joint*/}
                {/*                                </option>*/}
                {/*                                <option name="Tendon sheath release (wrist)" id="procedure_id_420"*/}
                {/*                                        value="420" className="suboption subprocedures">*/}
                {/*                                    Tendon sheath release (wrist)*/}
                {/*                                </option>*/}
                {/*                                <option name="Thumb reconstruction" id="procedure_id_404" value="404"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Thumb reconstruction*/}
                {/*                                </option>*/}
                {/*                                <option name="Thumb/finger amputation" id="procedure_id_405" value="405"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Thumb/finger amputation*/}
                {/*                                </option>*/}
                {/*                                <option name="Toe" id="procedure_id_550" value="550"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Toe*/}
                {/*                                </option>*/}
                {/*                                <option name="Toe amputation" id="procedure_id_554" value="554"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Toe amputation*/}
                {/*                                </option>*/}
                {/*                                <option name="Toe fusion (revision)" id="procedure_id_555" value="555"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Toe fusion (revision)*/}
                {/*                                </option>*/}
                {/*                                <option name="Toe joint arthroplasty" id="procedure_id_556" value="556"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Toe joint arthroplasty*/}
                {/*                                </option>*/}
                {/*                                <option name="Total Elbow Replacement" id="procedure_id_399" value="399"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Total Elbow Replacement*/}
                {/*                                </option>*/}
                {/*                                <option name="Total hip replacement by computer assisted navigation"*/}
                {/*                                        id="procedure_id_438" value="438"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Total hip replacement by computer assisted navigation*/}
                {/*                                </option>*/}
                {/*                                <option name="Trigger finger release" id="procedure_id_406" value="406"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Trigger finger release*/}
                {/*                                </option>*/}
                {/*                                <option name="Ulnar Nerve Release Surgery" id="procedure_id_400"*/}
                {/*                                        value="400" className="suboption subprocedures">*/}
                {/*                                    Ulnar Nerve Release Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Wrist arthroscopy" id="procedure_id_421" value="421"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Wrist arthroscopy*/}
                {/*                                </option>*/}
                {/*                                <option name="Urology" id="group_procedure_id_5" value="5" disabled=""*/}
                {/*                                        className="">*/}
                {/*                                    Urology*/}
                {/*                                </option>*/}
                {/*                                <option name="Bladder" id="procedure_id_557" value="557"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bladder*/}
                {/*                                </option>*/}
                {/*                                <option name="Bladder Cancer" id="procedure_id_558" value="558"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bladder Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Bladder chemotherapy" id="procedure_id_559" value="559"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bladder chemotherapy*/}
                {/*                                </option>*/}
                {/*                                <option name="Bladder examination - diagnostic endoscopy (cystoscopy)"*/}
                {/*                                        id="procedure_id_560" value="560"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bladder examination - diagnostic endoscopy (cystoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Bladder investigations (cystoscopy)" id="procedure_id_561"*/}
                {/*                                        value="561" className="suboption subprocedures">*/}
                {/*                                    Bladder investigations (cystoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Bladder lesion treatment (endoscopy)"*/}
                {/*                                        id="procedure_id_562" value="562"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Bladder lesion treatment (endoscopy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Bladder surgery (cystectomy)" id="procedure_id_563"*/}
                {/*                                        value="563" className="suboption subprocedures">*/}
                {/*                                    Bladder surgery (cystectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Bladder tumour resection (TURBT)" id="procedure_id_564"*/}
                {/*                                        value="564" className="suboption subprocedures">*/}
                {/*                                    Bladder tumour resection (TURBT)*/}
                {/*                                </option>*/}
                {/*                                <option name="Breast (male)" id="procedure_id_569" value="569"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Breast (male)*/}
                {/*                                </option>*/}
                {/*                                <option name="Circumcision" id="procedure_id_575" value="575"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Circumcision*/}
                {/*                                </option>*/}
                {/*                                <option name="Correction of hydrocele" id="procedure_id_576" value="576"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Correction of hydrocele*/}
                {/*                                </option>*/}
                {/*                                <option name="Epididymal surgery" id="procedure_id_577" value="577"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Epididymal surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Foreskin operations (other)" id="procedure_id_578"*/}
                {/*                                        value="578" className="suboption subprocedures">*/}
                {/*                                    Foreskin operations (other)*/}
                {/*                                </option>*/}
                {/*                                <option name="High Intensity Focused Ultrasound HIFU"*/}
                {/*                                        id="procedure_id_586" value="586"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    High Intensity Focused Ultrasound HIFU*/}
                {/*                                </option>*/}
                {/*                                <option name="Holmium Laser Enucleation of the Prostate HoLEP"*/}
                {/*                                        id="procedure_id_587" value="587"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Holmium Laser Enucleation of the Prostate HoLEP*/}
                {/*                                </option>*/}
                {/*                                <option name="Keyhole prostate surgery (TURP)" id="procedure_id_588"*/}
                {/*                                        value="588" className="suboption subprocedures">*/}
                {/*                                    Keyhole prostate surgery (TURP)*/}
                {/*                                </option>*/}
                {/*                                <option name="Male Breast Cancer" id="procedure_id_570" value="570"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Male Breast Cancer*/}
                {/*                                </option>*/}
                {/*                                <option name="Male breast reduction gynaecomastia" id="procedure_id_571"*/}
                {/*                                        value="571" className="suboption subprocedures">*/}
                {/*                                    Male breast reduction gynaecomastia*/}
                {/*                                </option>*/}
                {/*                                <option name="Male Genitals" id="procedure_id_574" value="574"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Male Genitals*/}
                {/*                                </option>*/}
                {/*                                <option name="Male sling" id="procedure_id_565" value="565"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Male sling*/}
                {/*                                </option>*/}
                {/*                                <option name="Micro epididymal sperm aspiration" id="procedure_id_572"*/}
                {/*                                        value="572" className="suboption subprocedures">*/}
                {/*                                    Micro epididymal sperm aspiration*/}
                {/*                                </option>*/}
                {/*                                <option name="Operations for Peyronies Disease" id="procedure_id_579"*/}
                {/*                                        value="579" className="suboption subprocedures">*/}
                {/*                                    Operations for Peyronies Disease*/}
                {/*                                </option>*/}
                {/*                                <option name="Penile surgery" id="procedure_id_580" value="580"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Penile surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Prostate" id="procedure_id_585" value="585"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Prostate*/}
                {/*                                </option>*/}
                {/*                                <option name="Prostate needle biopsy" id="procedure_id_589" value="589"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Prostate needle biopsy*/}
                {/*                                </option>*/}
                {/*                                <option name="Prostate surgery (prostatectomy)" id="procedure_id_590"*/}
                {/*                                        value="590" className="suboption subprocedures">*/}
                {/*                                    Prostate surgery (prostatectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Prostate surgery and laser prostate surgery"*/}
                {/*                                        id="procedure_id_591" value="591"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Prostate surgery and laser prostate surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="PVP GreenLight Laser Surgery" id="procedure_id_592"*/}
                {/*                                        value="592" className="suboption subprocedures">*/}
                {/*                                    PVP GreenLight Laser Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Removal of testicle (orchidectomy)" id="procedure_id_581"*/}
                {/*                                        value="581" className="suboption subprocedures">*/}
                {/*                                    Removal of testicle (orchidectomy)*/}
                {/*                                </option>*/}
                {/*                                <option name="Rezum treatment" id="procedure_id_593" value="593"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Rezum treatment*/}
                {/*                                </option>*/}
                {/*                                <option name="Saturation biopsies of the prostate" id="procedure_id_594"*/}
                {/*                                        value="594" className="suboption subprocedures">*/}
                {/*                                    Saturation biopsies of the prostate*/}
                {/*                                </option>*/}
                {/*                                <option name="Surgery for benign scrotal lumps" id="procedure_id_582"*/}
                {/*                                        value="582" className="suboption subprocedures">*/}
                {/*                                    Surgery for benign scrotal lumps*/}
                {/*                                </option>*/}
                {/*                                <option name="Testicular epididymal sperm extraction"*/}
                {/*                                        id="procedure_id_573" value="573"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Testicular epididymal sperm extraction*/}
                {/*                                </option>*/}
                {/*                                <option name="Transurethral resection of the prostate (TURP)"*/}
                {/*                                        id="procedure_id_595" value="595"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Transurethral resection of the prostate (TURP)*/}
                {/*                                </option>*/}
                {/*                                <option name="Urethral stricture dilation (endoscopic)"*/}
                {/*                                        id="procedure_id_566" value="566"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Urethral stricture dilation (endoscopic)*/}
                {/*                                </option>*/}
                {/*                                <option name="Urethral surgery (urethroplasty)" id="procedure_id_567"*/}
                {/*                                        value="567" className="suboption subprocedures">*/}
                {/*                                    Urethral surgery (urethroplasty)*/}
                {/*                                </option>*/}
                {/*                                <option name="Urethrotomy" id="procedure_id_568" value="568"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Urethrotomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Vasectomy" id="procedure_id_583" value="583"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Vasectomy*/}
                {/*                                </option>*/}
                {/*                                <option name="Vasectomy reversal" id="procedure_id_584" value="584"*/}
                {/*                                        className="suboption subprocedures">*/}
                {/*                                    Vasectomy reversal*/}
                {/*                                </option>*/}
                {/*                            </select>*/}
                {/*                            <button type="button" className="dropdown-toggle bs-placeholder"*/}
                {/*                                    data-toggle="dropdown" role="combobox" aria-owns="bs-select-1"*/}
                {/*                                    aria-haspopup="listbox" aria-expanded="false"*/}
                {/*                                    data-id="resultspage_treatment_dropdown"*/}
                {/*                                    title="Choose your treatment (if known)" data-boundary="window">*/}
                {/*                                <div className="filter-option">*/}
                {/*                                    <div className="filter-option-inner">*/}
                {/*                                        <div className="filter-option-inner-inner">Choose your treatment*/}
                {/*                                            (if known)*/}
                {/*                                        </div>*/}
                {/*                                    </div>*/}
                {/*                                </div>*/}
                {/*                            </button>*/}
                {/*                            <div className="dropdown-menu ">*/}
                {/*                                <div className="bs-searchbox"><input type="search"*/}
                {/*                                                                     className="form-control"*/}
                {/*                                                                     autoComplete="off" role="combobox"*/}
                {/*                                                                     aria-label="Search"*/}
                {/*                                                                     aria-controls="bs-select-1"*/}
                {/*                                                                     aria-autocomplete="list"></div>*/}
                {/*                                <div className="inner show" role="listbox" id="bs-select-1"*/}
                {/*                                     tabIndex="-1">*/}
                {/*                                    <ul className="dropdown-menu inner show" role="presentation"></ul>*/}
                {/*                                </div>*/}
                {/*                            </div>*/}
                {/*                        </div>*/}
                {/*                        <svg className="position-absolute v-c" xmlns="http://www.w3.org/2000/svg"*/}
                {/*                             width="18" height="11" viewBox="0 0 18 11">*/}
                {/*                            <g>*/}
                {/*                                <g>*/}
                {/*                                    <path*/}
                {/*                                        d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>*/}
                {/*                                </g>*/}
                {/*                            </g>*/}
                {/*                        </svg>*/}
                {/*                    </div>*/}
                {/*                </div>*/}
                {/*                <a tabIndex="0" data-offset="0 5px" className="help-link" style="right: 53px"*/}
                {/*                   data-toggle="popover-max-width"*/}
                {/*                   data-content="<p>If you know what treatment you need, select the treatment from our list or select generic body areas if you're not sure</p>"*/}
                {/*                   data-trigger="hover" data-placement="top" data-html="true" data-original-title=""*/}
                {/*                   title=""><!--?xml version="1.0" encoding="utf-8"?-->*/}
                {/*                    <svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.55 28.55">*/}
                {/*                        <title>4Artboard 20</title>*/}
                {/*                        <g data-name="Layer 1">*/}
                {/*                            <circle fill="#037098" cx="14.27" cy="14.27" r="14.27"></circle>*/}
                {/*                            <path fill="#fff"*/}
                {/*                                  d="M13.28,19a6,6,0,0,0-.47,1.67c0,.21.11.36.31.36.52-.05,1.88-1.45,2-1.66a.15.15,0,0,1,.24,0l.28.29c.11.1.16.15.05.26a6.47,6.47,0,0,1-4.81,2.7.66.66,0,0,1-.75-.72,30,30,0,0,1,1.45-4.63l.73-2a8.7,8.7,0,0,0,.42-1.51.28.28,0,0,0-.31-.31c-.42,0-1.62,1.35-2,1.77a.2.2,0,0,1-.31,0l-.26-.24c-.11-.08-.16-.13-.11-.23s2.5-3.18,4.79-3.18c.62,0,.94.32.94.84a10.2,10.2,0,0,1-.78,2.7ZM13.49,6.1A1.65,1.65,0,0,1,15.1,4.54,1.58,1.58,0,0,1,16.87,6a1.8,1.8,0,0,1-1.72,1.67A1.56,1.56,0,0,1,13.49,6.1Z"></path>*/}
                {/*                        </g>*/}
                {/*                    </svg>*/}
                {/*                </a>*/}
                {/*            </div>*/}
                {/*            <div className="postcode-radius-child postcode col-12 col-md-3 d-flex align-items-center">*/}
                {/*                <div className="input-parent w-100">*/}
                {/*                    <div className="input-wrapper">*/}
                {/*                        <input id="input_postcode" className="inputClass form-control" type="text"*/}
                {/*                               placeholder="Enter your postcode" value="" name="postcode" maxLength="8">*/}
                {/*                    </div>*/}
                {/*                </div>*/}
                {/*                <a tabIndex="0" data-offset="0 5px" className="help-link" style="right: 53px"*/}
                {/*                   data-toggle="popover-max-width" data-content="<p>*/}
                {/*                             Please enter your postcode<br />for a refined search.*/}
                {/*                         </p>*/}
                {/*                         " data-trigger="hover" data-placement="top" data-html="true"*/}
                {/*                   data-original-title="" title=""><!--?xml version="1.0" encoding="utf-8"?-->*/}
                {/*                    <svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.55 28.55">*/}
                {/*                        <title>4Artboard 20</title>*/}
                {/*                        <g data-name="Layer 1">*/}
                {/*                            <circle fill="#037098" cx="14.27" cy="14.27" r="14.27"></circle>*/}
                {/*                            <path fill="#fff"*/}
                {/*                                  d="M13.28,19a6,6,0,0,0-.47,1.67c0,.21.11.36.31.36.52-.05,1.88-1.45,2-1.66a.15.15,0,0,1,.24,0l.28.29c.11.1.16.15.05.26a6.47,6.47,0,0,1-4.81,2.7.66.66,0,0,1-.75-.72,30,30,0,0,1,1.45-4.63l.73-2a8.7,8.7,0,0,0,.42-1.51.28.28,0,0,0-.31-.31c-.42,0-1.62,1.35-2,1.77a.2.2,0,0,1-.31,0l-.26-.24c-.11-.08-.16-.13-.11-.23s2.5-3.18,4.79-3.18c.62,0,.94.32.94.84a10.2,10.2,0,0,1-.78,2.7ZM13.49,6.1A1.65,1.65,0,0,1,15.1,4.54,1.58,1.58,0,0,1,16.87,6a1.8,1.8,0,0,1-1.72,1.67A1.56,1.56,0,0,1,13.49,6.1Z"></path>*/}
                {/*                        </g>*/}
                {/*                    </svg>*/}
                {/*                </a>*/}
                {/*            </div>*/}
                {/*            <div className="postcode-radius-child radius col-12 col-md-6">*/}
                {/*                <div*/}
                {/*                    className="col-inner pr-4 d-flex flex-column flex-wrap flex-lg-row align-items-center h-100 position-relative">*/}
                {/*                    <label className="SofiaPro-SemiBold mb-3 mb-md-0" htmlFor="radiusProx">Within radius*/}
                {/*                        of:</label>*/}
                {/*                    <div className="slider slider-horizontal" id="" style="margin-bottom: 0px;">*/}
                {/*                        <div className="slider-track">*/}
                {/*                            <div className="slider-track-low" style="left: 0px; width: 0%;"></div>*/}
                {/*                            <div className="slider-selection tick-slider-selection"*/}
                {/*                                 style="left: 0%; width: 50%;"></div>*/}
                {/*                            <div className="slider-track-high" style="right: 0px; width: 50%;"></div>*/}
                {/*                        </div>*/}
                {/*                        <div className="tooltip tooltip-main top" role="presentation"*/}
                {/*                             style="left: 50%;">*/}
                {/*                            <div className="tooltip-arrow"></div>*/}
                {/*                            <div className="tooltip-inner">4</div>*/}
                {/*                        </div>*/}
                {/*                        <div className="tooltip tooltip-min top" role="presentation">*/}
                {/*                            <div className="tooltip-arrow"></div>*/}
                {/*                            <div className="tooltip-inner"></div>*/}
                {/*                        </div>*/}
                {/*                        <div className="tooltip tooltip-max top" role="presentation">*/}
                {/*                            <div className="tooltip-arrow"></div>*/}
                {/*                            <div className="tooltip-inner"></div>*/}
                {/*                        </div>*/}
                {/*                        <div className="slider-tick-label-container" style="margin-left: 0px;">*/}
                {/*                            <div className="slider-tick-label label-in-selection"*/}
                {/*                                 style="width: 0px;">5*/}
                {/*                            </div>*/}
                {/*                            <div className="slider-tick-label label-in-selection"*/}
                {/*                                 style="width: 0px;">10*/}
                {/*                            </div>*/}
                {/*                            <div className="slider-tick-label label-in-selection"*/}
                {/*                                 style="width: 0px;">25*/}
                {/*                            </div>*/}
                {/*                            <div className="slider-tick-label label-in-selection label-is-selection"*/}
                {/*                                 style="width: 0px;">50*/}
                {/*                            </div>*/}
                {/*                            <div className="slider-tick-label" style="width: 0px;">100</div>*/}
                {/*                            <div className="slider-tick-label" style="width: 0px;">200</div>*/}
                {/*                            <div className="slider-tick-label" style="width: 0px;">England</div>*/}
                {/*                        </div>*/}
                {/*                        <div className="slider-tick-container">*/}
                {/*                            <div className="slider-tick in-selection" style="left: 0%;"></div>*/}
                {/*                            <div className="slider-tick in-selection" style="left: 16.6667%;"></div>*/}
                {/*                            <div className="slider-tick in-selection" style="left: 33.3333%;"></div>*/}
                {/*                            <div className="slider-tick in-selection" style="left: 50%;"></div>*/}
                {/*                            <div className="slider-tick" style="left: 66.6667%;"></div>*/}
                {/*                            <div className="slider-tick" style="left: 83.3333%;"></div>*/}
                {/*                            <div className="slider-tick" style="left: 100%;"></div>*/}
                {/*                        </div>*/}
                {/*                        <div className="slider-handle min-slider-handle" role="slider" aria-valuemin="0"*/}
                {/*                             aria-valuemax="10" aria-valuenow="4" tabIndex="0" style="left: 50%;"></div>*/}
                {/*                        <div className="slider-handle max-slider-handle hide" role="slider"*/}
                {/*                             aria-valuemin="0" aria-valuemax="10" aria-valuenow="1" tabIndex="0"*/}
                {/*                             style="left: 0%;"></div>*/}
                {/*                    </div>*/}
                {/*                    <input className="" type="text" id="radiusProx" name="radius" data-slider-value="4"*/}
                {/*                           data-value="4" value="4" style="display: none;">*/}

                {/*                </div>*/}
                {/*            </div>*/}

                {/*        </div>*/}
                {/*        <div className="select-proximity filter-section row">*/}
                {/*            <div className="filter-section-child col-6 col-md-4 col-lg-2">*/}
                {/*                <div className="select-parent w-100">*/}
                {/*                    <label className="font-14 SofiaPro-Medium"*/}
                {/*                           htmlFor="resultspage_waitingtime_dropdown">*/}
                {/*                        Waiting time*/}
                {/*                    </label>*/}
                {/*                    <div className="select-wrapper position-relative ">*/}
                {/*                        <div*/}
                {/*                            className="dropdown bootstrap-select select-picker highlight-search-dropdown form-control">*/}
                {/*                            <select className="select-picker highlight-search-dropdown form-control"*/}
                {/*                                    id="resultspage_waitingtime_dropdown" data-live-search=""*/}
                {/*                                    name="waiting_time" tabIndex="-98">*/}
                {/*                                <option name="View All" id="waiting_time_0" value="0" className="">*/}
                {/*                                    View All*/}
                {/*                                </option>*/}
                {/*                                <option name="Up to 10 Weeks" id="waiting_time_10" value="10"*/}
                {/*                                        className="">*/}
                {/*                                    Up to 10 Weeks*/}
                {/*                                </option>*/}
                {/*                                <option name="Up to 18 Weeks" id="waiting_time_18" value="18"*/}
                {/*                                        className="">*/}
                {/*                                    Up to 18 Weeks*/}
                {/*                                </option>*/}
                {/*                                <option name="Up to 21 Weeks" id="waiting_time_21" value="21"*/}
                {/*                                        className="">*/}
                {/*                                    Up to 21 Weeks*/}
                {/*                                </option>*/}
                {/*                                <option name="Up to 24 Weeks" id="waiting_time_24" value="24"*/}
                {/*                                        className="">*/}
                {/*                                    Up to 24 Weeks*/}
                {/*                                </option>*/}
                {/*                            </select>*/}
                {/*                            <button type="button" className=" dropdown-toggle" data-toggle="dropdown"*/}
                {/*                                    role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox"*/}
                {/*                                    aria-expanded="false" data-id="resultspage_waitingtime_dropdown"*/}
                {/*                                    title="View All" data-boundary="window">*/}
                {/*                                <div className="filter-option">*/}
                {/*                                    <div className="filter-option-inner">*/}
                {/*                                        <div className="filter-option-inner-inner">View All</div>*/}
                {/*                                    </div>*/}
                {/*                                </div>*/}
                {/*                            </button>*/}
                {/*                            <div className="dropdown-menu ">*/}
                {/*                                <div className="inner show" role="listbox" id="bs-select-2"*/}
                {/*                                     tabIndex="-1">*/}
                {/*                                    <ul className="dropdown-menu inner show" role="presentation"></ul>*/}
                {/*                                </div>*/}
                {/*                            </div>*/}
                {/*                        </div>*/}
                {/*                        <svg className="position-absolute v-c" xmlns="http://www.w3.org/2000/svg"*/}
                {/*                             width="18" height="11" viewBox="0 0 18 11">*/}
                {/*                            <g>*/}
                {/*                                <g>*/}
                {/*                                    <path*/}
                {/*                                        d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>*/}
                {/*                                </g>*/}
                {/*                            </g>*/}
                {/*                        </svg>*/}
                {/*                    </div>*/}
                {/*                </div>*/}
                {/*                <a tabIndex="0" data-offset="0 5px" className="help-link"*/}
                {/*                   data-toggle="popover-max-width" data-content="*/}
                {/*                     <p>*/}
                {/*                         Select the waiting time most suitable for your needs.*/}
                {/*                     </p>*/}
                {/*                     " data-trigger="hover" data-placement="top" data-html="true" data-original-title=""*/}
                {/*                   title=""><!--?xml version="1.0" encoding="utf-8"?-->*/}
                {/*                    <svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.55 28.55">*/}
                {/*                        <title>4Artboard 20</title>*/}
                {/*                        <g data-name="Layer 1">*/}
                {/*                            <circle fill="#037098" cx="14.27" cy="14.27" r="14.27"></circle>*/}
                {/*                            <path fill="#fff"*/}
                {/*                                  d="M13.28,19a6,6,0,0,0-.47,1.67c0,.21.11.36.31.36.52-.05,1.88-1.45,2-1.66a.15.15,0,0,1,.24,0l.28.29c.11.1.16.15.05.26a6.47,6.47,0,0,1-4.81,2.7.66.66,0,0,1-.75-.72,30,30,0,0,1,1.45-4.63l.73-2a8.7,8.7,0,0,0,.42-1.51.28.28,0,0,0-.31-.31c-.42,0-1.62,1.35-2,1.77a.2.2,0,0,1-.31,0l-.26-.24c-.11-.08-.16-.13-.11-.23s2.5-3.18,4.79-3.18c.62,0,.94.32.94.84a10.2,10.2,0,0,1-.78,2.7ZM13.49,6.1A1.65,1.65,0,0,1,15.1,4.54,1.58,1.58,0,0,1,16.87,6a1.8,1.8,0,0,1-1.72,1.67A1.56,1.56,0,0,1,13.49,6.1Z"></path>*/}
                {/*                        </g>*/}
                {/*                    </svg>*/}
                {/*                </a>*/}
                {/*            </div>*/}
                {/*            <div className="filter-section-child col-6 col-md-4 col-lg-2">*/}
                {/*                <div className="select-parent w-100">*/}
                {/*                    <label className="font-14 SofiaPro-Medium" htmlFor="">*/}
                {/*                        NHS User Rating*/}
                {/*                    </label>*/}
                {/*                    <div className="select-wrapper position-relative ">*/}
                {/*                        <div*/}
                {/*                            className="dropdown bootstrap-select select-picker highlight-search-dropdown _results-page-select _highlight form-control">*/}
                {/*                            <select*/}
                {/*                                className="select-picker highlight-search-dropdown _results-page-select _highlight form-control"*/}
                {/*                                data-live-search="" name="user_rating" tabIndex="-98">*/}
                {/*                                <option name="View All" id="user_rating_0" value="0" className="">*/}
                {/*                                    View All*/}
                {/*                                </option>*/}
                {/*                                <option name="5" id="user_rating_5" value="5" className="">*/}
                {/*                                    5*/}
                {/*                                </option>*/}
                {/*                                <option name="4+" id="user_rating_4" value="4" className="">*/}
                {/*                                    4+*/}
                {/*                                </option>*/}
                {/*                                <option name="3+" id="user_rating_3" value="3" className="">*/}
                {/*                                    3+*/}
                {/*                                </option>*/}
                {/*                                <option name="2+" id="user_rating_2" value="2" className="">*/}
                {/*                                    2+*/}
                {/*                                </option>*/}
                {/*                                <option name="1+" id="user_rating_1" value="1" className="">*/}
                {/*                                    1+*/}
                {/*                                </option>*/}
                {/*                            </select>*/}
                {/*                            <button type="button" className=" dropdown-toggle" data-toggle="dropdown"*/}
                {/*                                    role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox"*/}
                {/*                                    aria-expanded="false" title="View All" data-boundary="window">*/}
                {/*                                <div className="filter-option">*/}
                {/*                                    <div className="filter-option-inner">*/}
                {/*                                        <div className="filter-option-inner-inner">View All</div>*/}
                {/*                                    </div>*/}
                {/*                                </div>*/}
                {/*                            </button>*/}
                {/*                            <div className="dropdown-menu ">*/}
                {/*                                <div className="inner show" role="listbox" id="bs-select-3"*/}
                {/*                                     tabIndex="-1">*/}
                {/*                                    <ul className="dropdown-menu inner show" role="presentation"></ul>*/}
                {/*                                </div>*/}
                {/*                            </div>*/}
                {/*                        </div>*/}
                {/*                        <svg className="position-absolute v-c" xmlns="http://www.w3.org/2000/svg"*/}
                {/*                             width="18" height="11" viewBox="0 0 18 11">*/}
                {/*                            <g>*/}
                {/*                                <g>*/}
                {/*                                    <path*/}
                {/*                                        d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>*/}
                {/*                                </g>*/}
                {/*                            </g>*/}
                {/*                        </svg>*/}
                {/*                    </div>*/}
                {/*                </div>*/}
                {/*                <a tabIndex="0" data-offset="0 5px" className="help-link"*/}
                {/*                   data-toggle="popover-max-width" data-content="*/}
                {/*                     <p>*/}
                {/*                         Five star rating system based on feedback provided by users of the NHS (five stars being the best). Information is not available on some hospitals.*/}
                {/*                     </p>*/}
                {/*                     " data-trigger="hover" data-placement="top" data-html="true" data-original-title=""*/}
                {/*                   title=""><!--?xml version="1.0" encoding="utf-8"?-->*/}
                {/*                    <svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.55 28.55">*/}
                {/*                        <title>4Artboard 20</title>*/}
                {/*                        <g data-name="Layer 1">*/}
                {/*                            <circle fill="#037098" cx="14.27" cy="14.27" r="14.27"></circle>*/}
                {/*                            <path fill="#fff"*/}
                {/*                                  d="M13.28,19a6,6,0,0,0-.47,1.67c0,.21.11.36.31.36.52-.05,1.88-1.45,2-1.66a.15.15,0,0,1,.24,0l.28.29c.11.1.16.15.05.26a6.47,6.47,0,0,1-4.81,2.7.66.66,0,0,1-.75-.72,30,30,0,0,1,1.45-4.63l.73-2a8.7,8.7,0,0,0,.42-1.51.28.28,0,0,0-.31-.31c-.42,0-1.62,1.35-2,1.77a.2.2,0,0,1-.31,0l-.26-.24c-.11-.08-.16-.13-.11-.23s2.5-3.18,4.79-3.18c.62,0,.94.32.94.84a10.2,10.2,0,0,1-.78,2.7ZM13.49,6.1A1.65,1.65,0,0,1,15.1,4.54,1.58,1.58,0,0,1,16.87,6a1.8,1.8,0,0,1-1.72,1.67A1.56,1.56,0,0,1,13.49,6.1Z"></path>*/}
                {/*                        </g>*/}
                {/*                    </svg>*/}
                {/*                </a>*/}
                {/*            </div>*/}
                {/*            <div className="filter-section-child col-6 col-md-4 col-lg-2">*/}
                {/*                <div className="select-parent ">*/}
                {/*                    <label className="font-14 SofiaPro-Medium" htmlFor="">*/}
                {/*                        Care Quality Rating*/}
                {/*                    </label>*/}
                {/*                    <div className="select-wrapper position-relative ">*/}
                {/*                        <div*/}
                {/*                            className="dropdown bootstrap-select select-picker highlight-search-dropdown _results-page-select _highlight form-control">*/}
                {/*                            <select*/}
                {/*                                className="select-picker highlight-search-dropdown _results-page-select _highlight form-control"*/}
                {/*                                data-live-search="" name="quality_rating" tabIndex="-98">*/}
                {/*                                <option name="View All" id="quality_rating_0" value="0" className="">*/}
                {/*                                    View All*/}
                {/*                                </option>*/}
                {/*                                <option name="Outstanding Only" id="quality_rating_1" value="1"*/}
                {/*                                        className="">*/}
                {/*                                    Outstanding Only*/}
                {/*                                </option>*/}
                {/*                                <option name="Good or better" id="quality_rating_2" value="2"*/}
                {/*                                        className="">*/}
                {/*                                    Good or better*/}
                {/*                                </option>*/}
                {/*                                <option name="Requires Improvement or better" id="quality_rating_3"*/}
                {/*                                        value="3" className="">*/}
                {/*                                    Requires Improvement or better*/}
                {/*                                </option>*/}
                {/*                                <option name="Inadequate or better" id="quality_rating_4" value="4"*/}
                {/*                                        className="">*/}
                {/*                                    Inadequate or better*/}
                {/*                                </option>*/}
                {/*                            </select>*/}
                {/*                            <button type="button" className=" dropdown-toggle" data-toggle="dropdown"*/}
                {/*                                    role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox"*/}
                {/*                                    aria-expanded="false" title="View All" data-boundary="window">*/}
                {/*                                <div className="filter-option">*/}
                {/*                                    <div className="filter-option-inner">*/}
                {/*                                        <div className="filter-option-inner-inner">View All</div>*/}
                {/*                                    </div>*/}
                {/*                                </div>*/}
                {/*                            </button>*/}
                {/*                            <div className="dropdown-menu ">*/}
                {/*                                <div className="inner show" role="listbox" id="bs-select-4"*/}
                {/*                                     tabIndex="-1">*/}
                {/*                                    <ul className="dropdown-menu inner show" role="presentation"></ul>*/}
                {/*                                </div>*/}
                {/*                            </div>*/}
                {/*                        </div>*/}
                {/*                        <svg className="position-absolute v-c" xmlns="http://www.w3.org/2000/svg"*/}
                {/*                             width="18" height="11" viewBox="0 0 18 11">*/}
                {/*                            <g>*/}
                {/*                                <g>*/}
                {/*                                    <path*/}
                {/*                                        d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>*/}
                {/*                                </g>*/}
                {/*                            </g>*/}
                {/*                        </svg>*/}
                {/*                    </div>*/}
                {/*                </div>*/}
                {/*                <a tabIndex="0" data-offset="0 5px" className="help-link"*/}
                {/*                   data-toggle="popover-max-width" data-content="*/}
                {/*                     <p>*/}
                {/*                         The Quality Care Commission evaluates all hospitals and rates them as Outstanding, Good, Requires Improvement or Inadequate. Some hospitals have not been reviewed yet.*/}
                {/*                     </p>*/}
                {/*                     " data-trigger="hover" data-placement="top" data-html="true" data-original-title=""*/}
                {/*                   title=""><!--?xml version="1.0" encoding="utf-8"?-->*/}
                {/*                    <svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.55 28.55">*/}
                {/*                        <title>4Artboard 20</title>*/}
                {/*                        <g data-name="Layer 1">*/}
                {/*                            <circle fill="#037098" cx="14.27" cy="14.27" r="14.27"></circle>*/}
                {/*                            <path fill="#fff"*/}
                {/*                                  d="M13.28,19a6,6,0,0,0-.47,1.67c0,.21.11.36.31.36.52-.05,1.88-1.45,2-1.66a.15.15,0,0,1,.24,0l.28.29c.11.1.16.15.05.26a6.47,6.47,0,0,1-4.81,2.7.66.66,0,0,1-.75-.72,30,30,0,0,1,1.45-4.63l.73-2a8.7,8.7,0,0,0,.42-1.51.28.28,0,0,0-.31-.31c-.42,0-1.62,1.35-2,1.77a.2.2,0,0,1-.31,0l-.26-.24c-.11-.08-.16-.13-.11-.23s2.5-3.18,4.79-3.18c.62,0,.94.32.94.84a10.2,10.2,0,0,1-.78,2.7ZM13.49,6.1A1.65,1.65,0,0,1,15.1,4.54,1.58,1.58,0,0,1,16.87,6a1.8,1.8,0,0,1-1.72,1.67A1.56,1.56,0,0,1,13.49,6.1Z"></path>*/}
                {/*                        </g>*/}
                {/*                    </svg>*/}
                {/*                </a>*/}
                {/*            </div>*/}
                {/*            <div className="filter-section-child col-6 col-md-4 col-lg-2">*/}
                {/*                <div className="select-parent w-100">*/}
                {/*                    <label className="font-14 SofiaPro-Medium" htmlFor="">*/}
                {/*                        Hospital Type*/}
                {/*                    </label>*/}
                {/*                    <div className="select-wrapper position-relative ">*/}
                {/*                        <div*/}
                {/*                            className="dropdown bootstrap-select select-picker highlight-search-dropdown _results-page-select _highlight form-control">*/}
                {/*                            <select*/}
                {/*                                className="select-picker highlight-search-dropdown _results-page-select _highlight form-control"*/}
                {/*                                data-live-search="" name="hospital_type" tabIndex="-98">*/}
                {/*                                <option name="All Hospitals" id="hospital_type_0" value="0"*/}
                {/*                                        className="">*/}
                {/*                                    All Hospitals*/}
                {/*                                </option>*/}
                {/*                                <option name="Private Hospitals" id="hospital_type_1" value="1"*/}
                {/*                                        className="">*/}
                {/*                                    Private Hospitals*/}
                {/*                                </option>*/}
                {/*                                <option name="NHS Hospitals" id="hospital_type_2" value="2"*/}
                {/*                                        className="">*/}
                {/*                                    NHS Hospitals*/}
                {/*                                </option>*/}
                {/*                            </select>*/}
                {/*                            <button type="button" className=" dropdown-toggle" data-toggle="dropdown"*/}
                {/*                                    role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox"*/}
                {/*                                    aria-expanded="false" title="All Hospitals" data-boundary="window">*/}
                {/*                                <div className="filter-option">*/}
                {/*                                    <div className="filter-option-inner">*/}
                {/*                                        <div className="filter-option-inner-inner">All Hospitals</div>*/}
                {/*                                    </div>*/}
                {/*                                </div>*/}
                {/*                            </button>*/}
                {/*                            <div className="dropdown-menu ">*/}
                {/*                                <div className="inner show" role="listbox" id="bs-select-5"*/}
                {/*                                     tabIndex="-1">*/}
                {/*                                    <ul className="dropdown-menu inner show" role="presentation"></ul>*/}
                {/*                                </div>*/}
                {/*                            </div>*/}
                {/*                        </div>*/}
                {/*                        <svg className="position-absolute v-c" xmlns="http://www.w3.org/2000/svg"*/}
                {/*                             width="18" height="11" viewBox="0 0 18 11">*/}
                {/*                            <g>*/}
                {/*                                <g>*/}
                {/*                                    <path*/}
                {/*                                        d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>*/}
                {/*                                </g>*/}
                {/*                            </g>*/}
                {/*                        </svg>*/}
                {/*                    </div>*/}
                {/*                </div>*/}
                {/*                <a tabIndex="0" data-offset="0 5px" className="help-link"*/}
                {/*                   data-toggle="popover-max-width" data-content="*/}
                {/*                     <p>*/}
                {/*                         Select which hospital type best suits your needs. Remember you can choose to have an NHS treatment at most private hospitals in England and Wales.*/}
                {/*                     </p>*/}
                {/*                     " data-trigger="hover" data-placement="top" data-html="true" data-original-title=""*/}
                {/*                   title=""><!--?xml version="1.0" encoding="utf-8"?-->*/}
                {/*                    <svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.55 28.55">*/}
                {/*                        <title>4Artboard 20</title>*/}
                {/*                        <g data-name="Layer 1">*/}
                {/*                            <circle fill="#037098" cx="14.27" cy="14.27" r="14.27"></circle>*/}
                {/*                            <path fill="#fff"*/}
                {/*                                  d="M13.28,19a6,6,0,0,0-.47,1.67c0,.21.11.36.31.36.52-.05,1.88-1.45,2-1.66a.15.15,0,0,1,.24,0l.28.29c.11.1.16.15.05.26a6.47,6.47,0,0,1-4.81,2.7.66.66,0,0,1-.75-.72,30,30,0,0,1,1.45-4.63l.73-2a8.7,8.7,0,0,0,.42-1.51.28.28,0,0,0-.31-.31c-.42,0-1.62,1.35-2,1.77a.2.2,0,0,1-.31,0l-.26-.24c-.11-.08-.16-.13-.11-.23s2.5-3.18,4.79-3.18c.62,0,.94.32.94.84a10.2,10.2,0,0,1-.78,2.7ZM13.49,6.1A1.65,1.65,0,0,1,15.1,4.54,1.58,1.58,0,0,1,16.87,6a1.8,1.8,0,0,1-1.72,1.67A1.56,1.56,0,0,1,13.49,6.1Z"></path>*/}
                {/*                        </g>*/}
                {/*                    </svg>*/}
                {/*                </a>*/}
                {/*            </div>*/}
                {/*            <div className="filter-section-child col-6 col-md-4 col-lg-2">*/}
                {/*                <div className="select-parent w-100">*/}
                {/*                    <label className="font-14 SofiaPro-Medium" htmlFor="">*/}
                {/*                        Insurance*/}
                {/*                    </label>*/}
                {/*                    <div className="select-wrapper position-relative ">*/}
                {/*                        <div*/}
                {/*                            className="dropdown bootstrap-select highlight-search-dropdown select-picker form-control">*/}
                {/*                            <select className="highlight-search-dropdown select-picker form-control"*/}
                {/*                                    data-live-search="true" name="policy_id" tabIndex="-98">*/}
                {/*                                <option name="View All" id="group_policy_id_0" value="0" className="">*/}
                {/*                                    View All*/}
                {/*                                </option>*/}
                {/*                                <option name="Aviva" id="group_policy_id_1" value="1" disabled=""*/}
                {/*                                        className="">*/}
                {/*                                    Aviva*/}
                {/*                                </option>*/}
                {/*                                <option name="Personal Care" id="policy_id_1" value="1"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Personal Care*/}
                {/*                                </option>*/}
                {/*                                <option name="Select Care" id="policy_id_2" value="2"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Select Care*/}
                {/*                                </option>*/}
                {/*                                <option name="Children" id="policy_id_3" value="3"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Children*/}
                {/*                                </option>*/}
                {/*                                <option name="Express Care" id="policy_id_4" value="4"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Express Care*/}
                {/*                                </option>*/}
                {/*                                <option name="Exclusive" id="policy_id_5" value="5"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Exclusive*/}
                {/*                                </option>*/}
                {/*                                <option name="Company Connect" id="policy_id_6" value="6"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Company Connect*/}
                {/*                                </option>*/}
                {/*                                <option name="Company Healthcover" id="policy_id_7" value="7"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Company Healthcover*/}
                {/*                                </option>*/}
                {/*                                <option name="Fair &amp; Square" id="policy_id_8" value="8"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Fair &amp; Square*/}
                {/*                                </option>*/}
                {/*                                <option name="Speedy Diagnostics" id="policy_id_9" value="9"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Speedy Diagnostics*/}
                {/*                                </option>*/}
                {/*                                <option name="Capital Option" id="policy_id_10" value="10"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Capital Option*/}
                {/*                                </option>*/}
                {/*                                <option name="Trust Hospital" id="policy_id_11" value="11"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Trust Hospital*/}
                {/*                                </option>*/}
                {/*                                <option name="Axa" id="group_policy_id_3" value="3" disabled=""*/}
                {/*                                        className="">*/}
                {/*                                    Axa*/}
                {/*                                </option>*/}
                {/*                                <option name="General" id="policy_id_15" value="15"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    General*/}
                {/*                                </option>*/}
                {/*                                <option name="Cataract Surgery" id="policy_id_16" value="16"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Cataract Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Oral Surgery" id="policy_id_17" value="17"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Oral Surgery*/}
                {/*                                </option>*/}
                {/*                                <option name="Diagnostic Imaging - MRI" id="policy_id_18" value="18"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Diagnostic Imaging - MRI*/}
                {/*                                </option>*/}
                {/*                                <option name="Diagnostic Imaging - CT Scan" id="policy_id_19" value="19"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Diagnostic Imaging - CT Scan*/}
                {/*                                </option>*/}
                {/*                                <option name="Diagnostic Imaging - PET Scan" id="policy_id_20"*/}
                {/*                                        value="20" className="suboption policies">*/}
                {/*                                    Diagnostic Imaging - PET Scan*/}
                {/*                                </option>*/}
                {/*                                <option name="Simply Health" id="group_policy_id_2" value="2"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Simply Health*/}
                {/*                                </option>*/}
                {/*                                <option name="Metropolitan" id="policy_id_12" value="12"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Metropolitan*/}
                {/*                                </option>*/}
                {/*                                <option name="National" id="policy_id_13" value="13"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    National*/}
                {/*                                </option>*/}
                {/*                                <option name="Connections" id="policy_id_14" value="14"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Connections*/}
                {/*                                </option>*/}
                {/*                                <option name="Vitality Health" id="group_policy_id_4" value="4"*/}
                {/*                                        disabled="" className="">*/}
                {/*                                    Vitality Health*/}
                {/*                                </option>*/}
                {/*                                <option name="Local" id="policy_id_21" value="21"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Local*/}
                {/*                                </option>*/}
                {/*                                <option name="Countrywide" id="policy_id_22" value="22"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    Countrywide*/}
                {/*                                </option>*/}
                {/*                                <option name="London Care" id="policy_id_23" value="23"*/}
                {/*                                        className="suboption policies">*/}
                {/*                                    London Care*/}
                {/*                                </option>*/}
                {/*                            </select>*/}
                {/*                            <button type="button" className=" dropdown-toggle" data-toggle="dropdown"*/}
                {/*                                    role="combobox" aria-owns="bs-select-6" aria-haspopup="listbox"*/}
                {/*                                    aria-expanded="false" title="View All" data-boundary="window">*/}
                {/*                                <div className="filter-option">*/}
                {/*                                    <div className="filter-option-inner">*/}
                {/*                                        <div className="filter-option-inner-inner">View All</div>*/}
                {/*                                    </div>*/}
                {/*                                </div>*/}
                {/*                            </button>*/}
                {/*                            <div className="dropdown-menu ">*/}
                {/*                                <div className="bs-searchbox"><input type="search"*/}
                {/*                                                                     className="form-control"*/}
                {/*                                                                     autoComplete="off" role="combobox"*/}
                {/*                                                                     aria-label="Search"*/}
                {/*                                                                     aria-controls="bs-select-6"*/}
                {/*                                                                     aria-autocomplete="list"></div>*/}
                {/*                                <div className="inner show" role="listbox" id="bs-select-6"*/}
                {/*                                     tabIndex="-1">*/}
                {/*                                    <ul className="dropdown-menu inner show" role="presentation"></ul>*/}
                {/*                                </div>*/}
                {/*                            </div>*/}
                {/*                        </div>*/}
                {/*                        <svg className="position-absolute v-c" xmlns="http://www.w3.org/2000/svg"*/}
                {/*                             width="18" height="11" viewBox="0 0 18 11">*/}
                {/*                            <g>*/}
                {/*                                <g>*/}
                {/*                                    <path*/}
                {/*                                        d="M9.11 7.064L2.38.336A.975.975 0 0 0 1.686.05.976.976 0 0 0 .99.336L.4.926a.976.976 0 0 0-.287.695c0 .264.102.51.288.696l8.01 8.011a.976.976 0 0 0 .698.287c.265 0 .513-.1.699-.287l8.003-8.004a.976.976 0 0 0 .288-.695.976.976 0 0 0-.288-.696l-.59-.59a.985.985 0 0 0-1.39 0z"></path>*/}
                {/*                                </g>*/}
                {/*                            </g>*/}
                {/*                        </svg>*/}
                {/*                    </div>*/}
                {/*                </div>*/}
                {/*                <a tabIndex="0" data-offset="0 5px" className="help-link"*/}
                {/*                   data-toggle="popover-max-width" data-content="*/}
                {/*                     <p>*/}
                {/*                         Select your insurance provider and policy type.*/}
                {/*                     </p>*/}
                {/*                     " data-trigger="hover" data-placement="top" data-html="true" data-original-title=""*/}
                {/*                   title=""><!--?xml version="1.0" encoding="utf-8"?-->*/}
                {/*                    <svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.55 28.55">*/}
                {/*                        <title>4Artboard 20</title>*/}
                {/*                        <g data-name="Layer 1">*/}
                {/*                            <circle fill="#037098" cx="14.27" cy="14.27" r="14.27"></circle>*/}
                {/*                            <path fill="#fff"*/}
                {/*                                  d="M13.28,19a6,6,0,0,0-.47,1.67c0,.21.11.36.31.36.52-.05,1.88-1.45,2-1.66a.15.15,0,0,1,.24,0l.28.29c.11.1.16.15.05.26a6.47,6.47,0,0,1-4.81,2.7.66.66,0,0,1-.75-.72,30,30,0,0,1,1.45-4.63l.73-2a8.7,8.7,0,0,0,.42-1.51.28.28,0,0,0-.31-.31c-.42,0-1.62,1.35-2,1.77a.2.2,0,0,1-.31,0l-.26-.24c-.11-.08-.16-.13-.11-.23s2.5-3.18,4.79-3.18c.62,0,.94.32.94.84a10.2,10.2,0,0,1-.78,2.7ZM13.49,6.1A1.65,1.65,0,0,1,15.1,4.54,1.58,1.58,0,0,1,16.87,6a1.8,1.8,0,0,1-1.72,1.67A1.56,1.56,0,0,1,13.49,6.1Z"></path>*/}
                {/*                        </g>*/}
                {/*                    </svg>*/}
                {/*                </a>*/}
                {/*            </div>*/}
                {/*            <div*/}
                {/*                className="filter-section-child col-6 col-md-4 col-lg-2 d-flex flex-column justify-content-end align-items-end">*/}
                {/*                <a id="clear_filters" style="" className="col-grey pb-2 border-0"*/}
                {/*                   href="javascript:void(0);" role="button">*/}
                {/*                    <span>Clear filters</span>*/}
                {/*                </a>*/}
                {/*                <input type="submit"*/}
                {/*                       className="btn btn-blue d-block btn-submit-results font-16 py-2 px-3 w-100 text-center"*/}
                {/*                       value="Update Results" role="button" style="">*/}
                {/*                    <i className=""></i>*/}


                {/*            </div>*/}
                {/*        </div>*/}
                {/*    </div>*/}
                {/*</div>*/}
            </form>
        );
    }
}

export default ResultsPageForm;
