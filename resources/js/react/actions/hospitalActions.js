// Create Redux action types
import axios from "axios";

export const GET_HOSPITALS = 'GET_HOSPITALS';
export const GET_HOSPITALS_SUCCESS = 'GET_HOSPITALS_SUCCESS';
export const GET_HOSPITALS_FAILURE = 'GET_HOSPITALS_FAILURE';

// Create Redux action creators that return an action
export const getHospitals = () => ({
    type: GET_HOSPITALS,
});

export const getHospitalsSuccess = procedures => ({
    type: GET_HOSPITALS_SUCCESS,
    payload: procedures,
});

export const getHospitalsFailure = () => ({
    type: GET_HOSPITALS_FAILURE,
});

// Combine them all in an asynchronous thunk
export function fetchHospitals(postcode, procedure, radius) {
    return async dispatch => {
        dispatch(getHospitals());
        const params = {
            headers: {
                'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4'
            }
        };

        try {
            const response = await fetch(`/api/getHospitalsForHomepageSearch/${postcode}/${procedure}/${radius}`, params);
            const data = await response.json();

            dispatch(getHospitalsSuccess(data))
        } catch (error) {
            dispatch(getHospitalsFailure())
        }
    }
}
