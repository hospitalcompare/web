import React, {Component} from 'react';
import axios from "axios";

class SearchFaq extends Component {
    constructor(props) {
        super(props);
        this.timer;
        this.interval = 5000;
    }

// Do the ajax request with a delay

    onChange = (e) => {
        clearTimeout(this.timer);
        this.timer = setTimeout(this.props.setFaqs(e.target.value), this.interval, e.target);
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
                               onInput={this.onChange} />
                    </div>
                </form>
            </div>
        );
    }
}

export default SearchFaq;
