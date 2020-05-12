import { combineReducers } from "redux";
import filtersReducer from "./filtersReducer";
import proceduresReducer from "./proceduresReducer";
import postcodesReducer from "./postcodesReducer";

const rootReducer = combineReducers({
    filters: filtersReducer,
    procedures: proceduresReducer,
    postcodes: postcodesReducer
});

export default rootReducer;
