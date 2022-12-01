<?php

// The job of this file is to communicate directly with MySQL

/**
 * Generic function to establish a connection, query the database and return the raw results object
 * 
 * @param string  sql        A SQL statement
 * 
 * @return object results  A query result
 */
function queryDatabase($sql) {
    // Use a DB connection instead of manually creating an array!

    // Create initial variables for the operation
    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "";
    $port = "3306";
    $db = "csc257";

    // 1. Create a connection
    $conn = new mysqli($serverName, $userName, $password ,$db, $port);

    // 2. Get the results and return
    $results = $conn->query($sql);

    return $results;
}