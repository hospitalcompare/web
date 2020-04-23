import React, {Component} from 'react';
import Accordion from 'react-bootstrap/Accordion';
import Card from 'react-bootstrap/Card';
import Button from 'react-bootstrap/Button';
import '../../scripts/vendor/highlight';

class FaqItem extends Component {
    constructor(props) {
        super(props);
        this.state = {
            open: false
        }
    }

    handleClick = () => {
        this.setState({
            open: !this.state.open
        })
    }

    render() {
        const {question, answer, id} = this.props.faq;
        const searchTerm = this.props.searchTerm;
        const regex = new RegExp(searchTerm, 'gi');

        return (
            <Card>
                <Card.Header>
                    <h2 className="mb-0">
                        <Accordion.Toggle as={Button}
                                          onClick={this.handleClick}
                                          className={`btn btn-link text-left ${
                                              this.state.open ? '' : 'collapsed'
                                          }`}
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
                    </h2>
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
