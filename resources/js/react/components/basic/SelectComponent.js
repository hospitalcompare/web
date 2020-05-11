import React, {useEffect} from 'react';
import Select from 'react-select';
import {connect} from "react-redux";
import { fetchProcedures } from '../../actions/procedureActions';

const SelectComponent = (
    {
        dispatch,
        loading,
        procedures,
        hasErrors
    }) => {

    useEffect(() => {
        dispatch(fetchProcedures())
    }, [dispatch]);

    const groupStyles = {
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'space-between',
    };

    const groupBadgeStyles = {
        backgroundColor: '#EBECF0',
        borderRadius: '2em',
        color: '#172B4D',
        display: 'inline-block',
        fontSize: 12,
        fontWeight: 'normal',
        lineHeight: '1',
        minWidth: 1,
        padding: '0.16666666666667em 0.5em',
        textAlign: 'center',
    };

    const formatGroupLabel = data => (
        <div style={groupStyles}>
            <span>{data.label}</span>
            <span style={groupBadgeStyles}>{data.options.length}</span>
        </div>
    );

    return (
        <Select
            name="procedure"
            className="react-select"
            placeholder="Choose your treatment (if known)"
            defaultValue={'Hello'}
            formatGroupLabel={formatGroupLabel}
            options={procedures}
            onChange={(property, value) => {
                this.props.handleChange(property.value)
            }}

        />
    );
}

const mapStateToProps = state => ({
    loading: state.procedures.loading,
    procedures: state.procedures.procedures,
    hasErrors: state.procedures.hasErrors,
});

export default connect(mapStateToProps)(SelectComponent);
