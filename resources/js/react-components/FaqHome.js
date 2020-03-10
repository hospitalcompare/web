import React, {Component} from 'react';
import SearchFaq from "./SearchFaq";
import ListFaqs from "./ListFaqs";
import axios from "axios";

class FaqHome extends Component {
    state = {
        faqs: []
    };

    setFaqs = (searchTerm) => {
        console.log('searched');
        const apiUrl = `api/search-faq/${searchTerm}`;
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
                this.setState({faqs: []}); // clear faqs
                this.setState({
                    faqs: res.data.data.faqs
                });
                console.log(res.data.data.faqs)
            })
            .catch(error => console.log('Error', error))
    };

    render() {
        return (
            <div className="container">
                <SearchFaq setFaqs={this.setFaqs}/>
                <div className="accordion" id="faqs_accordion">
                    <ListFaqs faqs={this.state.faqs}/>
                </div>
            </div>
        );
    }
}

export default FaqHome;
