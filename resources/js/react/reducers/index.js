import { combineReducers } from "redux";
import filtersReducer from "./filtersReducer";
import proceduresReducer from "./proceduresReducer";
import postcodesReducer from "./postcodesReducer";
import shortlistReducer from "./shortlistReducer";
import hospitalsReducer from "./hospitalsReducer";

const rootReducer = combineReducers({
    filters: filtersReducer,
    hospitals: hospitalsReducer,
    procedures: proceduresReducer,
    postcodes: postcodesReducer,
    shortlist: shortlistReducer
});

export default rootReducer;
