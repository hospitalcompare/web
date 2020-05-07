import React, {Component} from 'react';
import Loader from "../../components/basic/Loader";
import axios from "axios";
import ResultItem from "./ResultItem";
import ResultsPageForm from "./ResultsPageForm";
import queryString from 'query-string';

class ResultsPage extends Component {
    constructor(props) {
        super(props);
        const {match: {params}} = this.props;
        let query = queryString.parse(this.props.location.search);
        // parse the parameter from the URL
        let procedure   = query.procedure || '';
        let postcode    = typeof query.postcode !== 'undefined' ? decodeURI(query.postcode.replace(/\s+/g, "").toLowerCase()) : '';
        console.log(postcode);
        let radius      = query.radius || 50;
        this.state = {
            loadingHospitals: false,
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

    render() {
        const {loadingHospitals, hospitals} = this.state;
        return (
            <main>
                <ResultsPageForm />
                <div className="results mt-3 mt-lg-0">
                    {
                        loadingHospitals
                            ? <Loader />
                            : hospitals.map(hospital => <ResultItem key={hospital.id}
                        {...hospital} />)
                    }
                </div>
            </main>
        );
    }
}

export default ResultsPage;
