const initialState = {
    procedure: '',
    postcode: '',
    radius: null,
};

export default function(state = initialState, action) {
    switch (action.type) {
        case 'UPDATE_FILTERS':
            return {
                ...state,
                date: action.payload.date,
                airport: action.payload.airport
            };

        case 'SET_FILTERS':
            return {
                ...state,
                date: new Date(),
                airport: ''
            };

        default:
            return state;
    }
}
