<?php

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



// $sql = "DELETE FROM `table1` WHERE `name` = 'piku'"; //It will delete all rows named "piku
// $result = mysqli_query($conn,$sql);

$sql = "DELETE FROM `table1` WHERE `name` = 'piku' LIMIT 2";  //It will delete only first 2 rows named "piku 
$result = mysqli_query($conn,$sql);

$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff<br>";  


if($result){
    echo "Deleted successfully";
}
else{
    $err=mysqli_error($conn);
    echo "Not deleted successfully because of this error:---> $err";
}











?>