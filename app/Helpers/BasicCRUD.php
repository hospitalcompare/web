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

    public function __construct($model)
    {
        $this->modelName = '\App\Models\\'.$model;
        $this->requestData = \Request::all();
    }

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
        $this->modelObject = $model::create($this->requestData);
        return $this->modelObject;
    }

    public function update($id)
    {
        $model = new $this->modelName;
        $this->modelObject = $model::where('id', $id)->first();

        $this->modelObject->update($this->requestData);
    }

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
