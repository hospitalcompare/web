<?php

namespace App\Helpers;

use App\Models\Procedure;

class Utils
{
    //Sort By
    const sortBys = [
        [
            'id'        => '0',
            'name'      => 'Default sorting'
        ],[
            'id'        => '1',
            'name'      => 'Distance',
        ],[
            'id'        => '2',
            'name'      => 'Distance',
            'class'     => 'd-none'
        ],[
            'id'        => '3',
            'name'      => 'Waiting time'
        ],[
            'id'        => '4',
            'name'      => 'Waiting time',
            'class'     => 'd-none'
        ],[
            'id'        => '5',
            'name'      => 'User Rating',
            'class'     => 'd-none'
        ],[
            'id'        => '6',
            'name'      => 'User Rating'
        ],[
            'id'        => '7',
            'name'      => 'Operations Cancelled'
        ],[
            'id'        => '8',
            'name'      => 'Operations Cancelled',
            'class'     => 'd-none'
        ],[
            'id'        => '9',
            'name'      => 'Care Quality Rating',
            'class'     => 'd-none'
        ],[
            'id'        => '10',
            'name'      => 'Care Quality Rating'
        ],[
            'id'        => '11',
            'name'      => 'Friends & Family Rating',
            'class'     => 'd-none'
        ],[
            'id'        => '12',
            'name'      => 'Friends & Family Rating'
        ],[
            'id'        => '13',
            'name'      => 'NHS Funded Work',
            'class'     => 'd-none'
        ],[
            'id'        => '14',
            'name'      => 'NHS Funded Work',
            'class'     => 'd-none'
        ],[
            'id'        => '15',
            'name'      => 'Private Self Pay',
            'class'     => 'd-none'
        ],[
            'id'        => '16',
            'name'      => 'Private Self Pay',
            'class'     => 'd-none'
        ]
    ];

    //Filter Waiting Times
    const waitingTimes = [
        [
            'id' => '0',
            'name'  => 'View All'
        ],[
            'id' => '18',
            'name'  => 'Up to 18 Weeks'
        ],[
            'id' => '21',
            'name'  => 'Up to 21 Weeks'
        ],[
            'id' => '24',
            'name'  => 'Up to 24 Weeks'
        ]
    ];

    //Filter User Ratings
    const userRatings = [
        [
            'id' => '0',
            'name'  => 'View All'
        ],[
            'id' => '5',
            'name'  => '5'
        ],[
            'id' => '4',
            'name'  => '4+'
        ],[
            'id' => '3',
            'name'  => '3+'
        ],[
            'id' => '2',
            'name'  => '2+'
        ],[
            'id' => '1',
            'name'  => '1+'
        ]
    ];

    //Filter Quality Ratings
    const qualityRatings = [
        [
            'id' => '0',
            'name'  => 'View All'
        ],[
            'id' => '1',
            'name'  => 'Outstanding Only'
        ],[
            'id' => '2',
            'name'  => 'Good or better'
        ],[
            'id' => '3',
            'name'  => 'Requires Improvement or better'
        ],[
            'id' => '4',
            'name'  => 'Inadequate or better'
        ]
    ];

    //Filter Quality Ratings
    const hospitalTypes = [
        [
            'id' => '0',
            'name'  => 'All Hospitals'
        ],[
            'id' => '1',
            'name'  => 'Private Hospitals'
        ],[
            'id' => '2',
            'name'  => 'NHS Hospitals'
        ]
    ];

    //Filter Quality Ratings
    const radius = [
        [
            'id' => 600,
            'name'  => 'Countrywide'
        ],[
            'id' => 100,
            'name'  => 'Up to 100 miles'
        ],[
            'id' => 75,
            'name'  => 'Up to 75 miles'
        ],[
            'id' => 50,
            'name'  => 'Up to 50 miles'
        ],[
            'id' => 25,
            'name'  => 'Up to 25 miles'
        ]
    ];

    /**
     * Returns the list of Procedures with the first option as a placeholder
     *
     * @return array
     */
    public static function getProceduresForDropdown() {
        //Get all the Procedures
        $procedures = Procedure::all()->sortBy('name')->toArray();
        //Add the option to view all procedures ( id = 0 )
        array_unshift($procedures, ['id' => '-1', 'name' => 'Not Known']);
        array_unshift($procedures, ['id' => 0, 'name' => 'Choose your procedure (if known)']);

        return $procedures;
    }

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
     * Generates HTML code based on a given rating ( between 0 - 5 )
     * NB: Make sure that if this function is changed, the equivalent JQuery function is changed as well ( resultspage.js )
     *
     * @param $rating
     * @return string
     */
    public static function getHtmlStars($rating) {
        //Validation for an empty rating or greater than 5
        if(empty($rating) || $rating > 5 )
            return '';

        // Round down to get number of whole stars needed
        $wholeStars = floor($rating);

        // This will be 1 if you have a half-rating, 0 if not.
        $halfStar = round($rating * 2) % 2;

        // Get the number of empty stars
        $emptyStars = 5 - $wholeStars - $halfStar;

        // This will hold your html markup
        $html = "";

        // write img tags for each whole star
        if($wholeStars > 0) {
            for ($i = 0; $i < $wholeStars; $i++) {
                $html .= "<img class='star-icon' src='images/icons/star-full.svg' alt='Whole Star'>";
            }
        }

        // write img tag for half star if needed
        if ($halfStar) {
            $html .= "<img class='star-icon' src='images/icons/star-half.svg' alt='Half Star'>";
        }

        //Check if we need to add empty stars as image
        if(!empty($emptyStars) && $emptyStars > 0) {
            for ($i = 0; $i < $emptyStars; $i++) {
                $html .= "<img class='star-icon' src='../images/icons/star-outline.svg' alt='Empty Star'>";
            }
        }

        return $html;
    }
}
