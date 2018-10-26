<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');

// Instantiate Customer
$customer = new Customer();

// Get customer
$customers = $customer->getCustomers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Pay Page</title>
</head>
<body>
    <div class="container mt-4">
    <div class="btn-group" role="group">
        <a href="addCustomer.php" class="btn btn-primary">Customers</a>
        <a href="transaction.php" class="btn btn-warning">Transactions</a>
    </div>
       <h2>Customer</h2>
       <table class="table table-striped table-dark">
       <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
       </thead>
        <tbody>
            <?php foreach($customers as $customer): ?>
            <tr>
                <td><?php echo $customer->id; ?></td>
                <td><?php echo $customer->firstname; ?><?php echo $customer->lastname; ?></td>
                <td><?php echo $customer->email; ?></td>
                <td><?php echo $customer->created_at; ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
       </table>
       <br>
       <p><a href="addCustomer.php">Pay Page</a></p>
    </div>
</body>
</html>