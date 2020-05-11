import { combineReducers } from "redux";
import filtersReducer from "./filtersReducer";
import proceduresReducer from "./proceduresReducer";

const rootReducer = combineReducers({
    filters: filtersReducer,
    procedures: proceduresReducer
});

export default rootReducer;
