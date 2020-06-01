import React, {Component} from 'react'
import PropTypes from 'prop-types'
import {BrowserRouter as Router, Redirect, Route, Switch} from 'react-router-dom'
import HomePage from './hc-react/pages/home/HomePage'
import FaqHome from './hc-react/pages/faqs/FaqHome'
import ResultsPage from './hc-react/pages/results/ResultsPage'
import Header from './hc-react/components/Header'
import Footer from './hc-react/components/Footer'

class App extends Component {
    state = {
        menuOpen: false
    };

    componentDidMount() {
        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);
    }

    handleMenuToggle = () => {
        this.setState({
            menuOpen: !this.state.menuOpen
        });

        this.state.menuOpen
            ? document.body.classList.remove('menu-open')
            : document.body.classList.add('menu-open');
    };

    render() {
        return (
            <React.Fragment>
                <Router>
                    <Header handleMenuToggle={this.handleMenuToggle}/>
                    <Switch>
                        <Route exact path="/"
                               component={HomePage}
                               history={this.props.history}/>
                        <Route exact path="/results-page" component={ResultsPage}/>
                        {/*<Route exact path="/results-page/:postcode/:procedure" component={ResultsPage}/>*/}
                        <Route exact path="/faqs" component={FaqHome}/>
                        <Redirect to="/"/>
                    </Switch>
                </Router>
                <Footer/>
            </React.Fragment>
        );
    }
}

export default App
