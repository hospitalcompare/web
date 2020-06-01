// Create Redux action types
export const GET_PROCEDURES = 'GET PROCEDURES';
export const GET_PROCEDURES_SUCCESS = 'GET_PROCEDURES_SUCCESS';
export const GET_PROCEDURES_FAILURE = 'GET_PROCEDURES_FAILURE';

// Create Redux action creators that return an action
export const getProcedures = () => ({
    type: GET_PROCEDURES,
});

export const getProceduresSuccess = procedures => ({
    type: GET_PROCEDURES_SUCCESS,
    payload: procedures,
});

export const getProceduresFailure = () => ({
    type: GET_PROCEDURES_FAILURE,
});

// Combine them all in an asynchronous thunk
export function fetchProcedures() {
    return async dispatch => {
        dispatch(getProcedures());

        try {
            const response = await fetch('/api/getProcedures', {
                method: 'post',
                headers: {
                    Authorization: 'Bearer mBu7IB6nuxh8RVzJ61f4'
                },
                body: {
                    dataType: "json",
                    contentType: "application/json; charset=utf-8"
                }
            });
            const data = await response.json();

            dispatch(getProceduresSuccess(data))
        } catch (error) {
            dispatch(getProceduresFailure())
        }
    }
}
