import React, {Component} from 'react';
import axios from "axios";
import ResultItem from "./ResultItem";
import ResultsPageForm from "./ResultsPageForm";

class ResultsPage extends Component {
    constructor(props) {
        super(props);
        const {match: {params}} = this.props;
        // parse the parameter from the URL
        const {procedure, postcode} = params;
        this.state = {
            hospitals: [],
            procedure,
            postcode
        }
    }

    componentDidMount() {
        // Do the ajax call to get list of matching hospitals
        document.body.classList.add('results-page', 'results-page-desktop');
        const {procedure, postcode} = this.state;
        const apiUrl = `/api/getHospitalsForHomepageSearch/${procedure}/${postcode}`;
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
                        procedure !== null
                            ? hospitals.map(hospital => <ResultItem key={hospital.id}
                                                                    {...hospital} />)
                            : <h1>No procedure selected</h1>
                    }
                </div>
            </main>
        );
    }
}

export default ResultsPage;
