<?php


namespace App\Helpers;
use \Mail;

/**
 * Class Email
 *
 * @package App\Helpers
 */
class Email
{
    private $error = true;
    private $tags;
    private $to;
    private $from;
    private $subject;
    private $body;

    public function __construct($body, $to = null, $subject = null, $from = null, $tags = null)
    {
        $this->to = $to;
        //if from address is empty, use the config from address
        $this->from = $from == null ? config('mail.from.address') : $from;
        $this->subject = $subject;
        $this->body = $body;
        $this->tags = $tags;

        // validate the email
        $this->validateEmail();

        // if htmlBody is not empty
        $this->sendHtmlEmail();

    }

    /**
     * Returns the string for the User Email
     *
     * @param $hospitalName
     * @param $specialtyName
     * @param $title
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $phoneNumber
     * @param $postcode
     * @param $reason
     * @param string $additionalInformation
     * @return string
     */
    public static function getUserBody($hospitalName, $specialtyName, $title, $firstName, $lastName, $email, $phoneNumber, $postcode, $reason, $additionalInformation = '') {
//        The original HTML before the Minify. Please use http://minifycode.com/html-minifier/
//        return '
//            <style>
//                table {
//                    font-family: arial;
//                    background-color: #fff
//                }
//
//                td {
//                    vertical-align: top;
//                }
//
//                center {
//                    background-color: #F7F7F7;
//                }
//            </style>
//            <center>
//                <table width="600" style="width: 600px; background-color: transparent">
//                    <tr>
//                        <td height="25" colspan="3">
//                        </td>
//                    </tr>
//                    <tr>
//                        <td height="25" colspan="3" style="font-size: 12px; text-align: center; line-height: 25px">This is an
//                            automated email, please do not respond directly to this email address.
//                        </td>
//                    </tr>
//                    <tr>
//                        <td height="25" colspan="3">
//                        </td>
//                    </tr>
//                </table>
//                <table width="600" style="width: 600px;">
//                    <tr>
//                        <td height="25" colspan="3"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td width="550">
//                            <a href="https://www.hospitalcompare.co.uk">
//                                <img width="300"
//                                     src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png"
//                                     alt="Hospital compare logo"></a></td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td width="550">
//                            <p style="font-size: 26px; color: #037098">Thank You, '.$firstName.'.</p>
//                            <p style="color: #037098">We’ve passed your enquiry to '.$hospitalName.'. A
//                                member of their team should be in touch via your contact
//                                details below.</p>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td colspan="3"><img width="600" src="https://www.hospitalcompare.co.uk/images/hc-email-banner.jpg"
//                                             alt="Man on sofa browsing hospital compare website"></td>
//                    </tr>
//                    {{--        <tr>--}}
//                    {{--            <td height="25"></td>--}}
//                    {{--        </tr>--}}
//                    <tr>
//                        <td></td>
//                    </tr>
//                </table>
//                <table width="600">
//                    <tr>
//                        <td colspan="3" height="50"></td>
//                    </tr>
//                </table>
//                <table width="600" style="border-bottom: 1px solid #e6e6e6">
//                    <tr>
//                        <td width="25"></td>
//                        <td colspan="2">
//                            <p style="font-size: 20px; font-weight: 600">Your enquiry</p>
//                        </td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td width="150">Title</td>
//                        <td width="400">'.$title.'</td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25" height="15"></td>
//                        <td width="150"></td>
//                        <td width="400"></td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td width="150">First name</td>
//                        <td width="400">'.$firstName.'</td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25" height="15"></td>
//                        <td width="150"></td>
//                        <td width="400"></td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td>Last Name</td>
//                        <td>'.$lastName.'</td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25" height="15"></td>
//                        <td width="150"></td>
//                        <td width="400"></td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td>Phone Number</td>
//                        <td>'.$phoneNumber.'</td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25" height="15"></td>
//                        <td width="150"></td>
//                        <td width="400"></td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td>Email Address</td>
//                        <td>'.$email.'</td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25" height="15"></td>
//                        <td width="150"></td>
//                        <td width="400"></td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td>Postcode</td>
//                        <td>'.$postcode.'</td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25" height="15"></td>
//                        <td width="150"></td>
//                        <td width="400"></td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td>Specialty</td>
//                        <td>'.$specialtyName.'</td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25" height="15"></td>
//                        <td width="150"></td>
//                        <td width="400"></td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td>Additional<br>Comments</td>
//                        <td>'.$additionalInformation.'</td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td colspan="3" height="25"></td>
//                    </tr>
//                </table>
//                <table width="600" style="">
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td width="550" style="text-align: center">
//                            <img width="320" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png" alt="Hospital compare logo">
//                        </td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td width="550" style="text-align: center">
//                            <a style="display: inline-block; width: 20px;" href="https://www.facebook.com/hospitalcompare">
//                                <img height="20" src="https://www.hospitalcompare.co.uk/images/icons/facebook-trunkie.png" alt="Facebook logo">
//                            </a>
//                            <a style="display: inline-block; width: 20px;" href="https://www.twitter.com/HospCompare">
//                                <img height="20" src="https://www.hospitalcompare.co.uk/images/icons/twitter-trunkie.png" alt="Twitter logo">
//                            </a>
//                            <a href="https://www.instagram.com/hospitalcompare/" target="_blank">
//                                <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/instagram-trunkie.png" alt="Instagram logo">
//                            </a>
//                        </td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td width="550">
//                            <p style="text-align: center; color: #757575">
//                                This email has been sent to you by Hospital Compare in response to your request to make an enquiry at
//                                a Hospital of your choice. Its content contains confidential information.
//                            </p>
//                            <p style="text-align: center; color: #757575">
//                                Please do not reply to this email address which has been auto generated. If this email has been
//                                received by you in error please delete without copying and advise Hospital Compare at <a style="text-decoration: underline"
//                                    href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk</a>
//                            </p>
//                            <p style="text-align: center; color: #757575">
//                                Hospital Compare is the trading name of Hospital Compare Limited a limited liability company registered
//                                in England and Wales under number 11514491 with registered office at The Plaza, Old Hall Street,
//                                Liverpool, England, L3 9QJ.
//                            </p>
//                            <p style="text-align: center; color: #757575">
//                                Hospital Compare is a website platform. For more information visit <a style="text-decoration: underline" href="https://www.hospitalcompare.co.uk">www.hospitalcompare.co.uk</a>
//                            </p>
//                        </td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td></td>
//                    </tr>
//                </table>
//            </center>
//        ';
        return '<style>table{font-family:arial;background-color:#fff}td{vertical-align:top}center{background-color:#F7F7F7}</style><center><table width="600" style="width: 600px; background-color: transparent"><tr><td height="25" colspan="3"></td></tr><tr><td height="25" colspan="3" style="font-size: 12px; text-align: center; line-height: 25px">This is an automated email, please do not respond directly to this email address.</td></tr><tr><td height="25" colspan="3"></td></tr></table><table width="600" style="width: 600px;"><tr><td height="25" colspan="3"></td></tr><tr><td width="25"></td><td width="550"> <a href="https://www.hospitalcompare.co.uk"> <img width="300" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png" alt="Hospital compare logo"></a></td><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td width="25"></td><td width="550"><p style="font-size: 26px; color: #037098">Thank You, '.$firstName.'.</p><p style="color: #037098">We’ve passed your enquiry to '.$hospitalName.'. A member of their team should be in touch via your contact details below.</p><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td colspan="3"><img width="600" src="https://www.hospitalcompare.co.uk/images/hc-email-banner.jpg" alt="Man on sofa browsing hospital compare website"></td></tr> {{--<tr>--}} {{--<td height="25"></td>--}} {{--</tr>--}}<tr><td></td></tr></table><table width="600"><tr><td colspan="3" height="50"></td></tr></table><table width="600" style="border-bottom: 1px solid #e6e6e6"><tr><td width="25"></td><td colspan="2"><p style="font-size: 20px; font-weight: 600">Your enquiry</p></td><td width="25"></td></tr><tr><td width="25"></td><td width="150">Title</td><td width="400">'.$title.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td width="150">First name</td><td width="400">'.$firstName.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Last Name</td><td>'.$lastName.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Phone Number</td><td>'.$phoneNumber.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Email Address</td><td>'.$email.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Postcode</td><td>'.$postcode.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Specialty</td><td>'.$specialtyName.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Additional<br>Comments</td><td>'.$additionalInformation.'</td><td width="25"></td></tr><tr><td colspan="3" height="25"></td></tr></table><table width="600" style=""><tr><td height="25"></td></tr><tr><td width="25"></td><td width="550" style="text-align: center"> <img width="320" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png" alt="Hospital compare logo"></td><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td width="25"></td><td width="550" style="text-align: center"> <a style="display: inline-block; width: 20px;" href="https://www.facebook.com/hospitalcompare"> <img height="20" src="https://www.hospitalcompare.co.uk/images/icons/facebook-trunkie.png" alt="Facebook logo"> </a> <a style="display: inline-block; width: 20px;" href="https://www.twitter.com/HospCompare"> <img height="20" src="https://www.hospitalcompare.co.uk/images/icons/twitter-trunkie.png" alt="Twitter logo"> </a> <a href="https://www.instagram.com/hospitalcompare/" target="_blank"> <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/instagram-trunkie.png" alt="Instagram logo"> </a></td><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td width="25"></td><td width="550"><p style="text-align: center; color: #757575"> This email has been sent to you by Hospital Compare in response to your request to make an enquiry at a Hospital of your choice. Its content contains confidential information.</p><p style="text-align: center; color: #757575"> Please do not reply to this email address which has been auto generated. If this email has been received by you in error please delete without copying and advise Hospital Compare at <a style="text-decoration: underline" href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk</a></p><p style="text-align: center; color: #757575"> Hospital Compare is the trading name of Hospital Compare Limited a limited liability company registered in England and Wales under number 11514491 with registered office at The Plaza, Old Hall Street, Liverpool, England, L3 9QJ.</p><p style="text-align: center; color: #757575"> Hospital Compare is a website platform. For more information visit <a style="text-decoration: underline" href="https://www.hospitalcompare.co.uk">www.hospitalcompare.co.uk</a></p></td><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td></td></tr></table></center> ';
    }

