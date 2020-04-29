/**
 * Generates HTML code based on a given value (percentage or 0 or 1)
 *
 * @param value
 * @returns {string}
 */
window.getHtmlDashTickValue = function (value, text = "") {
    if (value == null)
        return "No data";

    var html = "";

    value = parseFloat(value);

    if (value === 0) {
        html += "<img class='dash-or-tick' width=\"26\" src=\"images/icons/dash-black.svg\" alt=\"Dash icon\">";

    } else if (value === 1) {
        html += "<img class='dash-or-tick' width=\"26\" src=\"images/icons/tick-green.svg\" alt=\"Tick icon\">";
    } else {
        return value + text;
    }
    return html;
};
