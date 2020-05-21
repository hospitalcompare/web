import * as actions from '../actions/shortlistActions';

export const initialState = {
    shortlistHospitals: [],
    loading: false,
    hasErrors: false,
    privateHospitalCount: 0,
    nhsHospitalCount: 0
};

export default function shortlistReducer(state = initialState, action) {
    switch (action.type) {
        case actions.GET_SHORTLISTED_HOSPITALS:
            return {
                ...state,
                loading: true
            };
        case actions.GET_SHORTLISTED_HOSPITALS_SUCCESS:
            return {
                shortlistHospitals: action.payload.data,
                loading: false,
                hasErrors: false,
            };
        case actions.GET_SHORTLISTED_HOSPITALS_FAILURE:
            return {
                ...state,
                loading: false,
                hasErrors: true,
            };
        default:
            return state
    }
}
