import React, {Component} from 'react';
import SearchFaq from "./SearchFaq";
import ListFaqs from "./ListFaqs";
import Accordion from "react-bootstrap/Accordion";
import axios from "axios";
import FaqItem from "./FaqItem";
import MagIcon from "../../svg/MagIcon";

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
        document.title = "Hospital Compare | Faqs Page";
        document.body.classList.add('faqs-page');

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

    handleSubmit = (e) => {
        e.preventDefault()
    };

    render() {
        let {searchTerm} = this.state;
        let filteredFaqs = this.state.allFaqs.filter(
            (faq) => {
                const regex = new RegExp(searchTerm, 'gi');
                return faq.question.match(regex) || faq.answer.match(regex);
            }
        );

        return (
            <main className="faqs-page">
                <section className="banner">
                    <div className="container container-980 text-center position-relative">
                        <h1 className="mb-3">How can we <span className="col-brand-primary-1">help</span>?</h1>
                        <h2 className="page-subtitle col-grey">Want to find out more about Hospital Compare or your
                            rights? Our FAQs may be able to help! Search for specific keywords or browse a full list of
                            questions below.</h2>
                        <div className="input-wrapper position-relative w-100">
                            <MagIcon />
                            <form onSubmit={this.handleSubmit}
                                  className="">
                                <div className="input-wrapper w-100">
                                    <input id="faq_search_input"
                                           className="w-100 form-control"
                                           value={this.state.searchTerm}
                                           placeholder="Search for a term"
                                           onChange={this.handleChange}
                                           type="text"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <section>
                    <div className="container">
                        <Accordion
                            id="faqs_accordion">
                            {
                                (filteredFaqs.length)
                                    ? filteredFaqs.map((faq) => <FaqItem searchTerm={this.state.searchTerm}
                                                                         faq={faq}
                                                                         key={faq.id}/>)
                                    : <h1>No matching faqs found</h1>
                            }
                        </Accordion>
                    </div>
                </section>
            </main>
        );
    }
}

export default FaqHome;
