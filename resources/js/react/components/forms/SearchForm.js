import React, {Component} from 'react';
import Select from '../basic/Select';
import Form from "react-bootstrap/Form";
import {withRouter} from "react-router";

class SearchForm extends Component {
    state = {
        procedure: '',
        postcode: '',
        procedureId: null
    }

    componentDidMount() {
        console.log(this.context)
    }

    submitForm = (e) => {
        e.preventDefault();
    }

    handleClick = (e) => {
        e.preventDefault();
        const {procedure, postcode} = this.state;
        this.props.history.push({
            pathname: `/results-page/${procedure}/${postcode}`,
            // search:
        })
    }

    handleChange = (e) => {
        const {name, value} = e.target;
        this.setState({
            [name]: value
        })
    }

    render() {
        return (
            <React.Fragment>
                <Form id="search_form"
                      className="form-element"
                      onSubmit={this.submitForm}>
                    <div className="form-child treatment-parent position-relative">
                        <Select className="big"
                                handleChange={this.handleChange}/>
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
                            <input type="text"
                                   name="postcode"
                                   className="postcode-text-box big input-postcode"
                                   placeholder="Enter postcode"
                                   onChange={this.handleChange}/>
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
                    <button onClick={this.handleClick}
                            id="submit_search"
                            className="btn btn-squared btn-block text-center btn-brand-primary-1 mb-3 font-18">Search
                        now
                    </button>
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
            </React.Fragment>
        );
    }
}

export default withRouter(SearchForm);
