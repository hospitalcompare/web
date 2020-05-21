import React, {Component} from 'react';
import '../../scripts/cookies';
import {getHospitalsByIds} from '../../scripts/global';
import {fetchShortlistedHospitals} from "../../actions/shortlistActions";
import {connect} from "react-redux";
import ShortListItem from '../results/ShortListItem';

class Shortlist extends Component {
    constructor(props) {
        super(props);
        this.state = {
            hospitalIds: Cookies.get("compareHospitalsData")
        }
    }

    componentDidMount() {
        // Do the AJAX call using the hospital ids returned from cookies
        this.props.dispatch(fetchShortlistedHospitals(this.state.hospitalIds))
    }

    render() {
        return (
            <React.Fragment>
                {
                    this.props.shortlistHospitals.map(
                        hospital => <ShortListItem key={hospital.id}
                                                   {...hospital} />
                    )
                }
            </React.Fragment>
        );
    }
};

const mapStateToProps = state => ({
    shortlistHospitals: state.shortlist.shortlistHospitals,
});

export default connect(mapStateToProps)(Shortlist);
