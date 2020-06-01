/**
 * Generates HTML code based on a given rating ( between 0 - 5 )
 * NB: Make sure that if this function is changed, the equivalent PhP function is changed as well ( /App/Helpers/Utils.php )
 *
 * @param rating
 * @returns {string}
 */
import React from 'react';
import StarOutline from "../../svg/StarOutline";
import StarHalf from "../../svg/StarHalf";
import Star from "../../svg/Star";
import DashBlack from "../../svg/DashBlack";

const HtmlStars = function ({rating, id}) {
    if (rating == null)
        return "No data";

    if (rating == 0) {
        return <DashBlack/>;
    }

    rating = parseFloat(rating);
    if (rating > 5)
        return "";
    //
    var wholeStars = Math.floor(rating);
    // Round down to get number of whole stars needed
    var wholeStarsArr = [...Array(wholeStars)];

    // This will be 1 if you have a half-rating, 0 if not.
    var halfStar = Math.round(rating * 2) % 2;

    // Get the number of empty stars
    var emptyStars = 5 - wholeStars - halfStar;
    var emptyStarsArr = [...Array(emptyStars)];


    return (
        <React.Fragment>
            {
                wholeStarsArr.map((element, index) => (
                    <Star className={"star-icon"}
                          key={`fullstar-${index}-${id}`}/>
                ))
            }
            {halfStar === 1 ? <StarHalf className={"star-icon"}/> : ''}
            {emptyStarsArr !== [] ? emptyStarsArr.map((element, index) => <StarOutline className={"star-icon"}
                                                                              key={`emptystar-${index}-${id}`}/>)
                : ''}
        </React.Fragment>

    )
};

export default HtmlStars;
