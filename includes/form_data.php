<?php

// This is our data layer which will provide data to the form

/** 
 * Return an array of States
 * 
 * @return array Array of States
 */
function getStates() {
    // Create an array of states for the dropdown
    $statesArray = array(
        "CT" => "Connecticut",
        "RI" => "Rhode Island",
        "VT" => "Vermont",
        "MA" => "Massachusetts",
        "NH" => "New Hampshire"
    );

    // Sort the array
    asort($statesArray);

    return $statesArray;
} 

/** 
 * Return an array of destinations
 * 
 * @return array Array of destinations
 */
function getDestinations() {
    // Create an array of destinations for the dropdown
    $destinationsArray = array(
        "Bahamas" => "Bahamas",
        "Barbados" => "Barbados",
        "Cozumel" => "Cozumel",
        "Hawaii" => "Hawaii",
        "Jamaica" => "Jamaica",
        "Aruba" => "Aruba",
        "Fiji" => "Fiji"
    );

    // Sort the array
    asort($destinationsArray);

    return $destinationsArray;
}

function getCruiseLine() {
    $cruiseArray = array(
        "Disney Cruise Line" => "Disney Cruise Line",
        "Royal Caribbean International" => "Royal Caribbean International",
        "Carnival Cruise Line" => "Carnival Cruise Line",
        "Costa Cruises" => "Costa Cruises",
        "MSC Cruises" => "MSC Cruises"
        
    );
    asort($cruiseArray);
    return $cruiseArray;
}