import React, {Component} from 'react';
import PropTypes from 'prop-types';
import queryString from 'query-string';
import {connect} from "react-redux";

import Loader from "../../components/basic/Loader";
import ResultItem from "./ResultItem";
import ResultsPageForm from "./ResultsPageForm";
import SolutionsBar from "./SolutionsBar";
import {getCompareCount} from "../../scripts/global";
import {fetchHospitals} from "../../actions/hospitalActions";

// Check to see if a hospital should be disabled from adding to compare
const isDisabled = (value) => {
    return !JSON.parse(Cookies.get("compareHospitalsData")).includes(parseInt(value)) && getCompareCount() === 5;
};

class ResultsPage extends Component {
    constructor(props) {
        super(props);
        const {match: {params}} = this.props;

        let query = queryString.parse(this.props.location.search);
        // // parse the parameter from the URL
        let procedure   = query.procedure || null;
        let postcode    = typeof query.postcode !== 'undefined' ? decodeURI(query.postcode.replace(/\s+/g, "").toLowerCase()) : '';
        let radius      = query.radius || 50;


        this.state = {
            loadingHospitals: false,
            hospitals: [],
            procedure,
            postcode,
            radius,
            showShortlist: false
        }
    }

    componentDidMount() {
        // Do the ajax call to get list of matching hospitals
        document.body.classList.add('results-page', 'results-page-desktop');
        const {procedure, postcode, radius} = this.state;

        // Dispatch the action to return hospital list
        this.props.dispatch(fetchHospitals(postcode, procedure, radius));
    }

    handleClick = () => {
        this.setState((prevState) => ({
            showShortlist: !prevState.showShortlist
        }));

        this.state.showShortlist ? document.body.classList.remove('shortlist-open') : document.body.classList.add('shortlist-open');
    };

    render() {
        const {hospitals, loadingHospitals} = this.props;
        // Disabled is true if compare count = 5 and it's not in the shortlist
        return (
            <React.Fragment>
                <main>
                    <ResultsPageForm compareCount={this.props.shortlistHospitals.length}
                                     showShortlist={this.state.showShortlist}
                                     handleShortlistToggle={this.handleClick}/>
                    <div className="results mt-3 mt-lg-0">
                        {
                            loadingHospitals
                                ? <Loader/>
                                : hospitals.map(hospital => <ResultItem disabled={isDisabled(hospital.id)}
                                                                        key={hospital.id}
                                                                        {...hospital} />)
                        }
                    </div>
                    <SolutionsBar showShortlist={this.state.showShortlist}
                                  handleShortlistToggle={this.handleClick}/>
                </main>
                <div className="hc-backdrop"
                    onClick={this.handleClick}></div>
            </React.Fragment>

        );
    }
}

const mapStateToProps = state => ({
    // postcode: state.filters.postcode,
    // procedure: state.filters.procedure,
    // radius: state.filters.radius,
    shortlistHospitals: state.shortlist.shortlistHospitals,
    hospitals: state.hospitals.hospitals,
    loadingHospitals: state.hospitals.loading
});

ResultsPage.propTypes = {
    postcode: PropTypes.string,
    procedure: PropTypes.number,
    radius: PropTypes.number,
    shortlistHospitals: PropTypes.array,
    hospitals: PropTypes.array,
    loadingHospitals: PropTypes.bool
}


export default connect(mapStateToProps)(ResultsPage);

