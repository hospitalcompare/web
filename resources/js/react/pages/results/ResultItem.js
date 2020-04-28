import React, {Component} from 'react';

class ResultItem extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        const {name} = this.props;
        return (
            <div className="result-item mb-3 mb-lg-0" id="result-item_{{ $id }}">
                <div className="container">
                    <div className="result-item-inner position-relative">
                        {name}
                    </div>
                </div>
            </div>
        );
    }
}

export default ResultItem;
