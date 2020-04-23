import React, {Component} from 'react'
import ReactDOM from 'react-dom'
import {BrowserRouter as Router, Redirect, Route, Switch, NavLink, Link} from 'react-router-dom'
import HomePage from './react-components/HomePage'
import FaqHome from './react-components/FaqHome'
import Header from './react-components/Header'

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
        </React.Fragment>
    );
};

export default App
