import React, {Component} from 'react'
import {BrowserRouter as Router, Redirect, Route, Switch} from 'react-router-dom'
import HomePage from './react/pages/home/HomePage'
import FaqHome from './react/pages/faqs/FaqHome'
import ResultsPage from './react/pages/results/ResultsPage'
import Header from './react/components/Header'
import Footer from './react/components/Footer'

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            menuOpen: false
        }
    }

    handleMenuToggle = () => {
        this.setState({
            menuOpen: !this.state.menuOpen
        })

        this.state.menuOpen
            ? document.body.classList.remove('menu-open')
            : document.body.classList.add('menu-open');
    }

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
                        <Route path="/results-page/:procedure" component={ResultsPage}/>
                        <Route exact path="/faqs" component={FaqHome}/>
                        <Redirect to="/"/>
                    </Switch>
                </Router>
                <Footer/>
            </React.Fragment>
        );
    }
};

export default App
