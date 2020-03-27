import React, {Component} from 'react';
import SearchFaq from "./SearchFaq";
import ListFaqs from "./ListFaqs";
import axios from "axios";

class FaqHome extends Component {
    constructor() {
        super();
        this.state = {
            allFaqs: [],
            filteredFaqs: [],
            searchTerm: 'Test'
        };
        this.handleChange = this.handleChange().bind(this);
    }

    // Load in all FAQs on page load
    componentDidMount() {
        const apiUrl = `api/faqs`;
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
                const returnedfaqs = res.data.data.faqs;
                this.setState({
                    allFaqs: returnedfaqs
                });
            })
            .catch((error) => {
                console.log('All faqs error', error)
            })
    }

    // Get the FAQs and only show the matching ones
    setFaqs(searchTerm) {
        console.log(searchTerm);
        let filteredFaqs = this.state.allFaqs.filter((faq) => {
            const regex = new RegExp(searchTerm, 'gi');
            return faq.question.match(regex) || faq.answer.match(regex)
        });


        this.setState({
            filteredFaqs: filteredFaqs
        })
    }

    handleChange(e) {
        this.setState({
            searchTerm: e.target.value
        });

        this.setFaqs(this.state.searchTerm);
    };

    render() {
        const {searchTerm, filteredFaqs} = this.state;
        return (
            <div className="container">
                <SearchFaq searchTerm={searchTerm}
                           handleChange={(e) => {this.handleChange(e)}} />
                <div className="accordion" id="faqs_accordion">
                    <ListFaqs faqs={filteredFaqs}/>
                </div>
            </div>
        );
    }
}

export default FaqHome;
