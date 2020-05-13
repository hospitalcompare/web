import * as actions from '../actions/postcodeActions';

export const initialState = {
    postcodes: [],
    loading: false,
    hasErrors: false,
    haveResults: false,
    showPostcodes: false
};

export default function postcodesReducer(state = initialState, action) {
    switch (action.type) {
        case actions.GET_POSTCODES:
            return {
                ...state,
                loading: true
            };
        case actions.GET_POSTCODES_SUCCESS:
            return {
                postcodes: action.payload.data.result,
                loading: false,
                hasErrors: false,
                haveResults: action.payload.data.result.length > 0,
                showPostcodes: action.payload.data.result.length > 0
            };
        case actions.GET_POSTCODES_FAILURE:
            return {
                ...state,
                loading: false,
                hasErrors: true,
                haveResults: false,
                showPostcodes: false,
                postcodes: []
            };
        case actions.HIDE_POSTCODES:
            return {
                ...state,
                showPostcodes: false
            };
        default:
            return state
    }
}
