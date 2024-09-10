<?php
// Database connection parameters
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "trailerflix";

// Create connection
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " .mysqli_error($con));
}

echo "Connected successfully";

// You can use this $conn object to perform database queries and operations

?>
