import React, {Component} from 'react';
import PropTypes from 'prop-types';
import '../../scripts/cookies';
import {fetchShortlistedHospitals} from "../../actions/shortlistActions";
import {connect} from "react-redux";
import ShortListItem from '../results/ShortListItem';
import EmptyCol from "./EmptyCol";

class Shortlist extends Component {
    constructor(props) {
        super(props);
    }

    componentDidMount() {
        // Check if the cookies are already set
        if (typeof Cookies.get("compareHospitalsData") === 'undefined') {
            Cookies.set("compareHospitalsData", [], {expires: 365});
        }
        const hospitalIds = JSON.parse(Cookies.get('compareHospitalsData'));
        // console.log("Hospital ids on page load", hospitalIds);
        const {dispatch} = this.props;
        // Do the AJAX call using the hospital ids returned from cookies
        const idList = hospitalIds.join(',');
        if(idList !== "")
            dispatch(fetchShortlistedHospitals(idList))
    }

    render() {
        const {shortlistHospitals, haveShortlistedHospitals} = this.props;
        const emptyCols = [...Array(5 - shortlistHospitals.length)];
        return (
            <React.Fragment>
                {
                    shortlistHospitals.map(
                        hospital => <ShortListItem key={hospital.id}
                                                   {...hospital} />
                    )
                }
                {
                    emptyCols.map((emptyCol, index) => <EmptyCol key={index} />)
                }
            </React.Fragment>
        );
    }
};

const mapStateToProps = state => ({
    shortlistHospitals: state.shortlist.shortlistHospitals,
    haveShortlistedHospitals: state.shortlist.haveShortlistedHospitals
});

Shortlist.propTypes = {
    shortlistHospitals: PropTypes.array,
    haveShortlistedHospitals: PropTypes.bool
};

export default connect(mapStateToProps)(Shortlist);
