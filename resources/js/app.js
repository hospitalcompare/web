
import React, {Component} from 'react'
import ReactDOM from 'react-dom'
// // import { BrowserRouter, Route, Switch } from 'react-router-dom'
import FaqHome from './react-components/FaqHome'

const App = () => {
    return (
        <div>
            <FaqHome/>
        </div>
    );
};

const reactContainer = document.getElementById('react-container');
ReactDOM.render(<App/>, reactContainer);
