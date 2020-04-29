/**
 * Generates HTML code based on a given rating ( between 0 - 5 )
 * NB: Make sure that if this function is changed, the equivalent PhP function is changed as well ( /App/Helpers/Utils.php )
 *
 * @param rating
 * @returns {string}
 */
getHtmlStars = function (rating) {
    if (rating == null)
        return "No data";

    if (rating == 0) {
        return "<img class='dash-or-tick' src=\"images/icons/dash-black.svg\" alt=\"Dash icon\">";
    }

    rating = parseFloat(rating);
    if (rating > 5)
        return "";

    // Round down to get number of whole stars needed
    var wholeStars = Math.floor(rating);

    // This will be 1 if you have a half-rating, 0 if not.
    var halfStar = Math.round(rating * 2) % 2;

    // Get the number of empty stars
    var emptyStars = 5 - wholeStars - halfStar;

    // This will hold your html markup
    var html = "";

    // write img tags for each whole star
    for (var i = 0; i < wholeStars; i++) {
        html += "<img class='star-icon' src='/images/icons/star.svg' alt='Whole Star'>";
    }

    // write img tag for half star if needed
    if (halfStar) {
        html += "<img class='star-icon' src='/images/icons/star-half.svg' alt='Half Star'>";
    }

    //Check if we need to add empty stars as image
    if (emptyStars != null && emptyStars > 0) {
        for (var i = 0; i < emptyStars; i++) {
            html += "<img class='star-icon' src='/images/icons/star-outline.svg' alt='Empty Star'>";
        }
    }

    return html;
}
