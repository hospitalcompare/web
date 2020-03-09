import React, {Component} from 'react';

class FaqItem extends Component {
    render() {
        const { question, answer } = this.props.faq;
        return (
            <div className="card">
                { question }
            </div>
        );
    }
};

export default FaqItem;
