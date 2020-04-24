import React, {Component} from 'react';

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
                                     src="//localhost:8080/images/icons/logo-mobile.svg" alt="Hospital Compare logo"/>
                                <img className="header-logo-image d-none d-lg-block"
                                     height="34px"
                                     src="//localhost:8080/images/icons/logo-desktop.svg" alt="Hospital Compare logo"/>
                            </a>
                        </div>
                        <nav id="main_nav" className="main-nav" role="navigation">
                            <ul className="main-menu">
                                <li>
                                    <a href="/">Home</a>
                                    {/*<svg className="d-lg-none" xmlns="http://www.w3.org/2000/svg" width="7" height="11"*/}
                                    {/*     viewBox="0 0 7 11">*/}
                                    {/*    <g>*/}
                                    {/*        <g>*/}
                                    {/*            <path fill="grey"*/}
                                    {/*                  d="M4.406 5.655L.495 9.567a.567.567 0 0 0-.167.405c0 .153.059.296.167.404l.342.343a.567.567 0 0 0 .405.167c.153 0 .297-.06.404-.167L6.304 6.06a.567.567 0 0 0 .167-.405.567.567 0 0 0-.167-.407L1.65.596A.567.567 0 0 0 1.246.43a.568.568 0 0 0-.404.167L.499.94a.573.573 0 0 0 0 .809z"></path>*/}
                                    {/*        </g>*/}
                                    {/*    </g>*/}
                                    {/*</svg>*/}
                                </li>
                                <li>
                                    <a href="/about-us">About Us
                                        {/*<svg className="d-lg-none" xmlns="http://www.w3.org/2000/svg" width="7" height="11"*/}
                                        {/*     viewBox="0 0 7 11">*/}
                                        {/*    <g>*/}
                                        {/*        <g>*/}
                                        {/*            <path fill="grey"*/}
                                        {/*                  d="M4.406 5.655L.495 9.567a.567.567 0 0 0-.167.405c0 .153.059.296.167.404l.342.343a.567.567 0 0 0 .405.167c.153 0 .297-.06.404-.167L6.304 6.06a.567.567 0 0 0 .167-.405.567.567 0 0 0-.167-.407L1.65.596A.567.567 0 0 0 1.246.43a.568.568 0 0 0-.404.167L.499.94a.573.573 0 0 0 0 .809z"></path>*/}
                                        {/*        </g>*/}
                                        {/*    </g>*/}
                                        {/*</svg>*/}
                                    </a>
                                </li>
                                <li>
                                    <a href="/your-rights">Your Rights
                                        {/*<svg className="d-lg-none" xmlns="http://www.w3.org/2000/svg" width="7" height="11"*/}
                                        {/*     viewBox="0 0 7 11">*/}
                                        {/*    <g>*/}
                                        {/*        <g>*/}
                                        {/*            <path fill="grey"*/}
                                        {/*                  d="M4.406 5.655L.495 9.567a.567.567 0 0 0-.167.405c0 .153.059.296.167.404l.342.343a.567.567 0 0 0 .405.167c.153 0 .297-.06.404-.167L6.304 6.06a.567.567 0 0 0 .167-.405.567.567 0 0 0-.167-.407L1.65.596A.567.567 0 0 0 1.246.43a.568.568 0 0 0-.404.167L.499.94a.573.573 0 0 0 0 .809z"></path>*/}
                                        {/*        </g>*/}
                                        {/*    </g>*/}
                                        {/*</svg>*/}
                                    </a>
                                </li>
                                <li>
                                    <a href="/how-to-use">How To Use
                                        {/*<svg className="d-lg-none" xmlns="http://www.w3.org/2000/svg" width="7" height="11"*/}
                                        {/*     viewBox="0 0 7 11">*/}
                                        {/*    <g>*/}
                                        {/*        <g>*/}
                                        {/*            <path fill="grey" d="M4.406 5.655L.495 9.567a.567.567 0 0 0-.167.405c0 .153.059.296.167.404l.342.343a.567.567 0 0 0 .405.167c.153 0 .297-.06.404-.167L6.304 6.06a.567.567 0 0 0 .167-.405.567.567 0 0 0-.167-.407L1.65.596A.567.567 0 0 0 1.246.43a.568.568 0 0 0-.404.167L.499.94a.573.573 0 0 0 0 .809z"></path>*/}
                                        {/*        </g>*/}
                                        {/*    </g>*/}
                                        {/*</svg>*/}
                                    </a>
                                </li>
                                <li>
                                    <a href="/faqs">FAQs
                                        {/*<svg className="d-lg-none" xmlns="http://www.w3.org/2000/svg" width="7" height="11"*/}
                                        {/*     viewBox="0 0 7 11">*/}
                                        {/*    <g>*/}
                                        {/*        <g>*/}
                                        {/*            <path fill="grey"*/}
                                        {/*                  d="M4.406 5.655L.495 9.567a.567.567 0 0 0-.167.405c0 .153.059.296.167.404l.342.343a.567.567 0 0 0 .405.167c.153 0 .297-.06.404-.167L6.304 6.06a.567.567 0 0 0 .167-.405.567.567 0 0 0-.167-.407L1.65.596A.567.567 0 0 0 1.246.43a.568.568 0 0 0-.404.167L.499.94a.573.573 0 0 0 0 .809z"></path>*/}
                                        {/*        </g>*/}
                                        {/*    </g>*/}
                                        {/*</svg>*/}
                                    </a>
                                </li>
                                <li>
                                    <a href="/blogs">Blog
                                        {/*<svg className="d-lg-none" xmlns="http://www.w3.org/2000/svg" width="7" height="11"*/}
                                        {/*     viewBox="0 0 7 11">*/}
                                        {/*    <g>*/}
                                        {/*        <g>*/}
                                        {/*            <path fill="grey"*/}
                                        {/*                  d="M4.406 5.655L.495 9.567a.567.567 0 0 0-.167.405c0 .153.059.296.167.404l.342.343a.567.567 0 0 0 .405.167c.153 0 .297-.06.404-.167L6.304 6.06a.567.567 0 0 0 .167-.405.567.567 0 0 0-.167-.407L1.65.596A.567.567 0 0 0 1.246.43a.568.568 0 0 0-.404.167L.499.94a.573.573 0 0 0 0 .809z"></path>*/}
                                        {/*        </g>*/}
                                        {/*    </g>*/}
                                        {/*</svg>*/}
                                    </a>
                                </li>
                                <li className="d-none d-lg-inline-block">
                                    <a className="cursor-pointer" data-toggle="modal" data-target="#hc_modal_tour">
                                        Help
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <span id="search_toggle"
                              className="d-lg-none ml-auto"
                              role="button" data-toggle="modal"
                              data-target="#hc_modal_mobile_search">
                        {/*<span className="sr-only">Menu Toggle</span>*/}
                            {/*<svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.1 39.08">*/}
                            {/*    <g data-name="Layer 1">*/}
                            {/*        <path fill="#fff"*/}
                            {/*              d="M36.3,38.62a1.7,1.7,0,0,0,2.31,0,1.64,1.64,0,0,0,0-2.33l-8.91-8.91.51-.7a16.77,16.77,0,1,0-3.53,3.53l.69-.51ZM16.74,30.21A13.46,13.46,0,1,1,30.2,16.75,13.48,13.48,0,0,1,16.74,30.21Z"></path>*/}
                            {/*    </g>*/}
                            {/*</svg>*/}
                    </span>
                    </div>
                </header>
            </div>
        );
    }
};

export default Header;
