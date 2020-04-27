import React, {Component} from 'react';
import {useParams} from 'react-router-dom';

class ResultsPage extends Component {
    render() {
        const { match: { params } } = this.props;
        const {procedure} = params;

        return (
            <main>
                <section>
                    {procedure !== null ? <h1>{procedure}</h1> : <h1>No procedure selected</h1> }
                </section>
            </main>
        );
    }
}

export default ResultsPage;
