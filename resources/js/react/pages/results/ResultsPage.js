import React, {Component} from 'react';

import axios from "axios";
import queryString from 'query-string';
import {connect} from "react-redux";

import Loader from "../../components/basic/Loader";
import ResultItem from "./ResultItem";
import ResultsPageForm from "./ResultsPageForm";
import SolutionsBar from "./SolutionsBar";

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
        const apiUrl = `/api/getHospitalsForHomepageSearch/${postcode}/${procedure}/${radius}`;
        const config = {
            headers: {
                Authorization: 'Bearer mBu7IB6nuxh8RVzJ61f4'
            }
        };
        this.setState({loadingHospitals: true})
        axios.get(apiUrl, config)
            .then((res) => {
                const returnedHospitals = res.data.data.hospitals.data;
                this.setState({
                    hospitals: returnedHospitals,
                    loadingHospitals: false
                });
            })
            .catch((error) => {
                console.log('Error fetching hospitals', error)
            })
    }

    handleClick = () => {
        this.setState((prevState) => ({
            showShortlist: !prevState.showShortlist
        }));

        this.state.showShortlist ? document.body.classList.remove('shortlist-open') : document.body.classList.add('shortlist-open');
    };

    render() {
        const {loadingHospitals, hospitals} = this.state;
        return (
            <React.Fragment>
                <main>
                    <ResultsPageForm showShortlist={this.state.showShortlist}
                                     handleShortlistToggle={this.handleClick}/>
                    <div className="results mt-3 mt-lg-0">
                        {
                            loadingHospitals
                                ? <Loader/>
                                : hospitals.map(hospital => <ResultItem {...hospital} key={hospital.id}
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
    radius: state.filters.radius
});

export default connect(mapStateToProps)(ResultsPage);

