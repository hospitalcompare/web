import React, {Component} from 'react';
import Form, {Control} from 'react-bootstrap/Form';
import axios from "axios";

class Select extends Component {
    constructor() {
        super();
        this.state = {
            specialties: [],
        }
    }

    // Load in all FAQs on page load
    componentDidMount() {
        const apiUrl = `api/getProcedures`;
        const bodyparams = {
            dataType: "json",
            contentType: "application/json; charset=utf-8"
        };
        const config = {
            headers: {
                Authorization: 'Bearer mBu7IB6nuxh8RVzJ61f4'
            }
        };
        axios.post(apiUrl, bodyparams, config)
            .then((res) => {
                const specialties = res.data.data.procedures_for_dropdowns;
                this.setState({
                    specialties
                });
            })
            .catch((error) => {
                console.log('Error with fetching procedures', error)
            })
    }

    render() {
        const {specialties} = this.state;
        return (
            <Form.Control
                name="procedure"
                ref={this.selectedProcedure}
                defaultValue={-1}
                onChange={(e) => this.props.handleChange(e)}
                className="select-picker"
                as="select">
                {
                    specialties.map(
                        specialty => {
                            return specialty.id === 0 || specialty.id === '-1'
                                ? <option key={specialty.id}>{specialty.name}</option>
                                : <optgroup label={specialty.name}
                                            key={specialty.id}>
                                    {
                                        specialty.hasOwnProperty("procedures")
                                            ? specialty.procedures.map(procedure =>
                                                <option key={procedure.id}
                                                        value={procedure.id}>{procedure.name}</option>)
                                            : ''
                                    }
                                </optgroup>
                        }
                    )
                }
            </Form.Control>
        );
    }
};

export default Select;
