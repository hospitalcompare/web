<?php

namespace App\Helpers;

/**
 * Class Rules is the central location to store all rules needed in the form validation
 */
class Rules
{
    // A list of contants will be arranged depending on modules or type
    const MAC 	        = 'required|min:17|regex:/^([0-9A-Fa-f]{2}[:]){5}([0-9A-Fa-f]{2})$/';
    const REQUIRED_NAME = 'required|min:2|max:32';
    const REQUIRED 	    = 'required';
    const CSV 	        = 'required|mimes:csv,txt,html';
    // Images should be resized to 1920 by 1920 and maximum size is 3 Migs
    const JPG 	        = 'mimes:jpeg,jpg|max:3000';
    const PNG 	        = 'mimes:png|max:3000';
    const MOBILE_PHONE 	= ['required', 'min:10', 'unique:users', 'regex:/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/'];
    const PASSWORD 	    = ['required', 'min:8', 'max:50',  'regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*[0-9])(?=.*\d).+$/'];
    const EMAIL         = 'required|unique:users|email';
}