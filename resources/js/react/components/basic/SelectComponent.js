import React, {Component} from 'react';
import axios from "axios";
import Select from 'react-select';

const options = [
    { value: 'Food', label: 'Food' },
    { value: 'Being Fabulous', label: 'Being Fabulous' },
    { value: 'Ken Wheeler', label: 'Ken Wheeler' },
    { value: 'ReasonML', label: 'ReasonML' },
    { value: 'Unicorns', label: 'Unicorns' },
    { value: 'Kittens', label: 'Kittens' },
];

class SelectComponent extends Component {
    constructor() {
        super();
        this.state = {
            specialties: [],
            procedure: ''
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
                    specialties: specialties.map(
                        specialty => ({
                            // value: specialty.id,
                            label: specialty.name,
                            options: specialty.procedures.map(procedure => ({
                                value: procedure.id,
                                label: procedure.name
                            }))
                        })
                    )
                });
            })
            .catch((error) => {
                console.log('Error with fetching procedures', error)
            })
    }

    render() {
        const {specialties} = this.state;

        const groupStyles = {
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'flex-start',
        };

        const formatGroupLabel = data => (
            <div style={groupStyles}>
                <span>{data.label}</span>
                {/*<span style={groupBadgeStyles}>{data.options.length}</span>*/}
            </div>
        );

        return (
            <Select
                name="procedure"
                className="big"
                placeholder="Choose your treatment (if known)"
                formatGroupLabel={formatGroupLabel}
                options={specialties}
                onChange={(property, value) => {
                    console.log(property, value)
                    this.setState({ procedure: property.value })
                }}

            />
        );
    }
};

export default SelectComponent;
