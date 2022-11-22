<?php

// Include the global error handler
require "includes/error_handler.php";

// Debugging code to prove we received data from the form
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Set variables according to submitted data
// $name = $_POST['name'];
// $email = $_POST['email_address'];
// $phone = $_POST['phone_number'];

// echo "You are from " .  $_POST['state'];
if ($_POST['state'] === 'MA') {
    /// do something here
}