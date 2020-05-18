import React, {Component} from 'react';
import Nav from 'react-bootstrap/Nav';

import Tab from 'react-bootstrap/Tab';
import TabContent from 'react-bootstrap/TabContent';
import TabPane from 'react-bootstrap/TabPane';
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";

import MapIcon from "../../svg/MapIcon";
import '../../scripts/getHtmlStars';
import '../../scripts/getHtmlDashTickValue';
import initializeGMap from '../../scripts/gmapInit';
import WebIcon from "../../svg/WebIcon";
import CallIcon from "../../svg/CallIcon";
import CompareIcon from "../../svg/CompareIcon";
import EnquireIcon from "../../svg/EnquireIcon";


class ResultItem extends Component {
    constructor(props) {
        super(props);
        this.state = {
            showContent: false
        }
    }

    componentDidMount() {
        document.title = 'Hospital Compare - Results';
    }

    toggleContent = () => {
        this.setState((prevState) => ({
            showContent: !prevState.showContent
        }));

        const {id, address: {latitude, longitude}} = this.props;
        initializeGMap(latitude, longitude, `#gmap_${id}`)
    };


    render() {
        const {name, location_specialism, hospital_type, id, rating, waiting_time, cancelled_op} = this.props;
        const {address: {latitude, longitude}} = this.props;
        const {showContent} = this.state;
        return (
            <React.Fragment>
                <div className="result-item mb-3 mb-lg-0" id={`result-item_${id}`}>
                    <div className="container">
                        <div className="result-item-inner position-relative">
                            <button id={`add_to_compare_${id}`}
                                    style={{top: '0', right: '0', padding: '0 0 0 30px !important'}}
                                    className="btn btn-compare position-absolute compare font-12 d-inline-block d-lg-none mt-3 mr-3 shadow-none"
                                    role="button"
                                    data-hospital-type="nhs-hospital">
                                <span>Add to compare</span>
                                <CompareIcon/>
                            </button>
                            <div className="hospital-type nhs-hospital d-lg-none py-1 px-2 bg-nhs">
                                <p className="m-0">NHS Hospital</p>
                            </div>
                            <div className="result-item-section-1">
                                <div
                                    className="hospital-details d-flex align-content-between flex-column w-100 position-relative">
                                    <p title="The Christie Hospital "
                                       className="sort-item-title overflow-ellipsis SofiaPro-SemiBold"
                                       id="item_name_388">
                                        {name}
                                    </p>
                                    {location_specialism !== ""
                                        ? <p className="sort-item-specialism col-grey mb-2">
                                            <strong>Specialism:&nbsp;</strong>
                                            <span>{location_specialism}</span>
                                        </p>
                                        : ""
                                    }
                                    <button
                                        onClick={this.toggleContent}
                                        className="btn btn-more-info font-12 p-0 d-inline-flex align-items-center mr-3 mb-1 shadow-none"
                                        data-target="#corporate_content_hospital_388"
                                        data-tab-target="#map-tab_388">
                                        <MapIcon/>
                                        <span>{showContent ? 'Hide Map -' : 'View Map +'}</span>
                                    </button>

                                    <div
                                        className="btn-area mt-auto d-flex flex-column flex-xl-row align-items-xl-center justify-content-lg-start">
                                        <div className="pill-wrapper">
                                            <p className={`d-none d-lg-inline-block rounded-pill py-1 px-2 ${hospital_type.id === 1 ? 'bg-private' : 'bg-nhs'} m-0 col-white`}>
                                                {hospital_type.id === 1 ? 'Private Hospital' : 'NHS Hospital'}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="result-item-section-2">

                                <div className="result-item-section-2__child">
                                    <div
                                        className="h-50 w-100 d-flex flex-column justify-content-center SofiaPro-Medium"
                                        data-toggle="popover-cqc" data-content="<div class=&quot;container-fluid&quot;>
                                 <div class=&quot;row&quot;>
                                     <div class=&quot;cqc-left col-4 d-flex flex-column justify-content-center align-items-start bg-outstanding text-white border&quot;>
                                         <p class=&quot;mb-0 text-white&quot;>Overall</p>
                                         <p class=&quot;mb-0 text-white text-left&quot;><strong>Outstanding</strong></p>
                                     </div>
                                     <div class=&quot;cqc-right col-8 pr-0&quot;>
                                         <div class=&quot;cqc-table&quot;>
                                             <div class=&quot;cqc-row d-flex justify-content-between&quot;>
                                                 <div class=&quot;cqc-category&quot;>Safe</div>
                                                 <div class=&quot;cqc-rating ml-auto&quot;><strong>Good</strong><span class=&quot;cqc-colour bg-good&quot;></span></div>
                                             </div>
                                             <div class=&quot;cqc-row d-flex justify-content-between&quot;>
                                                 <div class=&quot;cqc-category&quot;>Effective</div>
                                                 <div class=&quot;cqc-rating ml-auto&quot;><strong>Outstanding</strong><span class=&quot;bg-cqc-star&quot;></span></div>
                                             </div>
                                             <div class=&quot;cqc-row d-flex justify-content-between&quot;>
                                                 <div class=&quot;cqc-category&quot;>Caring</div>
                                                 <div class=&quot;cqc-rating ml-auto&quot;><strong>Outstanding</strong><span class=&quot;bg-cqc-star&quot;></span></div>
                                             </div>
                                             <div class=&quot;cqc-row d-flex justify-content-between&quot;>
                                                 <div class=&quot;cqc-category&quot;>Responsive</div>
                                                 <div class=&quot;cqc-rating ml-auto&quot;><strong>Outstanding</strong><span class=&quot;bg-cqc-star&quot;></span></div>
                                             </div>
                                             <div class=&quot;cqc-row d-flex justify-content-between&quot;>
                                                 <div class=&quot;cqc-category&quot;>Well Led</div>
                                                 <div class=&quot;cqc-rating ml-auto&quot;><strong>Outstanding</strong><span class=&quot;bg-cqc-star&quot;></span></div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>" data-trigger="hover" data-placement="bottom" data-html="true"
                                        data-original-title="" title="">
                                        <p className="stat-label d-block w-100 d-lg-none">Care Quality Rating</p>
                                        <p className="text-center col-outstanding">{rating.latest_rating}</p>
                                    </div>
                                </div>

                                <div className="result-item-section-2__child">
                                    <div className="h-50 d-flex flex-column justify-content-center SofiaPro-Medium"
                                         data-toggle="popover" data-content="<div>
                                    <div class=&quot;d-table w-100&quot;>
                                        <div class=&quot;d-table-row&quot;>
                                            <div class=&quot;d-table-cell&quot;></div>
                                            <div class=&quot;d-table-cell SofiaPro-Medium&quot;>Weeks</div>
                                            <div class=&quot;d-table-cell SofiaPro-Medium&quot;>Ranking</div>
                                        </div>
                                        <div class=&quot;d-table-row&quot;>
                                            <div class=&quot;d-table-cell text-left&quot;>Current Waiting Time</div>
                                            <div class=&quot;d-table-cell&quot;>10.2</div>
                                            <div class=&quot;d-table-cell&quot;>1 of 50</div>
                                        </div>
                                        <div class=&quot;d-table-row&quot;>
                                            <div class=&quot;d-table-cell SofiaPro-SemiBold text-left&quot;>Waiting Times for Treated Patients</div>
                                            <div class=&quot;d-table-cell&quot;></div>
                                            <div class=&quot;d-table-cell&quot;></div>
                                        </div>
                                        <div class=&quot;d-table-row&quot;>
                                            <div class=&quot;d-table-cell text-left&quot;>Outpatients Treated</div>
                                            <div class=&quot;d-table-cell&quot;>12.7</div>
                                            <div class=&quot;d-table-cell&quot;>7 of 50</div>
                                        </div>
                                        <div class=&quot;d-table-row&quot;>
                                            <div class=&quot;d-table-cell text-left&quot;>Inpatients Treated</div>
                                            <div class=&quot;d-table-cell&quot;>15.5</div>
                                            <div class=&quot;d-table-cell&quot;>4 of 50</div>
                                        </div>
                                        <div class=&quot;d-table-row&quot;>
                                            <div class=&quot;d-table-cell text-left&quot;>Diagnostics - % waiting 6+ weeks</div>
                                            <div class=&quot;d-table-cell&quot;>-</div>
                                            <div class=&quot;d-table-cell&quot;>-</div>
                                        </div>
                                    </div>
                                    <small>NB - Diagnostics is a % of current waiting list waiting 6+ weeks (national target is 1%)</small>
                                </div>" data-trigger="hover" data-placement="bottom" data-html="true"
                                         data-original-title="" title="">
                                        <p className="stat-label d-block w-100 d-lg-none">Waiting Time</p>
                                        <p>{Math.round(waiting_time[0].avg_waiting_weeks * 100) / 100}<span
                                            className="d-inline d-lg-none">&nbsp;</span>
                                            <br className="d-none d-lg-inline"/>Weeks</p>
                                    </div>
                                </div>


                                <div className="result-item-section-2__child">
                                    <div
                                        className="h-50 d-flex flex-column align-items-center justify-content-center SofiaPro-Medium"
                                        data-toggle="popover" data-content="
                            <ul class=&quot;nhs-user-ratings mb-0&quot;>
                                <li>Cleanliness:&amp;nbsp;<span><strong>99.4%</span></strong></li>
                                <li>Food &amp; Hydration:&amp;nbsp;<span><strong>97.7%</span></strong></li>
                                <li>Privacy, Dignity &amp; Wellbeing:&amp;nbsp;<span><strong>95.7%</span></strong></li>
                                <li>Condition, Appearance &amp; Maintainance:&amp;nbsp;<span><strong>98.4%</span></strong></li>
                                <li>Dementia Domain:&amp;nbsp;            <span><strong>93.5%</span></strong></li>
                                <li>Disability Domain:&amp;nbsp;        <span><strong>89.9%</span></strong></li>
                            </ul>" data-trigger="hover" data-placement="bottom" data-html="true" data-original-title=""
                                        title="">
                                        <p className="stat-label d-block w-100 d-lg-none">NHS User Rating</p>
                                        <span className="d-flex"
                                              dangerouslySetInnerHTML={{__html: getHtmlStars(rating.avg_user_rating)}}>
                                        </span>
                                    </div>
                                </div>


                                <div className="result-item-section-2__child">
                                    <div className="h-50 d-flex flex-column justify-content-center SofiaPro-Medium"
                                         data-toggle="popover" data-content="National average<br /> is 1.58%"
                                         data-trigger="hover" data-placement="bottom" data-html="true"
                                         data-original-title="" title="">
                                        <p className="stat-label d-block w-100 d-lg-none">Operations Cancelled</p>
                                        {cancelled_op !== null ? getHtmlDashTickValue(cancelled_op.perc_cancelled_ops, "%") : "No data"}
                                    </div>
                                </div>

                                <div className="result-item-section-2__child">
                                    <div className="m-0 h-50 d-flex flex-column justify-content-center SofiaPro-Medium"
                                         data-toggle="popover" data-content="National average<br />is 94.01%"
                                         data-trigger="hover" data-placement="bottom" data-html="true"
                                         data-original-title="" title="">
                                        <p className="stat-label d-block w-100 d-lg-none">Friends &amp; Family
                                            Rating</p>
                                        {rating.friends_family_rating !== null ? getHtmlDashTickValue(rating.friends_family_rating, "%") : "No data"}
                                    </div>
                                </div>

                                <div className="result-item-section-2__child">
                                    <div className="d-flex flex-column justify-content-center">
                                        <p className="stat-label d-block w-100 d-lg-none">NHS Funded Work</p>
                                        <p>
                                            <img className="dash-or-tick" src="/images/icons/tick-green.svg"
                                                 alt="Tick icon"/>
                                        </p>
                                    </div>
                                </div>

                                <div className="result-item-section-2__child">
                                    <div className="d-flex flex-column justify-content-center">
                                        <p className="stat-label d-block d-lg-none">Private Self Pay</p>
                                        <p><img className="dash-or-tick" src="/images/icons/dash-black.svg"
                                                alt="Dash icon"/></p>
                                    </div>
                                </div>
                            </div>
                            <div className="result-item-section-3">
                                <div className="row btn-area-cta">
                                    <div className="col-6 col-lg-12">
                                                    <span id="enquire_nhs388"
                                                          className="btn btn-enquire btn-enquire-static-svg btn-brand-secondary-3 enquiry mr-2 btn-block font-12"
                                                          role="button" data-toggle="modal"
                                                          data-target="#hc_modal_contacts_general_388"
                                                          data-hospital-type="nhs-hospital"
                                                          data-hospital-tel="01614463000"
                                                          data-hospital-tel-2="01615164014" data-has-email="1"
                                                          data-hospital-url="https://www.christie.nhs.uk"
                                                          data-hospital-title="The Christie Hospital ">

                                                            <span>Make an enquiry</span>
                                                                <EnquireIcon/>
                                                            </span>
                                    </div>
                                    <div className="col-6 col-lg-12 mt-lg-2">
                                        <div className="row btn-web-call">
                                            <div className="btn-wrapper col-6 ">
                                                <a id="388"
                                                   className="btn  btn-enquire btn-brand-primary-4 enquiry btn-block font-12 rounded-right"
                                                   target="_blank" href="https://www.christie.nhs.uk" role="button"
                                                   data-hospital-type="nhs-hospital">
                                                    <span>Web</span>
                                                    <WebIcon/>
                                                </a>
                                            </div>

                                            <div className="btn-wrapper col-6">
                                                <span id="enquire_nhs388"
                                                      className="btn  btn-enquire btn-brand-primary-4 enquiry btn-block font-12 rounded-left"
                                                      role="button" data-toggle="modal"
                                                      data-target="#hc_modal_contacts_general_388"
                                                      data-hospital-type="nhs-hospital"
                                                      data-hospital-tel="01614463000"
                                                      data-hospital-tel-2="01615164014" data-has-email="1"
                                                      data-hospital-url="https://www.christie.nhs.uk"
                                                      data-hospital-title="The Christie Hospital ">
                                                        <span>Call</span>
                                                    <CallIcon/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div className="col-12 mt-lg-2">
                                        <button id={`add_to_compare_${id}`}
                                                className="btn btn-compare compare btn-block font-12 d-none d-lg-block"
                                                role="button"
                                                data-hospital-type="nhs-hospital">
                                            <span>Add to compare</span>
                                            <CompareIcon/>
                                        </button>
                                    </div>
                                </div>
                                {/*row*/}
                            </div>
                        </div>
                    </div>
                    <div className={`corporate-content w-100 ${showContent ? 'open' : ''}`}
                         id={`corporate_content_hospital_${id}`}>
                        <div className="container">
                            <div className="corporate-content-inner d-flex">
                                <div className="corporate-content-section-1"></div>
                                <div className="corporate-content-section-2 position-relative w-100">
                                    <Tab.Container defaultActiveKey="map" id={`${id}`}>
                                        <Row>
                                            <Col xs={12}>
                                                {/*Nav tabs*/}
                                                <Nav variant="tabs">
                                                    <Nav.Item>
                                                        <Nav.Link title="Map"
                                                                  eventKey="map"
                                                                  data-map-target={`#gmap_${id}`}
                                                                  href={`#map_${id}`}>
                                                            Map
                                                        </Nav.Link>
                                                    </Nav.Item>
                                                    <Nav.Item>
                                                        <Nav.Link title="Consultants"
                                                                  eventKey="consultants">
                                                            Consultants
                                                        </Nav.Link>
                                                    </Nav.Item>
                                                </Nav>
                                            </Col>
                                            {/*Tab panes*/}
                                            <Col xs={12}>
                                                <TabContent>
                                                    <TabPane eventKey="map">
                                                        <div className="row">
                                                            <div
                                                                className="corporate-content-details d-flex col col-12 col-md-2 mb-3">
                                                                <div className="address">
                                                                    <strong>The Christie
                                                                        Hospital </strong><br/><br/>Manchester<br/>Lancashire <br/>M20
                                                                    4BX
                                                                </div>
                                                            </div>
                                                            <div className="col col-12 col-md-10">
                                                                <div id={`gmap_${id}`}
                                                                     className="map-container"
                                                                     style={{height: '400px'}}
                                                                     data-longitude={longitude}
                                                                     data-latitude={latitude}>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </TabPane>
                                                    <TabPane eventKey="consultants">
                                                        <div className="">
                                                            <div id="table-scroll_388" className="table-scroll">
                                                                Table content
                                                            </div>
                                                        </div>
                                                    </TabPane>
                                                </TabContent>
                                            </Col>
                                        </Row>
                                    </Tab.Container>
                                </div>
                            </div>
                        </div>
                    </div>


                    {/*                    <div className="modal modal-enquire fade" id="hc_modal_contacts_general_388" tabIndex="-1"*/}
                    {/*                         role="dialog" aria-labelledby="" aria-modal="true" aria-hidden="true">*/}
                    {/*                        <div className="modal-dialog" role="document">*/}
                    {/*                            <div className="modal-content position-relative">*/}
                    {/*                                <div id="hospital_type" className="hospital-type nhs-hospital bg-nhs">*/}
                    {/*                                    <p className="m-0">NHS</p>*/}
                    {/*                                </div>*/}
                    {/*                                <div className="modal-body">*/}
                    {/*                                    <div className="modal-header d-flex justify-content-between">*/}
                    {/*                                        <button type="button" className="btn-plain ml-auto" data-dismiss="modal"*/}
                    {/*                                                aria-label="Close">*/}
                    {/*                                            <svg className="" xmlns="http://www.w3.org/2000/svg" width="10" height="10"*/}
                    {/*                                                 viewBox="0 0 10 10">*/}
                    {/*                                                <g>*/}
                    {/*                                                    <g>*/}
                    {/*                                                        <path fill="#1b1b1b"*/}
                    {/*                                                              d="M5.884 5l3.932-3.932a.626.626 0 0 0-.884-.885L5 4.115 1.068.183a.626.626 0 0 0-.885.885L4.115 5 .183 8.932a.626.626 0 0 0 .883.884L5 5.885l3.932 3.931a.623.623 0 0 0 .883 0 .626.626 0 0 0 0-.884z"></path>*/}
                    {/*                                                    </g>*/}
                    {/*                                                </g>*/}
                    {/*                                            </svg>*/}
                    {/*                                        </button>*/}
                    {/*                                    </div>*/}
                    {/*                                    <div className="container-fluid p-30">*/}
                    {/*                                        <div className="row">*/}
                    {/*                                            <div className="col-12 col-md-6">*/}
                    {/*                                                <div*/}
                    {/*                                                    className="col-inner h-100 col-inner__left text-center d-flex flex-column justify-content-center align-items-center">*/}
                    {/*                                                    <h3 className="modal-title mb-3 w-100">Thanks for Your Interest*/}
                    {/*                                                        in <span id="hospital_title">The Christie Hospital </span>*/}
                    {/*                                                    </h3>*/}
                    {/*                                                    <div className="d-flex mb-3 w-100">*/}
                    {/*                                                        <div className="modal-copy ">*/}
                    {/*                                                            <p className="col-grey p-secondary mb-0">Without a GP*/}
                    {/*                                                                referral, this NHS hospital won't respond to direct*/}
                    {/*                                                                enquiries regarding*/}
                    {/*                                                                treatments. Please call or check their website to find*/}
                    {/*                                                                out more about their services*/}
                    {/*                                                                using the following contact details:</p>*/}
                    {/*                                                        </div>*/}
                    {/*                                                    </div>*/}
                    {/*                                                </div>*/}
                    {/*                                            </div>*/}
                    {/*                                            <div className="col-12 col-md-6">*/}
                    {/*                                                <div*/}
                    {/*                                                    className="col-inner p-30 d-flex flex-column justify-content-center col-inner__right h-100 text-center border rounded">*/}
                    {/*                                                    <h3 className="mb-5">Contact the hospital</h3>*/}
                    {/*                                                    <div className="">*/}
                    {/*                                                        <p className="mb-1">Main switchboard</p>*/}
                    {/*                                                        <p className="col-brand-primary-1 font-20 mb-1"*/}
                    {/*                                                           id="hospital_telephone">01614463000</p>*/}
                    {/*                                                        <a id="388" */}
                    {/*                                                           className="p-0 btn-link col-brand-primary-1 enquiry font-12 mb-4 d-inline-block"*/}
                    {/*                                                           target="_blank" href="https://www.christie.nhs.uk"*/}
                    {/*                                                           role="button" data-hospital-type="nhs-hospital">*/}
                    {/*                                                            <span>Visit website</span>*/}
                    {/*                                                        </a>*/}

                    {/*                                                        <p className="mb-1">Private</p>*/}

                    {/*                                                        <p className="col-brand-primary-1 font-20 mb-1"*/}
                    {/*                                                           id="hospital_telephone_2">01615164014</p>*/}

                    {/*                                                        <a id="388" */}
                    {/*                                                           className="p-0 btn-link col-brand-primary-1 enquiry font-12 mb-4 d-inline-block"*/}
                    {/*                                                           target="_blank"*/}
                    {/*                                                           href="https://www.hcahealthcare.co.uk/facilities/the-christie-private-care"*/}
                    {/*                                                           role="button" data-hospital-type="nhs-hospital">*/}
                    {/*                                                            <span>Visit website</span>*/}
                    {/*                                                        </a>*/}
                    {/*                                                    </div>*/}

                    {/*                                                    <span id="388" */}
                    {/*                                                          className="btn btn-squared btn-squared_slim btn-enquire btn-brand-secondary-3 enquiry font-12 text-center mt-5"*/}
                    {/*                                                          role="button" data-toggle="modal"*/}
                    {/*                                                          data-target="#hc_modal_enquire_private"*/}
                    {/*                                                          data-hospital-type="nhs-hospital"*/}
                    {/*                                                          data-hospital-url="https://www.hcahealthcare.co.uk/facilities/the-christie-private-care"*/}
                    {/*                                                          data-hospital-id="388"*/}
                    {/*                                                          data-hospital-title="The Christie Hospital "*/}
                    {/*                                                          data-dismiss="modal">*/}

                    {/*    <span>Make a private treatment enquiry</span>*/}
                    {/*            <svg className="mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">*/}
                    {/*    <g>*/}
                    {/*        <g>*/}
                    {/*            <g>*/}
                    {/*                <path fill="#fff"*/}
                    {/*                      d="M10.002 18.849c-4.878 0-8.846-3.968-8.846-8.847 0-4.878 3.968-8.846 8.846-8.846 4.879 0 8.847 3.968 8.847 8.846 0 4.879-3.968 8.847-8.847 8.847zm0-18.849C4.488 0 0 4.488 0 10.002c0 5.515 4.488 10.003 10.002 10.003 5.515 0 10.003-4.488 10.003-10.003C20.005 4.488 15.517 0 10.002 0z"></path>*/}
                    {/*            </g>*/}
                    {/*            <g>*/}
                    {/*                <path fill="#fff"*/}
                    {/*                      d="M14.47 5.848l-5.665 6.375-3.34-2.67a.578.578 0 0 0-.811.088c-.2.25-.158.615.091.815l3.769 3.015a.57.57 0 0 0 .361.125c.167 0 .325-.07.433-.196l6.03-6.783a.579.579 0 0 0 .146-.42.588.588 0 0 0-.191-.4.592.592 0 0 0-.824.05z"></path>*/}
                    {/*            </g>*/}
                    {/*        </g>*/}
                    {/*    </g>*/}
                    {/*</svg>*/}
                    {/*    </span>*/}
                    {/*                                                </div>*/}
                    {/*                                            </div>*/}
                    {/*                                        </div>*/}
                    {/*                                    </div>*/}
                    {/*                                </div>*/}
                    {/*                            </div>*/}
                    {/*                        </div>*/}
                    {/*                    </div>*/}
                    {/*                    <div className="modal modal-enquire fade" id="hc_modal_contacts_private_388" tabIndex="-1"*/}
                    {/*                         role="dialog" aria-labelledby="" aria-modal="true" aria-hidden="true">*/}
                    {/*                        <div className="modal-dialog" role="document">*/}
                    {/*                            <div className="modal-content position-relative">*/}
                    {/*                                <div id="hospital_type" className="hospital-type nhs-hospital bg-nhs">*/}
                    {/*                                    <p className="m-0">NHS</p>*/}
                    {/*                                </div>*/}
                    {/*                                <div className="modal-body">*/}
                    {/*                                    <div className="modal-header d-flex justify-content-between">*/}
                    {/*                                        <button type="button" className="btn-plain ml-auto" data-dismiss="modal"*/}
                    {/*                                                aria-label="Close">*/}
                    {/*                                            <svg className="" xmlns="http://www.w3.org/2000/svg" width="10" height="10"*/}
                    {/*                                                 viewBox="0 0 10 10">*/}
                    {/*                                                <g>*/}
                    {/*                                                    <g>*/}
                    {/*                                                        <path fill="#1b1b1b"*/}
                    {/*                                                              d="M5.884 5l3.932-3.932a.626.626 0 0 0-.884-.885L5 4.115 1.068.183a.626.626 0 0 0-.885.885L4.115 5 .183 8.932a.626.626 0 0 0 .883.884L5 5.885l3.932 3.931a.623.623 0 0 0 .883 0 .626.626 0 0 0 0-.884z"></path>*/}
                    {/*                                                    </g>*/}
                    {/*                                                </g>*/}
                    {/*                                            </svg>*/}
                    {/*                                        </button>*/}
                    {/*                                    </div>*/}
                    {/*                                    <div className="container-fluid p-30">*/}
                    {/*                                        <div className="row">*/}
                    {/*                                            <div className="col-12">*/}
                    {/*                                                <div*/}
                    {/*                                                    className="col-inner p-30 d-flex flex-column justify-content-center col-inner__right h-100 text-center border rounded">*/}
                    {/*                                                    <h3 className="modal-title mb-3">Thanks for Your Interest in <span*/}
                    {/*                                                        id="hospital_title">The Christie Hospital </span>*/}
                    {/*                                                    </h3>*/}
                    {/*                                                    <div className="mb-5">*/}
                    {/*                                                        <p className="mb-1">Main switchboard</p>*/}
                    {/*                                                        <p className="col-brand-primary-1 font-20"*/}
                    {/*                                                           id="hospital_telephone">01614463000</p>*/}
                    {/*                                                        <p className="mb-1">Private</p>*/}
                    {/*                                                        <p className="col-brand-primary-1 font-20"*/}
                    {/*                                                           id="hospital_telephone_2">01615164014</p>*/}
                    {/*                                                    </div>*/}
                    {/*                                                    <div className="btn-area">*/}
                    {/*                                                        <a id="388" */}
                    {/*                                                           className="btn btn-squared btn-squared_slim btn-brand-primary-4 btn-enquire w-100 text-center"*/}
                    {/*                                                           target="_blank" href="https://www.christie.nhs.uk"*/}
                    {/*                                                           role="button">*/}
                    {/*                                                            <span>Or visit hospital website</span>*/}
                    {/*                                                        </a>*/}
                    {/*                                                    </div>*/}
                    {/*                                                </div>*/}
                    {/*                                            </div>*/}
                    {/*                                        </div>*/}
                    {/*                                    </div>*/}
                    {/*                                </div>*/}
                    {/*                            </div>*/}
                    {/*                        </div>*/}
                    {/*                    </div>*/}
                </div>
            </React.Fragment>
        );
    }
}

export default ResultItem;
