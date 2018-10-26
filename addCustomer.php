<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PayPage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2 class="my-4 text-center">Introduction To Payment</h2>
    <form action="charge.php" method="post" id="payment-form">
    <div class="form-row">
        <input type="text" name="first-name" class="form-control mb-3 StripeElement StripeElement--empty"
         placeholder="First Name">
         <input type="text" name="last-name" class="form-control mb-3 StripeElement StripeElement--empty"
         placeholder="Last Name">
         <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty"
         placeholder="Email Address">
        <div id="card-element" class="form-control">
        <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert"></div>
    </div>

    <button>Submit Payment</button>
    </form>
    <br>
    <p><a href="index.php">Customer Page</a></p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/charge.js"></script>
</div>
</body>
</html>