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
     * @return string
     */
    public static function getUserBody() {
        //The original HTML before the Minify. Please use http://minifycode.com/html-minifier/
//        return '<style>
//                table {
//                    font-family: arial;
//                    background-color: #fff;
//                }
//
//                td {
//                    vertical-align: top;
//                }
//            </style>
//
//            <center class="bg-grey">
//                <table width="600" style="">
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="200"></td>
//                        <td width="200">
//                            <a href="https://www.hospitalcompare.co.uk"><img width="200" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.svg" alt="Hospital compare logo"></a>
//                        </td>
//                        <td width="200"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="200"></td>
//                        <td width="200">
//                            <p style="text-align: center; font-size: 26px; color: #037098">Thank You, John.</p>
//                            <p style="text-align: center; color: #037098">We have recieved your enquiry for</p>
//                            <p style="text-align: center; font-weight: bold; color: #037098">Hospital name here</p>
//                        </td>
//                        <td width="200"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td colspan="3"><img width="600" src="https://www.hospitalcompare.co.uk/images/hc-email-banner.jpg" alt="Man on sofa browsing hospital compare website"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td></td>
//                    </tr>
//                </table>
//                <table width="600">
//                    <tr>
//                        <td width="25"></td>
//                        <td>
//                            <p style="font-size: 20px; font-weight: 600">Next steps</p>
//                            <p style="color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorum eligendi magni odit quo. Dicta dignissimos dolorum eos facilis id mollitia sit. Aaperiam beatae consequatur consequuntur, cupiditate doloribus ducimus eius eos est, eveniet facere fuga itaque laborum nemo obcaecati officiis pariatur provident quis rem repellendus rerum veniam voluptate voluptatem.</p>
//                        </td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td colspan="3" height="50"></td>
//                    </tr>
//                </table>
//                <table width="600" style="border-bottom: 1px solid #e6e6e6">
//                    <tr>
//                        <td width="25"></td>
//                        <td colspan="2">
//                            <p style="font-size: 20px; font-weight: 600">Your email</p>
//                            <p style="color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorum eligendi magni odit quo. Dicta dignissimos dolorum eos facilis id mollitia sit. A aperiam beatae consequatur consequuntur, cupiditate doloribus ducimus eius eos est, eveniet facere fuga itaque laborum nemo obcaecati officiis pariatur provident quis rem repellendus rerum veniam voluptate voluptatem.</p>
//                        </td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="25"></td>
//                        <td width="150">Title</td>
//                        <td width="400">Mr</td>
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
//                        <td width="400">William</td>
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
//                        <td>Wallace</td>
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
//                        <td>04564 654656</td>
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
//                        <td>william.wallace@freedom</td>
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
//                        <td>SC1 OCH</td>
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
//                        <td>Treatment</td>
//                        <td>Anus</td>
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
//                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, eius illo minima necessitatibus pariatur quidem quo voluptatem. Blanditiis consequatur dolore eligendi eveniet fuga harum perferendis quasi, quibusdam quos recusandae, repellat?
//                        </td>
//                        <td width="25"></td>
//                    </tr>
//                    <tr>
//                        <td colspan="3" height="25"></td>
//                    </tr>
//                </table>
//                <!-- Footer -->
//                <table width="600" style="">
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="100"></td>
//                        <td width="400" style="text-align: center"><img width="200" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.svg" alt="Hospital compare logo"></td>
//                        <td width="100"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="100"></td>
//                        <td width="400" style="text-align: center">
//                            <a style="display: inline-block; width: 20px;" href="https://www.facebook.com/hospitalcompare">
//                                <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/facebook-trunkie.svg" alt="Facebook logo">
//                            </a>
//                            <a style="display: inline-block; width: 20px;" href="https://www.twitter.com/HospCompare">
//                                <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/twitter-trunkie.svg" alt="Twitter logo">
//                            </a>
//                        </td>
//                        <td width="100"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td width="100"></td>
//                        <td width="400">
//                            <p style="text-align: center; color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
//                                Beatae consequuntur cumque delectus eos, et exercitationem fuga itaque nemo numquam provident quasi
//                                qui reiciendis repellendus sequi soluta ut vero vitae voluptatum?</p>
//                        </td>
//                        <td width="100"></td>
//                    </tr>
//                    <tr>
//                        <td height="25"></td>
//                    </tr>
//                    <tr>
//                        <td></td>
//                    </tr>
//                </table>
//            </center>';
        return '<style>table{font-family:arial;background-color:#fff}td{vertical-align:top}</style><center class="bg-grey"><table width="600" style=""><tr><td height="25"></td></tr><tr><td width="200"></td><td width="200"> <a href="https://www.hospitalcompare.co.uk"><img width="200" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png" alt="Hospital compare logo"></a></td><td width="200"></td></tr><tr><td height="25"></td></tr><tr><td width="200"></td><td width="200"><p style="text-align: center; font-size: 26px; color: #037098">Thank You, John.</p><p style="text-align: center; color: #037098">We have recieved your enquiry for</p><p style="text-align: center; font-weight: bold; color: #037098">Hospital name here</p></td><td width="200"></td></tr><tr><td height="25"></td></tr><tr><td colspan="3"><img width="600" src="https://www.hospitalcompare.co.uk/images/hc-email-banner.jpg" alt="Man on sofa browsing hospital compare website"></td></tr><tr><td height="25"></td></tr><tr><td></td></tr></table><table width="600"><tr><td width="25"></td><td><p style="font-size: 20px; font-weight: 600">Next steps</p><p style="color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorum eligendi magni odit quo. Dicta dignissimos dolorum eos facilis id mollitia sit. Aaperiam beatae consequatur consequuntur, cupiditate doloribus ducimus eius eos est, eveniet facere fuga itaque laborum nemo obcaecati officiis pariatur provident quis rem repellendus rerum veniam voluptate voluptatem.</p></td><td width="25"></td></tr><tr><td colspan="3" height="50"></td></tr></table><table width="600" style="border-bottom: 1px solid #e6e6e6"><tr><td width="25"></td><td colspan="2"><p style="font-size: 20px; font-weight: 600">Your email</p><p style="color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dolorum eligendi magni odit quo. Dicta dignissimos dolorum eos facilis id mollitia sit. A aperiam beatae consequatur consequuntur, cupiditate doloribus ducimus eius eos est, eveniet facere fuga itaque laborum nemo obcaecati officiis pariatur provident quis rem repellendus rerum veniam voluptate voluptatem.</p></td><td width="25"></td></tr><tr><td width="25"></td><td width="150">Title</td><td width="400">Mr</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td width="150">First name</td><td width="400">William</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Last Name</td><td>Wallace</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Phone Number</td><td>04564 654656</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Email Address</td><td>william.wallace@freedom</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Postcode</td><td>SC1 OCH</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Treatment</td><td>Anus</td><td width="25"></td></tr><tr><td width="25" height="15"></td><td width="150"></td><td width="400"></td><td width="25"></td></tr><tr><td width="25"></td><td>Additional<br>Comments</td><td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, eius illo minima necessitatibus pariatur quidem quo voluptatem. Blanditiis consequatur dolore eligendi eveniet fuga harum perferendis quasi, quibusdam quos recusandae, repellat?</td><td width="25"></td></tr><tr><td colspan="3" height="25"></td></tr></table><table width="600" style=""><tr><td height="25"></td></tr><tr><td width="100"></td><td width="400" style="text-align: center"><img width="200" src="https://www.hospitalcompare.co.uk/images/icons/logo-email.png" alt="Hospital compare logo"></td><td width="100"></td></tr><tr><td height="25"></td></tr><tr><td width="100"></td><td width="400" style="text-align: center"> <a style="display: inline-block; width: 20px;" href="https://www.facebook.com/hospitalcompare"> <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/facebook-trunkie.png" alt="Facebook logo"> </a> <a style="display: inline-block; width: 20px;" href="https://www.twitter.com/HospCompare"> <img width="20" height="20" src="https://www.hospitalcompare.co.uk/images/icons/twitter-trunkie.png" alt="Twitter logo"> </a></td><td width="100"></td></tr><tr><td height="25"></td></tr><tr><td width="100"></td><td width="400"><p style="text-align: center; color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequuntur cumque delectus eos, et exercitationem fuga itaque nemo numquam provident quasi qui reiciendis repellendus sequi soluta ut vero vitae voluptatum?</p></td><td width="100"></td></tr><tr><td height="25"></td></tr><tr><td></td></tr></table></center>';
    }

    /**
     * Returns the string for the Provider Email
     * @return string
     */
    public static function getProviderBody() {
        return '<style>
            table {
                font-family: arial;
                background-color: #fff;
            }

            td {
                vertical-align: top;
            }
        </style>

        <center class="bg-grey">
            <table width="600" style="">
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td width="200"></td>
                    <td width="200"><img width="200" src="/images/icons/logo-email.png" alt="Hospital compare logo"></td>
                    <td width="200"></td>
                </tr>
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td width="200"></td>
                    <td width="200">
                        <p style="text-align: center; font-size: 26px; color: #037098">Thank You, John.</p>
                        <p style="text-align: center; color: #037098">We have recieved your enquiry for</p>
                        <p style="text-align: center; font-weight: bold; color: #037098">Hospital name here</p>
                    </td>
                    <td width="200"></td>
                </tr>
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td colspan="3"><img width="600" src="/images/placeholder.jpg" alt="Man on sofa browsing hospital compare website"></td>
                </tr>
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
            <table width="600">
                <tr>
                    <td width="25"></td>
                    <td>
                        <p style="font-size: 20px; font-weight: 600">Next steps</p>
                        <p style="color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Cupiditate dolorum eligendi magni odit quo. Dicta dignissimos dolorum eos facilis id mollitia sit. A
                            aperiam beatae consequatur consequuntur, cupiditate doloribus ducimus eius eos est, eveniet facere
                            fuga itaque laborum nemo obcaecati officiis pariatur provident quis rem repellendus rerum veniam
                            voluptate voluptatem.</p>
                    </td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td colspan="3" height="50"></td>
                </tr>
            </table>
            <table width="600" style="border-bottom: 1px solid #e6e6e6">
                <tr>
                    <td width="25"></td>
                    <td colspan="2">
                        <p style="font-size: 20px; font-weight: 600">Your email</p>
                        <p style="color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Cupiditate dolorum eligendi magni odit quo. Dicta dignissimos dolorum eos facilis id mollitia sit. A
                            aperiam beatae consequatur consequuntur, cupiditate doloribus ducimus eius eos est, eveniet facere
                            fuga itaque laborum nemo obcaecati officiis pariatur provident quis rem repellendus rerum veniam
                            voluptate voluptatem.</p>
                    </td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td width="150">Title</td>
                    <td width="400">Mr</td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25" height="15"></td>
                    <td width="150"></td>
                    <td width="400"></td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td width="150">First name</td>
                    <td width="400">William</td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25" height="15"></td>
                    <td width="150"></td>
                    <td width="400"></td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td>Last Name</td>
                    <td>Wallace</td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25" height="15"></td>
                    <td width="150"></td>
                    <td width="400"></td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td>Phone Number</td>
                    <td>04564 654656</td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25" height="15"></td>
                    <td width="150"></td>
                    <td width="400"></td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td>Email Address</td>
                    <td>william.wallace@freedom</td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25" height="15"></td>
                    <td width="150"></td>
                    <td width="400"></td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td>Postcode</td>
                    <td>SC1 OCH</td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25" height="15"></td>
                    <td width="150"></td>
                    <td width="400"></td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td>Treatment</td>
                    <td>Anus</td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25" height="15"></td>
                    <td width="150"></td>
                    <td width="400"></td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td width="25"></td>
                    <td>Additional<br>Comments</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, eius illo minima necessitatibus
                        pariatur quidem quo voluptatem. Blanditiis consequatur dolore eligendi eveniet fuga harum perferendis
                        quasi, quibusdam quos recusandae, repellat?
                    </td>
                    <td width="25"></td>
                </tr>
                <tr>
                    <td colspan="3" height="25"></td>
                </tr>
            </table>
            <!-- Footer -->
            <table width="600" style="">
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td width="100"></td>
                    <td width="400" style="text-align: center"><img width="200" src="/images/icons/logo-email.png" alt="Hospital compare logo"></td>
                    <td width="100"></td>
                </tr>
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td width="100"></td>
                    <td width="400" style="text-align: center">
                        <a style="display: inline-block; width: 20px;" href="https://www.facebook.com/hospitalcompare">
                            <img width="20" height="20" src="/images/icons/facebook.png" alt="Facebook logo">
                        </a>
                        <a style="display: inline-block; width: 20px;" href="https://www.twitter.com/HospCompare">
                            <img width="20" height="20" src="/images/icons/twitter.png" alt="Twitter logo">
                        </a>
                    </td>
                    <td width="100"></td>
                </tr>
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td width="100"></td>
                    <td width="400">
                        <p style="text-align: center; color: #757575">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Beatae consequuntur cumque delectus eos, et exercitationem fuga itaque nemo numquam provident quasi
                            qui reiciendis repellendus sequi soluta ut vero vitae voluptatum?</p>
                    </td>
                    <td width="100"></td>
                </tr>
                <tr>
                    <td height="25"></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
        </center>';
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
