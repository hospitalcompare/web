// Create Redux action types
import axios from "axios";

export const SET_POSTCODE = 'SET_POSTCODE';
export const GET_POSTCODES = 'GET POSTCODES';
export const GET_POSTCODES_SUCCESS = 'GET_POSTCODES_SUCCESS';
export const GET_POSTCODES_FAILURE = 'GET_POSTCODES_FAILURE';

// Create Redux action creators that return an action
export const setPostcode = (postcode) => ({
    type: SET_POSTCODE,
    payload: postcode
});

export const getPostcodes = () => ({
    type: GET_POSTCODES,
});

export const getPostcodesSuccess = postcodes => ({
    type: GET_POSTCODES_SUCCESS,
    payload: postcodes,
});

export const getPostcodesFailure = () => ({
    type: GET_POSTCODES_FAILURE,
});

// Combine them all in an asynchronous thunk
const params = {
    headers: {
        'Authorization': 'Bearer mBu7IB6nuxh8RVzJ61f4'
    }
};

export function fetchPostcodes(postcode) {
    return async dispatch => {
        dispatch(getPostcodes());

        try {
            const response = await fetch(`api/getLocations/${postcode}`, params);
            const data = await response.json();

            dispatch(getPostcodesSuccess(data))
        } catch (error) {
            dispatch(getPostcodesFailure())
        }
    }
}

//
// const config = {
//     headers: {
//         Authorization: 'Bearer mBu7IB6nuxh8RVzJ61f4'
//     }
// };
// if (value !== "") {
//     this.setState({showPostcodes: true})
//     axios.get(`api/getLocations/${value}`, config)
//         .then((res) => {
//             const locations = res.data.data;
//             // If the API returns a list of postcodes, set the returned postcodes in state
//             locations.result !== null && locations.result.length > 0
//                 ? this.setState({
//                     returnedPostcodes: locations.result,
//                     haveResults: true
//                 })
//                 // Otherwise clear the returned postcodes and set have results to false
//                 : this.setState({
//                     returnedPostcodes: [],
//                     haveResults: false
//                 })
//         })
//         .catch((error) => {
//             console.log('Error with fetching locations', error)
//         })
// }
