<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';
require '../templates/header.php';

use Joshua\Test\Classes\Customer;

$customers = new Customer();
$customers = $customers->search($_POST['term']);

?>



<div class="row mt-1">
    <div class="col-md-12">
        <div class="text-right">
            <a href="create.php" class="btn btn-primary mb-1">Create</a>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Note</th>
                <th>Actions</th>
                <th>Account</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($customers as $c): ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['name'] ?></td>
                    <td><?= $c['phone'] ?></td>
                    <td><?= $c['email'] ?></td>
                    <td>
                        <a href="createnote.php?id=<?= $c['id'] ?>" >Add Note</a>
                    </td>
                    <td>
                        <a href="edituser.php?id=<?= $c['id'] ?>" >Edit</a>
                        <form action="delete.php" method="post" style="display:inline;">
                            <input type="hidden" value="<?= $c['id'] ?>" name="id">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                    <td>
                        <a href="account.php?id=<?= $c['id'] ?>">View</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<style>
    button, input[type="submit"], input[type="reset"] {
        background: none;
        color: blue;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
    }
</style>
<?php require '../templates/footer.php'; ?>
