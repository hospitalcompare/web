import { combineReducers } from "redux";
import filtersReducer from "./filtersReducer";
import proceduresReducer from "./proceduresReducer";
import postcodesReducer from "./postcodesReducer";
import shortlistReducer from "./shortlistReducer";

const rootReducer = combineReducers({
    filters: filtersReducer,
    procedures: proceduresReducer,
    postcodes: postcodesReducer,
    shortlist: shortlistReducer
});

export default rootReducer;
