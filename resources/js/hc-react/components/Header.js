import React, {Component} from 'react';
import {NavLink} from 'react-router-dom';
import PropTypes from 'prop-types';

// import NavLink from './NavLink';

class Header extends Component {
    render() {
        return (
            <div id="top" className="header-wrapper">
                <header className="header">
                    <div
                        className="container d-flex align-items-center justify-content-center justify-content-lg-between">
                        <div id="menu_toggle"
                             className="d-lg-none mr-auto"
                             onClick={this.props.handleMenuToggle}>
                            <img width="20px" height="20px"
                                 src="/images/icons/icon-menu.svg"
                                 alt="Menu icon"/>
                        </div>
                        <div className="header-logo-parent">
                            <a href="/" className="">
                                <img className="header-logo-image d-lg-none" height="40px"
                                     src="/images/icons/logo-mobile.svg" alt="Hospital Compare logo"/>
                                <img className="header-logo-image d-none d-lg-block"
                                     height="34px"
                                     src="/images/icons/logo-desktop.svg" alt="Hospital Compare logo"/>
                            </a>
                        </div>
                        <nav id="main_nav" className="main-nav" role="navigation">
                            <ul className="main-menu">
                                <li>
                                    <NavLink exact
                                             activeClassName=""
                                             to="/results-page">Results</NavLink>
                                </li>
                                <li>
                                    {/*<a href="/">Home</a>*/}
                                    <NavLink exact
                                             activeClassName=""
                                             to="/">Home</NavLink>
                                </li>
                                <li>
                                    <NavLink activeClassName="active"
                                             to="/faqs">FAQs
                                    </NavLink>
                                </li>
                            </ul>
                        </nav>
                        <span id="search_toggle"
                              className="d-lg-none ml-auto"
                              role="button" data-toggle="modal"
                              data-target="#hc_modal_mobile_search">
                        </span>
                    </div>
                </header>
            </div>
        );
    }
};

Header.propTypes = {
    handleMenuToggle: PropTypes.func
};

export default Header;
