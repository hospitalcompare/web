import React from 'react'
import { render } from 'react-dom'
import { createStore, applyMiddleware } from 'redux'
import { Provider } from 'react-redux'
import thunk from 'redux-thunk'
import { composeWithDevTools } from 'redux-devtools-extension'
import rootReducer from "./react/reducers";

import App from './App'

const store = createStore(
    rootReducer,
    composeWithDevTools(applyMiddleware(thunk)));

const reactContainer = document.getElementById('react-container');

render(
    <Provider store={store}>
        <App/>
    </Provider>,
    reactContainer
);
