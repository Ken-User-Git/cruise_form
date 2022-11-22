<?php

// Pull in the data layer functions
require_once "data_layer.php";

/**
 * registerUser - Registers a usre
 *
 * @param  string $firstName First name of person
 * @param  string $lastName Last name of person
 * @param  string $state Person's state
 * @param  string $destination Preferred destination
 * @return bool
 */
function registerUser($firstName='', $lastName='', $state='', $destination='') {
    // Get the list of destinations from our data layer
    $destinationsArray = getDestinations();

    // Test to make sure all parameters have been provided
    if ($firstName === '' || $lastName === '' || $state === '' || $destination === '') return false;

    // If the person is from CT or RI ... don't allow the person to register
    if($state === 'CT' || $state === 'RI') return false;

    // Validate that the destination provided is in our list
    if(in_array($destination, $destinationsArray) === false) return false;

    // Everything checks out ...
    return true; // Tell the caller that the function was successful
}


