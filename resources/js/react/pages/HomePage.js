import React, {Component} from 'react';

class HomePage extends Component {
    componentDidMount() {
        document.title = "Hospital Compare";
        document.body.classList.add('home-page');
    }

    render() {
        return (
            <main>
                <section>
                    <div className="container">
                        Home page
                    </div>
                </section>
            </main>
        );
    }
}

export default HomePage;
