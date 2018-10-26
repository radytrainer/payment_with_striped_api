<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Transaction.php');

// Instantiate Transaction
$transaction = new Transaction();

// Get Transaction
$transactions = $transaction->getTransactions();

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
        <a href="index.php" class="btn btn-primary">Customers</a>
        <a href="transaction.php" class="btn btn-warning">Transactions</a>
    </div>
       <h2>Transactions</h2>
       <table class="table table-striped table-dark">
       <thead>
            <tr>
                <th>Transaction ID</th>
                <th>Customer ID</th>
                <th>Product</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
       </thead>
        <tbody>
            <?php foreach($transactions as $transaction): ?>
            <tr>
                <td><?php echo $transaction->id; ?></td>
                <td><?php echo $transaction->customer_id; ?></td>
                <td><?php echo $transaction->product; ?></td>
                <td><?php echo sprintf('%.2f',$transaction->amount/100)."$" ?></td>
                <td><?php echo $transaction->created_at; ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
       </table>
       <br>
       <p><a href="addCustomer.php">Pay Page</a></p>
    </div>
</body>
</html>