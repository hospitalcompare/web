import React, {Component} from 'react';
import '../scripts/vendor/highlight';

class FaqItem extends Component {
    render() {
        const { question, answer, id } = this.props.faq;
        const searchTerm = this.props.searchTerm;
        const regex = new RegExp(searchTerm, 'gi');

        return (
            <div className="card">
                <div className="card-header" id={`heading${id}`}>
                    <h2 className="mb-0">
                        <button className="btn btn-link collapsed text-left" type="button"
                                data-toggle="collapse"
                                data-target={`#collapse${id}`} aria-expanded="false"
                                aria-controls={`collapse${id}`}
                                dangerouslySetInnerHTML={{ __html: question.replace(regex, `<span class="hl">${searchTerm}</span>`) }}>

                        </button>
                    </h2>
                </div>

                <div id={`collapse${id}`} className="collapse" aria-labelledby={`heading${id}`}
                     data-parent="#faqs_accordion">
                    <div className="card-body"
                         dangerouslySetInnerHTML={{ __html: answer }}>
                    </div>
                </div>
            </div>
        );
    }
};

export default FaqItem;
