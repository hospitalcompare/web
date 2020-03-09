import React, {Component} from 'react';
import axios from "axios";

class SearchFaq extends Component {

    onChange = (e) => {
        this.props.setFaqs(e.target.value);
    };

    render() {
        return (
            <div>
                <form onSubmit={this.onSubmit} className="d-flex mb-2">
                    <div className="input-wrapper w-100">
                        <input id="faq_search_input"
                               className="w-100 form-control"
                               type="search"
                               placeholder="Search"
                               onChange={this.onChange} />
                    </div>
                </form>
            </div>
        );
    }
}

export default SearchFaq;
