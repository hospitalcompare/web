import * as actions from '../actions/procedureActions';

export const initialState = {
    procedures: [],
    loading: false,
    hasErrors: false,
};

export default function proceduresReducer(state = initialState, action) {
    switch (action.type) {
        case actions.GET_PROCEDURES:
            return {
                ...state,
                loading: true
            };
        case actions.GET_PROCEDURES_SUCCESS:
            return {
                procedures: action.payload.data.procedures_for_dropdowns,
                loading: false,
                hasErrors: false
            };
        case actions.GET_PROCEDURES_FAILURE:
            return {
                ...state,
                loading: false,
                hasErrors: true
            };
        default:
            return state
    }
}
