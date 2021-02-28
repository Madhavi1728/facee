<?php

session_start();

$host = "sql12.freesqldatabase.com"; /* Host name */
$user = "sql12395562"; /* User */
$password = "UqgHgH9z7R"; /* Password */
$dbname = "sql12395562"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}