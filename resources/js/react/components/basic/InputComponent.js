import React from 'react';
import {connect} from "react-redux";

const InputComponent = (props) => {
    const { value, onChange } = props;
    return (
        <React.Fragment>
            <input type="text"
                   name="postcode"
                   maxLength="8"
                   value={value}
                   onChange={onChange}
                   className="postcode-text-box big input-postcode"
                   placeholder="Enter postcode"/>
        </React.Fragment>
    );
};


const mapStateToProps = state => ({
    postcode: state.postcodes.postcode,
});

export default connect(mapStateToProps)(InputComponent);
