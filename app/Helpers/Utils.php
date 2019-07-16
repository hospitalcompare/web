<?php

namespace App\Helpers;

class Utils
{
    /**
     * Creates a file based on a given Base64 Image
     *
     * @param $image
     * @param $destinationDir
     * @return mixed
     */
    public static function createFileFromBase64Image($image, $destinationDir) {
        $result = [
            'message' => 'Unable to create the file',
            'success' => false
        ];

        try {
            //Decode the image and store it on the server under the user profile folder
            $img        = explode(',', $image);
            $ini        = substr($img[0], 11);
            $type       = explode(';', $ini);
            $extension  = $type[0];
            $img        = substr($image, strpos($image, ",") + 1);
            $content    = base64_decode($img);

            //Create the directory if it doesn't exists
            if (!is_dir( $destinationDir))
                mkdir($destinationDir, 0777, true);
            $filename = rand() . '.' . $extension;
            //Create the path to the new file
            $sourceFile = $destinationDir . '/'.$filename;
            //Create the file
            \File::put($sourceFile, $content);

            $result = [
                'message'   => 'File successfully created',
                'success'   => true,
                'filename'  => $filename
            ];
            return $result;

        } catch (\Exception $e) {
            //Get the error message and return it
            $result['message'] = $e->getMessage();
            return $result;
        }
    }

    /**
     * Plots a given CSV file to a multidimensional array
     *
     * @param string $filename
     * @param string $delimiter
     * @return array|string
     */
    public static function csvToArray($filename = '', $delimiter = ',') {

        if (!file_exists($filename) || !is_readable($filename))
            return 'Filename does not exists or is not readable';

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 100000, $delimiter)) !== false)
            {
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }

    /**
     * Calls an API with the given $url, Bearer $token and $data
     * If $data is not supplied, it is a GET request, otherwise it's a POST
     *
     * @param $url
     * @param $token
     * @param bool $data
     * @return mixed|string
     */
    public static function callAPI($url, $token, $data = false) {

        if(empty($token))
            return 'Please supply a Bearer Token';

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Authorization: Bearer {$token}"));

        if(!empty($data)) {
            curl_setopt($curl, CURLOPT_POST, 1);
            if (is_array($data) || is_object($data)) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            } else {
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                        'Content-Type: application/json',
                        'Content-Length: ' . strlen($data),
                        "Authorization: Bearer {$token}"
                    ]
                );
            }
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }

    /**
     * Validates a given array with the given value
     *
     * @param $item
     * @param $searched
     * @return mixed
     */
    public static function validateValue($value) {
        if($value === 'NULL' || empty($value))
            return '';

        return $value;
    }
}