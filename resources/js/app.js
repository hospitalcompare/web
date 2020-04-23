import React from 'react'
import {BrowserRouter as Router, Redirect, Route, Switch, NavLink, Link} from 'react-router-dom'
import HomePage from './react/pages/HomePage'
import FaqHome from './react/pages/FaqHome'
import Header from './react/components/Header'
import Footer from './react/components/Footer'

const App = () => {
    return (
        <React.Fragment>
            <Header/>
            <Router>
                <Switch>
                    <Route exact path="/" component={HomePage}/>
                    <Route exact path="/faqs" component={FaqHome}/>
                    <Redirect to="/"/>
                </Switch>
            </Router>
            <Footer/>
        </React.Fragment>
    );
};

export default App
