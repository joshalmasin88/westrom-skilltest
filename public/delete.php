<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

use Joshua\Test\Classes\Customer;

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $customer = new Customer();
    $customer->deleteCustomer($id);
    header("Location: /");
}