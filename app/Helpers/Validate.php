<?php


namespace App\Helpers;


class Validate
{
    /**
     * Checks if the date is in the correct format
     * The correct format is : YYYY-MM-DD
     *
     * @param $date
     * @return bool
     */
    public static function isValidDate($date = null) {
        //Check if we have a date that we can use to check the format
        if(empty($date))
            return false;

        if (preg_match("@^[0-9]{4}/(0[1-9]|1[0-2])/(0[1-9]|[1-2][0-9]|3[0-1])$@",$date)) {
            return true;
        }

        return false;
    }

    /**
     * Validates if the given string is in an email format
     *
     * @param $string
     * @return bool
     */
    public static function isValidEmail($string) {
        // Check if email is valid in PhP
        if (filter_var($string, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }

    /**
     * Validates if the given string is a UK phone number
     * Working examples :
    07222 555555

    (07222) 555555

    +44 7222 555 555
     * @param $string
     * @return bool
     */
    public static function isValidPhoneNumber($string) {
        $pattern = "/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/";

        $match = preg_match($pattern, $string);

        if ($match != false)
            return true;

        return false;
    }

    /**
     * Validates if the given string is a postcode
     *
     * @param $originalPostcode
     * @return bool
     */
    public static function isValidPostcode($originalPostcode) {
        // Set callback's custom error message (CI specific)
        // $this->set_message('check_postcode_uk', 'Invalid UK postcode format.');

        // Permitted letters depend upon their position in the postcode.
        // Character 1
        $alpha1 = "[abcdefghijklmnoprstuwyz]";
        // Character 2
        $alpha2 = "[abcdefghklmnopqrstuvwxy]";
        // Character 3
        $alpha3 = "[abcdefghjkpmnrstuvwxy]";
        // Character 4
        $alpha4 = "[abehmnprvwxy]";
        // Character 5
        $alpha5 = "[abdefghjlnpqrstuwxyz]";

        // Expression for postcodes: AN NAA, ANN NAA, AAN NAA, and AANN NAA with a space
        $pcexp[0] = '/^('.$alpha1.'{1}'.$alpha2.'{0,1}[0-9]{1,2})([[:space:]]{0,})([0-9]{1}'.$alpha5.'{2})$/';

        // Expression for postcodes: ANA NAA
        $pcexp[1] = '/^('.$alpha1.'{1}[0-9]{1}'.$alpha3.'{1})([[:space:]]{0,})([0-9]{1}'.$alpha5.'{2})$/';

        // Expression for postcodes: AANA NAA
        $pcexp[2] = '/^('.$alpha1.'{1}'.$alpha2.'{1}[0-9]{1}'.$alpha4.')([[:space:]]{0,})([0-9]{1}'.$alpha5.'{2})$/';

        // Exception for the special postcode GIR 0AA
        $pcexp[3] = '/^(gir)([[:space:]]{0,})(0aa)$/';

        // Standard BFPO numbers
        $pcexp[4] = '/^(bfpo)([[:space:]]{0,})([0-9]{1,4})$/';

        // c/o BFPO numbers
        $pcexp[5] = '/^(bfpo)([[:space:]]{0,})(c\/o([[:space:]]{0,})[0-9]{1,3})$/';

        // Overseas Territories
        $pcexp[6] = '/^([a-z]{4})([[:space:]]{0,})(1zz)$/';

        // Anquilla
        $pcexp[7] = '/^ai-2640$/';

        // Load up the string to check, converting into lowercase
        $postcode = strtolower($originalPostcode);

        // Assume we are not going to find a valid postcode
        $valid = false;

        // Check the string against the six types of postcodes
        foreach ($pcexp as $regexp)
        {
            if (preg_match($regexp, $postcode, $matches))
            {
                // Load new postcode back into the form element
                $postcode = strtoupper ($matches[1] . ' ' . $matches [3]);

                // Take account of the special BFPO c/o format
                $postcode = preg_replace ('/C\/O([[:space:]]{0,})/', 'c/o ', $postcode);

                // Take acount of special Anquilla postcode format (a pain, but that's the way it is)
                preg_match($pcexp[7], strtolower($originalPostcode), $matches) AND $postcode = 'AI-2640';

                // Remember that we have found that the code is valid and break from loop
                $valid = true;
                break;
            }
        }

        // Return with the reformatted valid postcode in uppercase if the postcode was
        return $valid ? true : false;
    }

    /**
     * Escapes, trims and sanitize the given string
     *
     * @param $string
     * @return string
     */
    public static function escapeString($string) {

        $data = trim($string);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);

        return $data;
    }
}
