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

    public function __construct($model)
    {
        parent::__construct($model);
        if(!empty($this->requestData)) {
            foreach($this->requestData as $key => $value) {
                if($key == 'model' || $key == 'location_id')
                    unset($this->requestData[$key]);

            }
        }
        if(!class_exists($this->modelName))
            Errors::generateError([$this->modelName=>'The requested model does not exists!']);

        if(class_exists($this->modelName.'Attribute'))
            $this->modelAttribute = $this->modelName.'Attribute';
    }

    public function delete($id, $hard=false) {
        return parent::delete($id, $hard);
    }

    public function create() {
        $this->setRules($this->requestData);
        $validator = \Validator::make($this->requestData, $this->rules);

        if ($validator->fails())
            Errors::generateError($validator->errors());

        return parent::insertGetLastObject();
    }

    public function createByBulk($bulkValues) {
        $this->setRules($bulkValues);
        $validator = \Validator::make($bulkValues, $this->rules);

        if ($validator->fails())
            Errors::generateError($validator->errors());

        return parent::insertGetLastObject();
    }

    public function setRules($bulkValues) {
        $oldRules = $this->rules;
        $this->rules = [];
        foreach($bulkValues as $key => $value)
            //check if the rule exists
            if(!empty($oldRules[$key]))
                $this->rules[$key] = $oldRules[$key];
    }

    public function updateByBulk($locationId, $bulkValues) {
        $hospital = Hospital::where('location_id', $locationId)->first();
        $record = $this->modelName::where('hospital_id', $hospital->id)->first();

        if(!empty($record)) {

            $this->setRules($bulkValues);
            $validator = \Validator::make($bulkValues, $this->rules);
            if ($validator->fails()) {
                Errors::generateError($validator->errors());
            }

            return $record->update($bulkValues);
        }

        return [];
    }

    public function update($id) {

    }
}
