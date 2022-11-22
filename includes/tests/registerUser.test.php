<?php

// Provide unit tests against the registerUser function

// Pull in the function under test
require "../registerUser.php";

// Expectation: should return false
$testName = "No parameters";
if (registerUser() === false) {
    echo "$testName: Test Passed.<br>";
} else {
    echo "$testName: Test Failed.<br>";
}

// Expectation: should return false
$testName = "All parameters, but with CT as state";
if (registerUser('John', 'Smith', 'CT') === false) {
    echo "$testName: Test Passed.<br>";
} else {
    echo "$testName: Test Failed.<br>";
}

// Expectation: should return true
$testName = "All parameters, but with NY as state";
if (registerUser('John', 'Smith', 'NY', 'Hawaii') === true) {
    echo "$testName: Test Passed.<br>";
} else {
    echo "$testName: Test Failed.<br>";
}

// Expectation: should return false
$testName = "All parameters, NY as state, SomethingSilly as destination";
if (registerUser('John', 'Smith', 'NY', 'SomethingSilly') === false) {
    echo "$testName: Test Passed.<br>";
} else {
    echo "$testName: Test Failed.<br>";
}
