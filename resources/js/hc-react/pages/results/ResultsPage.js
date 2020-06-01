import React, {Component} from 'react';
import queryString from 'query-string';
import {connect} from "react-redux";

import Loader from "../../components/basic/Loader";
import ResultItem from "./ResultItem";
import ResultsPageForm from "./ResultsPageForm";
import SolutionsBar from "./SolutionsBar";
import {getCompareCount} from "../../scripts/global";
import {fetchHospitals} from "../../actions/hospitalActions";

class ResultsPage extends Component {
    constructor(props) {
        super(props);
        const {match: {params}, postcode, procedure, radius} = this.props;

        // let query = queryString.parse(this.props.location.search);
        // // parse the parameter from the URL
        // let procedure   = query.procedure || '';
        // let postcode    = typeof query.postcode !== 'undefined' ? decodeURI(query.postcode.replace(/\s+/g, "").toLowerCase()) : '';
        // let radius      = query.radius || 50;


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
                                : hospitals.map(hospital => <ResultItem key={hospital.id}
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
    postcode: state.filters.postcode,
    procedure: state.filters.procedure,
    radius: state.filters.radius,
    shortlistHospitals: state.shortlist.shortlistHospitals,
    hospitals: state.hospitals.hospitals,
    loadingHospitals: state.hospitals.loading
});

export default connect(mapStateToProps)(ResultsPage);

