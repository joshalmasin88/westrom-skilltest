<?php

namespace Joshua\Test\Classes;

class Validation {


    // Clean User Input
    public static function cleanData($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public static function checkEmail($email)
    {
        return !!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email);
    }

    public static function checkPhone($phone)
    {
        $numbersOnly = preg_replace("[^0-9]", "", $phone);
        $numberOfDigits = strlen($numbersOnly);
        if ($numberOfDigits == 7 or $numberOfDigits == 10) {
            return true;
        } else {
            return false;
        }
    }
}