// Create Redux action types
export const UPDATE_FILTERS = 'UPDATE_FILTERS';

// Handles changes to filters ANS reset

export const setFilters = (filters) => ({
    type: UPDATE_FILTERS,
    payload: filters,
});
