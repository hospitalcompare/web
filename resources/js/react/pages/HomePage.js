import React, {Component} from 'react';
import Banner from './pageSections/Banner';

class HomePage extends Component {
    componentDidMount() {
        document.title = "Hospital Compare";
        document.body.classList.add('home-page');

        // this.props.history.push('/results-page')
    }

    render() {
        return (
            <main>
                <Banner history={this.props.history} />
                {/*<h1>Homepage</h1>*/}
            </main>
        );
    }
}

export default HomePage;
