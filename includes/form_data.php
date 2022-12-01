<?php

// This is our data layer which will provide data to the form

// Use the data layer -- we're in the same directory, so no need to add "includes/"
require_once('data_layer.php');

/** 
 * Return an array of States
 * 
 * @return array Array of States
 */
function getStates() {
    // Create an array of states for the dropdown

    // The form will still get an array as it expected, but we'll pull the data from the database instead of creating it ourselves
    $results = queryDatabase("SELECT * FROM state ORDER BY state_name"); // Get all states and sort by name

    $statesArray = array(); // Create an empty placeholder
   
    while($row = $results->fetch_assoc()) { // Loop over the results from the query
        $statesArray[$row['state_id']] = $row['state_name']; // Build the new array
    }

    return $statesArray; // Return the array to the form
} 

/** 
 * Return an array of destinations
 * 
 * @return array Array of destinations
 */
function getDestinations() {
    // Create an array of destinations for the dropdown

   // The form will still get an array as it expected, but we'll pull the data from the database instead of creating it ourselves
   $results = queryDatabase("SELECT * FROM destination ORDER BY destination_name");
   
   $destinationsArray = array(); // Create an empty placeholder
  
   while($row = $results->fetch_assoc()) { // Loop over the results from the query
       $destinationsArray[$row['destination_id']] = $row['destination_name']; // Build the new array
   }

   return $destinationsArray; // Return the array to the form
}

/** 
 * Return an array of preferred cruise lines
 * 
 * @return array Array of cruise lines
 */
function getCruiseLines() {
    // Create an array of cruise lines

   // The form will still get an array as it expected, but we'll pull the data from the database instead of creating it ourselves
   $results = queryDatabase("SELECT * FROM cruiseline ORDER BY cruiseline_name");
   
   $cruiseLineArray = array(); // Create an empty placeholder
  
   while($row = $results->fetch_assoc()) { // Loop over the results from the query
       $cruiseLineArray[$row['cruiseline_id']] = $row['cruiseline_name']; // Build the new array
   }

   return $cruiseLineArray; // Return the array to the form
}