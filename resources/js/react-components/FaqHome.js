import React, {Component} from 'react';
import SearchFaq from "./SearchFaq";
import ListFaqs from "./ListFaqs";
import axios from "axios";

class FaqHome extends Component {
    state = {
        faqs: [],
        searchTerm: ''
    };

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
                const faqs = res.data.data.faqs;
                this.setState({
                    faqs: faqs
                });
            })
            .catch((error) => {
                console.log('All faqs error', error)
            })
    }

    // Dynamically change the FAQs on search
    setFaqs = (searchTerm) => {
        console.log('searched');
        const apiUrl = `api/search-faq/${searchTerm}`;
        const bodyparams = {
            dataType: "json",
            contentType: "application/json; charset=utf-8",
        };
        const config = {
            headers: {
                Authorization: 'Bearer mBu7IB6nuxh8RVzJ61f4',
            }
        };

        axios.post(apiUrl, bodyparams, config)
            .then((res) => {
                const faqs = res.data.data.faqs;

                if (faqs.length) { //
                    console.log('Faqs?', faqs.length);
                    // this.setState({faqs: []}); // clear faqs
                    this.setState({
                        faqs: faqs
                    });
                } else {
                    document.querySelector('#faqs_accordion').innerHTML = "<h2>No faqs found, please try again</h2>"
                }

            })
            .catch((error) => {
                console.log('Error', error);
                document.querySelector('#faqs_accordion').innerHTML = "<h2>Something went wrong, please try again</h2>"
            })
    };

    handleChange = (e) => {
        console.log(e.target.value);
        // clearTimeout(this.timer);
        // this.timer = setTimeout(this.setFaqs(e.target.value), this.interval, e.target);
    };

    render() {
        return (
            <div className="container">
                <SearchFaq handleChange={this.handleChange}
                           setFaqs={this.setFaqs}/>
                <div className="accordion" id="faqs_accordion">
                    <ListFaqs faqs={this.state.faqs}/>
                </div>
            </div>
        );
    }
}

export default FaqHome;
