<?php


namespace App\Imports;


use App\Helpers\Utils;

class DefaultImport {
    public $returnedData = [];
    public $excludedData = [];
    protected $data;

    /**
     * DefaultImport constructor.
     * @param $name
     * @param $data
     */
    public function __construct($data) {
        //Loop through all the inputs and set them to empty strings if the values are NULL or empty()
        foreach($data as &$item) {
            foreach($item as $key=>$value) {
                $item[$key] = Utils::validateValue($value);
            }
        }
        $this->data = $data;
    }

    /**
     *  This will be called from each Design Pattern
     */
    public function handle() {
        dd('You shouldn\'t get here!');
        return [];
    }
}