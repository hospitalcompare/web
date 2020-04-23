import React, {Component} from 'react';
import Accordion from 'react-bootstrap/Accordion';
import Card from 'react-bootstrap/Card';
import Button from 'react-bootstrap/Button';
import '../../scripts/vendor/highlight';

class FaqItem extends Component {
    render() {
        const {question, answer, id} = this.props.faq;
        const searchTerm = this.props.searchTerm;
        const regex = new RegExp(searchTerm, 'gi');

        return (
            <Card>
                <Card.Header>
                    <Accordion.Toggle as={Button}
                                      className="btn btn-link text-left"
                                      variant="link"
                                      eventKey={id}
                                      dangerouslySetInnerHTML={
                                          {
                                              __html: searchTerm !== ""
                                                  ? question.replace(regex, `<span class="hl d-inline">${searchTerm}</span>`)
                                                  : question
                                          }
                                      }>
                    </Accordion.Toggle>
                </Card.Header>

                <Accordion.Collapse eventKey={id}>
                    <Card.Body
                        dangerouslySetInnerHTML={
                            {
                                __html: searchTerm !== ""
                                    ? answer.replace(regex, `<span class="hl d-inline">${searchTerm}</span>`)
                                    : answer
                            }
                        }>
                    </Card.Body>
                </Accordion.Collapse>
            </Card>
        );
    }
};

export default FaqItem;
