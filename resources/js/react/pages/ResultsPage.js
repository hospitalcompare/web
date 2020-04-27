import React, {Component} from 'react';
import {useParams} from 'react-router-dom';
import axios from "axios";

class ResultsPage extends Component {
    constructor(props) {
        super(props);
        const {match: {params}} = this.props;
        const {procedure} = params;
        this.state = {
            allHospitals: [],
            procedure
        }
    }



    componentDidMount() {
        // Do the ajax call to get list of matching hospitals
        const apiUrl = '/api/getAllHospitals';
        const config = {
            headers: {
                Authorization: 'Bearer mBu7IB6nuxh8RVzJ61f4'
            }
        };
        axios.get(apiUrl, config)
            .then((res) => {
                const returnedHospitals = res.data.data.hospitals.data.hospitals.data;
                console.log(returnedHospitals)
                this.setState({
                    allHospitals: returnedHospitals
                });
            })
            .catch((error) => {
                console.log('All hospitals error', error)
            })

        // We also need to look at the procedure selected and get the parent specialty

        // This will need an API route to search the procedures table and return the parent specialty id

        // Hospitals can then be filtered by specialty id
    }

    render() {
        const {procedure} = this.state;

        return (
            <main>
                <section>
                    {procedure !== null ? <h1>{procedure}</h1> : <h1>No procedure selected</h1>}
                </section>
            </main>
        );
    }
}

export default ResultsPage;
