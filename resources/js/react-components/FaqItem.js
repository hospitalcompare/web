import React, {Component} from 'react';

class FaqItem extends Component {
    render() {
        const { question, answer, id } = this.props.faq;
        return (
            <div className="card">
                <div className="card-header" id={`heading${id}`}>
                    <h2 className="mb-0">
                        <button className="btn btn-link collapsed text-left" type="button"
                                data-toggle="collapse"
                                data-target={`#collapse${id}`} aria-expanded="false"
                                aria-controls={`collapse${id}`}>
                            { question }
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
