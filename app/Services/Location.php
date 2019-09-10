<?php


namespace App\Services;


class Location
{
    protected $postcode;
    public $response = [
        'success'   => false,
        'data'      => ''
    ];

    public function __construct($postcode) {
        $this->postcode = strtoupper($postcode);
    }

    /**
     * Gets multiple Locations based on an Incomplete Postcode
     *
     * @return array
     */
    public function getLocationsByIncompletePostcode()
    {
        $url = "https://api.postcodes.io/postcodes?q={$this->postcode}";
        $this->response = $this->getDataFromUrl($url);

        return $this->response;
    }

    /**
     * Gets 1 location from the full postcode
     *
     * @return array
     */
    public function getLocation()
    {
        $url = "https://api.postcodes.io/postcodes/{$this->postcode}";
        $this->response = $this->getDataFromUrl($url);

        return $this->response;
    }

    /**
     * Calls an URL with GET
     *
     * @param $url
     * @return array
     */
    private function getDataFromUrl($url) {
        if(empty($url))
            return $this->response;

        $client = new \GuzzleHttp\Client();
        $request = $client->get($url);

        $statusCode = $request->getStatusCode();
        if($statusCode == '200') {
            $this->response['success']  = true;
            $this->response['data']     = json_decode($request->getBody()->getContents());
        }

        return $this->response;
    }
}