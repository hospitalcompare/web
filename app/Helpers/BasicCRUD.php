<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;

class BasicCRUD
{
    protected $rules;
    protected $modelName ;
    public	  $requestData;
    protected $successMsg;
    public 	  $modelObject;

    /**
     * Constructing the Model and the request data
     * BasicCRUD constructor.
     * @param $model
     */
    public function __construct($model)
    {
        $this->modelName = '\App\Models\\'.$model;
        $this->requestData = \Request::all();
    }

    /**
     * Creates a new Object from the modelName
     */
    public function create()
    {
        $model = new $this->modelName;
        $this->modelObject = $model::create($this->requestData);
    }

    public function insertGetId()
    {
        $model = new $this->modelName;
        return $this->modelObject = $model::insertGetId($this->requestData);
    }

    public function insertGetLastObject()
    {
        $model = new $this->modelName;
        //Limit the response ONLY for the user Authenticated (on `Live`)
        if(env('APP_ENV', 'local') === 'live') {
            if(array_key_exists ('user_id', $this->requestData)) {
                $token = str_replace('Bearer ','', $_SERVER['HTTP_AUTHORIZATION']);
                $user = Cache::get($token);
                $this->requestData['user_id'] = $user['user']->id;
            }
        }
        $this->modelObject = $model::create($this->requestData);
        return $this->modelObject;
    }

    /**
     * Updates an existing Object
     * @param $id
     */
    public function update($id)
    {
        $model = new $this->modelName;
        $this->modelObject = $model::where('id', $id)->first();

        $this->modelObject->update($this->requestData);
    }

    /**
     * Deletes the record
     * Soft delete is the default
     * @param $id
     * @param bool $hard
     * @return RedirectResponse|int
     */
    public function delete($id, $hard = false)
    {
        if(!$hard)
            return $this->saveForm($id, 'deleted');
        else
        {
            $model = new $this->modelName;
            $this->modelObject = $model::where('id', $id)->first();

            $this->modelObject->delete();
            return 1;
        }
    }
}
