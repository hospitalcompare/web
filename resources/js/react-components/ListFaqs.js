import React, {Component} from 'react';
import FaqItem from './FaqItem'

class ListFaqs extends Component {
    render() {
        return this.props.faqs.map(
            (faq) => <FaqItem faq={faq}
                              key={faq.id} />
        )
    }
}

export default ListFaqs;
