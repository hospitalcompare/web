import React, {Component} from 'react';
import SearchFaq from "./SearchFaq";
import ListFaqs from "./ListFaqs";
import axios from "axios";
import FaqItem from "./FaqItem";

class FaqHome extends Component {
    constructor() {
        super();
        this.state = {
            allFaqs: [],
            searchTerm: ""
        };
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

    handleChange = (e) => {
        this.setState({
            searchTerm: e.target.value
        })
    };

    render() {
        let {searchTerm} = this.state;
        let filteredFaqs = this.state.allFaqs.filter(
            (faq) => {
                const regex = new RegExp(this.state.searchTerm, 'gi');
                return faq.question.match(regex) || faq.answer.match(regex);
            }
        );
        return (
            <div className="container">
                <form className="d-flex mb-2">
                    <div className="input-wrapper w-100">
                        <input id="faq_search_input"
                               className="w-100 form-control"
                               value={this.state.searchTerm}
                               placeholder="Search for a term"
                               onChange={this.handleChange}
                               type="text" />
                    </div>
                </form>
                <div className="accordion">
                    {
                        filteredFaqs.map(
                            (faq) => <FaqItem faq={faq}
                                              key={faq.id} />
                        )
                    }
                </div>
            </div>
        );
    }
}

export default FaqHome;
