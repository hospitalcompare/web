import React from 'react';

const ShortListItem = ({id, image, display_name, hospital_type, hospital_type_id}) => {
    const imageStyles = {
        // backgroundImage: `url(${image})`,
        backgroundRepeat: 'no-repeat',
        backgroundPosition: 'center center',
        backgroundSize: 'cover'
    };

    const hospitalType = hospital_type_id === 1 ? 'Private' : 'NHS';

    return (
        <div className="col text-center" id={`compare_hospital_id_${id}`}>
            <div className="col-inner">
                <div className="col-header d-flex flex-column justify-content-center align-items-center px-4 pb-3">
                    <div className="image-wrapper"
                         style={imageStyles}>
                        <div className="image-wrapper">
                            <div className="remove-hospital" id={`remove_id_${id}`}
                                 data-hospital-type={`${slugify(hospitalType)}-hospital`}></div>
                        </div>
                        <div className="w-100 details font-16 SofiaPro-SemiBold">
                            <p className="w-100">{textTruncate(display_name, 30, '...')}</p>
                        </div>
                    </div>
                </div>
                <div className="cell">{hospitalType}</div>
                {/*        '<div class="cell">' + getHtmlDashTickValue(waitingTime, " Weeks") + '</div>' +*/}
                {/*        '<div class="cell">' + getHtmlStars(userRating) + '</div>' +*/}
                {/*        '<div class="cell">' + getHtmlDashTickValue(cancelledOps, "%") + '</div>' +*/}
                {/*        '<div class="cell">' + latestRating + '</div>' +*/}
                {/*        '<div class="cell">' + getHtmlDashTickValue(friendsAndFamilyRating, "%") + '</div>' +*/}
                {/*        '<div class="cell">' + getHtmlDashTickValue(nhsFundedWork) + '</div>' +*/}
                {/*        '<div class="cell">' + getHtmlDashTickValue(nhsRating) + '</div>' +*/}
                {/*        '<div class="cell column-break"></div>' +*/}
                {/*        '<div class="cell">' + (element.rating !== null && element.rating.safe !== null ? element.rating.safe : 'No Data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.rating !== null && element.rating.effective !== null ? element.rating.effective : 'No Data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.rating !== null && element.rating.caring !== null ? element.rating.caring : 'No Data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.rating !== null && element.rating.responsive !== null ? element.rating.responsive : 'No Data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.rating !== null && element.rating.well_led !== null ? element.rating.well_led : 'No Data') + '</div>' +*/}
                {/*        '<div class="cell column-break"></div>' +*/}
                {/*        '<div class="cell">' + (element.place_rating !== null && element.place_rating.cleanliness !== null ? getHtmlDashTickValue(element.place_rating.cleanliness, "%") : 'No data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.place_rating !== null && element.place_rating.food_hydration !== null ? getHtmlDashTickValue(element.place_rating.food_hydration, "%") : 'No data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.place_rating !== null && element.place_rating.privacy_dignity_wellbeing !== null ? getHtmlDashTickValue(element.place_rating.privacy_dignity_wellbeing, "%") : 'No data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.place_rating !== null && element.place_rating.condition_appearance_maintenance !== null ? getHtmlDashTickValue(element.place_rating.condition_appearance_maintenance, "%") : 'No data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.place_rating !== null && element.place_rating.dementia !== null ? getHtmlDashTickValue(element.place_rating.dementia, "%") : 'No data') + '</div>' +*/}
                {/*        '<div class="cell">' + (element.place_rating !== null && element.place_rating.disability !== null ? getHtmlDashTickValue(element.place_rating.disability, "%") : 'No data') + '</div>' +*/}
            </div>
        </div>
    );
};

export default ShortListItem;
