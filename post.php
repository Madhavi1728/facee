<?php
//Creates new record as per request
    //Connect to database
    $servername = "sql12.freesqldatabase.com";
    $username = "sql12395562";
    $password = "UqgHgH9z7R";
    $dbname = "sql12395562";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }


   


	$conn->close();
?>