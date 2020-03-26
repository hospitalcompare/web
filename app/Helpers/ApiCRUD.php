<?php

namespace App\Helpers;

use App\Helpers\Errors;
use App\Helpers\Rules;
use App\Helpers\BasicCRUD;
use App\Models\Hospital;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class ApiCRUD extends BasicCRUD
{
    //Here we will have all the properties of all the models linked with the associated rules
    public $rules =
        [
            'first_name'    => Rules::REQUIRED_NAME,
            'last_name'     => Rules::REQUIRED_NAME,
            'email'         => Rules::EMAIL,
            'password'	    => Rules::PASSWORD,
            'phone_number'  => Rules::MOBILE_PHONE,
            'name'          => Rules::REQUIRED
        ];

    public $modelAttribute = '';
    protected $locationId;

    /**
     * Constructing the Model and the request data
     * BasicCRUD constructor.
     * @param $model
     */
    public function __construct($model)
    {
        parent::__construct($model);
        if(!empty($this->requestData)) {
            foreach($this->requestData as $key => $value) {
                //unset the token and the model so we can build the where and values
                if($key == 'model' || $key == 'location_id')
                    unset($this->requestData[$key]);

            }
        }
        //Check if we have the class or return an error
        if(!class_exists($this->modelName))
            Errors::generateError([$this->modelName=>'The requested model does not exists!']);

        //Check if the model has attributes
        if(class_exists($this->modelName.'Attribute'))
            $this->modelAttribute = $this->modelName.'Attribute';
    }

    /**
     * Deleting existing model
     * @param $id
     * @param bool $hard
     * @return \Illuminate\Http\RedirectResponse|int
     */
    public function delete($id, $hard=false) {
        return parent::delete($id, $hard);
    }

    /**
     * Creating a new model by the requestData
     * @return array user object that has been inserted
     */
    public function create() {
        $this->setRules($this->requestData);
        $validator = \Validator::make($this->requestData, $this->rules);

        // If validation fails, return back and refill all fields
        if ($validator->fails())
            Errors::generateError($validator->errors());

        // Creating the Model
        return parent::insertGetLastObject();
    }

    /**
     * Creating a new model
     * @return array user object that has been inserted
     */
    public function createByBulk($bulkValues) {
        $this->setRules($bulkValues);
        $validator = \Validator::make($bulkValues, $this->rules);

        // If validation fails, return back and refill all fields
        if ($validator->fails())
            Errors::generateError($validator->errors());

        // Creating the User
        return parent::insertGetLastObject();
    }

    /**
     * Check only the rules that are sent in the bulkValues
     * @param $bulkValues
     */
    public function setRules($bulkValues) {
        $oldRules = $this->rules;
        $this->rules = [];
        foreach($bulkValues as $key => $value)
            //check if the rule exists
            if(!empty($oldRules[$key]))
                $this->rules[$key] = $oldRules[$key];
    }
    /**
     * Updating existing model exists
     *
     * @param $locationId
     * @param $bulkValues
     * @return array
     */
    public function updateByBulk($locationId, $bulkValues) {
        $hospital = Hospital::where('location_id', $locationId)->first();
        $record = $this->modelName::where('hospital_id', $hospital->id)->first();

        if(!empty($record)) {

            //Set the new rules
            $this->setRules($bulkValues);
            $validator = \Validator::make($bulkValues, $this->rules);
            // If validation fails, throw an error
            if ($validator->fails()) {
                Errors::generateError($validator->errors());
            }

            dd($bulkValues);
            //Limit the response ONLY for the user Authenticated (on `Live`)
//            if(env('APP_ENV', 'local') === 'live') {
//                if(array_key_exists ('user_id', $bulkValues)) {
//                    $token = str_replace('Bearer ','', $_SERVER['HTTP_AUTHORIZATION']);
//                    $user = Cache::get($token);
//                    $bulkValues['user_id'] = $user['user']->id;
//                }
//            }

            //This returns bool true/false if the model has been updated
            return $record->update($bulkValues);
        }


        return [];
    }

    public function update($id) {

    }
}
