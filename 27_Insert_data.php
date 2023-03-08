<?php

// Ways to connect to a MySQL Database
// 1. MySQLi extension
// 2. PDO

// connect to the database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "pikuDB";

// Create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!<br>";
}

// Variables to be inserted into the table
$roll = "6";
$name = "pinky";

// SQL query to be executed 
$sql = "INSERT INTO `table1` (`roll`, `name`) VALUES ('$roll', '$name')";
$result = mysqli_query($conn, $sql);

// Add a new data into the employee database 
if ($result) {
    echo "The record has been inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn); // Close the database connection

?>
