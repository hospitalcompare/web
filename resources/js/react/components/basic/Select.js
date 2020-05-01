import React, {Component} from 'react';
import axios from "axios";
import SelectSearch from 'react-select-search';

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
        const options = [
            {name: 'Swedish', value: 'sv'},
            {name: 'English', value: 'en'},
            {
                type: 'group',
                name: 'Group name',
                items: [
                    {name: 'Spanish', value: 'es'},
                ]
            },
        ];
        return (
            <SelectSearch onChange={()=> console.log('select')}
                          options={options}
                          defaultValue="sv"
                          name="language"
                          placeholder="Choose your language" />
        );
    }
};

export default Select;
