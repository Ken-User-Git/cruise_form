<?php

// Include the global error handler
require_once "includes/error_handler.php";

// Include the data layer
require_once "includes/form_data.php";

// Variables/flags
$isFormSubmitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$showForm = true;



$isFirstNameValid = false;
$isLastNameValid = false;
$isEmailValid = false;
$isStateValid = false;


$form_firstname = null;
$form_lastname = null;
$form_email = null;
$form_city = null;
$form_state = null;
$form_address = null;
$form_zip = null;
$form_phone = null;
$form_destination= null;
$form_cruiseline = null;

if ($isFormSubmitted){

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // }
    // Call the functions to populate our dropdown array sources

     // $showForm = false; // Hide the form!

    


    
    $form_firstname = $_POST['first-name'];
    $form_lastname = $_POST['last-name'];
    $form_email = $_POST['email'];
    $form_city = $_POST['city'];
    $form_state = $_POST['state'];
    $form_zip = $_POST['zip'];
    $form_phone = $_POST['phone'];
    $form_destination = $_POST['preferred-destination'];
    $form_cruiseline = $_POST['preferred-cruiseline'];


    // Make sure to convert destination and cruiseline to a null if it has not been selected

    if ($form_destination === '') $form_destination = 'null'; 
    if ($form_cruiseline === '') $form_cruiseline = 'null'; 


    // Perform validation

    if (strlen($form_firstname) > 1) {
        $isFirstNameValid = true;
    }

    if (strlen($form_lastname) > 1) {
        $isLastNameValid = true;
    }

    if (strlen($form_email) > 1) {
        $isEmailValid = true;
    }

    if (strlen($form_zip) > 1) {
        $isZipValid = true;
    }

    if (strlen($form_phone) > 1) {
        $isPhoneValid = true;
    }

    if (($form_state) !== '') {
        $isStateVaild = true;
    }

    


    // Hide the form if validation is successful

    if ($isFirstNameValid && $isLastNameValid && $isStateValid) {
        $showForm = false; // Hide the form!
    }

    $sql = "SELECT * FROM `registration` WHERE email = '$form_email';";
    $results = queryDatabase($sql);
    if (mysqli_num_rows($results) > 0) {
        echo "I'm sorry, there is already an entry with this e-mail.";
        exit;
    }

    
    // Insert the data into the database
    // INSERT INTO `registration`(`first_name`, `last_name`, `email`, `state`, `destination`) VALUES ('test1','Test2','test3','test4','test5')
    $sql = "INSERT INTO `registration`
    (`first_name`, `last_name`, `email`, `city`, `zip`, `phone`, `state_id`, `destination_id`, 'cruiseline_id')
    VALUES 
    ('$form_firstname','$form_lastname','$form_email','$form_city','$form_zip','$form_phone','$form_state','$form_destination', $form_cruiseline)";

   

    queryDatabase($sql);


}

$statesArray = getStates();
$destinationsArray = getDestinations();
$cruiselinesArray = getCruiseLines();
