// Create Redux action types
export const UPDATE_PROCEDURE = 'UPDATE_PROCEDURE';

// Handles changes to filters ANS reset

export const setProcedure = (procedure) => ({
    type: UPDATE_PROCEDURE,
    payload: procedure,
});
