import React, {Component} from 'react';
import SearchFaq from "./SearchFaq";
import ListFaqs from "./ListFaqs";
import Accordion from "react-bootstrap/Accordion";
import axios from "axios";
import FaqItem from "./FaqItem";

const SVGMag = () => {
    return (
        <svg className="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.1 39.08">
            <title>4Artboard 8</title>
            <g data-name="Layer 1">
                <path fill="#fff"
                      d="M36.3,38.62a1.7,1.7,0,0,0,2.31,0,1.64,1.64,0,0,0,0-2.33l-8.91-8.91.51-.7a16.77,16.77,0,1,0-3.53,3.53l.69-.51ZM16.74,30.21A13.46,13.46,0,1,1,30.2,16.75,13.48,13.48,0,0,1,16.74,30.21Z"></path>
            </g>
        </svg>
    );
};

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
                            <SVGMag />
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
