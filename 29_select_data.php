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



$sql = "SELECT * FROM `table1`";
$result = mysqli_query($conn,$sql);


// Find the number of records

$num = mysqli_num_rows($result);
echo $num ." records fetch in the Database.";
echo"<br>";

// Displaying the rows returned by the sql query
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);        //first row

    // echo "<br>";

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);         //second row



    // we can fetch in a better way using the while loop 

    while($row =mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "Hello ".$row['name'].", Your Roll No. is: ",$row['roll'];
        echo"<br>";
    }


}






















?>