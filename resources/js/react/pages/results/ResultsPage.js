import React, {Component} from 'react';
import axios from "axios";
import ResultItem from "./ResultItem";
import ResultsPageForm from "./ResultsPageForm";
import queryString from 'query-string';
import {
    useLocation
} from "react-router-dom";

class ResultsPage extends Component {
    constructor(props) {
        super(props);
        const {match: {params}} = this.props;
        let query = queryString.parse(this.props.location.search);
        // parse the parameter from the URL
        let procedure = query.procedure || '';
        let postcode = query.postcode || '';
        let radius = query.radius || '';
        this.state = {
            hospitals: [],
            procedure,
            postcode,
            radius
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
        axios.get(apiUrl, config)
            .then((res) => {
                const returnedHospitals = res.data.data.hospitals.data;
                console.log(returnedHospitals)
                this.setState({
                    hospitals: returnedHospitals
                });
            })
            .catch((error) => {
                console.log('Error fetching hospitals', error)
            })
    }

    render() {
        const {procedure, hospitals} = this.state;
        return (
            <main>
                <ResultsPageForm />
                <div className="results mt-3 mt-lg-0">
                    {
                        hospitals.length > 0
                            ? hospitals.map(hospital => <ResultItem key={hospital.id}
                                                                    {...hospital} />)
                            : <h1>No hospitals found</h1>
                    }
                </div>
            </main>
        );
    }
}

export default ResultsPage;
