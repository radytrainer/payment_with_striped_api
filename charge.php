<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');
require_once('models/Transaction.php');

\Stripe\Stripe::setApiKey('sk_test_FIhCtx0p6ZPyVKBi4H0bMcop');
// Sanitize post array
$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$token = $_POST['stripeToken'];

// create customer in striped

$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

// charge customer
$charge = \Stripe\Charge::create(array(
    "amount" => 5000,
    "currency" => "usd",
    "description" => "Introduction To Payment",
    "customer" => $customer->id
));
// Customer data
$customerData = [
    'id' => $charge->customer,
    'firstname' => $firstName,
    'lastname' => $lastName,
    'email'=> $email
];
// instantiate Customer
$customer = new Customer();

// add Customer to Database
$customer->addCustomer($customerData);
// Redirect to success


// Transection data
$transactionData = [
    'id' => $charge->customer,
    'customer_id' => $charge->customer,
    'product' => $charge->description,
    'amount'=> $charge->amount,
    'currency'=> $charge->currency,
    'status'=> $charge->status,
];
// instantiate transaction
$transaction = new Transaction();

// add Customer to Database
$transaction->addTransaction($transactionData);
// Redirect to success
header('Location:success.php?tid='.$charge->id.'&product='.$charge->description);