import * as actions from '../actions/postcodeActions';

export const initialState = {
    postcodes: [],
    postcode: '',
    loading: false,
    hasErrors: false,
};

export default function postcodesReducer(state = initialState, action) {
    switch (action.type) {
        case actions.SET_POSTCODE:
            console.log(action.payload);
            return {
                ...state,
                postcode: action.payload
            };
        case actions.GET_POSTCODES:
            return {
                ...state,
                loading: true
            };
        case actions.GET_POSTCODES_SUCCESS:
            return {
                procedures: action.payload.data,
                loading: false,
                hasErrors: false
            };
        case actions.GET_POSTCODES_FAILURE:
            return {
                ...state,
                loading: false,
                hasErrors: true
            };
        default:
            return state
    }
}
