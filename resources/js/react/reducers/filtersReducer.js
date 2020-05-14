import {UPDATE_FILTERS} from "../actions/filterActions";

export const initialState = {
    procedure: '',
    postcode: '',
    radius: null,
};

export default function filtersReducer(state = initialState, action) {
    switch (action.type) {
        case UPDATE_FILTERS:
            return {
                ...state,
                postcode: action.payload.postcode,
                procedure: action.payload.procedure,
                radius: action.payload.radius,
            };

        default:
            return state;
    }
}
