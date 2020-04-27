import React, {Component} from 'react';
import Form, {Control} from 'react-bootstrap/Form';
import axios from "axios";

class Select extends Component {
    constructor() {
        super();
        this.state = {
            procedures: [],
        }
        this.selectedProcedure = React.createRef();
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
                const procedures = res.data.data.procedures_for_dropdowns;
                console.log(procedures)
                this.setState({
                    procedures
                });
            })
            .catch((error) => {
                console.log('Error with fetching procedures', error)
            })
    }

    render() {
        return (
            <Form.Control
                name="procedure"
                ref={this.selectedProcedure}
                onChange={(e) => this.props.handleChange(e)}
                className="select-picker"
                as="select">
                {
                    this.state.procedures.map(specialty => (<optgroup label={specialty.name}
                                                                      key={specialty.id}>
                        {
                            specialty.hasOwnProperty("procedures")
                                ? specialty.procedures.map(procedure =>
                                    <option key={procedure.id}
                                            value={procedure.id}>{procedure.name}</option>)
                                : ''
                        }
                    </optgroup>))
                }
            </Form.Control>
        );
    }
};

export default Select;
