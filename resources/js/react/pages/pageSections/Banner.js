import React, {Component} from 'react';
import SearchForm from '../../components/forms/SearchForm';

import Form from 'react-bootstrap/Form';
import Select from '../../components/basic/Select';

class Banner extends Component {
    render() {
        const hideText = true;
        return (
            <section className="banner">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="banner-text col col-12 col-lg-6">
                            <h1>Choose the
                                <span className="col-brand-primary-1">Right Hospital <br
                                    className="d-none d-md-inline-block"/></span>for
                                <span className="col-brand-primary-1">Your&nbsp;Treatment</span>
                            </h1>
                            <h3 className="font-20 d-lg-none">Find the best quality hospitals and shortest waiting
                                times,
                                locally or across England.</h3>
                            <p className="col-grey d-none d-lg-block">Find the best quality hospitals and shortest
                                waiting
                                times, locally or across England.</p>
                            <p className="col-grey d-none d-lg-block">Did you know: </p>
                            <ul className="banner-list col-grey  d-none d-lg-block">
                                <li className="green-tick green-tick-large">Waiting times and quality of care vary
                                    greatly
                                </li>
                                <li className="green-tick green-tick-large">You have a legal right to have your free NHS
                                    treatment at an NHS or private hospital of your choice*
                                </li>
                                <li className="green-tick green-tick-large">You can use Hospital Compare to select a
                                    hospital,<br/> paid for by you or your insurance.
                                </li>
                            </ul>
                        </div>
                        <div className="col col-lg-6 col-12">
                            <div className="banner-form-wrapper rounded ml-auto">
                                <p className="SofiaPro-Medium d-none d-lg-block">Find the best hospitals</p>
                                <SearchForm hiklstory={this.props.history} />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            // {
            //     !hideText ?
            //     <section classNameName="mobile-choice d-lg-none text-center p-y-75">
            //         <div classNameName="container">
            //             <div classNameName="row">
            //                 <div classNameName="banner-text col col-12 col-lg-6">
            //                     <h2 classNameName="h1">You have a <span classNameName="col-brand-primary-1">choice</span></h2>
            //                     <p classNameName="col-grey">The quality of care and waiting times in England vary greatly
            //                         between
            //                         hospitals. You have the
            //                         legal right to
            //                         choose where to have your treatment*. It can be at: </p>
            //                     <ul classNameName="banner-list col-grey">
            //                         <li classNameName="green-tick green-tick-large text-center">An NHS or private hospital,
            //                             funded
            //                             by the NHS
            //                         </li>
            //                         <li classNameName="green-tick green-tick-large text-center">A private hospital of your
            //                             choice,
            //                             paid for by you or your insurance
            //                         </li>
            //                     </ul>
            //                 </div>
            //             </div>
            //         </div>
            //     </section>
            //     : '' }
        );
    }
}

export default Banner;
