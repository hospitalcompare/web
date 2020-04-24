import React, {Component} from 'react';
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
                                <Form id="search_form"
                                      className="form-element"
                                      method="get"
                                      action="/results-page">
                                    <div className="form-child treatment-parent position-relative">
                                        <Select />
                                        {/*@include('components.basic.select', [*/}
                                        {/*'selectPicker'          => 'true',*/}
                                        {/*'selectclassName'           => 'big select-picker',*/}
                                        {/*'options'               => $data['procedures'],*/}
                                        {/*'group'                 => true,*/}
                                        {/*'groupName'             => 'procedures',*/}
                                        {/*'suboptionclassName'        => 'subprocedures',*/}
                                        {/*'svg'                   => 'chevron-down',*/}
                                        {/*'name'                  => 'procedure_id',*/}
                                        {/*'selectId'              => 'choose_procedure',*/}
                                        {/*])*/}

                                    </div>
                                    <div className="form-child postcode-parent position-relative">
                                        {/*                                Add this hidden input to remove the autocomplete functionality*/}
                                        {/*<label htmlFor"fake_postcode" className="d-none">*/}
                                        {/*    <span className="sr-only">fake postcode</span>*/}
                                        {/*</label>*/}
                                        <input name="fake_postcode" id="fake_postcode" type="text"
                                               style={{display: 'none'}}/>

                                        <div className="input-wrapper position-relative">
                                            {/*@include('components.basic.input', [*/}
                                            {/*'placeholder'       => 'Enter postcode',*/}
                                            {/*'inputclassName'    => 'postcode-text-box big input-postcode',*/}
                                            {/*'value'             => '',*/}
                                            {/*'name'              => 'postcode',*/}
                                            {/*'validation'        => 'maxlength=8 autocomplete="off"',*/}
                                            {/*'id'                => 'input_postcode'*/}
                                            {/*])*/}
                                        </div>
                                        <div className="postcode-results-container">
                                            <div className="ajax-box">
                                                <span className="sr-only">Ajax box</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="form-child radius-parent full-left column-layout position-relative"
                                         data-reveal-direction="down">
                                        {/*@include('components.basic.select', [*/}
                                        {/*'selectclassName'           =>  'distance-dropdown big select-picker',*/}
                                        {/*'selectWrapperclassName'    =>  'w-100',*/}
                                        {/*'selectParentclassName'     =>  'd-md-flex w-100',*/}
                                        {/*'options'               =>  \App\Helpers\Utils::radius,*/}
                                        {/*'placeholderOption'     =>  'Select Distance',*/}
                                        {/*'selectedPlaceholder'   =>  true,*/}
                                        {/*'name'                  =>  'radius',*/}
                                        {/*'svg'                   =>  'chevron-down'])*/}

                                    </div>
                                    {/*@include('components.basic.button', [*/}
                                    {/*'classNameTitle'    => 'btn btn-squared btn-block text-center btn-brand-primary-1 mb-3 font-18',*/}
                                    {/*'buttonText'    => 'Search Now',*/}
                                    {/*'htmlButton'    => true,*/}
                                    {/*'id'            => 'submit_search',*/}
                                    {/*])*/}
                                    <div className='browse-button text-left text-lg-center'>
                                        {/*@include('components.basic.button', [*/}
                                        {/*'classNameTitle'    => 'col-grey pl-0 btn-plain btn-icon-arrow w-100 d-flex align-items-center justify-content-lg-center',*/}
                                        {/*'buttonText'    => 'Browse all hospitals',*/}
                                        {/*'htmlButton'    => true,*/}
                                        {/*'svg'           => 'icon-arrow',*/}
                                        {/*'hrefValue'     => '/results-page'*/}
                                        {/*])*/}
                                    </div>
                                </Form>
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
