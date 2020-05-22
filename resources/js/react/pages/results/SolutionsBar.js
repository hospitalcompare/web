import React from 'react';
import MoreInfoIcon from "../../svg/MoreInfoIcon";
import Shortlist from "./Shortlist";
import CompareIcon from "../../svg/CompareIcon";
import {connect} from "react-redux";
import CompareHeart from "../../svg/CompareHeart";

const SolutionsBar = ({haveShortlistedHospitals, privateHospitalCount, nhsHospitalCount}) => {
    return (
        <div className="compare-hospitals-bar compare-hospitals-bar_desktop">
            <div className={`compare-hospitals-content`}>
                <div className="container">
                    <div className="row flex-nowrap">
                        <div className={`col col-3 ${haveShortlistedHospitals ? 'd-none' : 'd-block'}`} id="no_items_added">
                            <div className="col-inner pr-3">
                                <div className="col-header_small">
                                    <p className="font-16 SofiaPro-SemiBold pb-4 grey-border-bottom">You haven’t
                                        added any
                                        hospitals to compare yet. </p>
                                    <p>Click the the&nbsp;
                                        <CompareHeart/>&nbsp;next to the hospital to add the chosen
                                        hospital into the comparison dashboard.</p>
                                </div>
                            </div>
                        </div>
                        <div id="compare_hospitals_headings" className={`col col-3 ${haveShortlistedHospitals ? 'd-block' : 'd-none'}`}>
                            <div className="col-inner h-100">
                                <div className="col-header pr-3">
                                    <p className="SofiaPro-SemiBold mb-1">You are comparing:</p>
                                    <p className="mb-3"><span id="nhs-hospital-count">{nhsHospitalCount}</span>&nbsp;NHS hospital(s)
                                        &<br/><span id="private-hospital-count">{privateHospitalCount}</span>&nbsp;Private hospital(s)
                                    </p>
                                    <div className="form-wrapper pt-3 grey-border-top d-none">
                                        Enquire all button
                                    </div>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Hospital Type&nbsp;&nbsp;
                                        <span tabIndex="0" data-offset="0 5px" className="help-link">
                                            <MoreInfoIcon/>
                                        </span>
                                    </span>
                                </div>
                                <div className="cell">
                                <span className="position-relative">Average Waiting Time&nbsp;&nbsp;
                                    <span tabIndex="0" data-offset="0 5px"
                                          className="help-link">
                                        <MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">NHS User Rating&nbsp;&nbsp;
                                        <span tabIndex="0" data-offset="0 5px"
                                              className="help-link">
                                            <MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">% Operations cancelled&nbsp;&nbsp;
                                        <span tabIndex="0" data-offset="0 5px"
                                              className="help-link">
                                            <MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                <span className="position-relative">Care Quality Rating&nbsp;&nbsp;
                                    <span tabIndex="0"
                                          className="help-link">
                                        <MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Friends & Family Rating&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link">
                                            <MoreInfoIcon/></span>
                                        </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">NHS Funded Work&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link">
                                            <MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Private Self Pay&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link">
                                            <MoreInfoIcon/></span>
                                        </span>
                                </div>
                                <div className="cell column-break SofiaPro-SemiBold">Care Quality Rating</div>
                                <div className="cell">
                                    <span className="position-relative">Safe&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                        </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Effective&nbsp;&nbsp;
                                    <span tabIndex="0"
                                          className="help-link">
                                        <MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Caring&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Responsive&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Well Led&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell column-break SofiaPro-SemiBold">NHS User Rating</div>
                                <div className="cell">
                                    <span className="position-relative">Cleanliness&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Food & Hydration&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Privacy, Dignity & Wellbeing&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Condition, Appearance & Maintenance&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Dementia Domain&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                                <div className="cell">
                                    <span className="position-relative">Disability Domain&nbsp;&nbsp;
                                        <span tabIndex="0"
                                              className="help-link"><MoreInfoIcon/></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div className="col col-9 mt-0 border-right-0">
                            <div className="row flex-nowrap" id="compare_hospitals_grid">
                                {/*Compare items added here*/}
                                <Shortlist/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    );
};

const mapStateToProps = state => ({
    haveShortlistedHospitals: state.shortlist.haveShortlistedHospitals,
    privateHospitalCount: state.shortlist.privateHospitalCount,
    nhsHospitalCount: state.shortlist.nhsHospitalCount
});

export default connect(mapStateToProps)(SolutionsBar);
