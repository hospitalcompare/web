import * as actions from '../actions/hospitalActions';

export const initialState = {
    hospitals: [],
    loading: false,
    hasErrors: false,
};

export default function hospitalsReducer(state = initialState, action) {
    switch (action.type) {
        case actions.GET_HOSPITALS:
            return {
                ...state,
                loading: true
            };
        case actions.GET_HOSPITALS_SUCCESS:
            return {
                hospitals: action.payload.data.hospitals.data,
                loading: false,
                hasErrors: false
            };
        case actions.GET_HOSPITALS_FAILURE:
            return {
                ...state,
                loading: false,
                hasErrors: true
            };
        default:
            return state
    }
}
