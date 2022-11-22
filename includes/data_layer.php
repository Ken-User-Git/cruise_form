<?php

// The Job of this File is to communicate directly with MySQL

// 1. Establish a database connection with MySQL

$host = "localhost";
$username = "root";
$password = "";
$db = "csc257";
$port = "3306";


// $conn = new mysqli("localhost", "root", "",)
$conn = new mysqli($host, $username, $password, $db, $port);

// 2. Query the database and return a result
$sql = "SELECT * FROM state";
$results = $conn->query($sql)

// 3. Create an empty array and populate the array with the results of the query
$myArray = array();

while($row = $results->fetch_assoc()) {
    echo $row['state']
}