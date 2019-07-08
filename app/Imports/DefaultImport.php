<?php


namespace App\Imports;


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