    /**
     * Returns the string for the AT's Email used for Power BI
     *
     * @param $hospitalName
     * @param $hospitalLocationId
     * @param $specialtyName
     * @param $title
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $phoneNumber
     * @param $postcode
     * @param string $additionalInformation
     * @return string
     */
    public static function getTrunkieBody($hospitalName, $hospitalLocationId, $specialtyName, $title, $firstName, $lastName, $email, $phoneNumber, $postcode, $additionalInformation = '') {
        return 'Hospital: '.$hospitalName.
            '<br>Location ID:'.$hospitalLocationId.
            '<br>Specialty:'.$specialtyName.
            '<br>Title: '.$title.
            '<br>First Name: '.$firstName.
            '<br>Last Name:'.$lastName.
            '<br>Email: '.$email.
            '<br>Phone Number: '.$phoneNumber.
            '<br>Postcode: '.$postcode.
            '<br>Additional Information: '.$additionalInformation;
    }
    /**
     * Returns the string for the Provider Email
     *
     * @param $specialtyName
     * @param $title
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $phoneNumber
     * @param $postcode
     * @param string $additionalInformation
     * @return string
     */
    public static function getProviderBody($specialtyName, $title, $firstName, $lastName, $email, $phoneNumber, $postcode, $additionalInformation = '') {
//        return '<style>
//            table {
//                font-family: arial;
//                background-color: #fff
//            }
//
//            td {
//                vertical-align: top;
//            }
//
//            center {
//                background-color: #F7F7F7;
//            }
//        </style>
//
//        <center>
//            <table width="600" style="width: 600px; background-color: transparent">
//                <tr>
//                    <td height="25" colspan="3">
//                    </td>
//                </tr>
//                <tr>
//                    <td height="25" colspan="3" style="font-size: 12px; text-align: center; line-height: 25px">This is an
//                        automated email, please do not respond directly to this email address.
//                    </td>
//                </tr>
//                <tr>
//                    <td height="25" colspan="3">
//                    </td>
//                </tr>
//            </table>
//            <table width="600" style="width: 600px;">
//                <tr>
//                    <td height="25" colspan="3"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td width="550">
//                        <a href="https://www.hospitalcompare.co.uk">
//                            <img width="300"
//                                 src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png"
//                                 alt="Hospital compare logo"></a></td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td height="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td width="550">
//                        <p style="font-size: 26px; color: #037098">You have received an enquiry regarding
//                            treatment at your hospital.</p>
//                        <p style="color: #037098">Please would you respond to '.$firstName.' using the contact
//                            details provided below within 3 working days.</p>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td height="25"></td>
//                </tr>
//                <tr>
//                    <td colspan="3"><img width="600" src="https://www.hospitalcompare.co.uk/images/hc-email-banner.jpg"
//                                         alt="Man on sofa browsing hospital compare website"></td>
//                </tr>
//                {{--        <tr>--}}
//                {{--            <td height="25"></td>--}}
//                {{--        </tr>--}}
//                <tr>
//                    <td></td>
//                </tr>
//            </table>
//            <table width="600">
//                <tr>
//                    <td colspan="3" height="50"></td>
//                </tr>
//            </table>
//            <table width="600" style="border-bottom: 1px solid #e6e6e6">
//                <tr>
//                    <td width="25"></td>
//                    <td colspan="2">
//                        <p style="font-size: 20px; font-weight: 600">Contact details</p>
//                    </td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td width="150">Title</td>
//                    <td width="400">'.$title.'</td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25" height="15"></td>
//                    <td width="150"></td>
//                    <td width="400"></td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td width="150">First name</td>
//                    <td width="400">'.$firstName.'</td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25" height="15"></td>
//                    <td width="150"></td>
//                    <td width="400"></td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td>Last Name</td>
//                    <td>'.$lastName.'</td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25" height="15"></td>
//                    <td width="150"></td>
//                    <td width="400"></td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td>Phone Number</td>
//                    <td>'.$phoneNumber.'</td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25" height="15"></td>
//                    <td width="150"></td>
//                    <td width="400"></td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td>Email Address</td>
//                    <td>'.$email.'</td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25" height="15"></td>
//                    <td width="150"></td>
//                    <td width="400"></td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td>Postcode</td>
//                    <td>'.$postcode.'</td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25" height="15"></td>
//                    <td width="150"></td>
//                    <td width="400"></td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td>Specialty</td>
//                    <td>'.$specialtyName.'</td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25" height="15"></td>
//                    <td width="150"></td>
//                    <td width="400"></td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td>Additional<br>Comments</td>
//                    <td>'.$additionalInformation.'</td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td colspan="3" height="25"></td>
//                </tr>
//            </table>
//            <table width="600" style="">
//                <tr>
//                    <td height="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td width="550" style="text-align: center">
//                        <img width="320" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png"
//                             alt="Hospital compare logo">
//                    </td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td height="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td width="550" style="text-align: center">
//                        <a style="display: inline-block; width: 20px;" href="https://www.facebook.com/hospitalcompare">
//                            <img height="20" src="https://www.hospitalcompare.co.uk/images/icons/facebook-trunkie.png"
//                                 alt="Facebook logo">
//                        </a>
//                        <a style="display: inline-block; width: 20px;" href="https://www.twitter.com/HospCompare">
//                            <img height="20" src="https://www.hospitalcompare.co.uk/images/icons/twitter-trunkie.png"
//                                 alt="Twitter logo">
//                        </a>
//                        <a href="https://www.instagram.com/hospitalcompare/" target="_blank">
//                            <img width="20" height="20"
//                                 src="https://www.hospitalcompare.co.uk/images/icons/instagram-trunkie.png"
//                                 alt="Instagram logo">
//                        </a>
//                    </td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td height="25"></td>
//                </tr>
//                <tr>
//                    <td width="25"></td>
//                    <td width="550">
//                        <p style="font-size: 12px; text-align: center; color: #757575">
//                            This email has been sent to you by Hospital Compare in response to your request to make an enquiry
//                            at a Hospital of your choice. Its content contains confidential information.
//                        </p>
//                        <p style="font-size: 12px; text-align: center; color: #757575">
//                            Please do not reply to this email address which has been auto generated. If this email has been
//                            received by you in error please delete without copying and advise Hospital
//                            Compare at <a
//                                style="text-decoration: underline"
//                                href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk</a>
//                        </p>
//                        <p style="font-size: 12px; text-align: center; color: #757575">
//                            Hospital Compare is the trading name of Hospital Compare Limited a limited liability company
//                            registered
//                            in England and Wales under number 11514491 with registered office at The Plaza, Old Hall Street,
//                            Liverpool, England, L3 9QJ.
//                        </p>
//                        <p style="text-align: center; color: #757575">
//                            Hospital Compare is a website platform. For more information visit <a
//                                style="text-decoration: underline" href="https://www.hospitalcompare.co.uk">www.hospitalcompare.co.uk</a>
//                        </p>
//                    </td>
//                    <td width="25"></td>
//                </tr>
//                <tr>
//                    <td height="25"></td>
//                </tr>
//                <tr>
//                    <td></td>
//                </tr>
//            </table>
//        </center>
//';

        return '<style>table{font-family:arial;background-color:#fff}td{vertical-align:top}center{background-color:#F7F7F7}</style><center><table width="600" style="width: 600px; background-color: transparent"><tr><td height="25" colspan="3"></td></tr><tr><td height="25" colspan="3" style="font-size: 12px; text-align: center; line-height: 25px">This is an automated email, please do not respond directly to this email address.</td></tr><tr><td height="25" colspan="3"></td></tr></table><table width="600" style="width: 600px;"><tr><td height="25" colspan="3"></td></tr><tr><td width="25"></td><td width="550"> <a href="https://www.hospitalcompare.co.uk"> <img width="300" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png" alt="Hospital compare logo"></a></td><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td width="25"></td><td width="550"><p style="font-size: 26px; color: #037098">You have received an enquiry regarding treatment at your hospital.</p><p style="color: #037098">Please would you respond to '.$firstName.' using the contact details provided below within 3 working days.</p><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td colspan="3"><img width="600" src="https://www.hospitalcompare.co.uk/images/hc-email-banner.jpg" alt="Man on sofa browsing hospital compare website"></td></tr> {{--<tr>--}} {{--<td height="25"></td>--}} {{--</tr>--}}<tr><td></td></tr></table><table width="600"><tr><td colspan="3" height="50"></td></tr></table><table width="600" style="border-bottom: 1px solid #e6e6e6"><tr><td width="25"></td><td colspan="2"><p style="font-size: 20px; font-weight: 600">Contact details</p></td><td width="25"></td></tr><tr><td width="25"></td><td width="150">Title</td><td width="400">'.$title.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td width="150">First name</td><td width="400">'.$firstName.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Last Name</td><td>'.$lastName.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Phone Number</td><td>'.$phoneNumber.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Email Address</td><td>'.$email.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Postcode</td><td>'.$postcode.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Specialty</td><td>'.$specialtyName.'</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Additional<br>Comments</td><td>'.$additionalInformation.'</td><td width="25"></td></tr><tr><td colspan="3" height="25"></td></tr></table><table width="600" style=""><tr><td height="25"></td></tr><tr><td width="25"></td><td width="550" style="text-align: center"> <img width="320" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png" alt="Hospital compare logo"></td><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td width="25"></td><td width="550" style="text-align: center"> <a style="display: inline-block; width: 20px;" href="https://www.facebook.com/hospitalcompare"> <img height="20" src="https://www.hospitalcompare.co.uk/images/icons/facebook-trunkie.png" alt="Facebook logo"> </a> <a style="display: inline-block; width: 20px;" href="https://www.twitter.com/HospCompare"> <img height="20" src="https://www.hospitalcompare.co.uk/images/icons/twitter-trunkie.png" alt="Twitter logo"> </a> <a href="https://www.instagram.com/hospitalcompare/" target="_blank"> <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/instagram-trunkie.png" alt="Instagram logo"> </a></td><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td width="25"></td><td width="550"><p style="font-size: 12px; text-align: center; color: #757575"> This email has been sent to you by Hospital Compare in response to your request to make an enquiry at a Hospital of your choice. Its content contains confidential information.</p><p style="font-size: 12px; text-align: center; color: #757575"> Please do not reply to this email address which has been auto generated. If this email has been received by you in error please delete without copying and advise Hospital Compare at <a style="text-decoration: underline" href="mailto:hello@hospitalcompare.co.uk">hello@hospitalcompare.co.uk</a></p><p style="font-size: 12px; text-align: center; color: #757575"> Hospital Compare is the trading name of Hospital Compare Limited a limited liability company registered in England and Wales under number 11514491 with registered office at The Plaza, Old Hall Street, Liverpool, England, L3 9QJ.</p><p style="text-align: center; color: #757575"> Hospital Compare is a website platform. For more information visit <a style="text-decoration: underline" href="https://www.hospitalcompare.co.uk">www.hospitalcompare.co.uk</a></p></td><td width="25"></td></tr><tr><td height="25"></td></tr><tr><td></td></tr></table></center> ';
    }

