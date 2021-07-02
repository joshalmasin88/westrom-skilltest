<?php

require '../vendor/autoload.php';
require '../templates/header.php';


use Joshua\Test\Classes\Customer;
use Joshua\Test\Classes\CustomerNote;


$customer = new CustomerNote();
$customerInfo = new Customer();
$customerNote = $customer->getuserNotes($_GET['id']);
$currentCustomer = $customerInfo->getCustomer($_GET['id']);

?>

<div class="row">
    <div class="col-md-6 mr-auto">
        <a href="/test" class="btn btn-primary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col-md-6 ">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <p><strong>Name:</strong> <?= $currentCustomer['name'] ?></p>
                    <p><strong>Phone:</strong> <?= $currentCustomer['phone'] ?></p>
                    <p><strong>Email:</strong> <?= $currentCustomer['email'] ?></p>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <p><strong>Customer Notes:</strong></p>
                    <ul>
                        <?php foreach($customerNote as $i) : ?>
                        <li><?= $i['note'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require '../templates/footer.php'; ?>