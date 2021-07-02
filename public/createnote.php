<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';
require '../templates/header.php';

use Joshua\Test\Classes\CustomerNote;

$customers = new CustomerNote();

if(isset($_POST['add']))
{
    $result = $customers->createNote(
        $_POST['id'],
        $_POST['note']
    );

    ($result) ? header("Location: /test") : $error = false;
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
                    Create Note
                </h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <label for="">Note</label>
                        <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
                        <textarea name="note" class="form-control" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="text-right">
                        <input type="submit" name="add" class="btn btn-primary" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php require '../templates/footer.php'; ?>
