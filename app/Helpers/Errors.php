<?php

namespace App\Helpers;


class Errors
{
    /**
     * Generates an error, changes the header to the given status code and shows an array of errors
     *
     * @param $statusCode
     * @param $text
     * @param $errorsArray
     */
    public static function generateError($errorsArray = [], $statusCode = 500, $text = 'Something went wrong!') {
        header("HTTP/1.1 $statusCode $text");
        $response = [
            'success' => false
        ];
        $response['errors'] = $errorsArray;
        //Log the errors so we can have a better understanding of what's happening
        \Log::info(json_encode($errorsArray));
        print_r(json_encode($response));
        die();
    }
}