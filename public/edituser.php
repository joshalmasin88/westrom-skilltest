<?php

require '../vendor/autoload.php';
require '../templates/header.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Joshua\Test\Classes\Customer;

$customers = new Customer();

$id = $_GET['id'];
$currentCustomer = $customers->getCustomer($id);

if(isset($_POST['update']))
{
    $result = $customers->updateCustomer(
            $_POST['name'],
            $_POST['phone'],
            $_POST['email'],
            $_POST['id']
    );


}
?>

<div class="row">
    <div class="col-md-6 mr-auto">
        <a href="/test" class="btn btn-primary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Create Customer
                </h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <input type="hidden" name="id" value="<?= $currentCustomer['id'] ?>">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?= $currentCustomer['name'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" value="<?= $currentCustomer['phone'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" value="<?= $currentCustomer['email'] ?>" class="form-control">
                    </div>
                    <div class="text-right">
                        <input type="submit" name="update" class="btn btn-primary" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php require '../templates/footer.php'; ?>
