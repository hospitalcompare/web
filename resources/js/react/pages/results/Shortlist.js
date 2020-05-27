import React, {Component} from 'react';
import '../../scripts/cookies';
import {fetchShortlistedHospitals} from "../../actions/shortlistActions";
import {connect} from "react-redux";
import ShortListItem from '../results/ShortListItem';

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
        console.log("Hospital ids on page load", hospitalIds);
        const {dispatch} = this.props;
        // Do the AJAX call using the hospital ids returned from cookies
        const idList = hospitalIds.join(',');
        if(hospitalIds !== "")
            dispatch(fetchShortlistedHospitals(hospitalIds))
    }

    render() {
        const {shortlistHospitals, haveShortlistedHospitals} = this.props;
        return (
            <React.Fragment>
                {
                    haveShortlistedHospitals
                        ?
                        shortlistHospitals.map(
                            hospital => <ShortListItem key={hospital.id}
                                                       {...hospital} />
                        )
                        : <h1>No items in the shortlist</h1>
                }
            </React.Fragment>
        );
    }
};

const mapStateToProps = state => ({
    shortlistHospitals: state.shortlist.shortlistHospitals,
    haveShortlistedHospitals: state.shortlist.haveShortlistedHospitals
});

export default connect(mapStateToProps)(Shortlist);
