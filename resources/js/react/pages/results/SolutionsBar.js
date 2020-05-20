import React, {Component} from 'react';
import CompareHeart from "../../svg/CompareHeart";
import MoreInfoIcon from "../../svg/MoreInfoIcon";

const SolutionsBar = (props) => {
    const {showShortlist} = props;
    return (
        <div className="compare-hospitals-bar compare-hospitals-bar_desktop">
            {/*<div className="compare-hospitals-header d-flex justify-content-between">*/}
            {/*    <div className="container position-relative d-flex justify-content-between align-items-end h-100">*/}
            {/*        /!*<ul className="solutions-menu align-items-end d-none d-lg-flex mb-0 ml-auto mr-3">*!/*/}
            {/*        /!*    <li className="d-block h-100">*!/*/}
            {/*        /!*        Solution item*!/*/}
            {/*        /!*    </li>*!/*/}
            {/*        /!*</ul>*!/*/}
            {/*        <div id="compare_button_title"*/}
            {/*             className="compare-button-title d-flex align-items-center h-100 ml-auto">*/}
            {/*            <CompareHeart/>*/}
            {/*            <button onClick={this.handleClick}*/}
            {/*                    className="font-26">*/}
            {/*                Compare&nbsp;(<span id="compare_number">0</span>)*/}
            {/*                <span className="compare-arrow ml-3"></span>*/}
            {/*            </button>*/}
            {/*        </div>*/}
            {/*    </div>*/}
            {/*</div>*/}
            <div className={`compare-hospitals-content ${showShortlist ? 'd-block' : ''}`}>
                <div className="container">
                    <div className="row flex-nowrap">
                        <div className="col col-3" id="no_items_added">
                            <div className="col-inner pr-3">
                                <div className="col-header_small">
                                    <p className="font-16 SofiaPro-SemiBold pb-4 grey-border-bottom">You haven’t
                                        added any
                                        hospitals to compare yet. </p>
                                    <p>Click the the&nbsp;
                                        <img width="14" height="12" src="/images/icons/heart.svg"
                                             alt="Heart icon"/>&nbsp;next to the hospital to add the chosen
                                        hospital into the comparison dashboard.</p>
                                </div>
                            </div>
                        </div>
                        <div id="compare_hospitals_headings" className="col col-3 d-none">
                            <div className="col-inner h-100">
                                <div className="col-header pr-3">
                                    <p className="SofiaPro-SemiBold mb-1">You are comparing:</p>
                                    <p className="mb-3"><span id="nhs-hospital-count">0</span>&nbsp;NHS hospital(s)
                                        &<br/><span id="private-hospital-count">0</span>&nbsp;Private hospital(s)
                                    </p>
                                    <div className="form-wrapper pt-3 grey-border-top d-none">
                                        Enquire all button
                                    </div>
                                </div>
                                <div className=""></div>
                                <div className="cell">
                            <span className="position-relative">Hospital Type&nbsp&nbsp;
                                <span tabIndex="0" data-offset="0 5px"
                                      className="help-link">
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
                                      className="help-link"><MoreInfoIcon/></span>
                            </span>
                                </div>
                                <div className="cell">
                            <span className="position-relative">% Operations cancelled&nbsp;&nbsp;
                                <span tabIndex="0" data-offset="0 5px"
                                      className="help-link"><MoreInfoIcon/></span>
                        </span>
                                </div>
                                <div className="cell">
                            <span className="position-relative">Care Quality Rating&nbsp;&nbsp;
                                <span tabIndex="0"
                                      className="help-link"><MoreInfoIcon/></span>
                    </span>
                                </div>
                                <div className="cell">
                            <span className="position-relative">Friends & Family Rating&nbsp;&nbsp;
                                <span tabIndex="0"
                                      className="help-link"><MoreInfoIcon/></span>
                </span>
                                </div>
                                <div className="cell">
                            <span className="position-relative">NHS Funded Work&nbsp;&nbsp;
                                <span tabIndex="0"
                                      className="help-link"><MoreInfoIcon/></span>
        </span>
                                </div>
                                <div className="cell">
                            <span className="position-relative">Private Self Pay&nbsp;&nbsp;
                                <span tabIndex="0"
                                      className="help-link"><MoreInfoIcon/></span>
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
                                      className="help-link"><MoreInfoIcon/></span>
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
        <span tabIndex="0" h
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    );
};

export default SolutionsBar;
