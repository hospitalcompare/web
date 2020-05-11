import {UPDATE_PROCEDURE} from "../actions/filterActions";

export const initialState = {
    procedure: '',
    postcode: '',
    radius: null,
};

export default function filtersReducer(state = initialState, action) {
    switch (action.type) {
        case UPDATE_PROCEDURE:
            return {
                ...state,
                procedure: action.payload,
            };

        default:
            return state;
    }
}
