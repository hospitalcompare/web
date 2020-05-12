import React, {Component} from 'react';
import { connect } from 'react-redux';
import Form from "react-bootstrap/Form";
import {withRouter} from "react-router";
import axios from "axios";

import SelectComponent from '../basic/SelectComponent';
import InputComponent from "../basic/InputComponent";
import '../../scripts/validatePostcode';
import {fetchPostcodes, setPostcode} from "../../actions/postcodeActions";

class SearchForm extends Component {
    constructor(props) {
        super(props);
        this.state = {
            radii: [],
            procedure: '0',
            postcode: '',
            fakePostcode: '',
            returnedPostcodes: [],
            radius: 50,
            haveResults: false,
            showPostcodes: false
        }
    }

    componentDidMount() {
        const apiUrl = `api/getRadius`;
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

    };

    submitForm = (e) => {
        e.preventDefault();
    };

    handleClick = (e) => {
        e.preventDefault();
        const {postcode, radius, fakePostcode} = this.state;
        const procedure = '4';
        if(fakePostcode !== "") {
            // TODO: create a function to display a message saying 'something went wrong'
            return;
        }

        this.props.history.push({
            pathname: '/results-page/',
            search: `?postcode=${postcode}&procedure=${procedure}&radius=${radius}`
        })
    };

    handleSelect = (value) => {
        console.log(value)
        this.setState({
            procedure: value
        })
    };

    handleChange = (e) => {
        const {value, name} = e.target;

        let timer;
        const interval = 0;
        // For the postcode field, make the ajax call
        if (name === 'postcode') {
            clearTimeout(timer);
            timer = setTimeout(() => {
                this.handlePostcodeAjax(value)
            }, interval);
        }

        this.setState({[name]: value})
    };

    render() {
        const {returnedPostcodes, postcode, haveResults, showPostcodes, procedure, fakePostcode} = this.state;

        return (
            <React.Fragment>
                <Form id="search_form"
                      className="form-element"
                      onSubmit={this.submitForm}>
                    <div className="form-child treatment-parent position-relative">
                        <SelectComponent />
                    </div>
                    <div className="form-child postcode-parent position-relative">
                        <label htmlFor="fakePostcode" className="d-none">
                            <span className="sr-only">fake postcode</span>
                        </label>
                        <input name="fakePostcode"
                               id="fakePostcode"
                               value={fakePostcode}
                               type="text"
                               style={{display: 'none'}}
                               onChange={this.handleChange}/>

                        <div className="input-wrapper position-relative">
                            <InputComponent onChange={(e) => {
                                // Update the stored postcode
                                this.props.dispatch(setPostcode(e.target.value));
                                // Get the postcodes
                                // this.props.dispatch(fetchPostcodes(postcode))
                            }}/>
                        </div>
                        <div className={`postcode-results-container ${showPostcodes ? 'd-block' : 'd-none'}`}>
                            <div className="ajax-box">
                                {
                                    haveResults
                                        ? returnedPostcodes.map(
                                        (result, index) =>
                                            <p
                                                key={index}
                                                data-postcode={result.postcode}
                                                className='postcode-item'
                                                onClick={(e) => {
                                                    this.setState({
                                                        postcode: e.target.dataset.postcode,
                                                        showPostcodes: false
                                                    })
                                                }}>{result.postcode}, {result.admin_district}</p>)
                                        : <p className='postcode-error-message'>No matches found for {postcode}</p>
                                }
                            </div>
                        </div>
                    </div>
                    <div
                        className={`form-child radius-parent full-left column-layout ${postcode.length > 0 ? 'revealed-down' : ''} position-relative`}
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
                    </div>
                    <button onClick={this.handleClick}
                            id="submit_search"
                            className="btn btn-squared btn-block text-center btn-brand-primary-1 mb-3 font-18">
                        Search now
                    </button>
                    <div className='browse-button text-left text-lg-center'>
                        <a href="/results-page"
                           className="col-grey pl-0 btn-plain btn-icon-arrow w-100 d-flex align-items-center justify-content-lg-center">Browse
                            all hospitals</a>
                    </div>
                </Form>
            </React.Fragment>
        );
    }
}

export default connect()(withRouter(SearchForm));