    /**
     * Validate Email Address
     * Checks email is valid using PHP, if it is it then uses the validator from the service set in $emailValidator
     * at the top of the page
     */
    private function validateEmail(){

        // check if email is valid in PHP
        if (!filter_var($this->to, FILTER_VALIDATE_EMAIL)){
            $this->error = 'invalid email';
        }
        // if emailValidator = mailgun send to mailgun validator
        elseif(config('mail.validator') == 'mailgun') {
            $this->validateEmailWithMailgun($this->to);
        }
        // if emailValidator = kickbox send to kickbox validator
        elseif(config('mail.validator') == 'kickbox'){
            $this->validateEmailWithKickbox($this->to);
        }

    }

    /**
     * Send email function
     *
     *
     * @param string $body
     * @param null $to
     * @param null $subject
     * @param null $from
     * @param null $tags
     * @return bool
     */
    public static function send($body, $to = null, $subject = null, $from = null, $tags = null)
    {
        $email = new self($body, $to, $subject, $from, $tags);
        return $email->error;

    }

    /**
     * Send HTML email
     * Sets the data and sends the data to the view, the view is what will be emailed so this could potentially
     * be an email template view. This sends text and HTML to the view
     *
     */
    private function sendHtmlEmail()
    {
        $data = [
            'to'        => $this->to,
            'from'      => $this->from,
            'subject'   => $this->subject,
            'html'      => $this->body,
            'tags'      => $this->tags
        ];

        Mail::send(['html' => 'layout.email.html'], $data, function($message) {
            $message->subject($this->subject);
            $message->to($this->to);
            $message->from($this->from);
            $message->sender($this->from);
            $headers = $message->getHeaders();
            if(!empty($this->tags)) {
                foreach($this->tags as $tag){
                    $headers->addTextHeader('X-Mailgun-Tag', $tag);
                }
            }

        });

    }

