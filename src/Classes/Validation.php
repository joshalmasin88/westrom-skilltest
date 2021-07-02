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
}