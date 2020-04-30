import React, {Component} from 'react';
import Select from '../basic/Select';
import Form from "react-bootstrap/Form";
import {withRouter} from "react-router";
import axios from "axios";

class SearchForm extends Component {
    state = {
        radii: [],
        procedure: '',
        postcode: '',
        returnedPostcodes: [
        //     {
        //     "postcode": "WA6 8JY",
        //     "quality": 1,
        //     "eastings": 357120,
        //     "northings": 372467,
        //     "country": "England",
        //     "nhs_ha": "North West",
        //     "longitude": -2.64407,
        //     "latitude": 53.247492,
        //     "european_electoral_region": "North West",
        //     "primary_care_trust": "Western Cheshire",
        //     "region": "North West",
        //     "lsoa": "Cheshire West and Chester 015A",
        //     "msoa": "Cheshire West and Chester 015",
        //     "incode": "8JY",
        //     "outcode": "WA6",
        //     "parliamentary_constituency": "Weaver Vale",
        //     "admin_district": "Cheshire West and Chester",
        //     "parish": "Norley",
        //     "admin_county": null,
        //     "admin_ward": "Weaver & Cuddington",
        //     "ced": null,
        //     "ccg": "NHS West Cheshire",
        //     "nuts": "Cheshire West and Chester",
        //     "codes": {
        //         "admin_district": "E06000050",
        //         "admin_county": "E99999999",
        //         "admin_ward": "E05012243",
        //         "parish": "E04012555",
        //         "parliamentary_constituency": "E14001024",
        //         "ccg": "E38000196",
        //         "ccg_id": "02F",
        //         "ced": "E99999999",
        //         "nuts": "UKD63"
        //     }
        // }
        ],
        radius: null
    }

    componentDidMount() {
        const apiUrl = `api/getRadius`;
        // const bodyparams = {
        //     dataType: "json",
        //     contentType: "application/json; charset=utf-8"
        // };
        const config = {
            headers: {
                Authorization: 'Bearer mBu7IB6nuxh8RVzJ61f4'
            }
        };
        axios.get(apiUrl, config)
            .then((res) => {
                const radii = res.data.data.radius_for_dropdown;
                this.setState({
                    radii
                });
            })
            .catch((error) => {
                console.log('Error with fetching radii', error)
            })
    }

    handlePostcodeAjax = (value) => {
        const config = {
            headers: {
                Authorization: 'Bearer mBu7IB6nuxh8RVzJ61f4'
            }
        };
        if (value !== "") {
            axios.get(`api/getLocations/${value}`, config)
                .then((res) => {
                    const locations = res.data.data;
                    console.log(locations.result)
                    this.setState({
                        returnedPostcodes: locations.result
                    })
                })
                .catch((error) => {
                    console.log('Error with fetching locations', error)
                })
        }


        // $.ajax({
        //     url: 'api/getLocations/' + value,
        //     type: 'GET',
        //     headers: {
        //         'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4',
        //     },
        //     dataType: "json",
        //     contentType: "application/json; charset=utf-8",
        //     data: {},
        //     success: function (data) {
        //         ajaxBox.empty(); // remove old options
        //         $('#hc_alert').slideUp(); // Hide the alert bar
        //         //Check if we have at least one result in our data
        //         if (!$.isEmptyObject(data.data.result)) {
        //             $.each(data.data.result, function (key, obj) { //$.parseJSON() method is needed unless chrome is throwing error.
        //                 ajaxBox.append("<p class='postcode-item' >" + obj.postcode + ', ' + obj.admin_district + "</p>");
        //             });
        //             resultsContainer.slideDown();
        //         } else {
        //             ajaxBox.append(`<p class='postcode-error-message'>No matches found for ${postcode}</p>`);
        //             resultsContainer.slideDown();
        //         }
        //     },
        //     error: function (data) {
        //         showAlert('Something went wrong! Please try again.', false)
        //     },
        // })
    }


    submitForm = (e) => {
        e.preventDefault();
    }

    handleClick = (e) => {
        e.preventDefault();
        const {procedure, postcode, radius} = this.state;
        this.props.history.push({
            pathname: '/results-page/',
            search: `?postcode=${postcode}&procedure=${procedure}&radius=${radius}`
        })
    }

    handleChange = (e) => {
        const {name, value} = e.target;
        if (name === 'postcode') {
            console.log(value)
            this.handlePostcodeAjax(value)
        }
        this.setState({[name]: value})
    }

    render() {
        const {returnedPostcodes} = this.state;
        return (
            <React.Fragment>
                <Form id="search_form"
                      className="form-element"
                      onSubmit={this.submitForm}>
                    <div className="form-child treatment-parent position-relative">
                        <Select value={this.state.procedure}
                                className="big"
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
                                   value={this.state.postcode}
                                // value={this.state.postcode}
                                   className="postcode-text-box big input-postcode"
                                   placeholder="Enter postcode"
                                   onChange={this.handleChange}/>
                        </div>
                        <div className="postcode-results-container d-block">
                            <div className="ajax-box">
                                {
                                    this.state.returnedPostcodes.map(result => <p className='postcode-item'>{result.postcode}, {result.admin_district}</p>)
                                }

                            </div>
                        </div>
                    </div>
                    <div className="form-child radius-parent full-left _column-layout position-relative"
                         data-reveal-direction="down">
                        <select
                            className="w-100 distance-dropdown big select-picker"
                            onChange={this.handleChange}
                            defaultValue="how"
                            name="radius"
                            id="">
                            <option disabled key="-1"
                                    value="how">How far would you travel?
                            </option>
                            {
                                this.state.radii.map(
                                    option => <option key={option.id}
                                                      value={option.value}>{option.name}</option>
                                )
                            }
                        </select>
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
