// Create Redux action types
import axios from "axios";

export const GET_SHORTLISTED_HOSPITALS = 'GET_SHORTLISTED_HOSPITALS';
export const GET_SHORTLISTED_HOSPITALS_SUCCESS = 'GET_SHORTLISTED_HOSPITALS_SUCCESS';
export const GET_SHORTLISTED_HOSPITALS_FAILURE = 'GET_SHORTLISTED_HOSPITALS_FAILURE';

// Create Redux action creators that return an action
export const getShortlistedHospitals = () => ({
    type: GET_SHORTLISTED_HOSPITALS,
});

export const getShortlistedHospitalsSuccess = shortlistedHospitals => ({
    type: GET_SHORTLISTED_HOSPITALS_SUCCESS,
    payload: shortlistedHospitals,
});

export const getShortlistedHospitalsFailure = () => ({
    type: GET_SHORTLISTED_HOSPITALS_FAILURE,
});

// Combine them all in an asynchronous thunk
const params = {
    headers: {
        'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4'
    }
};

export function fetchShortlistedHospitals(hospitalIds) {
    if(hospitalIds !== "")
        return async dispatch => {
            dispatch(getShortlistedHospitals());

            try {
                const response = await fetch(`api/getHospitalsByIds/${hospitalIds}/0`, params);
                const data = await response.json();

                dispatch(getShortlistedHospitalsSuccess(data))
            } catch (error) {
                dispatch(getShortlistedHospitalsFailure())
            }
        };
    // If user has deleted all characters
    return dispatch => {dispatch(getShortlistedHospitalsFailure())}
}
