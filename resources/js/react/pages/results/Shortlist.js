import React, {Component} from 'react';
import '../../scripts/cookies';
import {fetchShortlistedHospitals} from "../../actions/shortlistActions";
import {connect} from "react-redux";
import ShortListItem from '../results/ShortListItem';

class Shortlist extends Component {
    constructor(props) {
        super(props);
        this.state = {
            // hospitalIds: Cookies.get("compareHospitalsData")
            hospitalIds: [80]
        }
    }

    componentDidMount() {
        const {hospitalIds} = this.state;
        const {dispatch} = this.props;
        // Do the AJAX call using the hospital ids returned from cookies
        // TODO: if the array is longer than one item, do the AJAX call, if not, set the 'haveShortlistedHospitals variable to false
        if(hospitalIds.length > 0)
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
