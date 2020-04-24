import React, {Component} from 'react';
import Banner from './pageSections/Banner';

class HomePage extends Component {
    componentDidMount() {
        document.title = "Hospital Compare";
        document.body.classList.add('home-page');
    }

    render() {
        return (
            <main>
                <Banner />
                {/*<h1>Homepage</h1>*/}
            </main>
        );
    }
}

export default HomePage;