    /**
     * Send text email
     * Sets the data and sends the data to the view, the view is what will be emailed so this could potentially
     * be an email template view. This sends text to the view and not HTML.
     *
     */
    private function sendTextEmail()
    {
        $data = [
            'to'        => $this->to,
            'from'      => $this->from,
            'subject'   => $this->subject,
            'text'      => $this->body
        ];

        Mail::send(['text' => 'layout.email.text'], $data, function($message){
            $message->subject($this->subject);
            $message->to($this->to);
            $message->from($this->from);
            $message->sender($this->from);
            $headers = $message->getHeaders();
            if(!empty($this->tags)) {
                foreach($this->tags as $tag){
                    $headers->addTextHeader('X-Mailgun-Tag', $tag);
                }
            }
        });
    }

    /**
     * Validate the Email using the Mailgun API
     * Gets the email from $this->to and checks if it is a valid email address
     */
    private function validateEmailWithMailgun()
    {
        $client = new \Http\Adapter\Guzzle6\Client();
        $mgClient = new \Mailgun\Mailgun(config('services.mailgun.public'), $client);
        $result = $mgClient->get("address/validate", array('address' => $this->to));
        $isValid = $result->http_response_body->is_valid;

        if($isValid == false)
            $this->error = 'Mailgun could not validate the email ' . $this->to;
    }

    /**
     * Check an email address using Kickbox API
     * Gets the email from $this->to and checks if it is a valid email address
     */
    private function validateEmailWithKickbox()
    {
        // Create a new kickbox
        $client = new Client(config('services.kickbox.key'));

        // Create the verification
        $kickbox  = $client->kickbox();
        $response = $kickbox->verify( $this->to );

        //dd($response->body['result']);
         //Return true or false
        if( $response->body['result'] == 'undeliverable' )
            $this->error = 'Kickbox could not validate the email ' . $this->to;
    }

    /**
     * Validates if the string has the email format
     *
     * @param $string
     * @return bool
     */
    static function validateEmailFormat($string) {
        if (!filter_var($string, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }


}
