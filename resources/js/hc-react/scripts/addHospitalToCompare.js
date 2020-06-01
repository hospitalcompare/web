/**
 * Adds the element to the Comparison Table
 *
 * @param element
 */
import '../scripts/cookies';

let isDesktop = true;
let privateHospitalCount = 0;
let nhsHospitalCount = 0;

const addHospitalToCompare = function (element) {
    const compareHospitalIds = Cookies.get('compareHospitalsData');
    // Content for modal trigger button
    var circleCheck = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><g><g><g><path fill="#fff" d="M10.002 18.849c-4.878 0-8.846-3.968-8.846-8.847 0-4.878 3.968-8.846 8.846-8.846 4.879 0 8.847 3.968 8.847 8.846 0 4.879-3.968 8.847-8.847 8.847zm0-18.849C4.488 0 0 4.488 0 10.002c0 5.515 4.488 10.003 10.002 10.003 5.515 0 10.003-4.488 10.003-10.003C20.005 4.488 15.517 0 10.002 0z"></path></g><g><path fill="#fff" d="M14.47 5.848l-5.665 6.375-3.34-2.67a.578.578 0 0 0-.811.088c-.2.25-.158.615.091.815l3.769 3.015a.57.57 0 0 0 .361.125c.167 0 .325-.07.433-.196l6.03-6.783a.579.579 0 0 0 .146-.42.588.588 0 0 0-.191-.4.592.592 0 0 0-.824.05z"></path></g></g></g></svg>';
    var timesBlack = '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">\n' +
        '    <g>\n' +
        '        <g>\n' +
        '            <path fill="#1b1b1b"\n' +
        '                  d="M5.884 5l3.932-3.932a.626.626 0 0 0-.884-.885L5 4.115 1.068.183a.626.626 0 0 0-.885.885L4.115 5 .183 8.932a.626.626 0 0 0 .883.884L5 5.885l3.932 3.931a.623.623 0 0 0 .883 0 .626.626 0 0 0 0-.884z"/>\n' +
        '        </g>\n' +
        '    </g>\n' +
        '</svg>\n';
    var cancelledOps = null;
    var waitingTime = null;
    // Content for new hospital added to compare
    var hospitalType = element.hospital_type.name === 'Independent' ? 'Private' : 'NHS';
    var nhsRating = element.hospital_type.name === 'Independent' ? 1 : 0;
    var userRating = 0;
    var latestRating = 'No Data';
    var friendsAndFamilyRating = null;
    var hasNhsEmail = typeof element.email != "undefined" && element.email !== ""; // Email must be not empty string AND not undefined AND be NHS;

    if (element.rating !== null && typeof element.rating.friends_family_rating !== "undefined" && element.rating.friends_family_rating !== null) {
        friendsAndFamilyRating = element.rating.friends_family_rating;
    }

    if (element.rating !== null && typeof element.rating.latest_rating !== "undefined" && element.rating.latest_rating !== null) {
        latestRating = element.rating.latest_rating;
    }

    if (element.rating !== null && typeof element.rating.avg_user_rating !== "undefined" && element.rating.avg_user_rating !== null) {
        userRating = element.rating.avg_user_rating;
    }

    if (element.waiting_time.length > 0 && typeof element.waiting_time[0].perc_waiting_weeks !== "undefined" && element.waiting_time[0].perc_waiting_weeks != null) {
        waitingTime = element.waiting_time[0].perc_waiting_weeks;
    }

    if (element.cancelled_op !== null && typeof element.cancelled_op.perc_cancelled_ops !== "undefined" && element.cancelled_op.perc_cancelled_ops != null) {
        cancelledOps = element.cancelled_op.perc_cancelled_ops;
        // cancelledOps = element.cancelled_op;
    }
    //NHS Funded work = 1 when private hospital + waiting time OR NHS hospital
    var nhsFundedWork = 0;
    if (nhsRating === 0 || (nhsRating === 1 && waitingTime !== null)) {
        nhsFundedWork = 1;
    }

    var btnClass = (isDesktop) ? 'btn btn-brand-secondary-3 enquiry font-12 p-2 btn-enquire text-center w-100' : 'btn btn-icon btn-brand-secondary-3 btn-enquire enquiry btn-squared btn-squared_slim font-12 px-5';
    var targetModal = hospitalType == 'Private' ? '#hc_modal_enquire_private' : '#hc_modal_contacts_general_shortlist_' + element.id;
    var btnContent =
        `<a id="${element.id}"
            class="${btnClass}"
            role="button" data-toggle="modal"
            data-hospital-url="${element.url}"
            data-hospital-title="${element.display_name}"
            data-hospital-id="${element.id}"
            data-image="${element.image}"
            data-target="${targetModal}">${circleCheck}Enquire</a>`;
    // Button content if NHS hospital has a private website url
    var urlTwoButton = (element.nhs_private_url != "" && typeof element.nhs_private_url != "undefined") ? `<a id="${element.id}" class="p-0 btn-link col-brand-primary-1 enquiry font-12 mb-4 d-inline-block" target="_blank" href="${element.nhs_private_url}" role="button" data-hospital-type="nhs-hospital"><span>Visit website</span></a>` : '';
    // Button to trigger contact form for the private wing of NHS hospital
    var nhsPrivateContactBtn = (element.email != "" && typeof element.email != "undefined") ? `<button class="btn btn-squared btn-squared_slim btn-enquire btn-brand-secondary-3 enquiry font-12 text-center mt-5" id="${element.id}" data-hospital-id="${element.id}" data-dismiss="modal" data-hospital-type="nhs-hospital" data-toggle="modal" data-target="#hc_modal_enquire_private" data-hospital-title="${element.display_name}">Make a private treatment enquiry${circleCheck}</button>` : '';

    var nhsModalContent =
        `<div class="modal modal-enquire fade" id="hc_modal_contacts_general_shortlist_${element.id}" tabindex="-1" role="dialog"
     aria-labelledby="" aria-modal="true" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content position-relative">
                    <div id="hospital_type" class="hospital-type ${hospitalType === 'Private' ? 'private-hospital bg-private' : 'nhs-hospital bg-nhs'}">
                        <p class="m-0">${hospitalType}</p>
                    </div>
                    <div class="modal-body">
                        <div class="modal-header d-flex justify-content-between">
                            <button type="button" class="btn-plain ml-auto" data-dismiss="modal" aria-label="Close">
                                ${timesBlack}
                            </button>
                        </div>
                        <div class="container-fluid p-30">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div
                                        class="col-inner h-100 col-inner__left text-center d-flex flex-column justify-content-center align-items-center">
                                        <h3 class="modal-title mb-3 w-100">Thanks for Your Interest in <span id="hospital_title">${element.display_name}</span>
                                            </h3>
                                        <div class="d-flex mb-3 w-100">
                                            <div class="modal-copy">
                                                <p class="col-grey p-secondary mb-0">Without a GP referral, this NHS hospital won't respond to direct enquiries regarding
                                                    treatments. Please call or check their website to find out more about their services
                                                    using the following contact details:</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div
                                        class="col-inner p-30 d-flex flex-column justify-content-center col-inner__right h-100 text-center border rounded">
                                        <h3 class="mb-5">Contact the hospital</h3>
                                        <div class="">
                                            <p class="mb-1">Main switchboard</p>
                                            <p class="col-brand-primary-1 font-20 mb-1" id="hospital_telephone">${element.phone_number}</p>
                                                <a id="${element.id}" class="p-0 btn-link col-brand-primary-1 enquiry font-12 mb-4 d-inline-block" target="_blank" href="${element.url}" role="button" data-hospital-type="${element.hospital_type.name === 'Independent' ? 'private-hospital' : 'nhs-hospital'}">
                                                    <span>Visit website</span>
                                                </a>
                                            <p class="mb-1">Private</p>
                                            <!--   Private phone number -->
                                            <p class="col-brand-primary-1 font-20 mb-1" id="hospital_telephone_2">${element.phone_number_2 != "" && typeof element.phone_number_2 != 'undefined' ? element.phone_number_2 : 'No number available'}</p>
        <!--                                Private web address - only show if nhs_private_url not empty -->
                                            ${urlTwoButton}
                                        </div>
    <!--                               Trigger enquiry form for PRIVATE treatment at NHS hospital -->
                                        ${nhsPrivateContactBtn}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;

    if (hospitalType == 'Private') {
        privateHospitalCount += 1;
        // privateCountHolder.text(privateHospitalCount); TODO: do we still need this?
    } else {
        nhsHospitalCount += 1;
        // nhsCountHolder.text(nhsHospitalCount); TODO: do we still need this?
    }
    if (isDesktop) {
        var newColumn =
            '<div class="col text-center" id="compare_hospital_id_' + element.id + '">' +
            '<div class="col-inner">' +
            '<div class="col-header d-flex flex-column justify-content-between align-items-center px-4 pb-3">' +
            // '<div class="image-wrapper" style="background: url(' + element.image + ') no-repeat scroll center center / cover" >' +
            '<div class="image-wrapper">' +
            '<div class="remove-hospital" id="remove_id_' + element.id + '" data-hospital-type="' + slugify(hospitalType) + '-hospital"></div>' +
            '</div>' +
            '<div class="w-100 details font-16 SofiaPro-SemiBold"><p class="w-100">' + textTruncate(element.display_name, 30, '...') + '</p></div>' +
            btnContent +
            '</div>' +
            '<div class="cell">' + hospitalType + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(waitingTime, " Weeks") + '</div>' +
            '<div class="cell">' + getHtmlStars(userRating) + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(cancelledOps, "%") + '</div>' +
            '<div class="cell">' + latestRating + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(friendsAndFamilyRating, "%") + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(nhsFundedWork) + '</div>' +
            '<div class="cell">' + getHtmlDashTickValue(nhsRating) + '</div>' +
            '<div class="cell column-break"></div>' +
            '<div class="cell">' + (element.rating !== null && element.rating.safe !== null ? element.rating.safe : 'No Data') + '</div>' +
            '<div class="cell">' + (element.rating !== null && element.rating.effective !== null ? element.rating.effective : 'No Data') + '</div>' +
            '<div class="cell">' + (element.rating !== null && element.rating.caring !== null ? element.rating.caring : 'No Data') + '</div>' +
            '<div class="cell">' + (element.rating !== null && element.rating.responsive !== null ? element.rating.responsive : 'No Data') + '</div>' +
            '<div class="cell">' + (element.rating !== null && element.rating.well_led !== null ? element.rating.well_led : 'No Data') + '</div>' +
            '<div class="cell column-break"></div>' +
            '<div class="cell">' + (element.place_rating !== null && element.place_rating.cleanliness !== null ? getHtmlDashTickValue(element.place_rating.cleanliness, "%") : 'No data') + '</div>' +
            '<div class="cell">' + (element.place_rating !== null && element.place_rating.food_hydration !== null ? getHtmlDashTickValue(element.place_rating.food_hydration, "%") : 'No data') + '</div>' +
            '<div class="cell">' + (element.place_rating !== null && element.place_rating.privacy_dignity_wellbeing !== null ? getHtmlDashTickValue(element.place_rating.privacy_dignity_wellbeing, "%") : 'No data') + '</div>' +
            '<div class="cell">' + (element.place_rating !== null && element.place_rating.condition_appearance_maintenance !== null ? getHtmlDashTickValue(element.place_rating.condition_appearance_maintenance, "%") : 'No data') + '</div>' +
            '<div class="cell">' + (element.place_rating !== null && element.place_rating.dementia !== null ? getHtmlDashTickValue(element.place_rating.dementia, "%") : 'No data') + '</div>' +
            '<div class="cell">' + (element.place_rating !== null && element.place_rating.disability !== null ? getHtmlDashTickValue(element.place_rating.disability, "%") : 'No data') + '</div>' +
            '</div>' +
            '</div>';
        // Add new item

    } else if (isMobile) {
        var newRow =
            `<div id="compare_hospital_id_${element.id}" class="card w-100 p-0 border-top-0 border-left-0 border-right-0 border-bottom rounded-0 shadow-none">
                <div class="card-header p-0 pb-2 bg-white" id="heading${element.id}">
                     <button class="btn btn-link collapsed text-decoration-none p-0 rounded-0" data-toggle="collapse" data-target="#collapse${element.id}" aria-expanded="true" aria-controls="collapse${element.id}">
                         <p class="font-18 SofiaPro-SemiBold mb-2">${textTruncate(element.display_name, 30, '...')}</p>
                         <p class="col-grey mb-2"><img class="map-icon" src="/images/icons/icon-map.svg" alt="Map icon">${element.address.city} | ${hospitalType}</p>
                         <p class="mb-2">${latestRating}&nbsp;|&nbsp;${getHtmlDashTickValue(waitingTime, " Weeks Average Waiting")}</p>
                     </button>
                     <div class="btn-area d-flex align-items-center">
                        ${btnContent}
                        <span class="remove-hospital col-brand-primary-1 ml-2 font-12" id="remove_id_${element.id}" data-hospital-type="${slugify(hospitalType)}-hospital">Remove</span>
                     </div>
                </div>
                <div id="collapse${element.id}" class="collapse" aria-labelledby="heading${element.id}" data-parent="#compare_hospitals_grid">
                    <div class="card-body p-0 pb-2 pt-3">
                        <div class="row">
                            <div class="col-6 border-right">
                                <div class="col-inner h-100">
                                    <div class="mobile-cell">Hospital Type</div>
                                    <div class="mobile-cell">Average Waiting Time</div>
                                    <div class="mobile-cell">NHS User Rating</div>
                                    <div class="mobile-cell">% Operations cancelled</div>
                                    <div class="mobile-cell">Care Quality Rating</div>
                                    <div class="mobile-cell">Friends & Family Rating</div>
                                    <div class="mobile-cell">NHS Funded Work</div>
                                    <div class="mobile-cell">Private Self Pay</div>
                                    <div class="mobile-cell column-break"></div>
                                    <div class="mobile-cell SofiaPro-SemiBold">Care Quality Rating</div>
                                    <div class="mobile-cell">Safe</div>
                                    <div class="mobile-cell">Effective</div>
                                    <div class="mobile-cell">Caring</div>
                                    <div class="mobile-cell">Responsive</div>
                                    <div class="mobile-cell">Well Led</div>
                                    <div class="mobile-cell column-break"></div>
                                    <div class="mobile-cell SofiaPro-SemiBold">NHS User Rating</div>
                                    <div class="mobile-cell">Cleanliness</div>
                                    <div class="mobile-cell">Food & Hygiene</div>
                                    <div class="mobile-cell">Privacy, Dignity & Wellbeing</div>
                                    <div class="mobile-cell">Dementia Domain</div>
                                    <div class="mobile-cell">Disability Domain</div>
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <div class="col-inner">
                                    <div class="mobile-cell">${hospitalType}</div>
                                    <div class="mobile-cell">${getHtmlDashTickValue(waitingTime, " Weeks")}</div>
                                    <div class="mobile-cell">${getHtmlStars(userRating)}</div>
                                    <div class="mobile-cell">${getHtmlDashTickValue(cancelledOps, "%")}</div>
                                    <div class="mobile-cell">${latestRating}</div>
                                    <div class="mobile-cell">${getHtmlDashTickValue(friendsAndFamilyRating, "%")}</div>
                                    <div class="mobile-cell">${getHtmlDashTickValue(nhsFundedWork)}</div>
                                    <div class="mobile-cell">${getHtmlDashTickValue(nhsRating)}</div>
                                    <div class="mobile-cell column-break"></div>
                                    <div class="mobile-cell"></div>
                                    <div class="mobile-cell">${element.rating !== null && element.rating.safe !== null ? element.rating.safe : 'No Data'}</div>
                                    <div class="mobile-cell">${element.rating !== null && element.rating.effective !== null ? element.rating.effective : 'No Data'}</div>
                                    <div class="mobile-cell">${element.rating !== null && element.rating.caring !== null ? element.rating.caring : 'No Data'}</div>
                                    <div class="mobile-cell">${element.rating !== null && element.rating.responsive !== null ? element.rating.responsive : 'No Data'}</div>
                                    <div class="mobile-cell">${element.rating !== null && element.rating.well_led !== null ? element.rating.well_led : 'No Data'}</div>
                                    <div class="mobile-cell column-break"></div>
                                    <div class="mobile-cell"></div>
                                    <div class="mobile-cell">${element.place_rating !== null && element.place_rating.cleanliness !== null ? getHtmlDashTickValue(element.place_rating.cleanliness, "%") : 'No data'}</div>
                                    <div class="mobile-cell">${(element.place_rating !== null && element.place_rating.food_hydration !== null ? getHtmlDashTickValue(element.place_rating.food_hydration, "%") : 'No data')}</div>
                                    <div class="mobile-cell">${(element.place_rating !== null && element.place_rating.privacy_dignity_wellbeing !== null ? getHtmlDashTickValue(element.place_rating.privacy_dignity_wellbeing, "%") : 'No data')}</div>
                                    <div class="mobile-cell">${(element.place_rating !== null && element.place_rating.dementia !== null ? getHtmlDashTickValue(element.place_rating.dementia, "%") : 'No data')}</div>
                                    <div class="mobile-cell">${(element.place_rating !== null && element.place_rating.disability !== null ? getHtmlDashTickValue(element.place_rating.disability, "%") : 'No data')}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
        target.prepend(newRow);
    }
    // Add corresponding enquiry modal to body
    // Add corresponding enquiry modal to body
    if (element.hospital_type.name === 'NHS')
        $body.find('#modal-container').append(nhsModalContent);
};

export default addHospitalToCompare;
